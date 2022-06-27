@extends('layouts.private.admin')
@section('content')        
<h1>Referencing</h1>
<h2>Manage your data referencing sources.</h2>
<hr>
<div class="card">
	<div class="card-header">
		<h3>Product References</h3>
	</div>
	<div class="card-body">
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Product</th>
					<th scope="col">Description</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Plates</td>
					<td>Reusable data records for plates products.</td>
					<td>
						<div class="mb-2 mt-2">
							<a href="{{route('plate-references-create')}}"><button class="btn btn-success me-2 text-white">Create</button></a>
							<a href="{{route('plate-references')}}"><button class="btn btn-success me-2 text-white">Browse</button></a>
						</div>
					</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Antiques</td>
					<td>Reusable data records for antiques products.</td>
					<td>
						<div class="mb-2 mt-2">
							<a href="{{route('plate-references-create')}}"><button class="btn btn-success me-2 text-white">Create</button></a>
							<a href="{{route('plate-references')}}"><button class="btn btn-success me-2 text-white">Browse</button></a>
						</div>
					</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Books</td>
					<td>Reusable data records for books products.</td>
					<td>
						<div class="mb-2 mt-2">
							<a href="{{route('plate-references-create')}}"><button class="btn btn-success me-2 text-white">Create</button></a>
							<a href="{{route('plate-references')}}"><button class="btn btn-success me-2 text-white">Browse</button></a>
							<a href="{{route('book-references-google')}}"><button class="btn btn-success me-2 text-white">Google</button></a>
						</div>
					</td>
				</tr>
				<tr>
					<th scope="row">4</th>
					<td>Comics</td>
					<td>Reusable data records for comics products.</td>
					<td>
						<div class="mb-2 mt-2">
							<a href="{{route('plate-references-create')}}"><button class="btn btn-success me-2 text-white">Create</button></a>
							<a href="{{route('plate-references')}}"><button class="btn btn-success me-2 text-white">Browse</button></a>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="card-footer">
	</div>
</div>
@endsection