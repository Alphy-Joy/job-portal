@extends('layouts.app')

@section('content')

<div class="page-header">
    <h3 class="page-title"> Add Skill </h3>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add Skill</h4>
          <form class="forms-sample" action="/admin/skills" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputUsername1">Skill Name</label>
              <input type="text" class="form-control" id="skill_name" name="skill_name" placeholder="Skill Name">
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <button type="reset" class="btn btn-outline-danger btn-fw">Reset</button>
          </form>
        </div>
      </div>
    </div>
  </div>
    
@endsection