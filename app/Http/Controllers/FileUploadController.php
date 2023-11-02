<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\video;

class FileUploadController extends Controller
{
    public function fileUp()
    {
  // $user = Auth::check();
//   dd($user);
      return view('file');
    }
    public function load(Request $request)
    {
$request->validate([
            'title' => 'required|unique:videos|max:255',
            'describe' => 'required|max:700',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $file = $request->file('image_path');
        
            if($request->hasFile('image_path'))
            {
           $imageNameComplet = $file->getClientOriginalName();
          $extension = $request->image_path->extension();
          $imageName = basename($file->getClientOriginalName(), '.' . $extension);
          $fileName = time() . '.' . $request->image_path->extension();
            }

$path = $request->image_path->storeAs('/IMG',$fileName);
        
        $video = video::Create([
          "title" => $request->title,
          "describe" => $request->describe,
          "image_path" => $fileName,
        ]);
         // "user_id" => 1

   dump($fileName);
      //$request->image->storeAs('public/images', $fileName);  
      
        /* 
            Write Code Here for
            Store $imageName name in DATABASE from HERE 
        */
     /*   
        return back()
                    ->with('success', 'You have successfully upload image.')
                    ->with('image', $imageName);*/
    }
}
