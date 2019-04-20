<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
use Redirect;

class AdminController extends Controller
{
    public function show(Request $request)
    {
    	return view('admin.profile');
    }

    public function changPassword(Request $request)
    {
    	$request->validate([
    	    'old_password' => 'required',
		    'password' => 'required|same:password_confirm',
		    'password_confirm' => 'required',
		]);

        $current_password = Auth::User()->password;
        if(Hash::check($request['old_password'], $current_password)){
		    $user = User::first();
		    $user->password = Hash::make($request['password']);
		    $user->update();
		    return redirect()->route('dashboard');
        }else{           
            // $errors = array('current-password' => 'Please enter correct current password');
            return Redirect::back()->withErrors(['Please enter correct current password']);
        }
    }
}
