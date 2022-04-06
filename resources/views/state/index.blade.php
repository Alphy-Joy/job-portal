@extends('layouts.app')

@section('content')

<div class="page-header">
    @if (session()->has('message'))

    <div >
        <p >
            {{ session()->get('message') }}
        </p>
    </div>
    
@endif
    <h3 class="page-title"> States </h3>
    
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <a href="/admin/states/create" class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add New State</a>
      </ol>
    </nav>
  </div>
  <div class="row">
    <div class="col-lg-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">List States</h4>
          
          <br>
          <table class="table table-hover">
            
            <thead>
              <tr>
                <th><strong>Sl No</strong> </th>
                <th><strong>State</strong></th>
                <th><strong>Status</strong></th>
                <th><strong>Actions</strong></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($states as $state)
                    @if ($state->status == 1)
                        @php
                            $status = "Active";
                            $class = "badge badge-success";
                        @endphp

                    @else
                        @php
                            $status = "Inactive";
                            $class = "badge badge-danger";
                        @endphp

                    @endif
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $state->name }}</td>
                    <td><button type="submit" class="{{ $class }}">{{ $status }}</button></td>
                    <td> 
                        <a href="/admin/states/{{ $state->id }}/edit" class="btn btn-sm btn-gradient-info">Edit</a>
                        <button type="submit" class="btn btn-sm btn-gradient-danger">Delete</button>
                    </td>
                    
                  </tr>
                    
                @endforeach
            </tbody>
          </table>
          
        </div>
        
      </div>
      
    </div>

    {{ $states->links() }}
  </div>
 
@endsection