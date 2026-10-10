<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class UserDealController extends Controller
{
     // browse deal
	public function browsedeal(){
		$allbanner = Banner::where('user_id', auth()->id())->latest()->get();
	    return view('user.browse_deal', compact('allbanner')); 
	}

	 // deal create

	public function dealcreate(){
	    return view('user.deal_create'); 
	}

	// my deal post
	public function mydealpost(){
	    return view('user.my_deal_post'); 
	}

	// dealorder
	public function dealorder(){
	    return view('user.deal_order'); 
	} 
}
