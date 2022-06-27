@extends('layouts.private.admin')
@section('content')
<div class="alert alert-dark" role="alert">
  Please Note This Module Is Based On An External API Which Could Be Deactivated Anytime. 
</div>        
	<h1>Google Books Reference Search</h1>
	<p>Search Google Books API And Optionally Create Individual Product Inventory or Book References For Future Use. </p>
	@include('content.private.partials.referencing.books.google.search')
	<hr/>
	<h1>Google Books Reference Importer</h1>
	<p>Upload CSV of ISBN-10 and ISBN-13's To Create References From an Inventory In Bulk.</p>
	<form name="search" action="#" method="POST">
		<div class="input-group mb-3">
			<input type="file" id="myFile" name="filename">
			<button type="submit" class="input-group-text shadow-none px-4 btn-success">
				Upload
			</button>
		</div>
	</form>
@endsection