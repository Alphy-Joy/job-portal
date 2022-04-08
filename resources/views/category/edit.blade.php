@extends('layouts.app')

@section('content')

<div class="page-header">
    <h3 class="page-title"> Update Category </h3>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Update Category</h4>
          <form action="/admin/categories/{{ $category->id }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="exampleInputUsername1">Category Name</label>
              <input type="text" class="form-control" id="category_name" name="category_name" value="{{ $category->name }}">
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <button type="reset" class="btn btn-outline-danger btn-fw">Reset</button>
          </form>
        </div>
      </div>
    </div>
  </div>
    
@endsection