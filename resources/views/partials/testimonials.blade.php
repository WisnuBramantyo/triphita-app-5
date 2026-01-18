@php
$testimonials = [
	[
		'rating' => 5,
		'text' => 'Triphita made it so easy to find a beautiful, eco-friendly stay that aligned with my values.',
		'name' => 'Roger Scott',
		'position' => 'Visitor'
	],
	[
		'rating' => 5,
		'text' => 'Every part of the trip felt intentional and meaningful — it\'s travel with heart.',
		'name' => 'Dimas R.',
		'position' => 'Visitor'
	],
	[
		'rating' => 5,
		'text' => 'Thanks to Triphita, I discovered hidden gems and stayed in places that truly care about sustainability.',
		'name' => 'Lana T.',
		'position' => 'Visitor'
	]
];
@endphp

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
					@foreach($testimonials as $testimonial)
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<p class="star">
										@for($i = 0; $i < $testimonial['rating']; $i++)
											<span class="fa fa-star"></span>
										@endfor
									</p>
									<p class="mb-4">{{ $testimonial['text'] }}</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/profile-photo-icon.png)"></div>
										<div class="pl-3">
											<p class="name">{{ $testimonial['name'] }}</p>
											<span class="position">{{ $testimonial['position'] }}</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>

