<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Industry;
use Illuminate\Support\Facades\Input;
use File;
use App\Mail\AddListing;
use Illuminate\Support\Facades\Mail;

class industriesController extends Controller
{
    public function list(Request $request){
        $filter = $request->get('filters');
        
        if(!empty($filter)){
            $industries = Industry::where(function($q) use ($filter) {
                if(!empty($filter['name'])){
                    $q->where('name', 'LIKE', '%'.$filter['name'].'%');
                }
                if(!empty($filter['category'])){
                    $q->whereCategory($filter['category']);
                }
                if(!empty($filter['address'])){
                    $q->where('address', 'LIKE', '%'.$filter['address'].'%');
                }
            })->paginate(10);
        }else{
            $industries = Industry::paginate(10);
        }
    	// $industries = Industry::paginate(10);
    	return view('admin.industry.list', compact('industries'))->with('active', 'industries');
    }

    public function add(Request $request){
    	$categories = Category::all();
    	return view('admin.industry.add', compact('categories'))->with('active', 'industries');	
    }

     public function store(Request $request){

     	
     	$industry = new Industry;
     	
     	$industry->name = $request->name;
     	$industry->email = $request->email;
     	$industry->category = $request->category;
     	$industry->phone = $request->phone;
     	$industry->street = $request->street;
     	$industry->city = $request->city;
     	$industry->state = $request->state;
     	$industry->products = $request->products;
     	$industry->description = $request->description;
     	$industry->address = $request->street.','.$request->city.','.$request->state;
    
        if($request->image){
            $logoName = $request->id.'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/industries'), $logoName);
            $path = "/images/industries/".$logoName;
            $industry->image = $path;
        }

     	$industry->save();
     	return redirect()->route('industry.list');
     }

    public function view(Request $request){
    	$industry = Industry::whereId($request->id)->first();
    	$category = Category::whereId($industry->category)->first();
    	return view('admin.industry.view', compact('industry', 'category'))->with('active', 'industries');	
    }

    public function edit(Request $request){
    	$industry = Industry::whereId($request->id)->first();
    	$category = Category::whereId($industry->category)->first();
    	$categories = Category::all();
    	return view('admin.industry.edit', compact('industry', 'category', 'categories'))->with('active', 'industries');	
    }

    public function update(Request $request){

    	$industry = Industry::whereId($request->id)->first();
     	
     	$industry->name = $request->name;
     	$industry->email = $request->email;
     	$industry->category = $request->category;
     	$industry->phone = $request->phone;
     	$industry->street = $request->street;
     	$industry->city = $request->city;
     	$industry->state = $request->state;
     	$industry->products = $request->products;
     	$industry->description = $request->description;
     	$industry->address = $request->street.','.$request->city.','.$request->state;
        if(Input::hasFile('image')){
            $delPath = public_path('images/industries/$industry->id');
            if (File::exists($delPath)) { // unlink or remove previous image from folder
                unlink($delPath);
            }
            $imageName = $request->id.'.'.request()->image->getClientOriginalExtension();

            request()->image->move(public_path('images/industries'), $imageName);
            $path = "/images/industries/".$imageName;
            $industry->image = $path;
        }
     	$industry->update();
     	return redirect()->route('industry.list');
    }

    public function delete(Request $request){
    	$industry = Industry::whereId($request->id)->first();
    	$industry->delete();
    	return redirect()->route('industry.list');	
    }

    public function AllIndustry(Request $request){
        $filter = $request->get('filters');

        $categories = Category::all();
    
        if(!empty($filter)){
            $industries = Industry::join('categories', 'industries.category','=', 'categories.id')
                ->where(function($q) use ($filter) {
                    if(!empty($filter['name'])){
                        $q->where('name', 'LIKE', '%'.$filter['name'].'%');
                    }
                    if(!empty($filter['category'])){
                        $q->whereCategory($filter['category']);
                    }
                    if(!empty($filter['address'])){
                        $q->where('address', 'LIKE', '%'.$filter['address'].'%');
                    }
                })
                ->select('industries.*', 'categories.name as category_name')
                ->paginate(10);
        }else{
            $industries = Industry::join('categories', 'industries.category','=', 'categories.id')
                                    ->select('industries.*', 'categories.name as category_name')
                                    ->paginate(10);
        }
        // dd($industries);
        return view('front.indListing', compact('industries','categories'))->with('active', 'industries');
    }
}

