@extends('admin.admin_master')
@section('admin')

<br/><br/><br/><br/>


<div class="card-body">
                                            <div class="d-flex mb-4">
                                                from : 
                                                <div class="flex-1">
                                                    <h5 class="font-size-14 my-1">{{$message->name}}</h5>
                                                
                                                </div>
                                            </div>

                                            <h4 class="font-size-16">{{$message->subject}}</h4>

                                            <p>{{$message->message}}</p>
                                            <hr>

                                       

                                        
                                        </div>

@endsection