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
					<h2 class="mb-4 font-weight-bold" style="font-size: 2.5em;">Welcome to Triphita</h2>
					<div class="w-100" style="text-align: center; font-size: 1.1em; max-width: 900px; margin: 0 auto;">
						<p>Our story begins in Bali, once a paradise of vibrant culture, untouched nature, and heartfelt traditions.</p>
						<p>But overtourism has left its mark: crowded roads, concrete sprawl, and fading beauty.</p>
						<p>At Triphita, we believe it's not too late. By reimagining how people experience Bali, we are restoring balance, supporting local communities, protecting nature, and celebrating the island's soul.</p>
						<p>Join us in shaping a new era of conscious travel, where every journey helps preserve the paradise we all fell in love with.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="story-carousel owl-carousel">
						<!-- Slide 1: Adventure -->
						<div class="item">
							<div class="services services-1 color-1 d-block img" style="background-image: url(images/kkc-sustainable-stays.jpg);">
								<div class="media-body">
									<h3 class="heading mb-3">Adventure</h3>
									<p>For those who seek movement, challenge, and raw beauty.</p>
									<p>From jeep journeys across volcanic landscapes to mountain hikes above the clouds, Adventure experiences bring you closer to Bali's untamed side.</p>
								</div>
							</div>
						</div>
						
						<!-- Slide 2: Guided Tour -->
						<div class="item">
							<div class="services services-1 color-2 d-block img" style="background-image: url(images/kkc-jeep-tour.jpg);">
								<div class="media-body">
									<h3 class="heading mb-3">Guided Tour</h3>
									<p>For travelers who want to understand, not just observe.</p>
									<p>Explore villages, heritage paths, and sustainable practice sites with local guides who share stories, traditions, and real environmental solutions shaping Bali's future.</p>
								</div>
							</div>
						</div>
						
						<!-- Slide 3: Workshop & Class -->
						<div class="item">
							<div class="services services-1 color-3 d-block img" style="background-image: url(images/kkc-welcome.jpg);">
								<div class="media-body">
									<h3 class="heading mb-3">Workshop & Class</h3>
									<p>For hands-on learners and curious minds.</p>
									<p>Cook with local families, craft with artisans, and learn directly through immersive workshops that turn travel into participation.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center mt-4">
				<div class="col-md-12 text-center">
					<div class="d-flex flex-wrap justify-content-center align-items-center" style="gap: 1.5rem;">
						@php
	$waMessage = "Hello \nI'm interested in booking the following tour:\n\n Tour: {{tour_name}}\n Package: {{package_name}}\n Price: {{price}}\n\nCould you please help me with availability and booking details?\nThanks a lot!";
	$waUrl = 'https://wa.me/6287818653533?text=' . rawurlencode($waMessage);
