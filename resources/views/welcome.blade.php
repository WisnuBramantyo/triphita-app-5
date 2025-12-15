<!DOCTYPE html>
<html lang="en">
<head>
	<title>Triphita</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Add Lodgify script here, before other scripts -->
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

	<style>
		.project-destination .img:hover .hover-text {
			display: block !important;
		}

		.project-destination .text {
			position: relative;
			z-index: 1;
		}

		.project-destination .hover-text {
			background: rgba(0, 0, 0, 0.7);
			padding: 10px;
			border-radius: 5px;
			margin-top: 5px;
		}

		/* Services section - consistent image sizing */
		.story-section .services.img {
			height: 400px;
			background-size: cover;
			background-position: center;
			display: flex;
			flex-direction: column;
			justify-content: flex-end;
		}
		.story-section .services .media-body {
			background: transparent;
			padding: 20px;
			border-radius: 0 0 8px 8px;
		}
		.story-section .services .media-body h3,
		.story-section .services .media-body p {
			color: #fff;
		}
		/* Mobile responsive adjustments */
		@media (max-width: 767px) {
			.story-section .services.img {
				height: 300px;
			}
			.story-section .services .media-body {
				padding: 15px;
			}
		}

		/* Enhanced Stay Button */
		.story-section .btn-primary {
			background: linear-gradient(135deg, #037d5d 0%, #023f2f 100%);
			border: 2px solid #037d5d;
			border-radius: 50px;
			font-weight: 600;
			font-size: 1.1rem;
			letter-spacing: 0.5px;
			text-transform: uppercase;
			box-shadow: 0 4px 15px rgba(3, 125, 93, 0.3);
			transition: all 0.3s ease;
			padding: 12px 40px !important;
			position: relative;
			overflow: hidden;
		}
		.story-section .btn-primary span,
		.story-section .btn-primary {
			position: relative;
			z-index: 1;
		}
		
		/* Responsive Navigation Arrows */
		.carousel-nav-left,
		.carousel-nav-right {
			display: none; /* Hidden by default on mobile */
		}
		
		/* Show arrows on medium screens and larger */
		@media (min-width: 768px) {
			.carousel-nav-left,
			.carousel-nav-right {
				display: block;
			}
		}
		
		/* Adjust positioning for different screen sizes */
		@media (min-width: 768px) and (max-width: 991px) {
			.carousel-nav-left {
				left: -50px;
			}
			.carousel-nav-right {
				right: -50px;
			}
		}
		
		@media (min-width: 992px) {
			.carousel-nav-left {
				left: -60px;
			}
			.carousel-nav-right {
				right: -60px;
			}
		}

		/* Pure CSS slider (radio-based) */
		.sustainability-slider {
			position: relative;
			min-height: 400px;
		}
		.sustainability-slider .slides {
			display: grid;
			grid-template-columns: 100%;
			position: relative;
			min-height: 400px;
		}
		.sustainability-slider input[type="radio"] {
			display: none;
		}
		.sustainability-slide {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			opacity: 0;
			transform: scale(0.98);
			transition: opacity 300ms ease, transform 300ms ease;
			width: 100%;
		}
		.sustainability-slide .img {
			display: block;
			width: 100%;
			height: 400px;
			background-size: cover;
			background-position: center;
			position: relative;
			border-radius: 8px;
		}
		.sustainability-slide .text {
			position: absolute;
			bottom: 16px;
			left: 16px;
			right: auto;
			background: rgba(0,0,0,0.6);
			padding: 10px 14px;
			border-radius: 6px;
		}
		.sustainability-slide .text h3 {
			color: #fff;
			margin: 0;
			font-size: 1.1rem;
			text-align: left;
		}
		/* Default show first slide */
		#sustainability-1:checked ~ .slides .slide-1,
		#sustainability-2:checked ~ .slides .slide-2,
		#sustainability-3:checked ~ .slides .slide-3,
		#sustainability-4:checked ~ .slides .slide-4,
		#sustainability-5:checked ~ .slides .slide-5 { opacity: 1; transform: scale(1); position: relative; }

		/* Arrow Navigation */
		.sustainability-arrows label {
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			z-index: 10;
			background: rgba(255, 255, 255, 0.9);
			border: none;
			border-radius: 50%;
			width: 50px;
			height: 50px;
			display: flex;
			align-items: center;
			justify-content: center;
			cursor: pointer;
			transition: background 200ms ease, transform 200ms ease;
			font-size: 20px;
			color: #037d5d;
			margin: 0;
		}
		.sustainability-arrows label:hover {
			background: #037d5d;
			color: #fff;
			transform: translateY(-50%) scale(1.1);
		}
		.sustainability-arrow-left label {
			left: 20px;
		}
		.sustainability-arrow-right label {
			right: 20px;
		}
		/* Hide all arrow labels by default */
		.sustainability-arrows label {
			display: none;
		}
		/* Show appropriate left arrow based on current slide (infinite loop) */
		#sustainability-1:checked ~ .sustainability-arrow-left .arrow-left-1,
		#sustainability-2:checked ~ .sustainability-arrow-left .arrow-left-2,
		#sustainability-3:checked ~ .sustainability-arrow-left .arrow-left-3,
		#sustainability-4:checked ~ .sustainability-arrow-left .arrow-left-4,
		#sustainability-5:checked ~ .sustainability-arrow-left .arrow-left-5 { display: flex; }
		/* Show appropriate right arrow based on current slide (infinite loop) */
		#sustainability-1:checked ~ .sustainability-arrow-right .arrow-right-1,
		#sustainability-2:checked ~ .sustainability-arrow-right .arrow-right-2,
		#sustainability-3:checked ~ .sustainability-arrow-right .arrow-right-3,
		#sustainability-4:checked ~ .sustainability-arrow-right .arrow-right-4,
		#sustainability-5:checked ~ .sustainability-arrow-right .arrow-right-5 { display: flex; }

		/* Dots */
		.sustainability-dots {
			display: flex;
			gap: 8px;
			justify-content: center;
			margin-top: 16px;
			position: relative;
			z-index: 5;
		}
		.sustainability-dots label {
			width: 10px;
			height: 10px;
			border-radius: 50%;
			background: #d0d0d0;
			cursor: pointer;
			transition: background 200ms ease, transform 200ms ease;
		}
		#sustainability-1:checked ~ .sustainability-dots label[for="sustainability-1"],
		#sustainability-2:checked ~ .sustainability-dots label[for="sustainability-2"],
		#sustainability-3:checked ~ .sustainability-dots label[for="sustainability-3"],
		#sustainability-4:checked ~ .sustainability-dots label[for="sustainability-4"],
		#sustainability-5:checked ~ .sustainability-dots label[for="sustainability-5"] { background: #037d5d; transform: scale(1.1); }

		/* Mobile adjustments to prevent arrow and text overlap */
		@media (max-width: 767px) {
			.sustainability-arrow-left label {
				left: 10px;
				width: 40px;
				height: 40px;
				font-size: 16px;
			}
			.sustainability-arrow-right label {
				right: 10px;
				width: 40px;
				height: 40px;
				font-size: 16px;
			}
			.sustainability-slide .text {
				bottom: 10px;
				left: 10px;
				right: 60px; /* Leave space for right arrow */
				padding: 8px 12px;
				max-width: calc(100% - 70px); /* Prevent text from going under arrow */
			}
			.sustainability-slide .text h3 {
				font-size: 1rem;
			}
			.sustainability-slide .text p {
				font-size: 0.85rem;
			}
		}
	</style>

</head>
<body>
	<!-- Navigation Menu -->
	<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light position-fixed" id="ftco-navbar">
		<!-- Brand Logo and Name -->
		<div class="container">
			<a class="navbar-brand" href="/">Triphita Beta<span>Eco Stays and More</span></a>
			<!-- Mobile Menu Toggle Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<!-- Navigation Links -->
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<!-- Active state for current page -->
					<li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="/destination" class="nav-link">Stays</a></li>
					<li class="nav-item"><a href="/destination" class="nav-link">Experience</a></li>
					<li class="nav-item"><a href="/blogs" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<div class="hero-wrap" style="background-image: url('images/kkc-vibe-top.jpg'); padding-top: 100px; margin-top: 50px;">
		{{-- <div class="overlay"></div> --}}
		<div class="container">
		  <div class="row justify-content-center align-items-center" style="height: 100%;">
			<div class="col-md-10 text-center">
			  <h2 class="hero-wrap-title">Discover Your Favorite Place with Us</h2>
			  <p>Travel to the corner of the world, sustainably</p>
			</div>

		  </div>
		</div>
	  </div>
	<!-- <section class="ftco-section ftco-no-pb ftco-no-pt" id="search-section" style="margin-top: 50px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="ftco-search">
						<style>
							:root {
								--ldg-psb-background: #ffffff;
								--ldg-psb-border-radius: 0.42em;
								--ldg-psb-box-shadow: 0px 24px 54px 0px rgba(0, 0, 0, 0.1);
								--ldg-psb-padding: 14px;
								--ldg-psb-input-background: #ffffff;
								--ldg-psb-button-border-radius: 3.58em;
								--ldg-psb-color-primary: #037d5d;
								--ldg-psb-color-primary-lighter:#81beae;
								--ldg-psb-color-primary-darker: #023f2f;
								--ldg-psb-color-primary-contrast: #ffffff;
								--ldg-semantic-color-primary:  #037d5d;
								--ldg-semantic-color-primary-lighter: #81beae;
								--ldg-semantic-color-primary-darker: #023f2f;
								--ldg-semantic-color-primary-contrast: #ffffff;
								--ldg-component-modal-z-index: 999;
							}
							#lodgify-search-bar {
							  position: relative;
							  z-index: 999;
							  width:100%;
							}
						  </style>
						  <div
							id="lodgify-search-bar"
							data-website-id="558326"
							data-language-code="en"
							data-search-page-url='/destination'
							
							data-dates-check-in-label='Check-in'
							data-dates-check-out-label='Check-out'
							data-guests-counter-label='Guests'
							data-guests-input-singular-label='guest'
							data-guests-input-plural-label='guests'
							data-location-input-label='Search Stays'
							data-search-button-label='Search'
							data-dates-input-min-stay-tooltip-text='{"one":"Minimum {minStay} night","other":"Minimum {minStay} nights"}'
							data-guests-breakdown-label='Guests'
							data-adults-label='{"one":"adult","other":"adults"}'
							data-adults-description='Ages {minAge} or above'
							data-children-label='{"one":"child","other":"children"}'
							data-children-description='Ages {minAge}-{maxAge}'
							data-children-not-allowed-label='Not suitable for children'
							data-infants-label='{"one":"infant","other":"infants"}'
							data-infants-description='Under {maxAge}'
							data-infants-not-allowed-label='Not suitable for infants'
							data-pets-label='{"one":"pet","other":"pets"}'
							data-pets-not-allowed-label='Not allowed'
							data-done-label='Done'
							
							data-new-tab="false"
							data-version="stable"
							data-has-guests-breakdown
						  ></div>
						  
						<!-- <script>
							document.addEventListener('DOMContentLoaded', function() {
								// Force re-initialization of Lodgify search bar
								if (window.LodgifySearchBar) {
									window.LodgifySearchBar.init();
								}
							});
						</script> -->
					</div>
				</div>
			</div>
		</div>
	</section> -->

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
				<!-- Services Section - Displays Sustainable Accommodation and Tours side by side -->
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

				<!-- Sustainable Tours Box -->
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

	<section class="ftco-section img ftco-select-destination">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<!-- <span class="subheading">Why Triphita</span> -->
					<h2 class="mb-4">Why Triphita</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sustainability-slider ftco-animate" id="sustainability-carousel">
						<input type="radio" name="sustainability" id="sustainability-1" checked>
						<input type="radio" name="sustainability" id="sustainability-2">
						<input type="radio" name="sustainability" id="sustainability-3">
						<input type="radio" name="sustainability" id="sustainability-4">
						<input type="radio" name="sustainability" id="sustainability-5">

						<!-- Left Arrow Navigation (goes to previous slide - infinite loop) -->
						<div class="sustainability-arrows sustainability-arrow-left">
							<label for="sustainability-5" class="arrow-left-1"><i class="fa fa-chevron-left"></i></label>
							<label for="sustainability-1" class="arrow-left-2"><i class="fa fa-chevron-left"></i></label>
							<label for="sustainability-2" class="arrow-left-3"><i class="fa fa-chevron-left"></i></label>
							<label for="sustainability-3" class="arrow-left-4"><i class="fa fa-chevron-left"></i></label>
							<label for="sustainability-4" class="arrow-left-5"><i class="fa fa-chevron-left"></i></label>
						</div>

						<!-- Right Arrow Navigation (goes to next slide - infinite loop) -->
						<div class="sustainability-arrows sustainability-arrow-right">
							<label for="sustainability-2" class="arrow-right-1"><i class="fa fa-chevron-right"></i></label>
							<label for="sustainability-3" class="arrow-right-2"><i class="fa fa-chevron-right"></i></label>
							<label for="sustainability-4" class="arrow-right-3"><i class="fa fa-chevron-right"></i></label>
							<label for="sustainability-5" class="arrow-right-4"><i class="fa fa-chevron-right"></i></label>
							<label for="sustainability-1" class="arrow-right-5"><i class="fa fa-chevron-right"></i></label>
						</div>

						<div class="slides">
							<div class="sustainability-slide slide-1">
								<div class="img" style="background-image: url('/images/clean-energy-and-transportation.jpg');">
									<div class="text">
										<h3>Locally Owned, Human Connection</h3>
										<p style="margin-top: 6px; font-size: 0.95rem; color: #ffffffcc;">
											Every stay is owned by local hosts, bringing authentic stories, culture, and community warmth to your journey.
										</p>
									</div>
								</div>
							</div>
							<div class="sustainability-slide slide-2">
								<div class="img" style="background-image: url('images/water-conservation-and-management.jpg');">
									<div class="text">
										<h3>Visible Sustainability, Real Impact</h3>
										<p style="margin-top: 6px; font-size: 0.95rem; color: #ffffffcc;">
											From solar water heating to plastic-free amenities, our properties practice sustainability you can see and feel — not just talk about.
										</p>
									</div>
								</div>
							</div>
							<div class="sustainability-slide slide-3">
								<div class="img" style="background-image: url('images/sustainable-food-systems.jpg');">
									<div class="text">
										<h3>Micro-Scale Comfort</h3>
										<p style="margin-top: 6px; font-size: 0.95rem; color: #ffffffcc;">
										Ten rooms or fewer means peaceful stays, personal attention, and low-impact travel without sacrificing comfort.
										</p>
									</div>
								</div>
							</div>
							<div class="sustainability-slide slide-4">
								<div class="img" style="background-image: url('images/waste-reduction-and-recycling.jpg');">
									<div class="text">
										<h3>Transparent & Hassle-Free</h3>
										<p style="margin-top: 6px; font-size: 0.95rem; color: #ffffffcc;">
										charges, no surprises — just straightforward, stress-free bookings.
										</p>
									</div>
								</div>
							</div>
							<div class="sustainability-slide slide-5">
								<div class="img" style="background-image: url('images/sustainable-materials-and-products.jpg');">
									<div class="text">
										<h3>Travel That Gives Back</h3>
										<p style="margin-top: 6px; font-size: 0.95rem; color: #ffffffcc;">
										Your stay directly supports local livelihoods and helps protect Indonesia’s natural and cultural heritage.
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="sustainability-dots">
							<label for="sustainability-1"></label>
							<label for="sustainability-2"></label>
							<label for="sustainability-3"></label>
							<label for="sustainability-4"></label>
							<label for="sustainability-5"></label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Destination</span>
					<h2 class="mb-4">Featured Stays</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<!-- Property Image with Price Tag -->
						<a href="https://booking.triphita.com/en/kampung-kopi-camp1" class="img" style="background-image: url(images/kkc-fire.jpg);">
							<span class="price">$550/person</span>
						</a>
						<!-- Property Details -->
						<div class="text p-4">
							<!-- Property Name -->
							<h3><a href="https://booking.triphita.com/en/kampung-kopi-camp1">Kampung Kopi Camp</a></h3>
							<!-- Location with Icon -->
							<p class="location"><span class="fa fa-map-marker"></span> Pupuan, Tabanan, Bali</p>
							<!-- Amenity Icons -->
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-mountains"></span>Near Mountain</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="https://booking.triphita.com/en/kampung-kopi-camp1" class="img" style="background-image: url(images/kkc-sunrise.jpg);">
							<span class="price">$550/person</span>
						</a>
						<div class="text p-4">
							<h3><a href="https://booking.triphita.com/en/kampung-kopi-camp1">Kampung Kopi Camp</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Pupuan, Tabanan, Bali</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-sun-umbrella"></span>Near Mountain</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="https://booking.triphita.com/en/kampung-kopi-camp1" class="img" style="background-image: url(images/kkc-sunset.jpg);">
							<span class="price">$550/person</span>
						</a>
						<div class="text p-4">
							<h3><a href="https://booking.triphita.com/en/kampung-kopi-camp1">Kampung Kopi Camp</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Pupuan, Tabanan, Bali</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-sun-umbrella"></span>Near Mountain</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="https://booking.triphita.com/en/kampung-kopi-camp1" class="img" style="background-image: url(images/kkc-welcome.jpg);">
							<span class="price">$550/person</span>
						</a>
						<div class="text p-4">
							<h3><a href="https://booking.triphita.com/en/kampung-kopi-camp1">Kampung Kopi Camp</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Pupuan, Tabanan, Bali</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-sun-umbrella"></span>Near Mountain</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="https://booking.triphita.com/en/kampung-kopi-camp1" class="img" style="background-image: url(images/kkc-jeep-tour.jpg);">
							<span class="price">$550/person</span>
						</a>
						<div class="text p-4">
							<h3><a href="https://booking.triphita.com/en/kampung-kopi-camp1">Kampung Kopi Camp</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Pupuan, Tabanan, Bali</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-sun-umbrella"></span>Near Mountain</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="https://booking.triphita.com/en/kampung-kopi-camp1" class="img" style="background-image: url(images/kkc-sustainable-stays.jpg);">
							<span class="price">$550/person</span>
						</a>
						<div class="text p-4">
							<h3><a href="https://booking.triphita.com/en/kampung-kopi-camp1">Kampung Kopi Camp</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Pupuan, Tabanan, Bali</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-sun-umbrella"></span>Near Mountain</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	<section class="ftco-section ftco-about img"style="background-image: url(images/kkc-welcome.jpg);">
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

	<section class="ftco-section ftco-about ftco-no-pt img">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-12 about-intro">
					<div class="row">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_1.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<span class="subheading">Testimonial</span>
					<h2 class="mb-4">Tourist Feedback</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<p class="star">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</p>
									<p class="mb-4">Triphita made it so easy to find a beautiful, eco-friendly stay that aligned with my values.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/profile-photo-icon.png)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Visitor</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<p class="star">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</p>
									<p class="mb-4">Every part of the trip felt intentional and meaningful — it’s travel with heart.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/profile-photo-icon.png)"></div>
										<div class="pl-3">
											<p class="name">Dimas R.</p>
											<span class="position">Visitor</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<p class="star">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</p>
									<p class="mb-4">Thanks to Triphita, I discovered hidden gems and stayed in places that truly care about sustainability.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/profile-photo-icon.png)"></div>
										<div class="pl-3">
											<p class="name">Lana T.</p>
											<span class="position">Visitor</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


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
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
						</a>
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
							<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
						</a>
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
							<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
						</a>
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
							<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
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
					<div class="img"  style="background-image: url(images/bg_2.jpg);">
						<div class="overlay"></div>
						<h2>We Are Triphita An Eco Stays and More </h2>
						<p>We will make your days unforgettable and truly sustainable</p>
						<p class="mb-0"><a href="/destination" class="btn btn-primary px-4 py-3">Book Now</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
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
				  <li><a href="about.html" class="py-2 d-block">About Us</a></li>
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