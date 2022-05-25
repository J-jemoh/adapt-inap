@extends('layouts.admin')
@section('content')
 <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Participants</li>
          <li class="breadcrumb-item active">List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="card">
    	<div class="card-header"><b>Participants Listing</b>
    		<a class="btn btn-primary float-end" href="{{route('admin.participants.add')}}"><i class="bi bi-plus"></i> Add participant</a>
    	</div>
    	<div class="card-body">
    		<table class="table datatable">
    			<thead>
    				<tr>
    					<th>#</th>
    					<th>STUDY ID</th>
    					<th>NAME</th>
    					<th>LOCATION</th>
    					<th>CONTACT PHONE</th>
    					<th>ACTION</th>
    				</tr>
    			</thead>
    			<tbody>
    				<tr>
    					<th></th>
    				</tr>
    			</tbody>
    			
    		</table>
    	</div>
    </div>
@endsection