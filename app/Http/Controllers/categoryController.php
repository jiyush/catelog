<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Input;
use File;
use App\Mail\AddListing;
use Illuminate\Support\Facades\Mail;
use App\Inquiry;

use Redirect;
use Validator;
use Image; //Intervention Image
use App\Images;
use App\Industry;
use Illuminate\Support\Facades\Storage; //Laravel Filesystem

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

        $rules = [
                    'image' => 'array|max:5|size:5',
                    'type' => 'required',
                    'phone' => 'required|digits:10',
                    'email' => 'required|email',
                    'indCat' => 'required'
                ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }
        // dd($request->all());
        
        $industry = new Industry;
        
        $industry->name = $request->indName;
        $industry->email = $request->email;
        $industry->category = $request->indCat;
        $industry->phone = $request->phone;
        $industry->street = $request->street;
        $industry->city = $request->city;
        $industry->state = $request->state;
        $industry->products = $request->products;;
        $industry->description = $request->description;
        $industry->address = $request->street.','.$request->city.','.$request->state;
        $industry->type = $request->type;
        $industry->website = $request->website;
    
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


        $data = array();
        $data['name'] = $request->indName;
        $data['email'] = $request->email;
        $data['category'] = $request->indCat;
        $data['address'] = $request->street.','.$request->city.','.$request->state.','.$request->pincode;
        $data['description'] = $request->description;
        $data['phone'] = $request->phone;
        $data['website'] = $request->website;
        $data['keywords'] = $request->keywords;
        $inquiry = Inquiry::create($data);
        Mail::to('piyush.mobio@gmail.com')->send(new AddListing($inquiry));
        return redirect()->route('root');
    }
}
