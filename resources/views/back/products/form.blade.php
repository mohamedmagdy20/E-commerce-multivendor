<div class="row">
    @foreach(config('translatable.locales') as $locale)
    <div class="col-md-6">
        <div class="form-group">
            <label>title : <span class="text-danger">*</span> </label>
            {!! Form::text( $locale .'[title]',$record->id? $record->translate($locale)->title: old('title'), ["class"=>"form-control","required","placeholder"=>'Enter title in '.$locale, 'maxlength'=>'150']) !!}
        </div>                                
    </div>
@endforeach
@foreach(config('translatable.locales') as $locale)
<div class="col-md-6">
    <div class="form-group">
        <label>Content</label>
        {!! Form::textarea( $locale .'[content]',$record->id? $record->translate($locale)->content: old('content'), ["class"=>"form-control","placeholder"=>'Enter description in '.$locale, 'maxlength'=>'150']) !!}
    </div>                                
</div>
@endforeach

<div class="col-md-12">
    <div class="form-group">
        <label for="slug">Image Cover <span class="text-danger">*</span></label>
        <input type="file" name="image" class="form-control" value="{{isset($record) ? $record->image : old('image')}}">
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="slug">Slug <span class="text-danger">*</span></label>
        <input type="text" name="slug" class="form-control" value="{{isset($record) ? $record->slug : old('slug')}}">
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label for="vendor_id">Vendor</label>
        <select name="vendor_id" class="form-select" id="vendor_id">
            <option value="">Select Vendor</option>
            @foreach ($vendors as $item )
                <option value="{{old('vendor_id',$item->id)}}"
                    {{$item->id == $record->vendor_id ? 'selected' : ''}}
                    >{{$item->name}}</option>
            @endforeach
        </select>
    </div>
</div>


<div class="col-md-4">
    <div class="form-group">
        <label for="brand_id">Brand</label>
        <select name="brand_id" class="form-select" id="brand_id">
            <option value="">Select Brand</option>
            @foreach ($brands as $item )
                <option value="{{old('brand_id',$item->id)}}"
                    {{$item->id == $record->brand_id ? 'selected' : ''}}
                    >{{$item->title}}</option>
            @endforeach
        </select>
    </div>
</div>


<div class="col-md-4">
    <div class="form-group">
        <label for="category_id">Categories</label>
        <select name="category_id[]" class="form-select select2-multiple" id="category_id"  multiple="multiple">
            <option value="">Select Categories</option>
            @foreach ($categories as $index => $item )
                <option value="{{old('category_id[]',$item->id)}}"
                    {{-- {{isset($r $item->id == $record->categories['id'][$index] ? 'selected' : ''}} --}}
                    >{{$item->title}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="price">Price in $</label>
        <input type="text" id="price"  class="form-control" name="price">
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="number_of_item">Number of Items</label>
        <input type="number" id="number_of_item" onchange="container()" class="form-control" name="number_of_item">
    </div>
</div>
<div class="col-md-12 mb-2">
    <div class="row" id="container_inputs">
       
    </div>
  
</div>
</div>


