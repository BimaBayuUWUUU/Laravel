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

	<!-- home section -->
	<div id="home">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-3"></div>
				<div class="col-md-7 col-sm-9">
					<h3>welcome to</h3>
					<h1>Onetel Design Studio</h1>
				</div>
			</div>
		</div>
	</div>

	<!-- divider section -->
	<div class="divider">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="divider-wrapper divider-one">
						<i class="fa fa-laptop"></i>
						<h2>Responsive</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="divider-wrapper divider-two">
						<i class="fa fa-mobile"></i>
						<h2>Easy to use</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="divider-wrapper divider-three">
						<i class="fa fa-life-ring"></i>
						<h2>Quick Support</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- about section -->
	<div id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<img src="images/about-img.jpg" class="img-responsive" alt="about img">
				</div>
				<div class="col-md-6 col-sm-12 about-des">
					<h2>Startup Business</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet.</p>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
					<a href="about.html" class="btn btn-default">LEARN MORE</a>
				</div>
			</div>
		</div>
	</div>

	<!-- portfolio section -->
	<div id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 col-sm-12">
					<h2>Recent Projects</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
				</div>
			</div>

			<div class="row mt30">

				<div class="col-md-4 col-sm-4 col-xs-6">
					<a href="images/portfolio-img1.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img1.jpg" alt="portfolio img"></a>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<a href="images/portfolio-img2.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img2.jpg" alt="portfolio img"></a>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<a href="images/portfolio-img3.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img3.jpg" alt="portfolio img"></a>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-6">
					<a href="images/portfolio-img4.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img4.jpg" alt="portfolio img"></a>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<a href="images/portfolio-img5.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img5.jpg" alt="portfolio img"></a>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<a href="images/portfolio-img6.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img6.jpg" alt="portfolio img"></a>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<a href="images/portfolio-img7.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img7.jpg" alt="portfolio img"></a>
				</div>
				<div class="col-md-12 col-sm-12">
					<a rel="nofollow" href="http://www.templatemo.com/tag/darkgray" class="btn btn-default">View More</a>
				</div>
			</div>
		</div>
	</div>

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