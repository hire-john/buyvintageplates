@extends('layouts.public.buyvintageplates')
@section('content')     
<section class="py-5">
	<div class="container px-4 px-lg-5 my-5">
		<div class="row gx-4 gx-lg-5 align-items-center">
			<div class="col-md-6">
				<carousel show-arrow>
					@foreach ($images as $image)
					<img class="card-img-top mb-5 mb-md-0" src="{{ $image['path'] }}" alt="..." />
					@endforeach
				</carousel>
			</div>
			<div class="col-md-6">
				<h1 class="display-5 fw-bolder">Juleaften</h1>
				<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
				<div class="fs-5 mb-5">
					<span style="font-size: 25pt;">$40.00</span>
				</div>
				<div class="d-flex">
					<input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
					<button class="btn btn-outline-dark flex-shrink-0" type="button">
						<i class="bi-cart-fill me-1"></i>
						Add to cart
					</button>
				</div>
			</div>
		</div>
		<br/>
		<ul class="nav nav-tabs" id="product-tabs" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="true"><span class="go-green-text">Product Details</span></button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="shipping-tab" data-bs-toggle="tab" data-bs-target="#shipping" type="button" role="tab" aria-controls="shipping" aria-selected="true"><span class="go-green-text">Shipping & Handling</span></button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#certs" type="button" role="tab" aria-controls="certs" aria-selected="false"><span class="go-green-text">Papers & Certifications</span></button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#returns" type="button" role="tab" aria-controls="returns" aria-selected="false"><span class="go-green-text">Warrany & Return Policy</span></button>
			</li>
		</ul>
		<div class="tab-content" id="product-tab-content">
			<div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">
				<br/>
				<table class="table table-bordered details-table">
					<tbody>
						<tr>
							<th scope="row">Plate Name</th>
							<td>The Ship Builder</td>
						</tr>
						<tr>
							<th scope="row">Plate Number</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Registered Plate</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Plate Number</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Condition</th>
							<td>Used</td>
						</tr>
					</tr>
					<tr>
						<th scope="row">Type</th>
						<td>Collector Plate</td>
					</tr>

					<tr>
						<th scope="row">Brand</th>
						<td>Norman Rockwell</td>
					</tr>
					<tr>
						<th scope="row">Producer</th>
						<td>Edwin M. Knowles China Co.</td>
					</tr>
					<tr>
						<th scope="row">Manufacturer</th>
						<td>Edwin M. Knowles China Co.</td>
					</tr>
					<tr>
						<th scope="row">Collection/Product Line</th>
						<td>Rockwell Heritage Collection</td>
					</tr>
					<tr>
						<th scope="row">Limited Edition</th>
						<td>Yes</td>
					</tr>
					<tr>
						<th scope="row">Franchise</th>
						<td></td>

						<tr>
							<th scope="row">Culture</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Art Era</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Style</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Origin</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Character</th>
							<td>Norman Rockwell</td>
						</tr>
						<tr>
							<th scope="row">Considered Vintage</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Considered Antique</th>
							<td></td>
						</tr>

						<tr>
							<th scope="row">Total Manufactured</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Product Weight</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Product Height</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Product Length</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Product Width</th>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab"><br/>
				<table class="table table-bordered details-table">
					<tbody>
						<tr>
							<th scope="row">Shipped Weight</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Shipped Height </th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Shipped Length </th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Shipped Width </th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Product Weight</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Product Height</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Product Length</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Product Width</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Insured</th>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="tab-pane fade" id="certs" role="tabpanel" aria-labelledby="certs-tab"><br/>
				<table class="table table-bordered details-table">
					<tbody>
						<tr>
							<th scope="row">Brand</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Franchise</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Style</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Origin</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Style</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Total Manufactured</th>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="tab-pane fade" id="returns" role="tabpanel" aria-labelledby="returns-tab">
				<h2>Warrany & Return Policy</h2>
			</div>
		</div>
	</div>
</section>
@endsection