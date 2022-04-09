@extends('layouts.app')

@section('content')

<div class="page-header">
    <h3 class="page-title"> Add Location </h3>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add Location</h4>
          <form class="forms-sample" action="/admin/locations" method="POST">
            @csrf
            <div class="form-group">
              <label for="state" >State</label>
              <select class="form-control" name="state_id" id="exampleFormControlSelect1">
                  <option hidden>Choose a state</option>
                  @foreach ($states as $state)
                  <option value="{{ $state->id }}">{{ $state->name }}</option>
                  @endforeach
              </select>
          </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Location Name</label>
              <input type="text" class="form-control" id="location_name" name="location_name" placeholder="State Name">
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <button type="reset" class="btn btn-outline-danger btn-fw">Reset</button>
          </form>
        </div>
      </div>
    </div>
  </div>
    
@endsection