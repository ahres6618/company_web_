@extends('admin.admin_master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Home slide edit</h4>
                    <form method="post" action="{{route('potfolio.store')}}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id">
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">portfolio name</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="portfolio_name" type="text"  id="example-text-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">portfolio title</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="portfolio_title" type="text"  id="example-text-input">
                            </div>
                        </div>
                       

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">portfolio description</label>
                            
                            <div class="col-sm-10">
                                <textarea required="" class="form-control" rows="5" name="portfolio_description"></textarea>
                            </div>
                        </div>
                       
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">portfolio image</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="portfolio_iamge" type="file"  id="image">
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
    