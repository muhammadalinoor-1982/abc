@extends('basic.layout.master')
@section('content')
    <form action="{{route('crud.update', $crud->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('basic.layout._form')
        <div class="form-group">
            <div class="col-sm-6">
                <button class="btn btn-sm btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection