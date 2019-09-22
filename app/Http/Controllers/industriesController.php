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
use App\SubCategory;

class industriesController extends Controller
{
    public $industry;

    public function __construct(Industry $industry){
        $this->industry = $industry;
    }


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
                ->where('status',1)
                ->select('industries.*', 'categories.name as category_name')
                ->paginate(9);
        }else{
            $industries = Industry::join('categories', 'industries.category','=', 'categories.id')
                ->where('status',1) 
                ->select('industries.*', 'categories.name as category_name')
                ->paginate(9);
        }
    	// $industries = Industry::paginate(10);
    	return view('admin.industry.list', compact('industries', 'filters'))->with('active', 'industries');
    }

    public function add(Request $request){
    	$categories = Category::all();
        // $sub = SubCategory::all();
        $state = DB::table('states')->where('country_id',101)->select('states.*')->orderBy('name')->get();
    	return view('admin.industry.add', compact('categories', 'state','sub'))->with('active', 'industries');	
    }

    public function store(Request $request){

        $rules = [
                    // 'image' => 'sometimes|array|min:12',
                    'type' => 'required',
                    'phone' => 'required|digits:10',
                    'email' => 'required|email',
                    'category' => 'required',
                    'status' => 'required',
                ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }
     	
     	$ind = $this->industry->add($request);

     	// $industry->save();
     	return redirect()->route('industry.list');
     }

    public function view(Request $request){
    	$industry = Industry::whereId($request->id)->first();
    	$category = Category::whereId($industry->category)->first();
        $images = Images::where('ind_id', $industry->id)->get();
    	return view('admin.industry.view', compact('industry', 'category', 'images'))->with('active', 'industries');	
    }

    public function edit(Request $request){
    	$industry = Industry::whereId($request->id)->first();
    	$category = Category::whereId($industry->category)->first();
    	$categories = Category::all();
        $sub = SubCategory::where('category_id', $category->id)->get();
        $state = DB::table('states')->where('country_id',101)->select('states.*')->orderBy('name')->get();
        $city = DB::table('cities')->where('state_id',$industry->state)->select('cities.*')->orderBy('name')->get();
    	return view('admin.industry.edit', compact('industry', 'category', 'sub','categories', 'state', 'city'))->with('active', 'industries');	
    }

    public function update(Request $request){

        $rules = [
                    // 'image' => 'sometimes|array|min:12',
                    'type' => 'required',
                    'phone' => 'required|digits:10',
                    'email' => 'required|email',
                    'category' => 'required',
                    'subcategory' => 'required'
                ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $state = DB::table('states')->where('id',$request->state)->where('country_id',101)->select('states.name')->first();
        $city = DB::table('cities')->where('id', $request->city )->where('state_id', $request->state)->select('cities.name')->first();

    	$industry = Industry::whereId($request->id)->first();
     	
     	$industry->name = $request->name;
     	$industry->email = $request->email;
     	$industry->category = $request->category;
        $industry->subcategory = $request->subcategory;
     	$industry->phone = $request->phone;
     	$industry->street = $request->street;
     	$industry->city = $request->city;
     	$industry->state = $request->state;
     	$industry->products = $request->products;
     	$industry->description = $request->description;
     	$industry->address = $request->street.','.$city->name.','.$state->name;
        $industry->type = $request->type;
        $industry->website = $request->website;
     	$industry->update();
     	return redirect()->route('industry.list');
    }

    public function delete(Request $request){
    	$industry = Industry::whereId($request->id)->first();
        $images = Images::where('ind_id', $industry->id)->get();

        foreach ($images as $image) {
            // $path = public_path().'/storage/industries/'.$image->path;
            // dd($path);
            unlink( public_path('storage/industries/'.$image->path));

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
        if(!empty($request->get('subcategory'))){
            $id = $request->get('subcategory');
        }else{
            $id = $request->id;
        }
        $categories = SubCategory::find($id);
    
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
                ->where('subcategory',$id)
                ->where('status',1)
                ->select( 'industries.*', DB::raw('(select path from images where ind_id  =   industries.id  limit 1) as path'), 'categories.name as category_name')
                ->paginate(9);
        }else{
            $industries = Industry::join('categories', 'industries.category','=', 'categories.id')
                // ->join('images', 'industries.id', '=', 'images.ind_id')
                ->where('subcategory',$id)
                ->where('status',1)
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

    public function subcategory(Request $request){
        $subcategory = SubCategory::where('category_id', $request->id)->get();
        $categories = Category::where('id',$request->id)->first();
        return view('front.sub', compact('subcategory', 'categories'));
    }

    public function getImage(Request $request){
        $industry = Industry::whereId($request->id)->first();
        $category = Category::whereId($industry->category)->first();
        $images = Images::where('ind_id', $industry->id)->get();
        return view('admin.industry.images', compact('industry', 'category', 'images'))->with('active', 'industries');
    }

    public function delImage(Request $request){   
        // dd($request->all());
        unlink( public_path('storage/industries/'.$request->path));
        Images::find($request->image_id)->delete();
        return redirect()->route('image.list', ['id' => $request->id]);
    }

    public function addImage(Request $request){
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
                ->resize(600, null , function($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', 85);
                $img->save($thumbnailpath);

                Images::create(['ind_id' => $request->id, 'path' => $filenametostore]);
            }
        }
        return redirect()->route('image.list', ['id' => $request->id]);
    }
}

