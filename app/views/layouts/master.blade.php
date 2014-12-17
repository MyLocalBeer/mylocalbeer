<!DOCTYPE html>
<html lang="en">
<head>
    <title>MyLocalBeer</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lobster|Droid+Serif:400,700,400italic,700italic|Pacifico' rel='stylesheet' type='text/css'>
	<!-- local CSS -->
    <link rel="stylesheet" href="/css/stylesheet.css">

@yield('topscript')

</head>

<body>

	@include('partials.navbar')

	<div class="container">
		@if (Session::has('successMessage'))
		    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
		@endif
		@if (Session::has('errorMessage'))
		    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
		@endif
	</div>	
	
	<div class='main-background'>	
		@yield('content')
    </div>

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

@yield('bottomscript')

</body>
</html>
