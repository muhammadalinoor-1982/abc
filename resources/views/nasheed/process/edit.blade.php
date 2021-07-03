@extends('nasheed.nasheed_layout.master')
@section('content')
    <form action="{{URL::to('zzz/update/'.$zzz->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        {{--<input type="hidden" name="old_image" value="{{$zzz->image}}">--}}
        @include('nasheed.nasheed_layout._form')
        <div class="form-group">
            <div class="col-sm-6">
                <button class="btn btn-sm btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection
