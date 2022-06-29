@extends('layouts.admin')
@section('content')

  <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{route('admin.barriers.categories')}}">Barriers</a></li>
          <li class="breadcrumb-item active"><a href="#">{{$category->category_name}}</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="card">
    	<div class="card-header"><h3>You are viewing <b>{{$category->category_name}}</b> Category</h3></div>
    	<div class="card-body table-responsive">
    		<table class="table table-striped datatable">
    			<thead>
    				<tr>
    					<th>#</th>
    					<th>Barrier name</th>
    					<th>Action</th>
    				</tr>
    				<tbody>
    					@foreach($barriers as $barrier)
    					<tr>
    						<td>{{$barrier->id}}</td>
    						<td>{{$barrier->barrier_name}}</td>
    						<td></td>
    					</tr>
    					@endforeach
    				</tbody>
    			</thead>
    			
    		</table>
    	</div>
    </div>


    @endsection