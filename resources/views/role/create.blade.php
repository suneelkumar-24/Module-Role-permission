@extends('layout')
@section('content')
    <form action="{{ route('role-store') }}" method="POST" class="col-sm-4 m-auto">
        @csrf
        <div class="form-group">
            <label for="role">Role</label>
            <input type="text" class="form-control" id="role" name="role" placeholder="Enter Role">
        </div>

        {{-- <button type="submit" class="btn btn-primary d-flex m-auto ">Submit</button> --}}
        {{-- </form> --}}

        {{-- assign role section start --}}



        @if (session('status'))
            <h6 class="alert alert-warning">{{ session('status') }}</h6>
        @endif

        {{-- @php
            echo $modules;
        @endphp --}}

        {{-- <form action="{{route('assign-module-store')}}" method="POST"> --}}
        @csrf
        @foreach ($modules as $module)
            <div class="d-block ml-sm-n5 row">
                <h4 class="ml-5 mt-4">{{ strtoupper($module->name) }}</h4>
                <div class="d-flex ml-5 mt-xl-n3 p-3">
                    @php
                        $actions = explode('|', $module->actions);
                    @endphp
                    @foreach ($actions as $action)
                        <div class="form-check mr-4">
                            <input class="form-check-input" type="checkbox" name="{{ $module->id }}[]"
                                value="{{ $action }}" id="flexCheckDefault">
                            <label class="form-check-label m-0 " for="flexCheckDefault">
                                {{ ucwords($action) }}
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
@endsection
