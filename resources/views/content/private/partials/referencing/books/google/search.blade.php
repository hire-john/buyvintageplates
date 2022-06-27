	<form name="search" action="{{route('book-references-google-results')}}" method="GET">
		<div class="input-group mb-3">
			<input type="text" name="query" class="form-control" placeholder="Search Here">
			<div class="input-group-text p-0">
				<select name="field" class="form-select form-select-lg shadow-none bg-light border-0">
					<option value="isbn">ISBN-10 or ISBN-13</option>
					<option value="id">Google Book ID</option>
					<option value="query">Query All</option>
				</select>
			</div>
			<input type="hidden" name="product" value="books"/>
			<button type="submit" class="input-group-text shadow-none px-4 btn-success">
				<i class="fas fa-search"></i>
			</button>
		</div>
	</form>