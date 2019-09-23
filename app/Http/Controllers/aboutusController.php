<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\Review;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Redirect;
use Validator;
use App\Inquiry;

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

        $rules = [
                    'email' => 'required|email',
                    'name' => 'required',
                    'phone' => 'required',
                    'comment' => 'required',
                ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }

    	$contact = new \stdClass;
    	$contact->name = $request->name;
    	$contact->email = $request->email;
    	$contact->phone = $request->phone;
    	$contact->comment = $request->comment;
        $to = env('MAIL_TO');
        
    	Mail::to($to)->send(new Contact($contact));
    	return redirect()->route('root');
    }

    public function sendReview(Request $request){
        $rules = [
                    'email' => 'required|email',
                    'mailto' => 'required|email',
                    'name' => 'required',
                    'message' => 'required',
                ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $review = new \stdClass;
        $review->name = $request->name;
        $review->email = $request->email;
        $review->mailto = $request->mailto;
        $review->message = $request->message;

        Inquiry::create(['name' => $review->name, 'email' => $review->email, 'message' => $review->message ]);

        Mail::to($review->mailto)->send(new Review($review));
        return redirect()->route('root');

    }
}
