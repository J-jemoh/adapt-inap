@extends('layouts.admin')
@section('content')

  <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Locator</li>
         
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="card">
    	<div class="card-header"><b>All Locators</b>
    		<a class="btn btn-primary float-end" href="#"><i class="bi bi-plus"></i> Add Locator </a>
    	</div>
    	<div class="card-body">
    		<table class="table datatable">
    			<thead>
    				<tr>
    					<th>#</th>
    					<th>STUDY ID</th>
    					<th>PHONE</th>
    					<th>LOCATION</th>
    					<th>CAREGIVER NAME</th>
    					<th>ACTION</th>
    				</tr>
    			</thead>
    			<tbody>
    				<tr>
    					
    				</tr>
    			</tbody>
    		</table>
    	</div>
    </div>


  @endsection