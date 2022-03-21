@extends('layout')

 @section('content')

    @if (session('status'))
    <h6 class="alert alert-warning">{{session('status')}}</h6>
    @endif
    @if (in_array('add', $data))
    <a href="{{route('role-create')}}"  class="float-right mx-4 my-3 btn btn-primary btn-sm">Add</a>
    @endif

    @if (in_array('view', $data))
    <table class="table mx-5">
      <thead>
          <th>Role_id</th>
          <th>Role</th>
          <th>Actions</th>
      </thead>
      <tbody>
          @foreach ($roles as $role)
          <tr>
              <td>{{$role->id}}</td>
              <td>{{$role->type}}</td>
              @if (in_array('edit', $data))
              <td><a href="edit/{{$role->id}}" class="btn btn-info btn-sm">edit</a>
              @endif
              @if (in_array('delete', $data))
              <a href="delete/{{$role->id}}" class="btn btn-danger btn-sm">delete</a></td>
              @endif


          </tr>
          @endforeach
      </tbody>

  </table>
    @endif

@endsection