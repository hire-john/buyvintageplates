@extends('layouts.private.admin')
@section('content')
<div class="row">
	<div class="col-md-4"><a href="{{route('book-references-google')}}"><button class="btn btn-success me-2 text-white"><< Google Reference Home</button></a></div>
	<div class="col-md-8" style="text-align: right;"><h1>Volume ID lookup: {{ $results['id'] ?? '' }}</h1></div>
</div>
<br/>
	@include('content.private.partials.referencing.books.google.search')
<div class="card mb-12">
	<div class="row g-0">
		<div class="col-md-2">	
			<center>
				<img style="width:100%" src="{{$results['volumeInfo']['imageLinks']['thumbnail'] ?? ''}}" class="img-fluid rounded-start" alt="book-cover">
				<button type="submit" class="input-group-text text-white shadow-none px-4 btn-success m-3">Create Reference</button>
				<button type="submit" class="input-group-text text-white shadow-none px-4 btn-success m-3">Create Product</button>
			</center>
		</div>
		<div class="col-md-10">
			<div class="card-body">
				<h3 class="card-title">{{$results['volumeInfo']['title'] ?? ''}}</h3>
				<p class="card-text">{{$results['volumeInfo']['description'] ?? ''}}</p>
				<table class="table details-table">
					<tbody>
						@if($results['volumeInfo']['authors'])
						<tr>
							<th scope="row">Authors</th>
							<td>
								@foreach($results['volumeInfo']['authors'] as $author)
								<p>{{$author}}</p>
								@endforeach
							</td>
						</tr>
						@endif
						@if($results['id'])
						<tr>
							<th scope="row" style="width:20%">Google Book ID</th>
							<td><p><a href="/portal/referencing/books/google/search-results?query={{$results['id']}}&field=id&product=books" target="_blank">{{$results['id'] ?? ''}}</a></p></td>
						</tr>
						@endif
						<tr>
							<th scope="row" style="width:20%">Google Etag</th>
							<td><p>{{$results['etag'] ?? ''}}</p></td>
						</tr>
						<tr>
							<th scope="row" style="width:20%">Google Self-Link</th>
							<td><p><a href="{{$results['selfLink']  ?? ''}}">{{$results['selfLink'] ?? ''}}</a></p></td>
						</tr>
						<tr>
							<th scope="row">Publisher</th>
							<td><p>{{$results['volumeInfo']['publisher'] ?? ''}}</p></td>
						</tr>
						<tr>
							<th scope="row">Published Date</th>
							<td><p>{{$results['volumeInfo']['publishedDate'] ?? ''}}</p></td>
						</tr>
						@foreach($results['volumeInfo']['industryIdentifiers'] as $id_code)
						@if($id_code['type']=="ISBN_10")
						<tr>
							<th scope="row">ISBN-10</th>
							<td><p><a href="/portal/referencing/books/google/search-results?query={{$id_code['identifier']}}&field=isbn&product=books" target="_blank">{{$id_code['identifier'] ?? ''}}</a></p></td>
						</tr>
						@elseif($id_code['type']=="ISBN_13")
						<tr>
							<th scope="row">ISBN-13</th>
							<td><p><a href="/portal/referencing/books/google/search-results?query={{$id_code['identifier']}}&field=isbn&product=books" target="_blank">{{$id_code['identifier'] ?? ''}}</a></p></td>
						</tr>
						@else
						<tr>
							<th scope="row">{{$id_code['type']}}</th>
							<td><p>{{$id_code['identifier'] ?? ''}}</p></td>
						</tr>
						@endif
						@endforeach
						@foreach($results['volumeInfo']['dimensions'] as $key=>$dimension)
						<tr>
							<th class="text-capitalize" scope="row">{{$key ?? ''}}</th>
							<td><p>{{$dimension ?? ''}}</p></td>
						</tr>
						@endforeach
						<tr>
							<th scope="row">Page Count</th>
							<td><p>{{$results['volumeInfo']['pageCount'] ?? ''}}</p></td>
						</tr>
						@if(isset($results['volumeInfo']['categories']))
						<tr>
							<th scope="row">Categories</th>
							<td>
								@foreach($results['volumeInfo']['categories'] as $category)
								<p>{{$category ?? ''}}</p>
								@endforeach
							</td>
						</tr>
						@endif
						<tr>
							<th scope="row">Language</th>
							<td><p>{{$results['volumeInfo']['language'] ?? ''}}</p></td>
						</tr>
						<tr>
							<th scope="row">Country</th>
							<td><p>{{$results['saleInfo']['country'] ?? ''}}</p></td>
						</tr>
						<tr>
							<th scope="row">Is Ebook</th>
							<td>
								@if($results['saleInfo']['isEbook'])
								<p>Yes</p>
								@else
								<p>No</p>
								@endif
							</td>
						</tr>
						<tr>
							<th scope="row">Is Public Domain</th>
							<td>
								@if($results['accessInfo']['publicDomain'])
								<p>Yes</p>
								@else
								<p>No</p>
								@endif
							</td>
						</tr>
						<tr>
							<th scope="row">Epub available</th>
							<td>
								@if($results['accessInfo']['epub']['isAvailable'])
								<p>Yes</p>
								@else
								<p>No</p>
								@endif
							</td>
						</tr>
						<tr>
							<th scope="row">PDF available</th>
							<td>
								@if($results['accessInfo']['pdf']['isAvailable'])
								<p>Yes</p>
								@else
								<p>No</p>
								@endif
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection