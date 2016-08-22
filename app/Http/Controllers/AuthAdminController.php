<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAdminController extends Controller
{
    public function adminlogin(AdminRequest $request)
    {
    	if(Auth::attempt([
    		'email'    => $request->input('email'),
    		'password' => $request->input('password')]))
    	{
			return redirect('adminhome');    
		}
	    else{
			return back()->with(['message'=>'Password or email is wrong']);    
	    }
    }
    public function adminlogout()
    {
    	Auth::logout();
		return redirect('adminlogin');        	
    }
}
