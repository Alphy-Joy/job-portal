@extends('layouts.app')

@section('content')

<div class="page-header">

    <h3 class="page-title"> States </h3>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <a href="/admin/states/create" class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add New State</a>
      </ol>
    </nav>
  </div>
  @if (session()->has('message'))
  <div class="row">
      <div class="col-lg-10">
          <label class="badge badge-success">{{ session()->get('message') }}</label>
      </div>
  </div>
@endif
  <div class="row">
    <div class="col-lg-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">List States</h4>
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
                    <td>{{ $state->name }}</td>
                    <td><a href="/admin/states/status/{{  $state->id  }}/{{ $state->status }}" class="{{ $class }}">{{ $status }}</a></td>
                    <td> 
                        <a href="/admin/states/{{ $state->id }}/edit" class="btn btn-sm btn-gradient-info">Edit</a>
                        <form action="/admin/states/{{ $state->id }}" method="post">
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

    {{ $states->links() }}
  </div>
 
@endsection