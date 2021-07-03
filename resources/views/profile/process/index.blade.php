@extends('profile.profile_layout.master')
@section('content')
    <a href="{{route('profile.create')}}" class="btn btn-sm btn-primary">Add New</a>
    <a href="{{route('profile.bulkupload')}}" class="btn btn-sm btn-primary">Excel Upload</a>
    <a href="{{route('profile.bulkimage')}}" class="btn btn-sm btn-primary">image Upload</a>
    <button type="button" class="btn btn-danger" id="deleteAllSelectedRecords">Delete Selected</button>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th><input type="checkbox" id="chkCheckAll"></th>
            <th>SL#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>image</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($profiles as $profile)
            <tr id="sid{{$profile->id}}">
                <td><input type="checkbox" name="ids" class="checkBoxClass" value="{{$profile->id}}"></td>
                <td>{{ $serial++ }}</td>
                <td>{{ $profile->name }}</td>
                <td>{{ $profile->email }}</td>
                <td>{{ $profile->phone }}</td>
                <td>{{ $profile->address }}</td>
                <td><img src="{{(!empty($profile->image))?url('images/profile/'.$profile->image):url('images/profile/no_image.png')}}" width="100%"></td>
                <td>
                    @if($profile->deleted_at == null)
                        <a class="btn btn-sm btn-success" href="{{ route('profile.edit',$profile->id) }}">Edit</a>
                        <form  action="{{ route('profile.destroy',$profile->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-warning" onclick="return confirm('Are you confirm to delete this user')">Delete</button>
                        </form>
                    @else
                        <form  action="{{ route('profile.restore',$profile->id) }}" method="post">
                            @csrf
                            <button class="btn btn-sm btn-success" onclick="return confirm('Are you confirm to restore this user')">Restore</button>
                        </form>
                        <form  action="{{ route('profile.force_delete',$profile->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you confirm to permanently delete this user')">P_Delete</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
@endsection
