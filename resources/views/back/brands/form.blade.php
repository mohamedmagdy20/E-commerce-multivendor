<div class="row">
    @foreach(config('translatable.locales') as $locale)
        <div class="col-md-6">
            <div class="form-group">
                <label>title : <span class="text-danger">*</span> </label>
                {!! Form::text( $locale .'[title]',$record->id? $record->translate($locale)->title: old('title'), ["class"=>"form-control","required","placeholder"=>'Enter title in '.$locale, 'maxlength'=>'150']) !!}
            </div>                                
        </div>
    @endforeach
    <div class="col-md-12">
        <div class="form-group">
            <label for="slug">Image <span class="text-danger">*</span></label>
            <input type="file" name="image" class="form-control" value="{{isset($record) ? $record->image : old('image')}}">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="slug">Slug <span class="text-danger">*</span></label>
            <input type="text" name="slug" class="form-control" value="{{isset($record) ? $record->slug : old('slug')}}">
        </div>
    </div>
 
</div>
