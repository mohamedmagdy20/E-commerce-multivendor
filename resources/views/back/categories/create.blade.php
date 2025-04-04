@extends('back.layout.app')
@section('title','Create Category')
@section('content')
<div class="page-header">
    <h4 class="page-title">Create Category</h4>
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
        <a href="{{route('categories.create')}}">
          Categories
        </a>
      </li>
      <li class="separator">
        <i class="icon-arrow-right"></i>
      </li>
      <li class="nav-item">
        <a href="{{route('categories.create')}}">Create Categories</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
              <div class="card-title">Create Category</div>
            </div>
            <div class="card-body">
                {!! Form::model($record,[
                    'url'=>route('categories.store'),
                    'id'=>'myForm',
                    'role'=>'form',
                    'files'=>true,
                    'method'=>'POST'
                    ])!!}
                        <div class="box-body">
                        <div class="row g-3">
                            @include('back.categories.form')
                        </div>
                        </div>
                        <div class="box-footer">
                        <button type="submit" onclick="submitForm(this)" class="btn btn-primary">Submit</button>
                        </div>
               {!! Form::close()!!}

          </div>
    </div>
</div>
@endsection