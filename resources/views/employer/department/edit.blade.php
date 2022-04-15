@extends('layouts.app')

@section('content')

<div class="page-header">
    <h3 class="page-title"> Update Department </h3>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Update Department</h4>
          <form action="/employer/departments/{{ $department->id }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="exampleInputUsername1">Department Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ $department->name }}">
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Department Short Code</label>
              <input type="text" class="form-control" id="code" name="code" value="{{ $department->code }}">
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
            <button type="reset" class="btn btn-outline-danger btn-fw">Reset</button>
          </form>
        </div>
      </div>
    </div>
  </div>
    
@endsection