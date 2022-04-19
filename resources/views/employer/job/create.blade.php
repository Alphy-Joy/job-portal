@extends('layouts.app')

@section('content')

<div class="page-header">
    <h3 class="page-title"> Add Job Vacancies </h3>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add Job Vacancies</h4>
          <form class="forms-sample" action="/employer/jobs" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputUsername1">Job Title</label>
              <input type="text" class="form-control" id="job_title" name="job_title" placeholder="Job Title">
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">Job Description</label>
                <textarea class="form-control" name="job_description" id="job_description" cols="30" rows="10" placeholder="Job Description"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">Experiance Required</label>
                <input type="text" class="form-control" id="experience" name="experience" placeholder="Experiance Required">
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">Salary</label>
                <input type="text" class="form-control" id="salary" name="salary" placeholder="Salary">
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">Job Type</label>
                <select class="form-control" name="job_type" id="job_type">
                    <option value="Remote">Remote</option>
                    <option value="On-site">On-site</option>
                    <option value="Hybrid">Hybrid</option>
                </select>
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <button type="reset" class="btn btn-outline-danger btn-fw">Reset</button>
          </form>
        </div>
      </div>
    </div>
  </div>
    
@endsection