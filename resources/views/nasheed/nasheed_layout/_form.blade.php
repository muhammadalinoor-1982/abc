<div class="form-group">
    <label class="col-md-6">User Name</label>
    <div class="col-md-6">
        <input name="name" value="{{ old('name',isset($zzz)?$zzz->name:null) }}" type="text" placeholder="Enter user Name" class="form-control form-control-line @error('name') is-invalid @enderror">
    </div>
    @error('name')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label class="col-md-6">Email</label>
    <div class="col-md-6">
        <input name="email" value="{{ old('email',isset($zzz)?$zzz->email:null) }}" type="email" placeholder="Enter your email" class="form-control form-control-line @error('email') is-invalid @enderror">
    </div>
    @error('email')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label class="col-md-6">Phone</label>
    <div class="col-md-6">
        <input name="phone" value="{{ old('phone',isset($zzz)?$zzz->phone:null) }}" type="number" placeholder="Enter your Phone Number" class="form-control form-control-line @error('phone') is-invalid @enderror">
    </div>
    @error('phone')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label class="col-md-6">Address</label>
    <div class="col-md-6">
        <textarea rows="5" name="address" class="form-control form-control-line @error('address') is-invalid @enderror">{{ old('address',isset($zzz)?$zzz->address:null) }}</textarea>
    </div>
    @error('address')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label class="col-md-6">Image</label>
    <div class="col-md-6">
        <img src="{{asset(isset($zzz->image)?$zzz->image:'images/nasheed/no_image.png')}}" width="30%">
        <input name="image" type="file" class="form-control form-control-line @error('image') is-invalid @enderror">
    </div>
    @error('image')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>
