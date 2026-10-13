<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserTransaction;
use App\Models\Deposit;


class UserTransactionController extends Controller
{
    

public function userTransaction(){
    // $transactions = UserTransaction::where('user_id', Auth::id())->get();
    $transactions = UserTransaction::where('user_id', Auth::id())->with('deposit')->get();
    return view('user.transaction.index', compact('transactions'));
    }

}
