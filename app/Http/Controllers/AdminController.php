<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function Profile(){

        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view', compact('adminData'));

    }


    public function EditProfile(){
        $id = Auth::user()->id;
        $editadminData = User::find($id);
        return view('admin.admin_profile_edit', compact('editadminData'));

    }

    public function storeProfile(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        if ($request->file('profile_image')) {
            $file= $request->file('profile_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['profile_image'] = $filename;
            }
            $data->save(); 

            $notification= array(
                'message' => 'Admin Profile Updated Successfully',
                'alert-type' => 'success'
                );

            return redirect()->route('admin.profile')->with($notification);


    }
}

