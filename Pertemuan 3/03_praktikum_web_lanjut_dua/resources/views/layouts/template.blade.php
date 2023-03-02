<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 
OneTel Template
http://www.templatemo.com/tm-468-onetel
-->
	<!-- stylesheet css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/templatemo-style.css">
	<!-- google web font css -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<title>@yield('title')</title>

</head>

<body>

	<!-- navigation -->

	<div class="container">
		@include('layouts.navbar')
	</div>

	@yield('content')
	
	<!-- footer section -->
	<footer>
		<div class="container">
	@include('layouts.footer')
		</div>
	</footer>

	<!-- copyright section -->
	<div class="copyright">
		<div class="container">
	@include('layouts.copyright')
		</div>
	</div>


	<!-- javascript js -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
	<script src="js/custom.js"></script>

</body>

</html>