@extends('admin.layout')
@section('title', 'User')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">User Management</h1>
</div>
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-success">
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Role</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($users->isNotEmpty())
            @foreach($users as $user)
            <tr>
                <td class="text-center">{{ $user->id }}</td>
                <td class="text-center">{{ $user->name }}</td>
                <td class="text-center">{{ $user->email }}</td>
                <td class="text-center">{{ $user->role ?? 'N/A' }}</td>
                <td class="text-center">
                    <a href="#" class="text-primary"><i class="fa fa-edit text-primary"></i></a>
                    <form action="#" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        {{-- <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button> --}}
                        <a href="#" class="text-danger" ><i class="fa fa-trash text-danger ms-3"></i></a>
                    </form>
                </td>
            
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="5" class="text-center">No users found.</td>
            </tr>
            @endif
        </tbody>
    </table>


@endsection