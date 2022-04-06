@extends('layouts.app')

@section('content')

<div class="page-header">
    <h3 class="page-title"> Add State </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">States</a></li>
        <li class="breadcrumb-item active" aria-current="page">Form elements</li>
      </ol>
    </nav>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add State</h4>
          <form action="/admin/states/{{ $state->id }}" method="POST">
            @csrf
            @method('put')

            <div class="form-group">
              <label for="exampleInputUsername1">State Name</label>
              <input type="text" class="form-control" id="state_name" name="state_name" value="{{ $state->name }}">
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <button type="reset" class="btn btn-outline-danger btn-fw">Reset</button>
          </form>
        </div>
      </div>
    </div>
  </div>
    
@endsection