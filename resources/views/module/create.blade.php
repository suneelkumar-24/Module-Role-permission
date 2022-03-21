@extends('layout')
@section('content')

            <form action="{{route('module-store')}}" method="POST" class="col-sm-4 m-auto">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name"  name="name"  placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="route">Route</label>
                    <input type="text" class="form-control" id="route"  name="route"  placeholder="Enter Route">
                </div>
                <div class="form-group">
                    <label for="actions">Actions</label>
                    <input type="text" class="form-control" id="actions"  name="actions"  placeholder="Enter Permission">
                </div>

                <button type="submit" class="btn btn-primary d-flex m-auto ">Submit</button>
            </form>

@endsection