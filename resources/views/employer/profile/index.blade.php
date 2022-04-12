@extends('layouts.app')

@section('content')

<div class="page-header">

    <h3 class="page-title"> Company Profile </h3>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <a href="/employer/profile/edit" class="btn btn-block btn-lg btn-gradient-primary mt-4">Edit Profile</a>
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
    <div class="col-lg-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Company Profile</h4>
          <table class="table table-hover">

            <tbody> 
                <tr>
                  <td>Name</td>
                  <td></td>
                 </tr>
                 <tr>
                  <td>Website</td>
                  <td></td>
                 </tr>
                 <tr>
                  <td>Contact Person</td>
                  <td></td>
                 </tr>
                 <tr>
                  <td>Contact Person Email </td>
                  <td></td>
                 </tr>
                 <tr>
                  <td>Contact Person Number </td>
                  <td></td>
                 </tr>
                 <tr>
                  <td>Description</td>
                  <td></td>
                 </tr>
                    
            </tbody>
          </table>
          
        </div>
        
      </div>
      
    </div>

    {{-- {{ $departments->links() }} --}}
  </div>
 
@endsection