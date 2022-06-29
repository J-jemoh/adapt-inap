@extends('layouts.admin')
@section('content')

  <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Barriers</li>
          <li class="breadcrumb-item active"><a href="{{route('admin.barriers.categories')}}">Categories</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="card">
    	<div class="card-header"><b>All Barrier Categories</b>
    		<a class="btn btn-primary float-end" href="{{route('admin.barriers.categories.add')}}"><i class="bi bi-plus"></i> Add Barrier Category </a>
    	</div>
    	<div class="card-body">
    		<table class="table datatable">
    			<thead>
    				<tr>
    					<th>#</th>
    					<th>Category name</th>
    					<th>Action</th>
    				</tr>
    			</thead>
    			<tbody>
            @foreach($categories as $category)
    				<tr>
              <td>{{$category->id}}</td>
    					<td><a href="{{route('admin.barriercategory.show',$category->id )}}"><b>{{$category->category_name}}</b></a></td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> view</button>
                <button type="button" class="btn btn-warning"><i class="bi bi-pencil text-white"></i> edit</button>
                <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i> delete</button>
              </div>

              </td>
    				</tr>
            @endforeach
    			</tbody>
    		</table>
    	</div>
    </div>


  @endsection