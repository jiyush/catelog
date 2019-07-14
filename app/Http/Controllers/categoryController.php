<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Input;
use File;
use App\Mail\AddListing;
use Illuminate\Support\Facades\Mail;

class categoryController extends Controller
{
    public function list(Request $request){
    	$categories = Category::paginate(5);
    	return view('admin.category.list', compact('categories'))->with('active', 'category');
    }

    public function add(Request $request){
    	return view('admin.category.add')->with('active', 'category');
    }

    public function store(Request $request)
    {
            // $request->validate([
            //     'category' => 'required',
            //     'category_logo' => 'required|image',
            // ]);
        // dd($request->all());
    	$category = new Category;
    	$category->name = $request->category;
        if($request->category_logo){
            $logoName = $request->category.'.'.request()->category_logo->getClientOriginalExtension();
            request()->category_logo->move(public_path('images/category'), $logoName);
            $path = "/images/category/".$logoName;
            $category->path = $path;
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
            $delPath = public_path('images/category/$category->path');
            if (File::exists($delPath)) { // unlink or remove previous image from folder
                unlink($delPath);
            }
            $category_logoName = $request->category.'.'.request()->category_logo->getClientOriginalExtension();

            request()->category_logo->move(public_path('images/category'), $category_logoName);
            $path = "/images/category/".$category_logoName;
            $category->path = $path;
        }
    	$category->update();
    	return redirect()->route('category.list');
    }

    public function delete(Request $request){
    	$category = Category::whereId($request->id)->first();
        $delPath = public_path('images/category/$category->path');
        if (File::exists($delPath)) { // unlink or remove previous image from folder
            unlink($delPath);
        }
    	$category->delete();
    	return redirect()->route('category.list');
    }

    public function show(Request $request){
        $categories = Category::all();
        return view('front.index', compact('categories'))->with('active', 'home');
    }

    public function addListing(Request $request){
        $categories = Category::all();
        return view('front.addListing', compact('categories'));
    }

    public function submitList(Request $request){
        $data = new \stdClass();
        $data->indName = $request->indName;
        $data->indCat = $request->indCat;
        $data->address = $request->street.','.$request->city.','.$request->state.','.$request->pincode;
        $data->description = $request->description;
        $data->phone = $request->phone;
        $data->site = $request->website;
        Mail::to($request->email)->send(new AddListing($data));
        return redirect()->route('root');
    }
}
