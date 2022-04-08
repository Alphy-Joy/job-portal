@extends('layouts.app')

@section('content')

<div class="page-header">

    <h3 class="page-title"> Skills </h3>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <a href="/admin/skills/create" class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add New Skill</a>
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
          <h4 class="card-title">List Skills</h4>
          <table class="table table-hover">
            
            <thead>
              <tr>
                <th><strong>Sl No</strong> </th>
                <th><strong>Skill</strong></th>
                <th><strong>Status</strong></th>
                <th><strong>Actions</strong></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($skills as $skill)
                    @if ($skill->status == 1)
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
                    <td>{{ $skill->name }}</td>
                    <td><a href="/admin/skills/status/{{  $skill->id  }}/{{ $skill->status }}" class="{{ $class }}">{{ $status }}</a></td>
                    <td> 
                        <a href="/admin/skills/{{ $skill->id }}/edit" class="btn btn-sm btn-gradient-info">Edit</a>
                        <form action="/admin/skills/{{ $skill->id }}" method="post" style="display: inline-block;">
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

    {{ $skills->links() }}
  </div>
 
@endsection