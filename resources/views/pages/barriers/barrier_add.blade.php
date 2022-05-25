@extends('layouts.admin')
@section('content')

  <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
           <li class="breadcrumb-item active"><a href="{{route('admin.barriers.list')}}">Barriers</a></li>
            <li class="breadcrumb-item active">Add</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="card">
    	<div class="card-header"><b>Add Barriers</b>
    	</div>
    	<div class="card-body">
    		<form method="POST" action="#">
    			@csrf

    			<div class="row">
    				<div class="col-6">
    					<div class="mb-3">
    						<label>Barrier Name</label>
    						<input type="text" name="barrier_name" class="form-control" required>
    					</div>
    				</div>
    				<div class="col-6">
    					<div class="mb-3">
    						<label>Barrier Category</label>
    						<select name="barrier_category" class="form-control" required>
    							<option selected disabled>Choose barrier category</option>
    							<option value="1">Category one</option>
    						</select>
    					</div>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-3">
    					<button class="btn btn-primary" type="submit"><i class="bi bi-plus"></i> Save Barrier</button>
    				</div>
    			</div>
    			
    		</form>
    	</div>
    </div>


  @endsection