<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
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

class Industry extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'category','phone', 'address', 'state','city', 'street','description', 'products', 'webiste'
    ];

    public function add($request){

    	$industry = new Industry;
        
        $industry->name = $request->name;
        $industry->email = $request->email;
        $industry->category = $request->category;
        $industry->subcategory = $request->subcategory;
        $industry->phone = $request->phone;
        $industry->street = $request->street;
        $industry->city = $request->city;
        $industry->state = $request->state;
        $industry->products = $request->products;;
        $industry->description = $request->description;
        $industry->address = $request->street.','.$request->city.','.$request->state;
        $industry->type = $request->type;
        $industry->website = $request->website;
    
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
                ->resize(600, null , function($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', 85);
                $img->save($thumbnailpath);

                Images::create(['ind_id' => $industry->id, 'path' => $filenametostore]);
            }
        }
    }
}
