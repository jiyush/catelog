<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Industry;

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
        return view('front.list', compact('industries'))->with('active', 'industries');
    }
}

