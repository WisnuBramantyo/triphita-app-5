@php
$featuredStays = [
	[
		'url' => '/activities/1',
		'image' => 'images/kkc-fire.jpg',
		'price' => '$550/person',
		'name' => 'Kampung Kopi Camp',
		'location' => 'Pupuan, Tabanan, Bali',
		'amenities' => [
			['icon' => 'flaticon-shower', 'text' => '2'],
			['icon' => 'flaticon-king-size', 'text' => '3'],
			['icon' => 'flaticon-mountains', 'text' => 'Near Mountain']
		]
	],
	[
		'url' => '/activities/1',
		'image' => 'images/kkc-sunrise.jpg',
		'price' => '$550/person',
		'name' => 'Kampung Kopi Camp',
		'location' => 'Pupuan, Tabanan, Bali',
		'amenities' => [
			['icon' => 'flaticon-shower', 'text' => '2'],
			['icon' => 'flaticon-king-size', 'text' => '3'],
			['icon' => 'flaticon-sun-umbrella', 'text' => 'Near Mountain']
		]
	],
	[
		'url' => '/activities/1',
		'image' => 'images/kkc-sunset.jpg',
		'price' => '$550/person',
		'name' => 'Kampung Kopi Camp',
		'location' => 'Pupuan, Tabanan, Bali',
		'amenities' => [
			['icon' => 'flaticon-shower', 'text' => '2'],
			['icon' => 'flaticon-king-size', 'text' => '3'],
			['icon' => 'flaticon-sun-umbrella', 'text' => 'Near Mountain']
		]
	],
	[
		'url' => '/activities/1',
		'image' => 'images/kkc-welcome.jpg',
		'price' => '$550/person',
		'name' => 'Kampung Kopi Camp',
		'location' => 'Pupuan, Tabanan, Bali',
		'amenities' => [
			['icon' => 'flaticon-shower', 'text' => '2'],
			['icon' => 'flaticon-king-size', 'text' => '3'],
			['icon' => 'flaticon-sun-umbrella', 'text' => 'Near Mountain']
		]
	],
	[
		'url' => '/activities/1',
		'image' => 'images/kkc-jeep-tour.jpg',
		'price' => '$550/person',
		'name' => 'Kampung Kopi Camp',
		'location' => 'Pupuan, Tabanan, Bali',
		'amenities' => [
			['icon' => 'flaticon-shower', 'text' => '2'],
			['icon' => 'flaticon-king-size', 'text' => '3'],
			['icon' => 'flaticon-sun-umbrella', 'text' => 'Near Mountain']
		]
	],
	[
		'url' => '/activities/1',
		'image' => 'images/kkc-sustainable-stays.jpg',
		'price' => '$550/person',
		'name' => 'Kampung Kopi Camp',
		'location' => 'Pupuan, Tabanan, Bali',
		'amenities' => [
			['icon' => 'flaticon-shower', 'text' => '2'],
			['icon' => 'flaticon-king-size', 'text' => '3'],
			['icon' => 'flaticon-sun-umbrella', 'text' => 'Near Mountain']
		]
	]
];
@endphp

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<span class="subheading">Destination</span>
				<h2 class="mb-4">Featured Stays</h2>
			</div>
		</div>
		<div class="row">
			@foreach($featuredStays as $stay)
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="{{ $stay['url'] }}" class="img" style="background-image: url({{ $stay['image'] }});">
							<span class="price">{{ $stay['price'] }}</span>
						</a>
						<div class="text p-4">
							<h3><a href="{{ $stay['url'] }}">{{ $stay['name'] }}</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> {{ $stay['location'] }}</p>
							<ul>
								@foreach($stay['amenities'] as $amenity)
									<li><span class="{{ $amenity['icon'] }}"></span>{{ $amenity['text'] }}</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>

