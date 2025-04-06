@extends('back.layout.app')
@section('css')
{{-- <link rel="stylesheet" href="https://unpkg.com/@adminkit/core@latest/dist/css/app.css">
<script src="https://unpkg.com/@adminkit/core@latest/dist/js/app.js"></script> --}}
@endsection
@section('title','Vendor')
@section('content')
<div class="page-header">
    <h4 class="page-title">Vendor</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="{{route('admin.home')}}">
          <i class="icon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="icon-arrow-right"></i>
      </li>
      <li class="nav-item">
        <a href="{{route('vendors.index')}}">Vendor</a>
      </li>
      
    </ul>
  </div>
  <a href="{{route('vendors.create')}}" class="btn btn-primary m-3"><span> Create Vendor</span>   <i class="fa fa-plus"> </i></a>
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Vendor</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                id="basic-datatables"
                class="display table table-striped table-hover"
              >
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Account</th>
                    <th>Active</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>
                          <div class="avatar-sm">
                            <img src="{{$item->image == null ? asset('default.png') : asset('uploads/vendors/'.$item->image)}}" alt="..." class="avatar-img rounded-circle">
                          </div>
                        </td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->account}}</td>
                        <td>
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                          </div>
                        </td>
                        <td>
                            <a href="{{route('vendors.delete',$item->id)}}" class="btn btn-sm btn-danger delete-confirm"><i class="fa fa-trash"></i></a>
                            <a href="{{route('vendors.edit',$item->id)}}" class="btn btn-sm btn-secondary "><i class="fa fa-pen"></i></a>
                        </td>
                    </tr>
                    @endforeach
       
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection