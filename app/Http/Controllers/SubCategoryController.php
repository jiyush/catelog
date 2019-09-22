<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\Industry;
use DB;

class SubCategoryController extends Controller
{
    //
    public function list(Request $request){

    	$subcategories = SubCategory::join('categories', 'sub_categories.category_id', '=', 'categories.id')->select('sub_categories.*', 'categories.name as catName', 'categories.id as catId')->paginate(10);
    	return view('admin.subcategory.list', compact('subcategories'))->with('active', 'subcategory');
    }

    public function add(Request $request){
        $categories = Category::all();
    	return view('admin.subcategory.add', compact('categories'))->with('active', 'subcategory');	
    }

    public function store(Request $request){
    	$request->validate([
                'category_id' => 'required',
                'name' => 'required',
            ]);
    	$sub = new SubCategory;
    	$sub->name = $request->name;
    	$sub->category_id = $request->category_id;
    	$sub->save();
    	return redirect()->route('sub.list');
    }

    public function edit(Request $request){
    	$subcategory = SubCategory::whereId($request->id)->first();
        $categories = Category::all();
    	return view('admin.subcategory.edit', compact('subcategory', 'categories'))->with('active', 'subcategory');
    }

    public function update(Request $request){
    	$request->validate([
                'category_id' => 'required',
                'name' => 'required',
            ]);
    	$sub = SubCategory::whereId($request->id)->first();
        // dd($request->all());
    	$sub->name = $request->name;
    	$sub->category_id = $request->category_id;
    	$sub->update();
    	return redirect()->route('sub.list');
    	
    }

    public function Delete(Request $request){
    	$subcategory = SubCategory::whereId($request->id)->first();
    	Industry::where('subcategory', $subcategory->id)->delete();
    	$subcategory->delete();
    	return redirect()->route('sub.list');
    }

    public function getsub(Request $request){
        // dd($request->id);
        $subcategories = SubCategory::where('category_id',$request->id)->get();
        // dd($subcategories);
        return  response()->json($subcategories);
    }

    public function city(Request $request){
        $city = DB::table('cities')->where('state_id', $request->id)->select('cities.*')->orderBy('name')->get();
        return  response()->json($city);
    }

}
