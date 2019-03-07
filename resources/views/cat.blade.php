<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>cat</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
</head>
<body>
	<header class="header">
		<nav class="navbar navbar-light bg-light">
			<a class="navbar-brand" href="#">
				<img src="" width="30" height="30" class="d-inline-block align-top" alt="">
				Cats 
			</a>
		</nav>
	</header>
	<div class="card shadow-lg rounded">
			<div class="card-header"><h1>Find cats online(only for local mashine)</h1></div>
			<div class="card-body flex-wrap d-flex justify-content-between ">
				@foreach ($users as $user)
				<div class="card col-sm-4">
					<img class="w-100 h-auto" src="{{$user}}"/>
				</div>
				@endforeach
			</div>
	</div>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"/>
</body>
</html>