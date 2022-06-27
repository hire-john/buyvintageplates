@extends('layouts.public.buyvintageplates')
@section('content')        
<div class="container">
	<div class="row">
		
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
				<div class="mainflip">
					<div class="frontside">
						<div class="card">
							<div class="card-body text-center">
								<p>plate image</p>
								<h4 class="card-title">Plate name</h4>
							</div>
						</div>
					</div>
					<div class="backside">
						<div class="card">
							<div class="card-body text-center mt-4">
								<a href="#" class="btn btn-success btn-sm">Buy Now!</a>
								<a href="#" class="btn btn-success btn-sm">Add to Cart</a>
								<a href="#" class="btn btn-success btn-sm">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
@endsection