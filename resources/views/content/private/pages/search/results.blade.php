@extends('layouts.private.admin')
@section('content')
<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="{{route('product-references')}}">References</a></li>
			<li class="breadcrumb-item active text-capitalize" aria-current="page">Results</li>
		</ol>
	</nav>
	<h3 class="mb-3">Showing {{$results->count()}} of {{$results->total()}} results for search "{{$query}}"</h3>
		@include('content.private.partials.products.plates.plate-grid')
		<br/>
		<div class="d-flex justify-content-center">
			{{ $results->withQueryString()->links() }}
		</div>
	</div>
	@endsection