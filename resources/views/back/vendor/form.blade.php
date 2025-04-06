<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="name">Name <span class="text-danger">*</span></label>
            <input type="text" id="@error('name')'errorInput'@enderror" value="{{isset($record) ? $record->name : old('name')}}" class="form-control" name="name">
        
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror    
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="email">Email <span class="text-danger">*</span></label>
            <input type="email" id="@error('email') ? 'errorInput' @enderror" value="{{isset($record) ? $record->email : old('email')}}" class="form-control" name="email">
        </div>
        @error('email')
        <span class="text-danger">{{$message}}</span>
        @enderror    
    </div>

    
    <div class="col-md-6">
        <div class="form-group">
            <label for="phone">Phone <span class="text-danger">*</span></label>
            <input type="tel" id="@error('phone') ? 'errorInput' @enderror" value="{{isset($record) ? $record->phone : old('phone')}}" class="form-control" name="phone">
        </div>
        @error('email')
        <span class="text-danger">{{$message}}</span>
        @enderror    
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="img">Image Profile <span class="">[optional]</span></label>
             <input type="file" name="image" class="form-control" value="{{isset($record) ? $record->image : old('image')}}" id="img">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="password">Password <span class="text-danger">*</span></label>
             <input type="password" name="password" class="form-control" id="password">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="password_confirmation">Password Confirmation<span class="text-danger">*</span></label>
             <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="account">Account<span class="text-danger">*</span></label>
             <input type="text" name="account" class="form-control" value="{{isset($record) ? $record->account : old('account')}}" id="account">
        </div>
    </div>
    
  </div>