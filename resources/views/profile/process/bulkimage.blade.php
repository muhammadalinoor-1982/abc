@extends('profile.profile_layout.master')
@section('content')
    <form action="{{route('profile.multipleimage')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image[]" multiple id="file-input" class="btn btn-sm btn-info">
        <div class="form-group">
            <div class="col-md-6" id="preview"></div>
        </div>
        <div class="form-group">
            <div class="col-sm-6">
                <button class="btn btn-sm btn-success">Upload multiple image</button>
            </div>
        </div>
    </form>
@endsection
