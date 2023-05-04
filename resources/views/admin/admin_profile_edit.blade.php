@extends('admin.admin_master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Edit Profile</h4>
                    <form method="post" action="{{route('store.profile')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="name" type="text" value="{{$editadminData->name}}" id="example-text-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="email" type="text" value="{{$editadminData->email}}" id="example-text-input">
                            </div>
                        </div>
                       
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">usename</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="profile_image" type="file"  id="image">
                            </div>
                        </div>

                       

                            <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" value="update profile" />
                    </form>
                       
                       
                      
                        <!-- end row -->
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
 </div>


 
@endsection
    