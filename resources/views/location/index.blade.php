@extends('layouts.app')

@section('content')

<div class="page-header">

    <h3 class="page-title"> Locations </h3>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <a href="/admin/locations/create" class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add New Location</a>
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
          <h4 class="card-title">List Locations</h4>
          <table class="table table-hover">
            
            <thead>
              <tr>
                <th><strong>Sl No</strong> </th>
                <th><strong>Location</strong> </th>
                <th><strong>State</strong></th>
                <th><strong>Status</strong></th>
                <th><strong>Actions</strong></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($locations as $location)
                    @if ($location->status == 1)
                        @php
                            $status = "Active";
                            $class = "btn btn-block btn-sm btn-success";
                        @endphp

                    @else
                        @php
                            $status = "Inactive";
                            $class = "btn btn-block btn-sm btn-danger";
                        @endphp

                    @endif
                        
                   
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $location->name }}</td>
                    <td>{{ $location->state->name }}</td>
                    <td><a href="/admin/locations/status/{{  $location->id  }}/{{ $location->status }}" class="{{ $class }}">{{ $status }}</a></td>
                    <td> 
                        <a href="/admin/locations/{{ $location->id }}/edit" class="btn btn-sm btn-gradient-info">Edit</a>
                        <form action="/admin/locations/{{ $location->id }}" method="post" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-gradient-danger">Delete</button>
                        </form>
                        
                    </td>
                    
                  </tr>
                    
                @endforeach
            </tbody>
          </table>
          
        </div>
        
      </div>
      
    </div>

    {{ $locations->links() }}
  </div>
 
@endsection