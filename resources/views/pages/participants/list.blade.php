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
    		<table class="table datatable table-striped">
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
            @foreach($participants as $participant)
    				<tr>
    					<td>{{$participant->id}}</td>
              <td>{{$participant->study_id}}</td>
              <td>{{$participant->participant_name}}</td>
              <td>{{$participant->location}}</td>
              <td>{{$participant->caregiver_contact_phone}}</td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> view</button>
                <button type="button" class="btn btn-warning"><i class="bi bi-pencil text-white"></i> edit</button>
                <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i> delete</button>
              </td>
    				</tr>
            @endforeach
    			</tbody>
    			
    		</table>
    	</div>
    </div>
@endsection