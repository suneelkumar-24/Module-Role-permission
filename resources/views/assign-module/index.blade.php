<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    @if (session('status'))
    <h6 class="alert alert-warning">{{session('status')}}</h6>
    @endif

    <form action="{{route('assign-module-store')}}" method="POST">
      @csrf
      @foreach ($roles as $role)
    <div>
      <h4 class="ml-5 mt-4">{{strtoupper($role->type)}}</h4>
      <div class="d-flex ml-5 mt-xl-n3 p-3">
      @foreach ($modules as $module)
        <div class="form-check mr-4">
          {{-- <input class="form-check-input" @if($b = $RolesModule['role_id']->contains($role->id) && $b->module_id->contains($module->id) ) checked=checked @endif type="checkbox" name="{{$role->id}}[]" value="{{$module->id}}" id="flexCheckDefault"> --}}
          <input class="form-check-input" type="checkbox" name="{{$role->id}}[]" value="{{$module->id}}" id="flexCheckDefault">
          <label class="form-check-label m-0 " for="flexCheckDefault">
            {{ucfirst($module->name)}}
          </label>
        </div>
      @endforeach
    </div>
    </div>
    @endforeach
      <div class="d-flex justify-content-center">
        <button class="btn btn-primary" type="submit">Save</button>
      </div>
    </form>

    {{-- <p>{{$roles}}</p>
    <p>{{$modules}}</p> --}}




    {{-- <a href="{{route('role-create')}}"  class="float-right mx-4 my-3 btn btn-primary btn-sm">Add</a>
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
                <td><a href="edit/{{$role->id}}" class="btn btn-info btn-sm">edit</a>
                    <a href="delete/{{$role->id}}" class="btn btn-danger btn-sm">delete</a></td>
            </tr>
            @endforeach
        </tbody>

    </table> --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>