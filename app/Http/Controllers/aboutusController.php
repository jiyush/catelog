<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutusController extends Controller
{
    public function index(Request $request){
    	return view('front.about');
    }

    public function contact(Request $request)
    {
    	return view('front.conatctus');
    }
}
