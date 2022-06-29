@extends('layouts.admin')
@section('content')

  <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Barriers</li>
         
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="card">
    	<div class="card-header"><b>All Barrier</b>
    		<a class="btn btn-primary float-end" href="{{route('admin.barriers.add')}}"><i class="bi bi-plus"></i> Add Barrier </a>
    	</div>
    	<div class="card-body">
    		<table class="table datatable">
    			<thead>
    				<tr>
    					<th>#</th>
    					<th>Category name</th>
    					<th>Barrier name</th>
    					<th>Action</th>
    				</tr>
    			</thead>
    			<tbody>
            @foreach($barriers as $barrier)
    				<tr>
    					<td>{{$barrier->id}}</td>
              <td><a href="#">{{$barrier->barriercategory ? $barrier->barriercategory->category_name: ""}}</a></td>
              <td>{{$barrier->barrier_name}}</td>
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