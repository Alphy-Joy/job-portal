@extends('layouts.app')

@section('content')

<div class="page-header">
    <h3 class="page-title"> Update Skill </h3>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Update Skill</h4>
          <form action="/admin/skills/{{ $skill->id }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="exampleInputUsername1">Skill Name</label>
              <input type="text" class="form-control" id="skill_name" name="skill_name" value="{{ $skill->name }}">
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <button type="reset" class="btn btn-outline-danger btn-fw">Reset</button>
          </form>
        </div>
      </div>
    </div>
  </div>
    
@endsection