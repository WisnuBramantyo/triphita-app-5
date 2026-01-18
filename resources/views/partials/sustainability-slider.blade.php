@php
$slides = [
	[
		'id' => 1,
		'image' => '/images/clean-energy-and-transportation.jpg',
		'title' => 'Locally Owned, Human Connection',
		'description' => 'Every stay is owned by local hosts, bringing authentic stories, culture, and community warmth to your journey.'
	],
	[
		'id' => 2,
		'image' => 'images/water-conservation-and-management.jpg',
		'title' => 'Visible Sustainability, Real Impact',
		'description' => 'From solar water heating to plastic-free amenities, our properties practice sustainability you can see and feel — not just talk about.'
	],
	[
		'id' => 3,
		'image' => 'images/sustainable-food-systems.jpg',
		'title' => 'Micro-Scale Comfort',
		'description' => 'Ten rooms or fewer means peaceful stays, personal attention, and low-impact travel without sacrificing comfort.'
	],
	[
		'id' => 4,
		'image' => 'images/waste-reduction-and-recycling.jpg',
		'title' => 'Transparent & Hassle-Free',
		'description' => 'charges, no surprises — just straightforward, stress-free bookings.'
	],
	[
		'id' => 5,
		'image' => 'images/sustainable-materials-and-products.jpg',
		'title' => 'Travel That Gives Back',
        'description' => 'Your stay directly supports local livelihoods and helps protect Indonesia\'s natural and cultural heritage.'
	]
];
@endphp

<section class="ftco-section img ftco-select-destination">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Why Triphita</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="sustainability-slider ftco-animate" id="sustainability-carousel">
					@foreach($slides as $slide)
						<input type="radio" name="sustainability" id="sustainability-{{ $slide['id'] }}" @if($slide['id'] === 1) checked @endif>
					@endforeach

					<!-- Left Arrow Navigation -->
					<div class="sustainability-arrows sustainability-arrow-left">
						@foreach($slides as $index => $slide)
							@php
								$prevId = $index === 0 ? count($slides) : $slide['id'] - 1;
							@endphp
							<label for="sustainability-{{ $prevId }}" class="arrow-left-{{ $slide['id'] }}"><i class="fa fa-chevron-left"></i></label>
						@endforeach
					</div>

					<!-- Right Arrow Navigation -->
					<div class="sustainability-arrows sustainability-arrow-right">
						@foreach($slides as $index => $slide)
							@php
								$nextId = $index === count($slides) - 1 ? 1 : $slide['id'] + 1;
							@endphp
							<label for="sustainability-{{ $nextId }}" class="arrow-right-{{ $slide['id'] }}"><i class="fa fa-chevron-right"></i></label>
						@endforeach
					</div>

					<div class="slides">
						@foreach($slides as $slide)
							<div class="sustainability-slide slide-{{ $slide['id'] }}">
								<div class="img" style="background-image: url('{{ $slide['image'] }}');">
									<div class="text">
										<h3>{{ $slide['title'] }}</h3>
										<p style="margin-top: 6px; font-size: 0.95rem; color: #ffffffcc;">{{ $slide['description'] }}</p>
									</div>
								</div>
							</div>
						@endforeach
					</div>

					<div class="sustainability-dots">
						@foreach($slides as $slide)
							<label for="sustainability-{{ $slide['id'] }}"></label>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

