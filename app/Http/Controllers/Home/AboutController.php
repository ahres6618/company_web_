<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Nette\Utils\Image;



class AboutController extends Controller
{
    public function AboutPage(){

        $aboutpage = About::find(1);
        return view('admin.about_page.about_page_all',compact('aboutpage'));
    }
    
    public function UpdateAbout(Request $request){
        $about_id = $request->id;
       
        if ($request->file('about_image')) {
            $image= $request->file('about_image');
            $name_gen = hexdec (uniqid()).'.'.$image->getClientOriginalExtension(); // 3434343443.jpg
            Image::make($image)->resize(523,605)->save('upload/about_image/'.$name_gen);
            $save_url = 'upload/about_image/'.$name_gen;
            About::findOrFail($about_id) ->update([
                'title'=>$request->title,
                'short_title'=>$request->short_title,
                'short_description'=>$request->short_description,
                'long_description'=>$request->long_description,
                'about_image'=>$save_url,
        
                ]);
            }else{
                About::findOrFail($about_id) ->update([
                    'title'=>$request->title,
                    'short_title'=>$request->short_title,
                    'short_description'=>$request->short_description,
                    'long_description'=>$request->long_description,
                    
            
                    ]);
    
            }
           
    
            $notification= array(
                'message' => 'Home slide upduted successfully',
                'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
    
    }
}
