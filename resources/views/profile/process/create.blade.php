@extends('profile.profile_layout.master')
@section('content')
    <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('profile.profile_layout._form')
        <div class="form-group">
            <div class="col-sm-6">
                <button class="btn btn-sm btn-success">Create</button>
            </div>
        </div>
    </form>
@endsection
