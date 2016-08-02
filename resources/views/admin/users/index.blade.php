@extends('app')
@section('content')
<div class="container">
    <h1>Products</h1>
    
    <br />
    <a href="{{ route('admin/users.create') }}" class="btn btn-default">New User</a>
    <br />
    <br />
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('admin/users.edit', ['id'=>$user->id])}}">Edit</a> | 
                <a href="{{ route('admin/users.destroy', ['id'=>$user->id])}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection