<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Products</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- jQuery -->
	<script src="{{ asset('/js/jquery-3.2.1.min.js') }}"></script>
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('/font-awesome/font-awesome.css') }}" rel="stylesheet">
	<script
			src="http://code.jquery.com/jquery-3.2.1.js"
			integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
			crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/be999261ea.js"></script>
</head>
<body>
<div class="container">
	<h2>CRUD</h2>
	<button type="button"  class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
	<table class="table table-hover">
		<thead>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>DESCRIPTION</th>
			<th>ACTION</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>John</td>
			<td>Doe</td>
			<td>john@example.com</td>
			<td>
				<button type="button" class="btn btn-info"><i class="fa fa-pencil"></i></button>
				<button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
			</td>
		</tr>
		<tr>
			<td>Mary</td>
			<td>Moe</td>
			<td>mary@example.com</td>
			<td>
				<button type="button" class="btn btn-info"><i class="fa fa-pencil"></i></button>
				<button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
			</td>
		</tr>
		<tr>
			<td>July</td>
			<td>Dooley</td>
			<td>july@example.com</td>
			<td>
				<button type="button" class="btn btn-info"><i class="fa fa-pencil"></i></button>
				<button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
			</td>
		</tr>
		</tbody>
	</table>
</div>
</body>
</html>