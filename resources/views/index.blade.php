<!DOCTYPE html>
<html>
<head>
	<title>Posts Page</title>
</head>
<body>
	<h1>Halaman Post</h1>
	@if(count($posts) > 0)
		<ul>
			@foreach($posts as $post)
				<li>{{ $post['title'] }}</li>
			@endforeach
		</ul>
		@else
		<p>Tidak ada data</p>
	@endif
</body>
</html>