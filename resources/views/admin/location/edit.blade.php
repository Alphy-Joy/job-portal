@extends('layouts.app')

@section('content')

<div class="page-header">
    <h3 class="page-title"> Edit Location </h3>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Location</h4>
          <form class="forms-sample" action="/admin/locations/{{ $location->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="state" >State</label>
              <select class="form-control" name="state_id" id="exampleFormControlSelect1">
                  @foreach($states as $state)
                  <option value="{{ $state->id }}" {{ $state->id == $location->state->id ? 'selected' : '' }}>{{ $state->name }}</option>
              @endforeach
              </select>
          </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Location Name</label>
              <input type="text" class="form-control" id="location_name" name="location_name" value="{{ $location->name }}">
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <button type="reset" class="btn btn-outline-danger btn-fw">Reset</button>
          </form>
        </div>
      </div>
    </div>
  </div>
    
@endsection