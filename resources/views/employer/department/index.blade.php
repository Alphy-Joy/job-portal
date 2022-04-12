@extends('layouts.app')

@section('content')

<div class="page-header">

    <h3 class="page-title"> Departments </h3>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <a href="/employer/departments/create" class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add New Department</a>
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
          <h4 class="card-title">List Departments</h4>
          <table class="table table-hover">
            
            <thead>
              <tr>
                <th><strong>Sl No</strong> </th>
                <th><strong>Department</strong> </th>
                <th><strong>Code</strong></th>
                <th><strong>Status</strong></th>
                <th><strong>Actions</strong></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                    @if ($department->status == 1)
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
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->code }}</td>
                    <td><a href="/employer/departments/status/{{  $department->id  }}/{{ $department->status }}" class="{{ $class }}">{{ $status }}</a></td>
                    <td> 
                        <a href="/employer/departments/{{ $department->id }}/edit" class="btn btn-sm btn-gradient-info">Edit</a>
                        <form action="/employer/departments/{{ $department->id }}" method="post" style="display: inline-block;">
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

    {{-- {{ $departments->links() }} --}}
  </div>
 
@endsection