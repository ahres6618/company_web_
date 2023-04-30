<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BlogController extends Controller
{
    //
    public function AllBlog(){
        $blog = Blog::latest()->get();
        return view('admin.blog.blog_all', compact('blog'));
      }

     public function AddBlog(){ 
        $categories=BlogCategory::orderBy('blog_category', 'ASC')->get();
        return view('admin.blog.blog_add',compact('categories'));
     }

     public function StoreBlog(Request $request){ 
        Blog::insert([
            'blog_title'=>$request->blog_title,
            'blog_tags'=>$request->blog_tags,
            'blog_category_id'=>$request->blog_category_id,
            'blog_description'=>$request->blog_description,
            'created_at'=>Carbon::now(),
          ]);
    
      $notification= array(
        'message' => 'blog added successfully',
        'alert-type' => 'success'
        );
        return redirect()->route('blogs.all')->with($notification);
     }



     public function EditBlog($id){
        $blog = Blog::where('id',$id)->first();
        $categories=BlogCategory::orderBy('blog_category', 'ASC')->get();
        return view('admin.blog.blog_edit', compact('blog'),compact('categories'));
     }


     public function UpdateBlog(Request $request){
        $portfolio_id = $request->id;
        Blog::findOrFail($portfolio_id)->update([
        'blog_title'=>$request->blog_title,
        'blog_tags'=>$request->blog_tags,
        'blog_category_id'=>$request->blog_category_id,
        'blog_description'=>$request->blog_description,

        ]);

     $notification= array(
          'message' => 'blog updated successfully',
          'alert-type' => 'success'
          );
          return redirect()->route('blogs.all')->with($notification);
     }


     public function  DeleteBlog($id){
        $portfolio= Blog::where('id',$id)->first();
        $portfolio->delete();
        return redirect()->route('blogs.all')->with([
        'success' => ' Blog deleted successfully'
        ]);
      }
    

}
