@extends('layouts.admin')
@section('content')
 <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Participants</li>
          <li class="breadcrumb-item active">add</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="card">
    	<div class="card-header"><b>Add Participant</b></div>
    	<div class="card-body">
    		<form method="POST" action="#">
    			@csrf
    			<div class="card-header"><b>Demographic Information</b></div>
    			<div class="card-body">
    				<div class="row">
    					<div class="col-4">
    						<div class="mb-3">
    							<label><b>STUDY ID</b></label>
    							<input type="text" name="study_id" class="form-control" required>
    						</div>
    					</div>
    					<div class="col-4">
    						<div class="mb-3">
    							<label><b>Fullname</b></label>
    							<input type="text" name="participant_name" class="form-control" required>
    						</div>
    					</div>
    					<div class="col-4">
    						<div class="mb-3">
    							<label><b>UPN</b></label>
    							<input type="text" name="participant_upn" class="form-control" required>
    						</div>
    					</div>
    					<div class="col-4">
    						<div class="mb-3">
    							<label><b>Age</b></label>
    							<input type="number" name="participant_age" class="form-control" required>
    						</div>
    					</div>
    					<div class="col-4">
    						<div class="mb-3">
    							<label><b>Gender</b></label>
    							<select name="participant_gender" class="form-control" required>
    								<option value="selected disabled">Select gender</option>
    								<option value="M">Male</option>
    								<option value="F">Female</option>
    							</select>
    						</div>
    					</div>
    					<div class="col-4">
    						<div class="mb-3">
    							<label><b>Clinic site</b></label>
    							<select name="participant_gender" class="form-control" required>
    								<option value="selected disabled">Select site</option>
    								<option value="KLM">Lumumba</option>
    								<option value="KCH">Kisumu County Hospital</option>
    								<option value="ACH">Ahero</option>
    							</select>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="card-header"><b>Other Contact information</b></div>
    			<div class="card-body">
    				<div class="row">
    					<div class="col-4">
    						<div class="mb-3">
    							<label><b>Participant Nickname</b></label>
    							<input type="text" name="participant_nickname" class="form-control" required>
    						</div>
    					</div>
    					<div class="col-4">
    						<div class="mb-3">
    							<label><b>Caregiver name</b></label>
    							<input type="text" name="participant_name" class="form-control" required>
    						</div>
    					</div>
    					<div class="col-4">
    						<div class="mb-3">
    							<label><b>Caregiver Contact Phone</b></label>
    							<input type="text" name="participant_phone" class="form-control" required>
    						</div>
    					</div>
    					<div class="col-4">
    						<div class="mb-3">
    							<label><b>Caregiver Alternate Phone</b></label>
    							<input type="text" name="participant_alternate" class="form-control" required>
    						</div>
    					</div>
    					<div class="col-4">
    						<div class="mb-3">
    							<label><b>Relationship with participant</b></label>
    							<select name="caregiver_relationhip" class="form-control" required>
    								<option selected disabled>select relationship</option>
    								<option value="1">Biological mother</option>
    								<option value="2">Biological father</option>
    								<option value="3">Adoptive parent</option>
    								<option value="4">Foster parent</option>
    								<option value="5">Partner</option>
    								<option value="6">Other</option>
    							</select>
    						</div>
    					</div>
    					<div class="col-4">
    						<div class="mb-3">
    							<label><b>Location</b></label>
    							<input type="text" name="participant_location" class="form-control" required>
    						</div>
    					</div>
    					<div class="col-12">
    						<div class="mb-3">
    							<label><b>Location description/direction</b></label>
    							<textarea name="plocation" class="form-control" rows="4" required></textarea>
    						</div>
    					</div>
    					

    				</div>
    			</div>
    			<div class="card-header"><b>Barrier section</b></div>
    			<div class="card-body">
    				<div class="row">
    					<div class="col-4">
    						<div class="mb-3">
    							<label><b>Barrier Category</b></label>
    							<select name="barrier_category" class="form-control" required id="category_name">
    								<option selected disabled>Choose category</option>
                    @foreach($barriers as $category)
    								<option value="{{$category->barriercategory->id}}">{{$category->barriercategory->category_name}}</option>
                    @endforeach
    							</select>
    						</div>
    					</div>
    					<div class="col-4">
    						<div class="mb-3">
    							<label><b>Choose barrier</b></label>
                  <select class="form-control" id="barrier" name="barrier_name">
                    
                  </select>
    						</div>
    					</div>

    				</div>
    			</div>
    			<div class="row">
    				<div class="col-4">
    					<button class="btn btn-primary" type="submit">Create participant</button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#category_name').on('change', function() {
        var category_id = this.value;
        $("#barrier").html('');
        $.ajax({
        url:"{{url('/admin/dashboard/get/barriers')}}",
        type: "POST",
        data: {
        category_id: category_id,
        _token: '{{csrf_token()}}'
        },
        dataType : 'json',
        success: function(result){
        $('#barrier').html('<option value="">Select Barrier name</option>');
        $.each(result.barriers,function(key,value){
        $("#barrier").append('<option value="'+value.barrier_name+'">'+value.barrier_name+'</option>');
        });
        }
        });
        });    
        });
  </script>
 @endsection