@extends('layout')
@section('content')

    @if (session('status'))
    <h6 class="alert alert-warning">{{session('status')}}</h6>
    @endif

    @if (in_array('add', $data))
    <a href="{{route('module-create')}}"  class="float-right mx-4 my-3 btn btn-primary btn-sm">Add</a>
    @endif

    @if (in_array('view', $data))
    <table class="table mx-5">
      <thead>
          <th>Name</th>
          <th>Route </th>
          {{-- <th>Permission</th> --}}
          <th>Actions</th>
      </thead>
      <tbody>
          @foreach ($modules as $module)
          <tr>
              <td>{{$module->name}}</td>
              <td>{{$module->route}}</td>
              {{-- <td>{{$module->actions}}</td> --}}

              <td>
                @if (in_array('edit', $data))
                <a href="edit/{{ $module->id }}" class="btn btn-info btn-sm">edit</a>
            @endif
            @if (in_array('delete', $data))
                <a href="delete/{{ $module->id }}" class="btn btn-danger btn-sm">delete</a>
            @endif
                </td>
          </tr>
          @endforeach
      </tbody>

  </table>
    @endif

@endsection