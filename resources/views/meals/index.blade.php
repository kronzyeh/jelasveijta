<!DOCTYPE html>
<html>
<head>
	<title>Meals List</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body>
	<header>
		<nav>
			<ul>
			  <div class="left-nav">
				<li><a href="/">HOME</a></li>
				<li><a href="#">CATEGORIES</a></li>
			  </div>
			  <div class="center-nav">
				<h1>jela svijeta</h1>
			  </div>
			  <div class="right-nav">
				<li><a href="#">LANGUAGES</a></li>
				<li><a href="#">SERVICES</a></li>
			  </div>
			</ul>
		</nav>
	</header>
	<div class="container">
		<h1 class="meal">Meals List</h1>
		<hr>
		@if(!empty($query))
			<h2 class="query">You have searched for: {{ $query }}</h2>
		@endif
		@if(count($meals) > 0)
			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Description</th>
						<th>Price</th>
						<th>Category</th>
					</tr>
				</thead>
				<tbody>
					@foreach($meals as $meal)
					<tr>
						<td>{{ $meal->title }}</td>
						<td>{{ $meal->description }}</td>
						<td>{{ $meal->price }}</td>
						<td>{{ $meal->category->name }}
					</tr>
					@endforeach
				</tbody>
			</table>
		@else
			<h1 class="no-items">No items found.</h1>
		@endif
	</div>
	<div class="pagination-container">
		{{ $meals->appends(request()->input())->links('vendor.pagination.default') }}
	</div>
</body>
</html>
