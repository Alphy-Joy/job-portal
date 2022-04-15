@extends('layouts.app')

@section('content')

<div class="page-header">
    <h3 class="page-title">Edit Company Details </h3>
  </div>
  <div class="row">
    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Company Details</h4>
          <form action="/employer/profile/{{ auth()->user()->id }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="exampleInputUsername1">Company Name</label>
              <input type="text" class="form-control"  id="company_name" name="company_name" value="{{ $profile->company_name }}">
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Website</label>
              <input type="text" class="form-control"  id="website" name="website" value="{{  !empty($profile->website) ? $profile->website : ""}}">
            </div>

            <div class="form-group">
              <label for="exampleInputUsername1">Company Description</label>
              <textarea name="company_desc"  id="company_desc" class="form-control" cols="30" rows="10">{{ !empty($profile->description) ? $profile->description : "" }}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Contact Person Name</label>
              <input type="text" class="form-control" disabled id="cp_name" name="cp_name" value="{{ auth()->user()->name }}">
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Contact Person Designation</label>
              <input type="text" class="form-control"  id="cp_designation" value="{{  !empty($profile->user_designation) ? $profile->user_designation : ""}}" name="cp_designation">
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Contact Person Email</label>
              <input type="email" disabled class="form-control"  id="cp_email" name="cp_email" value="{{ auth()->user()->email }}">
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Contact Person Number</label>
              <input type="text" class="form-control"  id="cp_number" value="{{  !empty($profile->contact_number) ? $profile->contact_number : ""}}" name="cp_number">
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
            <button type="reset" class="btn btn-outline-danger btn-fw">Reset</button>
          </form>
        </div>
      </div>
    </div>
  </div>
    
@endsection