@endphp
						<a href="{{ $waUrl }}" class="btn btn-primary py-3 px-4" target="_blank" rel="noopener noreferrer">Book Now</a>
						<a href="{{ route('activities.index') }}" class="btn btn-primary py-3 px-4">Explore</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	@include('partials.sustainability-slider')

	@include('partials.featured-stays')

	<section class="ftco-section ftco-about img" style="background-image: url(images/kkc-welcome.jpg); margin-bottom: 60px;">
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
			<div class="row">
				<div class="col-md-12">
					<div class="blog-carousel-wrapper">
						<div class="blog-carousel owl-carousel">
						@forelse($blogs ?? [] as $blog)
						<div class="item">
							<div class="blog-entry justify-content-end">
								<a href="{{ route('blogs.show', $blog->slug ?? $blog->id) }}" class="block-20" style="background-image: url('{{ $blog->featured_image ? asset($blog->featured_image) : asset('images/image_1.jpg') }}');"></a>
								<div class="text">
									<div class="d-flex align-items-center mb-4 topp">
										<div class="one">
											<span class="day">{{ $blog->created_at->format('d') }}</span>
										</div>
										<div class="two">
											<span class="yr">{{ $blog->created_at->format('Y') }}</span>
											<span class="mos">{{ $blog->created_at->format('F') }}</span>
										</div>
									</div>
									<h3 class="heading"><a href="{{ route('blogs.show', $blog->slug ?? $blog->id) }}">{{ $blog->title }}</a></h3>
									<p>{{ $blog->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($blog->content ?? ''), 120) }}</p>
									<p><a href="{{ route('blogs.show', $blog->slug ?? $blog->id) }}" class="btn btn-primary">Read more</a></p>
								</div>
							</div>
						</div>
						@empty
						<div class="item">
							<div class="blog-entry justify-content-end">
								<a href="{{ route('blogs.index') }}" class="block-20" style="background-image: url('{{ asset('images/image_1.jpg') }}');"></a>
								<div class="text">
									<div class="d-flex align-items-center mb-4 topp">
										<div class="one"><span class="day">—</span></div>
										<div class="two"><span class="yr">—</span><span class="mos">—</span></div>
									</div>
									<h3 class="heading"><a href="{{ route('blogs.index') }}">No posts yet</a></h3>
									<p>Visit our blog for stories and updates.</p>
									<p><a href="{{ route('blogs.index') }}" class="btn btn-primary">Go to Blog</a></p>
								</div>
							</div>
						</div>
						@endforelse
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <section class="ftco-intro ftco-section ftco-no-pt">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 text-center">
					<div class="img" style="background-image: url(images/bg_2.jpg);">
						<div class="overlay"></div>
						<h2>We Are Triphita — Journey, Memory, and Purpose</h2>
						<p>We will make your days unforgettable and truly sustainable</p>
						<p class="mb-0"><a href="/destination" class="btn btn-primary px-4 py-3">Book Now</a></p>
					</div>
				</div>
			</div>
		</div>
	</section> -->

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
	
	<!-- Story Section Carousel -->
	<script>
		$(document).ready(function() {
			var storyCarousel = $('.story-carousel');
			
			// Destroy existing carousel if it exists
			if (storyCarousel.data('owlCarousel')) {
				storyCarousel.trigger('destroy.owl.carousel');
				storyCarousel.removeClass('owl-carousel owl-loaded');
				storyCarousel.find('.owl-stage-outer').children().unwrap();
			}
			
			// Reinitialize carousel
			storyCarousel.owlCarousel({
				loop: true,
				margin: 30,
				nav: true,
				navText: ['<span class="fa fa-chevron-left"></span>', '<span class="fa fa-chevron-right"></span>'],
				dots: true,
				dotsEach: true,
				autoplay: false,
				autoplayTimeout: 5000,
				autoplayHoverPause: true,
				touchDrag: true,
				mouseDrag: true,
				pullDrag: true,
				responsive: {
					0: {
						items: 1,
						margin: 15
					},
					768: {
						items: 2,
						margin: 20
					},
					992: {
						items: 3,
						margin: 30
					}
				}
			});
			
			// Featured Experiences Carousel
			var featuredCarousel = $('.featured-experiences-carousel');
			
			// Destroy existing carousel if it exists
			if (featuredCarousel.data('owlCarousel')) {
				featuredCarousel.trigger('destroy.owl.carousel');
				featuredCarousel.removeClass('owl-carousel owl-loaded');
				featuredCarousel.find('.owl-stage-outer').children().unwrap();
			}
			
			// Initialize Featured Experiences Carousel
			featuredCarousel.owlCarousel({
				loop: true,
				margin: 30,
				nav: true,
				navText: ['<span class="fa fa-chevron-left"></span>', '<span class="fa fa-chevron-right"></span>'],
				dots: true,
				dotsEach: true,
				autoplay: false,
				autoplayTimeout: 5000,
				autoplayHoverPause: true,
				touchDrag: true,
				mouseDrag: true,
				pullDrag: true,
				responsive: {
					0: {
						items: 1,
						margin: 15
					},
					768: {
						items: 2,
						margin: 20
					},
					992: {
						items: 4,
						margin: 30
					}
				}
			});

			// Blog carousel (dynamic, with nav and dots at bottom)
			var blogCarousel = $('.blog-carousel');
			if (blogCarousel.length && blogCarousel.children('.item').length) {
				if (blogCarousel.data('owlCarousel')) {
					blogCarousel.trigger('destroy.owl.carousel');
					blogCarousel.removeClass('owl-carousel owl-loaded');
					blogCarousel.find('.owl-stage-outer').children().unwrap();
				}
				blogCarousel.owlCarousel({
					loop: true,
					margin: 30,
					nav: true,
					dots: true,
					navText: ['<span class="fa fa-chevron-left"></span>', '<span class="fa fa-chevron-right"></span>'],
					autoplay: false,
					touchDrag: true,
					mouseDrag: true,
					responsive: {
						0: { items: 1, margin: 15 },
						768: { items: 2, margin: 20 },
						992: { items: 3, margin: 30 }
					}
				});
			}
		});
	</script>
</body>
</html>
