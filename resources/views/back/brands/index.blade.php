@extends('back.layout.app')
@section('title','Brands')
@section('content')
<div class="page-header">
    <h4 class="page-title">Brands</h4>
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
        <a href="{{route('brands.index')}}">Brands</a>
      </li>
      
    </ul>
  </div>
  <a href="{{route('brands.create')}}" class="btn btn-primary m-3"><span> Create Brand</span>   <i class="fa fa-plus"> </i></a>
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Brands</h4>
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
                    <th>Slug</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>
                          <div class="avatar-sm">
                            <img src="{{$item->image == null ? asset('default.png') : asset('uploads/brands/'.$item->image)}}" alt="..." class="avatar-img rounded-circle">
                          </div>
                        </td>
                        <td>{{$item['title:ar']}}</td>
                        <td>{{$item['title:en']}}</td>

                        <td>{{$item->slug}}</td>
                        <td>
                            <a href="{{route('brands.delete',$item->id)}}" class="btn btn-sm btn-danger delete-confirm"><i class="fa fa-trash"></i></a>
                            <a href="{{route('brands.edit',$item->id)}}" class="btn btn-sm btn-secondary "><i class="fa fa-pen"></i></a>
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