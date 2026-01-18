<!DOCTYPE html>
<html lang="en">
<head>
	<title>Triphita</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<script src="https://static.lodgify.com/widgets/search-bar/latest/index.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/welcome.css">
</head>
<body>
	@include('partials.nav')

	<div class="hero-wrap" style="background-image: url('images/kkc-vibe-top.jpg'); padding-top: 100px; margin-top: 50px;">
		<div class="container">
			<div class="row justify-content-center align-items-center" style="height: 100%;">
				<div class="col-md-10 text-center">
					<h2 class="hero-wrap-title">Discover Your Favorite Place with Us</h2>
					<p>Travel to the corner of the world, sustainably</p>
				</div>
			</div>
		</div>
	</div>

	<section class="story-section">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4 font-weight-bold" style="font-size: 2.5em;">Welcome to Triphita Beta</h2>
					<div class="w-100" style="text-align: center; font-size: 1.1em; max-width: 900px; margin: 0 auto;">
						<p>Our story begins in Bali, once a paradise of vibrant culture, untouched nature, and heartfelt traditions.</p>
						<p>But overtourism has left its mark: crowded roads, concrete sprawl, and fading beauty.</p>
						<p>At Triphita, we believe it's not too late. By reimagining how people travel and stay, we're restoring balance, supporting local hosts, protecting nature, and celebrating Bali's soul.</p>
						<p>Join us in shaping a new era of conscious travel that preserves the paradise we all fell in love with.</p>
					</div>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-6 mb-4">
					<div class="services services-1 color-1 d-block img" style="background-image: url(images/kkc-sustainable-stays.jpg);">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-paragliding"></span>
						</div>
						<div class="media-body">
							<h3 class="heading mb-3">Sustainable Accommodation (Beta)</h3>
							<p>Experience hotel comfort, local warmth, and real impact.</p>
							<p>Every Triphita micro stay blends convenience with conscience, small-scale, community-owned, and built on simple, visible sustainability.</p>
						</div>
					</div>      
				</div>
				<div class="col-md-6 mb-4">
					<div class="services services-1 color-2 d-block img" style="background-image: url(images/kkc-jeep-tour.jpg);">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-route"></span>
						</div>
						<div class="media-body">
							<h3 class="heading mb-3">Sustainable Experience (Coming Soon)</h3>
							<p>Discover the beauty of nature and the richness of local culture with our fun and immersive tours.</p>
							<p>Designed to protect the environment and celebrate traditions, our tours ensure unforgettable experiences that leave a positive impact on the places you visit</p>
						</div>
					</div>    
				</div>
			</div>
			<div class="row justify-content-center mt-4">
				<div class="col-md-12 text-center">
					<a href="/destination" class="btn btn-primary py-3 px-4">Stay</a>
				</div>
			</div>
		</div>
	</section>

	@include('partials.sustainability-slider')

	@include('partials.featured-stays')

	<section class="ftco-section ftco-about img" style="background-image: url(images/kkc-welcome.jpg);">
		<div class="overlay"></div>
		<div class="container py-md-5">
			<div class="row py-md-5">
				<div class="col-md d-flex align-items-center justify-content-center">
					<a href="https://www.youtube.com/watch?v=A5-jpCY-yvI" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
						<span class="fa fa-play"></span>
					</a>
				</div>
			</div>
		</div>
	</section>

	@include('partials.testimonials')

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Our Blog</span>
					<h2 class="mb-4">Recent Post</h2>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');"></a>
						<div class="text">
							<div class="d-flex align-items-center mb-4 topp">
								<div class="one">
									<span class="day">11</span>
								</div>
								<div class="two">
									<span class="yr">2020</span>
									<span class="mos">September</span>
								</div>
							</div>
							<h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');"></a>
						<div class="text">
							<div class="d-flex align-items-center mb-4 topp">
								<div class="one">
									<span class="day">11</span>
								</div>
								<div class="two">
									<span class="yr">2020</span>
									<span class="mos">September</span>
								</div>
							</div>
							<h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');"></a>
						<div class="text">
							<div class="d-flex align-items-center mb-4 topp">
								<div class="one">
									<span class="day">11</span>
								</div>
								<div class="two">
									<span class="yr">2020</span>
									<span class="mos">September</span>
								</div>
							</div>
							<h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-intro ftco-section ftco-no-pt">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 text-center">
					<div class="img" style="background-image: url(images/bg_2.jpg);">
						<div class="overlay"></div>
						<h2>We Are Triphita An Eco Stays and More</h2>
						<p>We will make your days unforgettable and truly sustainable</p>
						<p class="mb-0"><a href="/destination" class="btn btn-primary px-4 py-3">Book Now</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	@include('partials.footer')

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
		</svg>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>
	<script src="https://app.lodgify.com/portable-search-bar/stable/renderPortableSearchBar.js" defer></script>
</body>
</html>
