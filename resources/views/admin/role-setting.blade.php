@extends('layouts.master')

@section('css')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title text-left">Employees</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Role-Settings</a></li>
  
    </ol>
</div>
@endsection

@section('button')
<a href="#addnew" data-toggle="modal" class="btn btn-success btn-sm btn-flat"><i class="mdi mdi-plus mr-2"></i>Add New Role</a>
        

@endsection

@section('content')
@include('includes.flash')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-striped table-hover table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th data-priority="1">ID</th>
                                <th data-priority="2">Slug</th>
                                <th data-priority="3">Name</th>
                                <th data-priority="4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->slug }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <a href="#edit{{$role->id}}" data-toggle="modal" class="btn btn-success btn-sm edit btn-flat"><i class='fa fa-edit'></i></a>
                                    <a href="#delete{{$role->id}}" data-toggle="modal" class="btn btn-danger btn-sm delete btn-flat"><i class='fa fa-trash'></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @foreach( $roles as $role)
    @include('includes.edit_delete_role')
    @endforeach

    @include('includes.add_role')
@endsection

@section('script')
<!-- Responsive-table-->

@endsection