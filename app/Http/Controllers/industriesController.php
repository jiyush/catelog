<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Industry;
use Illuminate\Support\Facades\Input;
use File;
use App\Mail\AddListing;
use Illuminate\Support\Facades\Mail;
use Redirect;
use Validator;
use Image; //Intervention Image
use App\Images;
use Illuminate\Support\Facades\Storage; //Laravel Filesystem
use DB;

class industriesController extends Controller
{
    public function list(Request $request){
        $filters = $request->get('filters');
        // dd($filters);
        if(!empty($filters)){
            $industries = Industry::join('categories', 'industries.category','=', 'categories.id')
                ->where(function($q) use ($filters) {
                    if(!empty($filters['name'])){
                        $q->where('industries.name', 'LIKE', '%'.$filters['name'].'%');
                    }
                    if(!empty($filters['type'])){
                        $q->whereType($filters['type']);
                    }
                    // if(!empty($filters['address'])){
                    //     $q->where('industries.address', 'LIKE', '%'.$filters['address'].'%');
                    // }
                })
                ->select('industries.*', 'categories.name as category_name')
                ->paginate(9);
        }else{
            $industries = Industry::join('categories', 'industries.category','=', 'categories.id')
                                    ->select('industries.*', 'categories.name as category_name')
                                    ->paginate(9);
        }
    	// $industries = Industry::paginate(10);
    	return view('admin.industry.list', compact('industries', 'filters'))->with('active', 'industries');
    }

    public function add(Request $request){
    	$categories = Category::all();
    	return view('admin.industry.add', compact('categories'))->with('active', 'industries');	
    }

    public function store(Request $request){

        $rules = [
                    'image' => 'array|size:12',
                    'type' => 'required',
                    'phone' => 'required|digits:10',
                    'email' => 'required|email',
                    'category' => 'required'
                ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }
     	
     	$industry = new Industry;
     	
     	$industry->name = $request->name;
     	$industry->email = $request->email;
     	$industry->category = $request->category;
     	$industry->phone = $request->phone;
     	$industry->street = $request->street;
     	$industry->city = $request->city;
     	$industry->state = $request->state;
     	$industry->products = $request->products;;
     	$industry->description = $request->description;
     	$industry->address = $request->street.','.$request->city.','.$request->state;
        $industry->type = $request->type;
        $industry->website = $request->site;
    
        $industry->save();
        if ($request->hasFile('image')) {
 
            foreach($request->file('image') as $file){
     
                //get filename with extension
                $filenamewithextension = $file->getClientOriginalName();
     
                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                
                //get file extension
                $extension = $file->getClientOriginalExtension();

                $filename = preg_replace('/[^A-Za-z0-9\-]/', '', $filename);
                $filename = str_replace('-', '', $filename);    
     
                //filename to store
                $filenametostore = $filename.'_'.uniqid().'.jpg';
                // dd($filenametostore);
                // $ximg = Image::make( $file );

                Storage::put('industries/'. $filenametostore, fopen($file, 'r+'));
                // Storage::put('public/industries/thumbnail/'. $filenametostore, fopen($file, 'r+'));
     
                //Resize image here
                $thumbnailpath = public_path('storage/industries/'.$filenametostore);
                
                // $thumbnailpath = Storage::url('industries/'.$filenametostore, fopen($file, 'r+'));   
                // $thumbnailpath = $filenametostore->getRealPath();
                // dd($thumbnailpath);
                $img = Image::make( $file )
                ->resize(800, 800 , function($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', 85);
                $img->save($thumbnailpath);

                Images::create(['ind_id' => $industry->id, 'path' => $filenametostore]);
            }
        }

     	// $industry->save();
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
        $images = Images::where('ind_id', $industry->id)->get();

        foreach ($images as $image) {
            // $path = public_path().'/storage/industries/'.$image->path;
            // dd($path);
            Storage::delete('industries/'.$image->path);
            Images::find($image->id)->delete();
            // unlink('/var/www/catelog/storage/app/public/industries/'.$image->path);
            // dd($image->path);
        }
        // dd('Bre');
        // $$images->destroy();
    	$industry->delete();
    	return redirect()->route('industry.list');	
    }

    public function AllIndustry(Request $request){
        $filters = $request->get('filters');

        $categories = Category::all();
    
        if(!empty($filters)){
            $industries = Industry::join('categories', 'industries.category','=', 'categories.id')
                ->where(function($q) use ($filters) {
                    if(!empty($filters['name'])){
                        $q->where('industries.name', 'LIKE', '%'.$filters['name'].'%');
                    }
                    if(!empty($filters['category'])){
                        $q->whereCategory($filters['category']);
                    }
                    if(!empty($filters['address'])){
                        $q->where('industries.address', 'LIKE', '%'.$filters['address'].'%');
                    }
                })
                ->select('industries.*', 'categories.name as category_name')
                ->paginate(9);
        }else{
            $industries = Industry::join('categories', 'industries.category','=', 'categories.id')
                                    ->select('industries.*', 'categories.name as category_name')
                                    ->paginate(9);
        }
        // dd($filters);
        return view('front.indListing', compact('industries','categories', 'filters'))->with('active', 'industries');
    }

    public function industry(Request $request){
        $filters = $request->get('filters');
        if(!empty($request->get('category'))){
            $catId = $request->get('category');
        }else{
            $catId = $request->id;
        }
        // dd($catId);
        $categories = Category::find($catId);
        // dd('test');
    
        if(!empty($filters)){
            $industries = Industry::join('categories', 'industries.category','=', 'categories.id')
                // ->join('images', 'industries.id', '=', 'images.ind_id')
                ->where(function($q) use ($filters) {
                    if(!empty($filters['name'])){
                        $q->where('industries.name', 'LIKE', '%'.$filters['name'].'%');
                    }
                    if(!empty($filters['products'])){
                        // dd($filters['products']);
                        $q->where('industries.products', 'LIKE', '%'.$filters['products'].'%');
                    }
                    if(!empty($filters['address'])){
                        $q->where('industries.address', 'LIKE', '%'.$filters['address'].'%');
                    }
                    // if(!empty($catId)){
                    //     $q->whereCategory($catId);   
                    // }
                })
                ->whereCategory($catId)
                ->select( 'industries.*', DB::raw('(select path from images where ind_id  =   industries.id  limit 1) as path'), 'categories.name as category_name')
                ->paginate(9);
        }else{
            $industries = Industry::join('categories', 'industries.category','=', 'categories.id')
                // ->join('images', 'industries.id', '=', 'images.ind_id')
                ->whereCategory($catId)
                // ->select('industries.*', 'categories.name as category_name', 'images.path')
                ->select( 'industries.*', DB::raw('(select path from images where ind_id  =   industries.id  limit 1) as path'), 'categories.name as category_name')
                ->paginate(9);
        }
        // dd($filters);
        return view('front.industries', compact('industries','categories', 'filters'))->with('active', 'industries');
    }

    public function detail(Request $request){
        
        $industry = Industry::find($request->id);
        $category = Category::find($industry->category);
        $images = Images::where('ind_id', $industry->id)->get();
        return view('front.detail', compact('industry','images', 'category'));
    }
}

