@extends('back.layout.app')
@section('title','Categories')
@section('content')
<div class="page-header">
    <h4 class="page-title">Categories</h4>
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
        <a href="{{route('categories.index')}}">Categories</a>
      </li>
      
    </ul>
  </div>
  <a href="{{route('categories.create')}}" class="btn btn-primary m-3"><span> Create Category</span>   <i class="fa fa-plus"> </i></a>
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Categories</h4>
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
                    <th>Title in Arabic</th>
                    <th>Title in English</th>
                    <th>Content in Arabic</th>
                    <th>Content in English</th>
                    <th>Slug</th>
                    <th>Parent</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>
                          <div class="avatar-sm">
                            <img src="{{$item->image == null ? asset('default.png') : asset($item->image)}}" alt="..." class="avatar-img rounded-circle">
                          </div>
                        </td>
                        <td>{{$item['title:ar']}}</td>
                        <td>{{$item['title:en']}}</td>
                        <td>{{$item['content:ar']}}</td>
                        <td>{{$item['content:en']}}</td>

                        <td>{{$item->slug}}</td>
                        <td>{{optional($item->parent)->title}}</td>
                        <td>
                            <a href="{{route('categories.delete',$item->id)}}" class="btn btn-sm btn-danger delete-confirm"><i class="fa fa-trash"></i></a>
                            <a href="{{route('categories.edit',$item->id)}}" class="btn btn-sm btn-secondary "><i class="fa fa-pen"></i></a>
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