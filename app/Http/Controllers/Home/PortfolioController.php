<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Carbon\Carbon;
use Nette\Utils\Image;


class PortfolioController extends Controller
{
    //
    public function AllPortfolio(){
      $portfolio = Portfolio::latest()->get();
      return view('admin.portfolio.portfolio_all', compact('portfolio'));
    }

    //
    public function AddPortfolio(){
      
      return view('admin.portfolio.portfolio_add');
    }

    public function storePortfolio(Request $request){
     
    
          Portfolio::insert([
            'portfolio_name'=>$request->portfolio_name,
            'portfolio_title'=>$request->portfolio_title,
            'portfolio_description'=>$request->portfolio_description,
            'created_at'=>Carbon::now(),
          ]);
    
      $notification= array(
        'message' => 'portfolio added successfully',
        'alert-type' => 'success'
        );
        return redirect()->route('all.portfolio')->with($notification);
    }

    public function EditPortfolio($id){

      $portfolio = Portfolio::where('id',$id)->first();
      return view('admin.portfolio.portfolio_edit', compact('portfolio'));
    }


    public function UpdatePortfolio(Request $request){
      $portfolio_id = $request->id;
      Portfolio::findOrFail($portfolio_id)->update([
        'portfolio_name'=>$request->portfolio_name,
        'portfolio_title'=>$request->portfolio_title,
        'portfolio_description'=>$request->portfolio_description,

        ]);

     $notification= array(
          'message' => 'portfolio updated successfully',
          'alert-type' => 'success'
          );
          return redirect()->route('all.portfolio')->with($notification);

    }

    public function DeletePortfolio($id){
      $portfolio= Portfolio::where('id',$id)->first();
      $portfolio->delete();
      return redirect()->route('all.portfolio')->with([
      'success' => ' Employe deleted successfully'
      ]);
    }

}
