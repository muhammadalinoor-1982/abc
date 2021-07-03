@extends('nasheed.nasheed_layout.master')
@section('content')
    <button class="btn btn-sm btn-danger"><a href="{{url('/example_excel/data_upload.xlsx')}}">Download Sample file</a></button>
    <form action="{{URL::to('bulk')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" class="btn btn-sm btn-info">
        <div class="form-group">
            <div class="col-sm-6">
                <button class="btn btn-sm btn-success">Upload</button>
            </div>
        </div>
    </form>
@endsection
