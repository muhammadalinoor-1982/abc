@extends('nasheed.nasheed_layout.master')
@section('content')
    <form action="{{URL::to('store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('nasheed.nasheed_layout._form')
        <div class="form-group">
            <div class="col-sm-6">
                <button class="btn btn-sm btn-success">Create</button>
            </div>
        </div>
    </form>
@endsection
