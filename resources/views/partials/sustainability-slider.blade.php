@php
$slides = [
	[
		'id' => 1,
		'image' => '/images/clean-energy-and-transportation.jpg',
		'title' => 'Curated, Not Crowded',
		'description' => 'Every trip is thoughtfully designed,only experiences that respect people and place.'
	],
	[
		'id' => 2,
		'image' => 'images/water-conservation-and-management.jpg',
		'title' => 'Led by Local Experts',
		'description' => 'Our guided tours are hosted by locals and practitioners who share real stories, deep knowledge, and lived culture, not scripts.'
	],
	[
		'id' => 3,
		'image' => 'images/sustainable-food-systems.jpg',
		'title' => 'Adventure With Intention',
		'description' => 'From hikes to off-road journeys, our adventures reconnect you with nature while prioritizing safety, balance, and respect for the land.'
	],
	[
		'id' => 4,
		'image' => 'images/waste-reduction-and-recycling.jpg',
		'title' => 'Learn by Doing',
		'description' => 'Through hands-on workshops and classes, you don’t just watch culture, you take part in it, creating meaningful connection.'
	],
	[
		'id' => 5,
		'image' => 'images/sustainable-materials-and-products.jpg',
		'title' => 'Travel That Gives Back',
        'description' => 'Every experience supports local communities and sustainable practices, ensuring your journey creates positive impact beyond memories.'
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

