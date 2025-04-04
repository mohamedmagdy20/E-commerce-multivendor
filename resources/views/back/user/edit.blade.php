@extends('back.layout.app')
@section('title','Edit User')
@section('content')
<div class="page-header">
    <h4 class="page-title">Edit Users</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="{{route('admin.home')}}">
          <i class="icon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="icon-arrow-right"></i>
      </li>
      <li class="nav-home">
        <a href="{{route('users.index')}}">
          Users
        </a>
      </li>
      <li class="separator">
        <i class="icon-arrow-right"></i>
      </li>
      <li class="nav-item">
        <a href="{{route('users.edit',$data->id)}}">Edit User</a>
      </li>
      
    </ul>
  </div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
              <div class="card-title">Edit User</div>
            </div>
            <div class="card-body">
                <form action="{{route('users.update',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" id="@error('name')'errorInput'@enderror" class="form-control" value="{{old('name',$data->name)}}" name="name">
                        
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror    
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" id="@error('email') ? 'errorInput' @enderror" class="form-control" name="email" value="{{old('name',$data->email)}}">
                        </div>
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror    
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="img">Image Profile <span class="">[optional]</span></label>
                             <input type="file" name="img" class="form-control" id="img">
                        </div>
                    </div>
    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Password <span class="text-danger">[optional]</span></label>
                             <input type="password" name="password" class="form-control" id="password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password_confirmation">Password Confirmation<span class="text-danger">[optional]</span></label>
                             <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                        </div>
                    </div>
                    
                  </div>
            
            </div>
            <div class="card-action">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a class="btn btn-danger" href="{{route('users.index')}}">Cancel</a>
            </div>
        </form>

          </div>
    </div>
</div>
@endsection