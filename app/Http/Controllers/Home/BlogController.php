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

      public function DetailsBlog($id){
         $blog= Blog::findOrFail($id);
         $latestblog = Blog::latest()->limit(5)->get();
         $categories=BlogCategory::orderBy('blog_category', 'ASC')->get();
         return view('frontend.blog_details', compact('blog','latestblog','categories'));
      }

      public function CategoryPost($id){
         $blogpost=Blog::where('blog_category_id', $id)->get();
         $latestblog = Blog::latest()->limit(5)->get();
         $categories=BlogCategory::orderBy('blog_category', 'ASC')->get();
         return view('frontend.home_all.cat_blog_detail',compact('blogpost','latestblog','categories'));
      }


      public function HomeBlog(){
         $latestblog = Blog::latest()->get();
         $categories=BlogCategory::orderBy('blog_category', 'ASC')->get();
         return view('frontend.home_all.blog',compact('latestblog','categories'));
      }
    

}
