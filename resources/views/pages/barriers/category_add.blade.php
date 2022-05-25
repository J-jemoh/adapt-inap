@extends('layouts.admin')
@section('content')

  <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Barriers</li>
           <li class="breadcrumb-item active"><a href="{{route('admin.barriers.categories')}}">Categories</a></li>
            <li class="breadcrumb-item active">Add</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="card">
    	<div class="card-header"><b>Add Barrier Categories</b>
    	</div>
    	<div class="card-body">
    		<form method="POST" action="#">
    			@csrf

    			<div class="row">
    				<div class="col-6">
    					<div class="mb-3">
    						<label>Category name</label>
    						<input type="text" name="category_name" class="form-control" required>
    					</div>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-3">
    					<button class="btn btn-primary" type="submit"><i class="bi bi-plus"></i> Save category</button>
    				</div>
    			</div>
    			
    		</form>
    	</div>
    </div>


  @endsection