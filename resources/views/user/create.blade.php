@extends('layout')

@section('content')
<form action="{{route('user-store')}}" method="POST" class="col-sm-6 m-auto">
    @csrf
    <div class="form-group">
        <label for="role">Role</label>
        <select  class="form-control" id="role" name="role">
        @foreach ($roles as $role)
            <option value="{{$role->id}}">{{$role->type}}</option>
        @endforeach
    </select>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" id="firstname"  name="firstname"  placeholder="Enter first Name">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
            </div>

            <div class="form-group">
                <label for="price">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
            </div>
        </div>

    </div>

    <button type="submit" class="btn btn-primary d-flex m-auto ">Submit</button>
</form>
@endsection




