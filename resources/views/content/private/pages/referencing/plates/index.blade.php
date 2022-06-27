@extends('layouts.private.admin')
@section('content')        
<div class="container">
@include('content.private.partials.search.plates')
@include('content.private.partials.products.plates.plate-grid')
		<br/>
		<div class="d-flex justify-content-center">
			{{ $results->links() }}
		</div>
	</div>
@endsection