@extends('admin.admin_master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Home slide edit</h4>
                    <form method="post" action="{{route('update.about')}}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{ $aboutpage->id }}">
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">title</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="title" type="text" value="{{$aboutpage->title}}" id="example-text-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">short title</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="short_title" type="text" value="{{$aboutpage->short_title}}" id="example-text-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">video url</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="short_description" type="text" value="{{$aboutpage->short_description}}" id="example-text-input">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">long description</label>
                            
                            <div class="col-sm-10">
                                <textarea required="" class="form-control" rows="5" name="long_description">{{$aboutpage->long_description}}</textarea>
                            </div>
                        </div>
                       
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">slide image</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="about_image" type="file"  id="image">
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


 <script type="text/javascript">
    $(document).ready(function(){
    $('#image').change(function(e){
    console.log('hhhhhh');
    var reader = new FileReader();
    reader.onload = function(e){
    $('#showimage').attr('src',e.target.result);
    }
    reader.readAsDataURL(e.target.files['0']);
    console.log('hhhhhh------------------');
    });
    });| |
    </script>
@endsection
    