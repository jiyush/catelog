<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Input;
use File;
use App\Mail\AddListing;
use Illuminate\Support\Facades\Mail;
use App\Inquiry;
use DB;

use Redirect;
use Validator;
use Image; //Intervention Image
use App\Images;
use App\Industry;
use Illuminate\Support\Facades\Storage; //Laravel Filesystem

class categoryController extends Controller
{
    public $industry;

    public function __construct(Industry $industry){
        $this->industry = $industry;
    }

    public function list(Request $request){
    	$categories = Category::paginate(5);
    	return view('admin.category.list', compact('categories'))->with('active', 'category');
    }

    public function add(Request $request){
    	return view('admin.category.add')->with('active', 'category');
    }

    public function store(Request $request)
    {
            $request->validate([
                'category' => 'required',
                'category_logo' => 'required|image',
                'bpath' => 'required|image'
            ]);
        // dd($request->all());
    	$category = new Category;
    	$category->name = $request->category;
        if($request->category_logo){
            $logoName = $request->category.'.'.request()->category_logo->getClientOriginalExtension();
            request()->category_logo->move(public_path('images/category'), $logoName);
            $path = "/images/category/".$logoName;
            $category->path = $path;
        }
        if($request->bpath){
            $logoName = $request->category.'.'.request()->bpath->getClientOriginalExtension();
            request()->bpath->move(public_path('images/bgcategory'), $logoName);
            $path = "/images/bgcategory/".$logoName;
            $category->bpath = $path;
        }

    	$category->save();
    	return redirect()->route('category.list');
    }

    public function edit(Request $request){
    	$category = Category::whereId($request->id)->first();
    	return view('admin.category.edit', compact('category'))->with('active', 'category');
    }

    public function update(Request $request){
    	$category = Category::whereId($request->id)->first();
    	$category->name = $request->category;
        if(Input::hasFile('category_logo')){
            if(!empty($category->path)){
                $delPath = public_path('images/category/'.$category->path);
                if (File::exists($delPath)) { // unlink or remove previous image from folder
                    unlink($delPath);
                }
            }
            $category_logoName = $request->category.'.'.request()->category_logo->getClientOriginalExtension();

            request()->category_logo->move(public_path('images/category'), $category_logoName);
            $path = "/images/category/".$category_logoName;
            $category->path = $path;
        }
        if(Input::hasFile('bpath')){
            if(!empty($category->bpath)){
                $delPath = public_path('images/bgcategory/'.$category->bpath);
                // dd($delPath);
                if (File::exists($delPath)) { // unlink or remove previous image from folder
                    unlink($delPath);
                }
            }
            $bpathName = $request->category.'.'.request()->bpath->getClientOriginalExtension();

            request()->bpath->move(public_path('images/bgcategory'), $bpathName);
            $path = "/images/bgcategory/".$bpathName;
            $category->bpath = $path;
        }
    	$category->update();
    	return redirect()->route('category.list');
    }

    public function delete(Request $request){
    	$category = Category::whereId($request->id)->first();
        Industry::where('category', $category->id)->delete();
        $delPath = public_path('images/category/$category->path');
        if (File::exists($delPath)) { // unlink or remove previous image from folder
            unlink($delPath);
        }
    	$category->delete();
    	return redirect()->route('category.list');
    }

    public function show(Request $request){

        $categories = Category::all();
        $catCount = $categories->count();
        $indCount = Industry::all()->count();
        $paidCount = Industry::where('type','=', 'paid')->count();
        $count = array();
        $count['catCount'] = $catCount;
        $count['indCount'] = $indCount;
        $count['paidCount'] = $paidCount;

        return view('front.index', compact('categories', 'count'))->with('active', 'home');
    }

    public function addListing(Request $request){
        $categories = Category::all();
        $state = DB::table('states')->where('country_id',101)->select('states.*')->orderBy('name')->get();
        return view('front.addListing', compact('categories', 'state'));
    }

    public function submitList(Request $request){

        $rules = [
                    // 'image' => 'sometimes|array|min:12',
                    'type' => 'required',
                    'phone' => 'required|digits:10',
                    'email' => 'required|email',
                    'category' => 'required',
                    'status' => 'required',
                    'term' => 'required',
                ];

        $validator = Validator::make($request->all(), $rules);
        // dd($request->all());
        if ($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }
        
        $ind = $this->industry->add($request);


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
}
