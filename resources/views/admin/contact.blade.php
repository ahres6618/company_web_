@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Inbox</h4>
                
                    
               
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                            <li class="breadcrumb-item active">Inbox</li>
                        </ol>
                    </div>
                  
                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
          

                <!-- Right Sidebar -->
                <div class="email mb-3">
                    
                    <div class="card">
                        <div class="btn-toolbar p-3" role="toolbar">
                     

                           
                        </div>
                        <ul class="message-list">
                            @foreach ($contact as $item)
                            <li>
                                <div class="col-mail col-mail-1">
                                    <div class="checkbox-wrapper-mail">
                                        <input type="checkbox" id="chk19">
                                        <label class="form-label" for="chk19" class="toggle"></label>
                                    </div>
                                    <a href="{{route('message.read',$item->id)}}" class="title">{{$item->name}}</a><span class="star-toggle far fa-star"></span>
                                </div>
                                <div class="col-mail col-mail-2">
                                    <a href="{{route('message.read',$item->id)}}" class="subject">{{$item->subject}}</span>
                                    </a>
                                    <div class="date">{{Carbon\Carbon::parse($item->created_at)->diffForhumans()}}</div>
                                </div>
                            </li>
                            @endforeach

                        
                           

                        </ul>

                    </div> <!-- card -->

                  
                </div> <!-- end Col-9 -->

            </div>

        </div><!-- End row -->
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->


@endsection