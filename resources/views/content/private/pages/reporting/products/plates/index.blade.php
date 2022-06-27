@extends('layouts.private.admin')
@section('content')
<h1>Reporting</h1>
<h2>Plate Reports and Metrics</h2>
<p class="mb-3">{{$time}}</p>
	<div class="row">
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
							Total Reference Plates</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800 fw-bold">{{$stats[0]->total_plates}}</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-database fa-2x text-success-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
							Total Makers</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800 fw-bold">{{$stats[0]->total_makers}}</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-database fa-2x text-success-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
							Total Series</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800 fw-bold">{{$stats[0]->total_series}}</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-database fa-2x text-success-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
							Total Artists</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800 fw-bold">{{$stats[0]->total_artists}}</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-database fa-2x text-success-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
							Total Years</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800 fw-bold">{{$stats[0]->total_years}}</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-database fa-2x text-success-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
							Total Tags</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800 fw-bold">{{$stats[0]->total_tags}}</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-database fa-2x text-success-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
							Total Bradexes</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800 fw-bold">{{$stats[0]->total_bradexes}}</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-database fa-2x text-success-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
							Distinct Makers</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800 fw-bold">{{$stats[0]->distinct_makers}}</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-database fa-2x text-success-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
							Distinct Artists</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800 fw-bold">{{$stats[0]->distinct_artists}}</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-database fa-2x text-success-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
							Distinct Series</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800 fw-bold">{{$stats[0]->distinct_series}}</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-database fa-2x text-success-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
							Distinct Years</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800 fw-bold">{{$stats[0]->distinct_years}}</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-database fa-2x text-success-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
<h1>Plate Field Completion Status</h1>

<div class="row row-cols-1 row-cols-md-4 g-4">

  <div class="col">
    <div class="card text-center border-success text-capitalize">      
      <div class="card-body">
      	<progress-circle type="circle" percentage="{{$progress['makers']}}" color="#42b883"></progress-circle>
        <h5 class="card-title mt-4">Completed Makers</h5>
        <p class="card-text">The percentage of plate fields that have a valid and completed maker field.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card text-center border-success text-capitalize">      
      <div class="card-body">
      	<progress-circle type="circle" percentage="{{$progress['series']}}" color="#42b883"></progress-circle>
        <h5 class="card-title mt-4">Completed Series</h5>
        <p class="card-text">The percentage of plate fields that have a valid and completed series field.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card text-center border-success text-capitalize">      
      <div class="card-body">
      	<progress-circle type="circle" percentage="{{$progress['artists']}}" color="#42b883"></progress-circle>
        <h5 class="card-title mt-4">Completed Artists</h5>
        <p class="card-text">The percentage of plate fields that have a valid and completed artist field.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card text-center border-success text-capitalize">      
      <div class="card-body">
      	<progress-circle type="circle" percentage="{{$progress['years']}}" color="#42b883"></progress-circle>
        <h5 class="card-title mt-4">Completed Years</h5>
        <p class="card-text">The percentage of plate fields that have a valid and completed year field.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card text-center border-success text-capitalize">      
      <div class="card-body">
      	<progress-circle type="circle" percentage="{{$progress['descriptions']}}" color="#42b883"></progress-circle>
        <h5 class="card-title mt-4">Completed Descriptions</h5>
        <p class="card-text">The percentage of plate fields that have a valid and completed description field.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card text-center border-success text-capitalize">      
      <div class="card-body">
      	<progress-circle type="circle" percentage="{{$progress['tags']}}" color="#42b883"></progress-circle>
        <h5 class="card-title mt-4">Completed Tags</h5>
        <p class="card-text">The percentage of plate fields that have a valid and completed tags field.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card text-center border-success text-capitalize">      
      <div class="card-body">
      	<progress-circle type="circle" percentage="{{$progress['bradexes']}}" color="#42b883"></progress-circle>
        <h5 class="card-title mt-4">Completed Bradexes</h5>
        <p class="card-text">The percentage of plate fields that have a valid and completed bradex field.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card text-center border-success text-capitalize">      
      <div class="card-body">
      	<progress-circle type="circle" percentage="{{$progress['titles']}}" color="#42b883"></progress-circle>
        <h5 class="card-title mt-4">Completed Titles</h5>
        <p class="card-text">The percentage of plate fields that have a valid and completed titlefield.</p>
      </div>
    </div>
  </div>

    <div class="col">
    <div class="card text-center border-danger text-capitalize">      
      <div class="card-body">
      	<progress-circle type="circle" percentage="{{$progress['images']['percentage']}}" color="#42b883"></progress-circle>
        <h5 class="card-title mt-4">Missing Images</h5>
        <h6>{{$progress['images']['total']}}</h6>
        <p class="card-text">The percentage of plate fields that have a missing valid and completed picture in folder.</p>
      </div>
    </div>
  </div>

</div>
@endsection