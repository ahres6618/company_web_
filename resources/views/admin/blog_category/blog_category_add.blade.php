@extends('admin.admin_master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Home slide edit</h4>
                    <form method="post" action="{{route('blogcategory.store')}}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id">
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Blog category name</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="blog_category" type="text"  id="example-text-input">
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
    