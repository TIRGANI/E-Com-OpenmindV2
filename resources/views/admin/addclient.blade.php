@extends('layouts.admin')
@section('content')
    <form action="/add" method="post" enctype='multipart/form-data'>
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" value="{{$user->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" value="{{$user->password}}" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <input type="hidden" value="team-4.jpg" name="image">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Role</label>
            <select class="form-select" aria-label="Default select example" name="role">
                <option selected>Open this select menu</option>
                <option value="1">SuperAdmin</option>
                <option value="2">Admin</option>
                <option value="3">User</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
