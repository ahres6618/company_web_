<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController ;
use App\Http\Controllers\Home\PortfolioController;
use App\Http\Controllers\Home\BlogCategoryController;
use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');


// Admin All Route
Route::controller (AdminController::class)->group (function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'storeProfile')->name('store.profile');
    });

Route::controller (HomeSliderController::class)->group(function () {
    Route::get('/home/slide', 'HomeSlider')->name('home.slide');
    Route::post('/update/slider', 'UpdateSlider')->name('update.slider');
        
        });


Route::controller (AboutController::class)->group(function () {
    Route::get('/about/page', 'AboutPage')->name('about.page');
    Route::post('/update/about','UpdateAbout')->name('update.about');

           
                });


Route::controller (PortfolioController::class)->group(function () {
    Route::get('/all/portfolio', 'AllPortfolio')->name('all.portfolio');
    Route::get('/add/portfolio', 'AddPortfolio')->name('add.pprtfolio');
    Route::post('/portfolio/store', 'storePortfolio')->name('potfolio.store');
    Route::get('/edit/portfolio/{id}', 'EditPortfolio')->name('edit.portfolio');
    Route::post('/update/portfolio', 'UpdatePortfolio')->name('potfolio.update');
    Route::get('/delete/portfolio/{id}', 'DeletePortfolio')->name('delete.portfolio');
    Route::get('/portfolio/details/{id}', 'PortfolioDeatils')->name('portfolio.details');

    
                           
      });

Route::controller(BlogCategoryController::class)->group(function () {
    Route::get('/allblog/category', 'AllBlogCategory')->name('allblog.category');
    Route::get('/addblog/category','AddBlogCategory')->name('addblog.category');
    Route::post('/blogcategory/store','StoreBlogCategory')->name('blogcategory.store');
    Route::get('/delete/blogcategory/{id}', 'DeleteBlogCategory')->name('delete.blogcategory');
    
});

Route::controller(BlogController::class)->group(function () {
    Route::get('/allblog', 'AllBlog')->name('blogs.all');
    Route::get('/addblog','AddBlog')->name('blogs.add');
    Route::post('/blog/store','StoreBlog')->name( 'blog.store');
    Route::get('/edit/blog/{id}','EditBlog')->name('edit.blog');
    Route::post('/blog/update','UpdateBlog')->name( 'blog.update');
    Route::get('/delete/blog/{id}','DeleteBlog')->name('delete.blog');
    Route::get('/blog/details/{id}','DetailsBlog')->name('blog.details');
    Route::get('/category/blog/{id}','CategoryPost')->name('category.post');
    Route::get('/home/blog','HomeBlog')->name('home.blog');


    
    
});

Route::controller(ContactController::class)->group(function(){
    Route::get('/contactme', 'Contact')->name('contact.me');
    Route::post('/store/message', 'storemessage')->name('store.message');
    Route::get('/contact/messages', 'Contactmessages')->name('contact.messages');
    
});


require __DIR__.'/auth.php';
