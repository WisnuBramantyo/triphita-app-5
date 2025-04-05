<!DOCTYPE html>
<html lang="en">
<head>
	<title>Triphita</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
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

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
	</style>

</head>
<body>
	<!-- Navigation Menu -->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light position-sticky" id="ftco-navbar">
		<!-- Brand Logo and Name -->
		<div class="container">
			<a class="navbar-brand" href="/">Triphita Beta<span>Eco Stays and Tours</span></a>
			<!-- Mobile Menu Toggle Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<!-- Navigation Links -->
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<!-- Active state for current page -->
					<li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="destination" class="nav-link">Tour</a></li>
					<li class="nav-item"><a href="hotel" class="nav-link">Hotel</a></li>
					<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	
	<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_5.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
				<div class="col-md-7 ftco-animate">
					<h1 class="mb-4">Discover Your Favorite Place with Us</h1>
					<p class="caps">Travel to the corner of the world, sustainably</p>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section ftco-no-pb ftco-no-pt" id="search-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="ftco-search d-flex justify-content-center">
						<!-- Tab Navigation -->
						<div class="row">
							<div class="col-md-12 nav-link-wrap">
								<div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									<!-- Hotel Search Tab Button -->
									<a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Search Hotel</a>

									<!-- Tour Search Tab Button -->
									<a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Search Tour</a>

								</div>
							</div>
							<div class="col-md-12 tab-wrap">
								
								<div class="tab-content" id="v-pills-tabContent">
									<!-- Hotel Search Form -->
									<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
										<form action="{{ route('hotel.search') }}" method="GET" class="search-property-1">
											<div class="row no-gutters">
												<div class="col-md d-flex">
													<div class="form-group p-4 border-0">
														<label for="hotel">Destination</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-search"></span></div>
															<input type="text" class="form-control" id="hotel" name="hotel" value="{{ request('hotel') }}" placeholder="Search hotel">
														</div>
													</div>
												</div>

												<div class="col-lg d-flex">
													<div class="form-group p-4">
														<label for="#">Check-in date</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-calendar"></span></div>
															<input type="text" class="form-control checkin_date" placeholder="Check In Date">
														</div>
													</div>
												</div>
												<div class="col-lg d-flex">
													<div class="form-group p-4">
														<label for="#">Check-out date</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-calendar"></span></div>
															<input type="text" class="form-control checkout_date" placeholder="Check Out Date">
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group p-4">
														<label for="rooms">Room</label>
														<div class="form-field">
															<div class="select-wrap">
																<div class="icon"><span class="fa fa-chevron-down"></span></div>
																<select id="rooms" name="rooms" class="form-control">
																	<option value="">1</option>
																	<option value="">2</option>
																	<option value="">3</option>
																	<option value="">4</option>
																	<option value="">5</option>
																	<option value="">More than 5</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												
												<div class="col-md d-flex">
													<div class="form-group d-flex w-100 border-0">
														<div class="form-field w-100 align-items-center d-flex">
															<input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary">
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>

									<!-- Tour Search Form -->
									<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
										<form action="{{ route('destination.search') }}" method="GET" class="search-property-1">
											<div class="row no-gutters">
												<div class="col-lg d-flex">
													<div class="form-group p-4 border-0">
														<label for="#">Tour Destination</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-search"></span></div>
															<input type="text" class="form-control" id="destination" name="destination" value="{{ request('destination') }}" placeholder="Search place">
														</div>
													</div>
												</div>
												<div class="col-lg d-flex">
													<div class="form-group p-4">
														<label for="#">Check-in date</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-calendar"></span></div>
															<input type="text" class="form-control checkin_date" placeholder="Check In Date">
														</div>
													</div>
												</div>
												<div class="col-lg d-flex">
													<div class="form-group p-4">
														<label for="#">Check-out date</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-calendar"></span></div>
															<input type="text" class="form-control checkout_date" placeholder="Check Out Date">
														</div>
													</div>
												</div>

												<div class="col-lg d-flex">
													<div class="form-group d-flex w-100 border-0">
														<div class="form-field w-100 align-items-center d-flex">
															<input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary">
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section services-section">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4 font-weight-bold" style="font-size: 2.5em;">Welcome to Triphita</h2>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
					<div class="w-100" style="text-align: justify; font-size: 1.1em;">
						<p>Our story begins on the paradise island of Bali, a land once celebrated for its rich culture, untouched nature, and vibrant traditions. From its breathtaking beaches to its mesmerizing dances, intricate crafts, and the warm smiles of its people, Bali was a true haven for the soul. </p>
						<p>But time has taken its toll. Overtourism has stripped away much of this romance. What was once a lush paradise is now dotted with concrete jungles, plagued by traffic jams, and burdened by mounting waste. The beauty that enchanted the world is fading, and the magic of Bali risks becoming a memory.</p>
						<p>At Triphita, we believe it's not too late. We see an opportunity to reclaim the paradise that once was, step by step. Our vision begins with revolutionizing the way people travel and stay. By embracing sustainability, we're paving the way for a new era of conscious tourism that honors the land, respects its people, and protects its future. </p>
						<p>Join us in our mission to restore Bali to its natural glory. Together, we can rewrite the story of this beloved island—creating a blueprint for sustainable tourism that, one day, can inspire and spread to the rest of the world..</p>
						<p style="text-align: center;"><a href="#search-section" class="btn btn-primary py-3 px-4">Search Accommodation</a></p>
					</div>
				</div>
				<div class="col-md-6">
					<!-- Services Section - Displays Sustainable Accommodation and Tours -->
					<div class="row flex-column">
						<div class="col-md-12 mb-4">
							<div class="services services-1 color-1 d-block img" style="background-image: url(images/services-1.jpg);">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="flaticon-paragliding"></span>
								</div>
								<div class="media-body">
									<h3 class="heading mb-3">Sustainable Accommodation (Beta)</h3>
									<p>Stays in our curated eco-friendly accommodation, designed to blend comfort, sustainability, and local culture seamlessly.</p>
									<p>Each property adheres to our 8 sustainability criteria, ensuring your visit leaves a positive impact on the environment and community</p>
								</div>
							</div>      
						</div>

						<!-- Sustainable Tours Box -->
						<div class="col-md-12">
							<div class="services services-1 color-2 d-block img" style="background-image: url(images/services-2.jpg);">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="flaticon-route"></span>
								</div>
								<div class="media-body">
									<h3 class="heading mb-3">Sustainable Tours (Coming Soon)</h3>
									<p>Discover the beauty of nature and the richness of local culture with our fun and immersive tours.</p>
									<p>Designed to protect the environment and celebrate traditions, our tours ensure unforgettable experiences that leave a positive impact on the places you visit</p>
								</div>
							</div>    
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section img ftco-select-destination" style="background-image: url(images/bg_3.jpg);">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Our Sustainability Criteria</span>
					<h2 class="mb-4">Accommodation</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="carousel-destination owl-carousel ftco-animate">
						<!-- Individual Carousel Items with Hover Effect -->
						<div class="item">
							<div class="project-destination">
								<!-- Image with Hover Text -->
								<a class="img" style="background-image: url('/images/sustainable-materials.webp');">
									<div class="text">
										<!-- Title Always Visible -->
										<h3>Clean Energy and Transportation</h3>
										<!-- Description Shows on Hover -->
										<div class="hover-text" style="display: none; transition: all 0.3s ease;">
											<span>Focus on sustainable energy sources and eco-friendly transport solutions.</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="project-destination">
								<a class="img" style="background-image: url('images/energy-efficiency.webp');">
									<div class="text">
										<h3>Water Conservation and Management</h3>
										<div class="hover-text" style="display: none; transition: all 0.3s ease;">
											<span>Emphasize efficient use and preservation of water resources.</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="project-destination">
								<a class="img" style="background-image: url('images/water-conservation.png');">
									<div class="text">
										<h3>Sustainable Food Systems</h3>
										<div class="hover-text" style="display: none; transition: all 0.3s ease;">
											<span>Promote locally sourced, eco-friendly, and ethical food practices.</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="project-destination">
								<a class="img" style="background-image: url('images/waste-reduction.png');">
									<div class="text">
										<h3>Waste Reduction and Recycling</h3>
										<div class="hover-text" style="display: none; transition: all 0.3s ease;">
											<span>Commit to minimizing waste and implementing effective recycling programs.</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="project-destination">
								<a class="img" style="background-image: url('images/local-sourcing.jpg');">
									<div class="text">
										<h3>Sustainable Materials and Products</h3>
										<div class="hover-text" style="display: none; transition: all 0.3s ease;">
											<span>Encourage the use of eco-friendly building materials and non-toxic products, such as cleaning supplies.</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="project-destination">
								<a class="img" style="background-image: url('images/local-sourcing.jpg');">
									<div class="text">
										<h3>People and Community Well-being</h3>
										<div class="hover-text" style="display: none; transition: all 0.3s ease;">
											<span>Support local communities, fair practices, and employee welfare.</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="project-destination">
								<a class="img" style="background-image: url('images/local-sourcing.jpg');">
									<div class="text">
										<h3>Cultural Preservation and Enrichment</h3>
										<div class="hover-text" style="display: none; transition: all 0.3s ease;">
											<span>Uphold and celebrate local traditions, arts, and heritage.</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="project-destination">
								<a class="img" style="background-image: url('images/local-sourcing.jpg');">
									<div class="text">
										<h3>Sustainable Governance and Policies</h3>
										<div class="hover-text" style="display: none; transition: all 0.3s ease;">
											<span>Establish clear sustainability commitments, transparent policies, and compliance with regulations.</span>
										</div>
									</div>
								</a>
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
					<span class="subheading">Destination</span>
					<h2 class="mb-4">Featured Accommodation</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<!-- Property Image with Price Tag -->
						<a href="#" class="img" style="background-image: url(images/destination-1.jpg);">
							<span class="price">$550/person</span>
						</a>
						<!-- Property Details -->
						<div class="text p-4">
							<!-- Property Name -->
							<h3><a href="#">Banaue Rice Terraces</a></h3>
							<!-- Location with Icon -->
							<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
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
						<a href="#" class="img" style="background-image: url(images/destination-2.jpg);">
							<span class="price">$550/person</span>
						</a>
						<div class="text p-4">
							<h3><a href="#">Banaue Rice Terraces</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url(images/destination-3.jpg);">
							<span class="price">$550/person</span>
						</a>
						<div class="text p-4">
							<h3><a href="#">Banaue Rice Terraces</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url(images/destination-4.jpg);">
							<span class="price">$550/person</span>
						</a>
						<div class="text p-4">
							<h3><a href="#">Banaue Rice Terraces</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url(images/destination-5.jpg);">
							<span class="price">$550/person</span>
						</a>
						<div class="text p-4">
							<h3><a href="#">Banaue Rice Terraces</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url(images/destination-6.jpg);">
							<span class="price">$550/person</span>
						</a>
						<div class="text p-4">
							<h3><a href="#">Banaue Rice Terraces</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="ftco-section ftco-about img"style="background-image: url(images/bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container py-md-5">
			<div class="row py-md-5">
				<div class="col-md d-flex align-items-center justify-content-center">
					<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
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
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
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
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
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
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
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
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
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
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
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
						<h2>We Are Triphita An Eco Stays and Tours </h2>
						<p>We will make your days unforgettable and truly sustainable</p>
						<p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Book Now</a></p>
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
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft">
							<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md pt-5 border-left">
					<div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Information</h2>
						<ul class="list-unstyled">
							<li><a href="about.html" class="py-2 d-block">About Us</a></li>
							<li><a href="#" class="py-2 d-block">Online Enquiry</a></li>
							<li><a href="#" class="py-2 d-block">General Enquiries</a></li>
							<li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
							<li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
							<li><a href="#" class="py-2 d-block">Refund Policy</a></li>
							<li><a href="#" class="py-2 d-block">Call Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md pt-5 border-left">
					<div class="ftco-footer-widget pt-md-5 mb-4">
						<h2 class="ftco-heading-2">Experience</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Adventure</a></li>
							<li><a href="#" class="py-2 d-block">Hotel and Restaurant</a></li>
							<li><a href="#" class="py-2 d-block">Beach</a></li>
							<li><a href="#" class="py-2 d-block">Nature</a></li>
							<li><a href="#" class="py-2 d-block">Camping</a></li>
							<li><a href="#" class="py-2 d-block">Party</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md pt-5 border-left">
					<div class="ftco-footer-widget pt-md-5 mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
								<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
								<li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
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
	
</body>
</html>