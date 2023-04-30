<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    //
public function AllBlogCategory(){
    $blogcategory = BlogCategory::latest()->get();
    return view('admin.blog_category.blog_category_all', compact('blogcategory'));
}



public function AddBlogCategory(){
    return view('admin.blog_category.blog_category_add');
}

public function StoreBlogCategory(Request $request){
    
    BlogCategory::insert([
        'blog_category'=>$request->blog_category,
       
      ]);

  $notification= array(
    'message' => 'category added successfully',
    'alert-type' => 'success'
    );
    return redirect()->route('allblog.category')->with($notification);
}

public function DeleteBlogCategory($id){
    $blogcategory= BlogCategory::findOrFail($id)->delete();

    return redirect()->route('allblog.category')->with([
    'success' => ' Employe deleted successfully'
    ]);
  }

}
