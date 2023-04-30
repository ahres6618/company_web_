@extends('admin.admin_master')
@section('admin')

<style type="text/css">
    .bootstrap-tagsinput .tag{
        margin-right: 2px;
        color: #b70000;
        font-weight: 700px;
    } 
</style>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Home slide edit</h4>
                    <form method="post" action="{{route('blog.update')}}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{$blog->id}}">
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">blog title</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="blog_title" type="text"  id="example-text-input" value="{{$blog->blog_title}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">blog tags</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="blog_tags" type="text"  id="example-text-input" data-role='tagsinput' value="{{$blog->blog_tags}}">
                            </div>
                        </div>
                       
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">category</label>
                            <div class="col-sm-10">
                            <select name="blog_category_id" class="form-select" aria-label="Default select example">
                                <option selected="">Open this select menu</option>
                                 @foreach($categories as $item)
                                <option value="{{$item->blog_category}}">{{$item->blog_category}}</option>
                                @endforeach
                                
                                </select>
                        </div>
                    </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">blog description</label>
                            
                            <div class="col-sm-10">
                                <textarea required="" class="form-control" rows="5" name="blog_description">{{$blog->blog_description}}</textarea>
                            </div>
                        </div>
                      

                        

                            <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" value="insert blog" />
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
    