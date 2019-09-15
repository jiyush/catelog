<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
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

    public function sendContact(Request $request){

    	$contact = new \stdClass;
    	$contact->name = $request->name;
    	$contact->email = $request->email;
    	$contact->phone = $request->phone;
    	$contact->comment = $request->comment;
    	Mail::to('selfmade.meet@gmail.com')->send(new Contact($contact));
    	return redirect()->route('root');
    }
}
