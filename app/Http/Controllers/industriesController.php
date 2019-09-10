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
                    'image' => 'array|max:5|size:15',
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
    
        // if($request->image){
        //     $logoName = $request->id.'.'.request()->image->getClientOriginalExtension();
        //     request()->image->move(public_path('images/industries'), $logoName);
        //     $path = "/images/industries/".$logoName;
        //     $industry->image = $path;
        // }
        $industry->save();
        if ($request->hasFile('image')) {
 
            foreach($request->file('image') as $file){
     
                //get filename with extension
                $filenamewithextension = $file->getClientOriginalName();
     
                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                
                //get file extension
                $extension = $file->getClientOriginalExtension();
     
                //filename to store
                $filenametostore = $filename.'_'.uniqid().'.jpg';
     
                // $ximg = Image::make( $file );

                Storage::put('public/industries/'. $filenametostore, fopen($file, 'r+'));
                // Storage::put('public/industries/thumbnail/'. $filenametostore, fopen($file, 'r+'));
     
                //Resize image here
                $thumbnailpath = public_path('storage/industries/'.$filenametostore);
                
                $img = Image::make( $thumbnailpath )
                ->resize(800, null , function($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', 85)
                ->save($thumbnailpath);

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
        $categories = Category::find($request->id);
        // dd('test');
    
        if(!empty($filters)){
            $industries = Industry::join('categories', 'industries.category','=', 'categories.id')
                ->join('images', 'industries.id', '=', 'images.ind_id')
                ->where(function($q) use ($filters) {
                    if(!empty($filters['name'])){
                        $q->where('industries.name', 'LIKE', '%'.$filters['name'].'%');
                    }
                    if(!empty($filters['address'])){
                        $q->where('industries.address', 'LIKE', '%'.$filters['address'].'%');
                    }
                    // if(!empty($request->id)){
                    //     $q->whereCategory($request->id);   
                    // }
                })
                ->whereCategory($request->id)
                ->select('industries.*', 'categories.name as category_name', 'images.path')
                ->paginate(9);
        }else{
            $industries = Industry::join('categories', 'industries.category','=', 'categories.id')
                // ->join('images', 'industries.id', '=', 'images.ind_id')
                ->whereCategory($request->id)
                // ->select('industries.*', 'categories.name as category_name', 'images.path')
                ->select( 'industries.*',
            DB::raw('(select path from images where ind_id  =   industries.id  limit 1) as path'), 'categories.name as category_name'  )
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

