@extends('nasheed.nasheed_layout.master')
@section('content')
    <a href="{{URL::to('create')}}" class="btn btn-sm btn-primary">Add New</a>
    <a href="{{URL::to('bulkdata')}}" class="btn btn-sm btn-primary">Excel Upload</a>
    <table class="table table-bordered">
        <thead>
        <tr>
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
        @foreach($zzzs as $zzz)
            <tr>
                <td>{{ $serial++ }}</td>
                <td>{{ $zzz->name }}</td>
                <td>{{ $zzz->email }}</td>
                <td>{{ $zzz->phone }}</td>
                <td>{{ $zzz->address }}</td>
                <td><img src="{{asset(isset($zzz->image)?$zzz->image:'images/nasheed/no_image.png')}}" width="100%"></td>
                <td>
                    @if($zzz->deleted_at == null)
                        <a class="btn btn-sm btn-success" href="{{ URL::to('zzz/edit/'.$zzz->id) }}">Edit</a>
                        <form  action="{{ URL::to('zzz/delete/'.$zzz->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-warning" onclick="return confirm('Are you confirm to delete this user')">Delete</button>
                        </form>
                    @else
                        <form  action="{{ URL::to('zzz/restore/'.$zzz->id) }}" method="post">
                            @csrf
                            <button class="btn btn-sm btn-success" onclick="return confirm('Are you confirm to restore this user')">Restore</button>
                        </form>
                        <form  action="{{ URL::to('zzz/Permanent_Delete/'.$zzz->id) }}" method="post">
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
