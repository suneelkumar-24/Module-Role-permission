
@extends('layout')

@section('content')

    @if (session('status'))
    <h6 class="alert alert-warning">{{session('status')}}</h6>
    @endif
    @if (in_array('add', $data))
        <a href="{{route('user-create')}}" class="float-right mx-4 my-3 btn btn-primary btn-sm">Add</a>
    @endif
    @if (in_array('view', $data))
      <table class="table mx-5">
         <thead>
          <th>Role</th>
          <th>Username</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Address</th>
          <th>Action</th>
         </thead>
       <tbody>
          @foreach ($users as $user)
          <tr>
              <td>{{$user->role['type']}}</td>
              <td>{{$user->username}}</td>
              <td>{{$user->first_name.' '.$user->last_name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->address}}</td>
              @if (in_array('edit', $data))
              <td><a href="edit/{{$user->id}}" class="btn btn-info btn-sm">edit</a>
              @endif
              @if (in_array('delete', $data))
              <a href="delete/{{$user->id}}" class="btn btn-danger btn-sm">delete</a></td>
              @endif


          </tr>
          @endforeach
       </tbody>

     </table>
    @endif

   @endsection