	<form name="search" action="{{route('portal-results')}}" method="GET">
		<div class="input-group mb-3">
			<input type="text" name="query" class="form-control" placeholder="Search Here">
			<div class="input-group-text p-0">
				<select name="field" class="form-select form-select-lg shadow-none bg-light border-0">
					<option value="all">All</option>
					<option value="manufacturer">Manufacturers</option>
					<option value="title">Titles</option>
					<option value="artist">Artists</option>
					<option value="year">Years</option>
					<option value="collection">Collections</option>
					<option value="bradex">Bradex</option>
					<option value="tags">Tags</option>
				</select>
			</div>
			<input type="hidden" name="product" value="plates"/>
			<button type="submit" class="input-group-text shadow-none px-4 btn-success">
				<i class="fas fa-search"></i>
			</button>
		</div>
	</form>