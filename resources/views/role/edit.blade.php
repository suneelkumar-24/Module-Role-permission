@extends('layout')
@section('content')



    <form action="{{ route('role-update') }}" method="POST" class="col-sm-4 m-auto">
        @method('PUT')
        @csrf
        <input type="hidden" class="form-control" id="id" name="id" value={{ $role->id }}>
        <div class="form-group">
            <label for="role">Role</label>
            <input type="text" class="form-control" id="role" name="role" value={{ $role->type }}>
        </div>


        @if (session('status'))
            <h6 class="alert alert-warning">{{ session('status') }}</h6>
        @endif

        {{-- <form action="{{route('assign-module-store')}}" method="POST"> --}}
        @csrf
        @foreach ($modules as $module)
        <div class="d-block ml-sm-n5 row">
            <h4 class="ml-5 mt-4">{{ strtoupper($module->name) }}</h4>
            <div class="d-flex ml-5 mt-xl-n3 p-3">
                @php
                    $actions = explode('|', $module->actions);
                    $k = get_object_vars($array);
                    // print_r($k);
                    $x = $k[$module->id];
                    print_r($x);
                    // die();
                    $permission = implode(',',$x);
                    // print_r($permission);
                    // if (str_contains($permission, 'import')) {
                    //   echo "true";
                    //   }
                    // $b = explode('|', $x);
                    // print_r($b);
                    // $modules = implode(',',$modules);
                @endphp
                @foreach ($actions as $action)
                    <div class="form-check mr-4">
                      {{-- @php
                        if (str_contains($permission, $action)) {
                      echo "true";
                      }
                      @endphp --}}
                        <input {{ str_contains($permission, $action) ? 'checked' : ''}} class="form-check-input" type="checkbox" name="{{ $module->id }}[]"
                            value="{{ $action }}"  id="flexCheckDefault">
                        <label class="form-check-label m-0 " for="flexCheckDefault">
                            {{ ucwords($action) }}
                        </label>            </div>
                @endforeach
            </div>
        </div>
    @endforeach
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>
    {{-- <p>{{$a}}</p> --}}
@endsection
