	<div class="row row-cols-1 row-cols-md-3 g-4">
		@foreach($results as $result)
		<div class="col">
			<div class="card text-center border-success text-capitalize">
				<div class="card-header">
					<a href="{{route('plates-create', ['id' => $result->id])}}" data-bs-toggle="tooltip" data-bs-placement="left" title="Create New Product From This Record"><img src="{{ URL::to('/')}}/images/icons/folder-symlink-fill.svg" style="width: 32px; height: 32px;"/></a>
					<h5 class="card-title fw-bold">{{ $result->title }}</h5>
				</div>
				<div class="card-body">
					<h6>{{$result->year}}</h6>
					<a href="{{route('plate', $result->id)}}">
						<img style="border-radius: 50%;width:200px;" src="/images/cp-plates/{{$result->origin_id}}.jpg" onerror="this.onerror=null;this.src='/favicon.png';"/></a>
						<ul class="list-group list-group-flush">
							@if(!is_null($result->collection) && ($result->collection !==""))
							<li class="list-group-item"><span class="fw-bold">Collection: </span>{{$result->collection}}</li>
							@endif
							@if(!is_null($result->manufacturer) && ($result->manufacturer !==""))
							<li class="list-group-item"><span class="fw-bold">Manufacturer: </span>{{$result->manufacturer}}</li>
							@endif
							@if(!is_null($result->artist) && ($result->artist !==""))
							<li class="list-group-item"><span class="fw-bold">Artist: </span>{{$result->artist}}</li>
							@endif
							<li class="list-group-item">
								<a class="mx-3" href="http://www.collectorpoint.com/plate/itemview.php?id={{$result->origin_id}}" target="_new"><img src="{{ URL::to('/')}}/images/icons/link-45deg.svg"/></a>
								<a class="mx-3" href="https://www.ebay.com/sch/i.html?_nkw={{$result->year}} {{$result->manufacturer}} {{$result->collection}} {{$result->title}} plate" target="_new"><img src="{{ URL::to('/')}}/images/icons/tags-fill.svg"/></a> 
								<a class="mx-3" href="https://www.google.com/search?q={{$result->year}} {{$result->manufacturer}} {{$result->collection}} {{$result->title}} plate" target="_new"><img src="{{ URL::to('/')}}/images/icons/google.svg"/></a>
							</li>
						</ul>
					</div>
					<div class="card-footer text-muted text-uppercase">
						<span class="mx-2">
							{{ $result->id}} 
							@if(!is_null($result->bradex) && ($result->bradex !==""))
							• {{$result->bradex}} 
							@endif
							• <a href="id={{$result->id}}" target="_new"><img src="{{ URL::to('/')}}/images/icons/pencil-square.svg"/></a>
						</span>
					</div>
				</div>
			</div>
			@endforeach
		</div>