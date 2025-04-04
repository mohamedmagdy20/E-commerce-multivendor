@extends('back.layout.app')
@section('title','Currency')
@section('content')
<div class="page-header">
    <h4 class="page-title">Currency</h4>
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
        <a href="{{route('currency.index')}}">Currency</a>
      </li>
      
    </ul>
  </div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Currency</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                id="basic-datatables"
                class="display table table-striped table-hover"
              >
                <thead>
                  <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Price in Dollar</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                       
                        <td>{{$item->code}}</td>
                        <td>{{$item->name}}</td>
                        <td>
                          <input type="text" class="form-control" name="price_in_dolar" onchange="updateValue({{$item->id}},event)" value="{{$item->price_in_dolar}}">
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
@section('js')
  <script>
    function updateValue(id,e)
    {
        const value = e.target.value
        $.ajax({
        type: 'GET',
        url: "{{route('currency.update-currency')}}",
        data: {id:id,value:value},
        dataType: 'JSON',
        success: function (results) {
            toastr.success('Value Updated', 'success');
        },
        error:function(result){
            console.log(result);
            toastr.error('Error Accure', 'Error');  

        }
    });
    }
    
</script>
@endsection