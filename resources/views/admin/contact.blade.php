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
           @if($contacts->isNotEmpty())
           @foreach($contacts as $contact)
           <tr>
           <td class="text-center">{{ $contact->id }}</td>
           <td class="text-center">{{ $contact->name }}</td>
          <td class="text-center">{{ $contact->email }}</td>
          <td class="text-center">{{ $contact->subject ?? 'N/A' }}</td>
          <td class="text-center">{{ $contact->message ?? 'N/A' }}</td> 
          </tr>
          @endforeach
          @else
          <tr>
              <td colspan="5" class="text-center">No contacts found.</td>
          </tr>
          @endif         
      </table>
</div>
@endsection