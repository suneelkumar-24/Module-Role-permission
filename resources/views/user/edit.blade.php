
@extends('layout')

@section('content')

            <form action="{{route('user-update')}}" method="POST" class="col-sm-6 m-auto">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="role">Role</label>
                    <select  class="form-control" id="role" name="role">
                    @foreach ($roles as $role)
                        <option value="{{$role->id}}">{{$role->type}}</option>
                    @endforeach
                </select>
                </div>
                <input type="hidden" class="form-control" id="id"  name="id"  value={{$user->id}}>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" id="firstname"  name="firstname"  value={{$user->first_name}}>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value={{$user->address}}>
                        </div>

                        <div class="form-group">
                            <label for="price">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value={{$user->password}}>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" value={{$user->last_name}}>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value={{$user->email}}>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value={{$user->username}}>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary d-flex m-auto ">Submit</button>
            </form>


@endsection