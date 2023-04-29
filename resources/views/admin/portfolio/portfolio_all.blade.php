@extends('admin.admin_master')
@section('admin')


<div class="page-content">
 <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Editable Table</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Editable Table</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Datatable Editable</h4>
        
                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>portfolio name</th>
                                                        <th>portfolio title</th>
                                                        <th>image</th>
                                                     
                                                     
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($portfolio as $key => $Port)
                                                        <tr>
                                                        <td>{{$Port->id}}</td>
                                                        <td>{{$Port->portfolio_name}}</td>
                                                        <td>{{$Port->portfolio_title}}</td>
                                                        <td>{{$Port->portfolio_iamge}}</td>
                                                        <td class="d-flex justify-content-center align-items-center">
                                                            <a href=""
                                                            class="btn btn-sm btn-primary">
                                                            <i class="fas fa-eye"></i>
                                                            </a>
                                                        
                                                       
                                                            <a href="{{route('edit.portfolio', $Port->id )}}"
                                                            class="btn btn-sm btn-warning mx-2">
                                                            <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a href="{{route('delete.portfolio', $Port->id )}}"
                                                                class="btn btn-sm btn-warning mx-2">
                                                                <i class="fas fa-trash"></i>
                                                                </a>
                                                        
                                                       
                                                        </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>

            </div>
            @endsection
                