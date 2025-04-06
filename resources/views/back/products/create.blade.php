@extends('back.layout.app')
@section('title','Create Product')
@section('content')
<div class="page-header">
    <h4 class="page-title">Create Products</h4>
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
        <a href="{{route('products.create')}}">
          Products
        </a>
      </li>
      <li class="separator">
        <i class="icon-arrow-right"></i>
      </li>
      <li class="nav-item">
        <a href="{{route('products.create')}}">Create Products</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
              <div class="card-title">Create Products</div>
            </div>
            <div class="card-body">
                {!! Form::model($record,[
                    'url'=>route('products.store'),
                    'id'=>'myForm',
                    'role'=>'form',
                    'files'=>true,
                    'method'=>'POST'
                    ])!!}
                        <div class="box-body">
                        <div class="row g-3">
                            @include('back.products.form')
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

{{-- <script>
  function container()
  {
      let inputval = $('#number_of_item').val();
      html = ''
      for(let i = 0; i<inputval ; i++)
      {

          html += `
    <div class="col-md-12 p-3">
    <div class="card border-primary mb-3">
        <div class="card-body">
            <div class="row ">
                <!-- Color Picker -->
                <div class="col-md-2 mt-4">
                    <div class="form-group">
                        <label for="color_picker" class="form-label">Color</label>
                        <input type="color" id="color_picker" name="color[]" value="#333333" class="form-control-color">
                    </div>
                </div>
                <div class="col-md-6"  id="stock_container_${i}">
                  <div class="row">
                        <!-- Size Select -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="size" class="form-label">Size</label>
                                <select name="size[]" class="form-select" id="size">
                                    @foreach ($sizes as $item)
                                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Stock Input -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="stock" class="form-label">Stock</label>
                                <input type="number" name="stock[]" class="form-control" min="0">
                            </div>
                        </div>
                  </div>  
                </div>
                
                  <div class="col-md-1">
                    <div class="form-group">
                      <button class="btn btn-sm btn-primary" onclick="addInputs()"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
              
              
                
                <!-- Price Input -->
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="price" class="form-label">Price ($)</label>
                        <input type="number" name="price[]" class="form-control" step="0.01" min="0">
                    </div>
                </div>
                
                
                <!-- Images Upload -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="images" class="form-label">Images</label>
                        <input type="file" name="images[]" multiple class="form-control" id="images" accept="image/*">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>      `

      }

      $('#container_inputs').html(html);
  }
 </script> --}}
 <script>
  function addInputs() {
    // Find the closest stock container from the clicked button
    const stockContainer = $(event.target).closest('.card-body').find('[id^="stock_container_"]');
    const containerId = stockContainer.attr('id');
    const index = containerId.split('_')[2]; // Extract the index from the ID
    
    // Create new input row
    const newInputRow = `
        <div class="row mt-2">
            <!-- Size Select -->
            <div class="col-md-6">
                <div class="form-group">
                    <select name="size[${index}][]" class="form-select">
                        @foreach ($sizes as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- Stock Input -->
            <div class="col-md-6">
                <div class="form-group">
                    <input type="number" name="stock[${index}][]" class="form-control" min="0" placeholder="Stock">
                </div>
            </div>
        </div>
    `;
    
    // Append the new inputs to the container
    stockContainer.append(newInputRow);
}

// Modify your container function to pass the event properly
function container() {
    let inputval = $('#number_of_item').val();
    html = ''
    for(let i = 0; i<inputval ; i++) {
        html += `
    <div class="col-md-12 p-3">
    <div class="card border-primary mb-3">
        <div class="card-body">
            <div class="row ">
                <!-- Color Picker -->
                <div class="col-md-2 mt-4">
                    <div class="form-group">
                        <label for="color_picker" class="form-label">Color</label>
                        <input type="color" id="color_picker" name="color[]" value="#333333" class="form-control-color">
                    </div>
                </div>
                <div class="col-md-8" id="stock_container_${i}">
                  <div class="row">
                        <!-- Size Select -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="size" class="form-label">Size</label>
                                <select name="size[${i}][]" class="form-select" id="size">
                                    @foreach ($sizes as $item)
                                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Stock Input -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="stock" class="form-label">Stock</label>
                                <input type="number" name="stock[${i}][]" class="form-control" min="0">
                            </div>
                        </div>
                  </div>  
                </div>
                
                  <div class="col-md-2 mt-4">
                    <div class="form-group">
                      <button type="button" class="btn btn-sm btn-primary" onclick="addInputs(event)"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
              
              
                
                <!-- Images Upload -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="images" class="form-label">Images</label>
                        <input type="file" name="images[${i}][]" multiple class="form-control" id="images" accept="image/*">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>`;
    }
    $('#container_inputs').html(html);
}
 </script>