<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Deposit;
use App\Models\UserNotification;
use App\Models\UserTransaction;
use App\Models\User;
use App\Models\WebsiteSetting;
use App\Models\SiteWallet; 

class DepositController extends Controller
{
    public function pendingDeposit(){
     $pageTitle="Pending Deposit";  
     $deposits = Deposit::where('status','pending')->orderBy('created_at')->get();
     return view('admin.deposits.index',compact(['deposits','pageTitle']));
    }

    public function approvedDeposit(){
     $pageTitle="Approved Deposit"; 
     $deposits = Deposit::where('status','approved')->orderBy('created_at')->get();
     return view('admin.deposits.index',compact(['deposits','pageTitle']));
    }

    public function rejectedDeposit(){
     $pageTitle="Rejected Deposit"; 
     $deposits = Deposit::where('status','rejected')->orderBy('created_at')->get();
     return view('admin.deposits.index',compact(['deposits','pageTitle']));
    }

    public function rejectDeposit($id)
    {
        $deposit = Deposit::findOrFail($id);

        // already processed check
        if ($deposit->status !== 'pending') {
            return back()->with('error', 'Already processed');
        }

        DB::beginTransaction();

        try {
            $deposit->status = 'rejected';
            $deposit->save();
           
            //user notification create
            $title = "Deposit rejected";
            UserNotification::create([
                'user_id' => $deposit->user_id,
                'title'   =>$title, 
                'message' => "Your $".$deposit->amount ." deposit has been rejected.",
                'status'  => 'pending',
            ]);

            DB::commit();

            return back()->with('success', 'Deposit rejected');

        } catch (\Exception $e) {
            DB::rollBack();

            return back()->with('error', 'Something went wrong');
        }
    }

    public function approveDeposit($id)
    {
  
     $deposit = Deposit::findOrFail($id);

    // already processed check
    if ($deposit->status !== 'pending') {
        return back()->with('error', 'Already processed');
    }

    DB::beginTransaction();

    try {

        // update deposit status
        $deposit->status = 'approved';
        $deposit->approved_at = now();
        $deposit->save();
        //  user balance increment
        $user = User::findOrFail($deposit->user_id); // deposit user
        if ($user->referred_by) {
             $referred_by = User::findOrFail($user->referred_by);  //others user
             $setting = WebsiteSetting::first();
             $reffer_bonus_parcent = $setting->reffer_bonus;
             $bonus = ($deposit->amount*$reffer_bonus_parcent)/100;
        
             $referred_by->deposit_commission_from_refer += $bonus;
             $referred_by->current_earning += $bonus;
             $referred_by->save();

             UserTransaction::create([
            'user_id' => $referred_by->id,
            'transaction_id' => strtoupper(uniqid()),
            'type' => "earning",
            'amount' => $bonus,
            'description' => "Refer earnign from ". $user->name . " added successfully",
            'reference_id' => "Deposit ID ".$deposit->id,
            'status' => 'success',
           ]);


        }
      

        $user->current_deposit += $deposit->amount;
        $user->total_deposit += $deposit->amount;
        $user->save();

        // 3. notification create
        $title = "Deposit approveed";
        UserNotification::create([
            'user_id' => $deposit->user_id,
            'title'   =>$title,
            'message' => "Your deposit of $" .$deposit->amount ."has been approved.",
            'status'  => 'pending',
        ]);
        
        UserTransaction::create([
            'user_id' => $deposit->user_id,
            'transaction_id' => strtoupper(uniqid()),
            'type' => "deposit",
            'amount' => $deposit->amount,
            'description' => "Deposit successfully added",
            'reference_id' => "Deposit ID ".$deposit->id,
            'status' => 'success',
           ]);
           
           

        $mainWallet = SiteWallet::firstOrcreate();
        $mainWallet->increment('lifetime_deposit',$deposit->amount);

        DB::commit();

        return back()->with('success', 'Deposit approved successfully');

    } catch (\Exception $e) {
        DB::rollBack();
        return back()->with('error', 'Something went wrong');
    }
   }
   
}
