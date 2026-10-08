<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserReferController extends Controller
{
    public function addRefer(){

       $user = Auth::user();
       $referralLink = url('/register?ref=' . $user->referral_code);
       $totalReferrals = $user->referrals()->count();

       return view('user.refer.earn', compact('user','referralLink','totalReferrals'
        ));
    }
}
