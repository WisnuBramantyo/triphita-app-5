<section class="ftco-section featured-experiences-section">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Featured Experiences</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="featured-experiences-carousel owl-carousel">
					@foreach(($featuredActivities ?? []) as $activity)
						<div class="item">
							<div class="project-wrap">
								<a href="{{ route('activities.show', $activity['id']) }}" class="img" style="background-image: url('{{ asset(ltrim($activity['image'] ?? 'images/destination-1.jpg', '/')) }}');">
									<span class="price">Rp {{ number_format($activity['price_from'] ?? 0, 0, ',', '.') }}/person</span>
								</a>
								<div class="text p-4">
									<h3><a href="{{ route('activities.show', $activity['id']) }}">{{ $activity['title'] ?? 'Activity' }}</a></h3>
									<p class="location"><span class="fa fa-map-marker"></span> {{ $activity['location'] ?? 'Bali, Indonesia' }}</p>
									<ul>
										<li><span class="flaticon-mountains"></span>{{ $activity['duration'] ?? 'Flexible duration' }}</li>
										<li><span class="flaticon-king-size"></span>{{ $activity['category'] ?? 'Experience' }}</li>
										<li><span class="flaticon-shower"></span>{{ $activity['rating'] ?? '4.8' }} rating</li>
									</ul>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>

