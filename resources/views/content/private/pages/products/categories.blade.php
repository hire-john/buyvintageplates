@extends('layouts.private.admin')
@section('content')
<h1>Inventory</h1>
<h2>Manage your product inventory.</h2>
<hr>
	<div class="card">
		<div class="card-header">
			<h3>Product Categories</h3>
		</div>
		<div class="card-body">
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Active</th>
						<th scope="col">Category</th>
						<th scope="col">Description</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $category)
					<tr>
						<th scope="row">{{$category->id}}</th>
						<td>{{$category->active}}</td>
						<td>{{$category->category}}</td>
						<td>{{$category->description}}</td>
						<td>
							<div class="mb-2 mt-2">
								<a href="/portal/inventory/category/{{$category->category}}/create"><button class="btn btn-success me-2 text-white">Create Item</button></a>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="card-footer">

		</div>
	</div>
@endsection