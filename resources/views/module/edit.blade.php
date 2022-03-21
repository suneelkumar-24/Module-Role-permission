@extends('layout')
@section('content')
            <form action="{{route('module-update')}}" method="POST" class="col-sm-4 m-auto">
                @method('PUT')
                @csrf
                <input type="hidden" class="form-control" id="id"  name="id"  value={{$module->id}}>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name"  name="name"  value="{{$module->name}}">
              </div>
              <div class="form-group">
                  <label for="route">Route</label>
                  <input type="text" class="form-control" id="route"  name="route"  value="{{$module->route}}">
              </div>
              <div class="form-group">
                  <label for="actions">Actions</label>
                  <input type="text" class="form-control" id="actions"  name="actions"  value="{{$module->actions}}">
              </div>

                <button type="submit" class="btn btn-primary d-flex m-auto ">Submit</button>
            </form>

@endsection