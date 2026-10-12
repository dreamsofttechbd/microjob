<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserTransaction;

class UserTransactionController extends Controller
{
    public function userTransaction{
      
      $transactions = UserTransaction::where('user_id',Auth::user()->id)->get();
      return view('user.transactions',compact('transactions'));

    }
}
