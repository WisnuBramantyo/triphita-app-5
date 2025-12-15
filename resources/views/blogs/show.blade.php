<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ $blog->title }} - Triphita Blog</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="{{ $blog->meta_description ?? \Illuminate\Support\Str::limit(strip_tags($blog->content), 160) }}">
	
	<!-- Add Lodgify script here, before other scripts -->
	<script src="https://static.lodgify.com/widgets/search-bar/latest/index.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="/css/animate.css">
	<link rel="stylesheet" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="/css/magnific-popup.css">
	<link rel="stylesheet" href="/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="/css/jquery.timepicker.css">
	<link rel="stylesheet" href="/css/flaticon.css">
	<link rel="stylesheet" href="/css/style.css">
	
	<style>
		/* Responsive blog content images */
		.blog-content img {
			max-width: 100% !important;
			height: auto !important;
			display: block;
			margin: 20px auto;
			border-radius: 8px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		}
		
		/* Ensure images don't exceed container width */
		.blog-content {
			overflow-x: hidden;
		}
		
		/* Responsive behavior for different screen sizes */
		@media (max-width: 768px) {
			.blog-content img {
				margin: 15px auto;
				border-radius: 6px;
			}
		}
		
		@media (max-width: 576px) {
			.blog-content img {
				margin: 10px auto;
				border-radius: 4px;
			}
		}
	</style>
</head>
<body>
	<!-- Navigation Menu -->
	<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light position-fixed" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="/">Triphita Beta<span>Eco Stays and More</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="/" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="/destination" class="nav-link">Stays</a></li>
					<li class="nav-item"><a href="/destination" class="nav-link">Experience</a></li>
					<li class="nav-item active"><a href="/blogs" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="/contact.html" class="nav-link">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<!-- Hero Section for Blog Detail -->
	<div class="hero-wrap" style="background: #fff; padding: 120px 0 20px; margin-top: 50px;">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-md-10 text-center">
					<h2 class="hero-wrap-title" style="color: #037d5d; font-family: 'Poppins', sans-serif; font-size: 2.5rem; font-weight: 600; letter-spacing: -0.5px; margin-bottom: 20px;">{{ $blog->title }}</h2>
					<p style="color: #666; font-size: 1.1rem;">
						<span class="mr-3"><i class="fa fa-calendar"></i> {{ $blog->created_at->format('M d, Y') }}</span>
						@if($blog->category)
							<span class="mr-3"><i class="fa fa-tag"></i> {{ $blog->category }}</span>
						@endif
					</p>
				</div>
			</div>
		</div>
	</div>
	
	<style>
		/* Fix mobile navbar overlap */
		@media (max-width: 768px) {
			.hero-wrap {
				padding-top: 150px !important;
				margin-top: 70px !important;
			}
		}
		
		@media (max-width: 576px) {
			.hero-wrap {
				padding-top: 180px !important;
				margin-top: 80px !important;
			}
			
			.hero-wrap-title {
				font-size: 2rem !important;
			}
		}
	</style>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 ftco-animate">
					@if($blog->featured_image)
						<img src="{{ $blog->featured_image }}" alt="{{ $blog->title }}" class="img-fluid mb-4" style="border-radius: 8px;">
					@endif

					<div class="mb-4 p-4" style="background:#f8f9fa; border-radius: 8px;">
						<div class="d-flex flex-wrap">
							<div class="mr-4 mb-2"><i class="fa fa-user"></i> Triphita Team</div>
							<div class="mr-4 mb-2"><i class="fa fa-clock-o"></i> Published {{ $blog->created_at->diffForHumans() }}</div>
							@if($blog->publish_date)
								<div class="mr-4 mb-2"><i class="fa fa-calendar"></i> Scheduled {{ $blog->publish_date->format('M d, Y') }}</div>
							@endif
						</div>
					</div>

					<div class="mb-5 blog-content" style="line-height:1.9; font-size:1.05rem; color:#2f2f2f;">
						{!! $blog->content !!}
					</div>

					@if($blog->tags && count($blog->tags) > 0)
						<div class="mb-5">
							<h5 class="mb-3"><i class="fa fa-tags"></i> Tags</h5>
							@foreach($blog->tags as $tag)
								<span class="badge" style="background:#037d5d; color:#fff; border-radius:15px; padding:6px 12px; margin:4px;">{{ $tag }}</span>
							@endforeach
						</div>
					@endif

					<div class="mt-5">
						<a href="{{ route('blogs.index') }}" class="btn btn-primary"><i class="fa fa-arrow-left mr-2"></i>Back to All Blogs</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-intro ftco-section ftco-no-pt">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 text-center">
					<div class="img" style="background-image: url('/images/bg_2.jpg');">
						<div class="overlay"></div>
						<h2>We Are Triphita An Eco Stays and More </h2>
						<p>We will make your days unforgettable and truly sustainable</p>
						<p class="mb-0"><a href="/destination" class="btn btn-primary px-4 py-3">Book Now</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url('/images/bg_3.jpg');">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md pt-5">
					<div class="ftco-footer-widget pt-md-5 mb-4">
						<h2 class="ftco-heading-2">About</h2>
						<p>At Triphita, we curate eco-conscious stays and local experiences that celebrate Indonesia’s natural and cultural heritage. Through responsible travel, we strive to protect the planet and uplift communities.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft">
							<li class="ftco-animate"><a href="https://www.instagram.com/my.triphita/" target="_blank" rel="noopener noreferrer"><span class="fa fa-instagram"></span></a></li>
							<li class="ftco-animate"><a href="https://www.linkedin.com/company/triphita" target="_blank" rel="noopener noreferrer"><span class="fa fa-linkedin"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md pt-5 border-left">
					<div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Information</h2>
						<ul class="list-unstyled">
							<li><a href="/about.html" class="py-2 d-block">About Us</a></li>
							<li><a href="#" class="py-2 d-block">Privacy and policy</a></li>
							<li><a href="#" class="py-2 d-block">Booking Condition</a></li>
							<li><a href="#" class="py-2 d-block">General Inquiries</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md pt-5 border-left">
					<div class="ftco-footer-widget pt-md-5 mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon fa fa-map-marker"></span><span class="text">Denpasar Selatan, Denpasar, Bali, Indonesia</span></li>
								<li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">Contact@triphita.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

	<script src="/js/jquery.min.js"></script>
	<script src="/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="/js/popper.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/jquery.easing.1.3.js"></script>
	<script src="/js/jquery.waypoints.min.js"></script>
	<script src="/js/jquery.stellar.min.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/jquery.magnific-popup.min.js"></script>
	<script src="/js/jquery.animateNumber.min.js"></script>
	<script src="/js/bootstrap-datepicker.js"></script>
	<script src="/js/scrollax.min.js"></script>
	<script src="/js/google-map.js"></script>
	<script src="/js/main.js"></script>
</body>
</html>
