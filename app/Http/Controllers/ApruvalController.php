<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Input;
use File;
use App\Mail\AddListing;
use Illuminate\Support\Facades\Mail;
use App\Inquiry;
use App\Apruval;

use Redirect;
use Validator;
use Image; //Intervention Image
use App\Images;
use App\Industry;
use Illuminate\Support\Facades\Storage; //Laravel Filesystem

class ApruvalController extends Controller
{
    //
    public $apruval;

    public function __construct(Apruval $apruval){
        $this->apruval = $apruval;
    }

    public function submitList(Request $request){

        $rules = [
                    // 'image' => 'sometimes|array|min:12',
                    'type' => 'required',
                    'phone' => 'required|digits:10',
                    'email' => 'required|email',
                    'category' => 'required'
                ];

        $validator = Validator::make($request->all(), $rules);
        // dd($request->all());
        if ($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }
        
        $ind = $this->apruval->add($request);


        // $data = array();
        // $data['name'] = $request->name;
        // $data['email'] = $request->email;
        // $data['category'] = $request->category;
        // $data['address'] = $request->street.','.$request->city.','.$request->state.','.$request->pincode;
        // $data['description'] = $request->description;
        // $data['phone'] = $request->phone;
        // $data['website'] = $request->website;
        // $data['keywords'] = $request->keywords;
        // $inquiry = Inquiry::create($data);
        // Mail::to('selfmade.meet@gmail.com')->send(new AddListing($inquiry));
        return redirect()->route('root');
    }

    public function list(Request $request){
    	$industries =  Apruval::join('categories', 'apruvals.category','=', 'categories.id')
                                    ->select('apruvals.*', 'categories.name as category_name')->paginate(10);
    	return view('admin.apruval.list', compact('industries'))->with('active', 'apruval');
    }
}
