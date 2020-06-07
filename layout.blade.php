<!DOCTYPE html>
<html>
	<head>
		<title>Product Management</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
		 crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
	</head>
<body>
        <h2 class="text-center">CRUD operation on MySQL using Laravel</h2>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Furniture</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
			  <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
			  <a class="nav-item nav-link" href="/addproduct">Add Record </a>
			 <a class="nav-item nav-link" href="/view">View Products </a>
			 <a class="nav-item nav-link" href="/login">Login </a>
			 
			</div>
		  </div>
		</nav>

    <div class="container">
        @yield('Content')
    </div>

    <div style="position: fixed; bottom: 10px; right: 10px; color: green;">
        <strong>
            Made in Pakistan
        </strong>
    </div>
</body>
</html>