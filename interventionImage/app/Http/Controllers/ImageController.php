<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('imageUpload');
    }
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
      
        if($request->hasFile('image')) {

            // create image manager with desired driver
            $manager = new ImageManager(new Driver());

            // read image from file system
            $image = $manager->read('upload/admin.png');

            // Image Crop
            $image->crop(500,500);

            // insert watermark
            // $image->place('uploads/water_mark.png');
            //Save the file
            $image->save(public_path('uploads/crop.jpeg'));

            $imageName = time().'-'.$request->file('image')->getClientOriginalName();


  
            return back()
                ->with('success','Image Upload successful')
                ->with('imageName',$imageName);
        }
       
        return back();
    }
}