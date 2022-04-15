@extends('layouts.app')

@section('content')

<div class="page-header">
    <h3 class="page-title"> Company Details </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <a href="/employer/profile/{{ auth()->user()->id }}/edit" class="btn btn-block btn-lg btn-gradient-primary mt-4">Edit</a>
      </ol>
    </nav>
  </div>
  @if (session()->has('message'))
  <div class="row">
      <div class="col-lg-10">
          <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
      </div>
  </div>
@endif
  <div class="row">
    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Company Details</h4>
          <form class="forms-sample">
            <div class="form-group">
              <label for="exampleInputUsername1">Company Name</label>
              <input type="text" class="form-control" disabled id="name" name="name"  value="{{  !empty($profile->company_name) ? $profile->company_name : ""}}">
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Website</label>
              <input type="text" class="form-control" disabled id="website" name="website" value="{{  !empty($profile->website) ? $profile->website : ""}}">
            </div>

            <div class="form-group">
              <label for="exampleInputUsername1">Company Description</label>
              <textarea name="company_desc" disabled  id="company_desc" class="form-control" cols="30" rows="10">{{ !empty($profile->description) ? $profile->description : "" }}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Contact Person Name</label>
              <input type="text" class="form-control" disabled id="cp_name" name="cp_name" value="{{ auth()->user()->name }}">
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Contact Person Designation</label>
              <input type="text" class="form-control" disabled id="cp_designation" value="{{  !empty($profile->user_designation) ? $profile->user_designation : ""}}" name="cp_designation">
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Contact Person Email</label>
              <input type="email" class="form-control" disabled id="cp_email" name="cp_email" value="{{ auth()->user()->email }}">
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Contact Person Number</label>
              <input type="email" class="form-control" disabled id="cp_number" value="{{  !empty($profile->contact_number) ? $profile->contact_number : ""}}" name="cp_number">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    
@endsection