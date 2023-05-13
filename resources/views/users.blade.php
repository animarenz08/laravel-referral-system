@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h3>Users</h3>

        @if(session("message"))
            <p><strong>{{ session("message") }}</strong></p><br>
        @endif
        <div><a href="/users/create" class="btn btn-primary btn-sm">Add New</a></div>

        
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Role</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Referral Code</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td> {{$user->id}} </td>
                        <td>
                            @if ($user->role == '1')
                                Admin
                            @else
                                User
                            @endif
                        </td>
                        <td> {{$user->name}} </td>
                        <td> {{$user->email}} </td>
                        <td> {{$user->referral_code}} </td>
                        <td>
                            <a href="/users/{{$user->id}}" class="btn btn-primary btn-sm">View</a>
                            <a href="/users/{{$user->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <form action="users/{{$user->id}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection