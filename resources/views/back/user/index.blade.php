@extends('back.layout.app')
@section('title','Users')
@section('content')
<div class="page-header">
    <h4 class="page-title">Users</h4>
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
        <a href="{{route('users.index')}}">Users</a>
      </li>
      
    </ul>
  </div>
  <a href="{{route('users.create')}}" class="btn btn-primary m-3"><span> Create User</span>   <i class="fa fa-plus"> </i></a>
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Users</h4>
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
                    <th>Date Join</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                {{-- <tfoot>
                  <tr>
                   <th>Image</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Date Join</th>
                   <th>Actions</th>
                 </tr>
                </tfoot> --}}
                <tbody>
                    @foreach($data as $user)
                    <tr>
                        <td><div class="avatar-sm">
                            <img src="{{$user->img == null ? asset('uploads/users/17426179741972734748.png') : asset('uploads/users/'.$user->img)}}" alt="..." class="avatar-img rounded-circle">
                          </div></td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            <a href="{{route('users.delete',$user->id)}}" class="btn btn-sm btn-danger delete-confirm"><i class="fa fa-trash"></i></a>
                            <a href="{{route('users.edit',$user->id)}}" class="btn btn-sm btn-secondary "><i class="fa fa-pen"></i></a>
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