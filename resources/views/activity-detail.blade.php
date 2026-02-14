<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ $activity->title }} - Triphita</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Tailwind CSS (load first) -->
	<script src="https://cdn.tailwindcss.com"></script>
	
	<!-- Project CSS Files (for navbar - load after Tailwind to override) -->
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
	
	<!-- Alpine.js -->
	<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
	
	<style>
		body {
			font-family: 'Plus Jakarta Sans', sans-serif;
		}
		
		.font-serif {
			font-family: 'Playfair Display', serif;
		}
		
		#main-image {
			transition: opacity 0.3s ease-in-out;
			}
		
		/* Custom backdrop blur for older browsers */
		.backdrop-blur-md {
			backdrop-filter: blur(12px);
			-webkit-backdrop-filter: blur(12px);
		}
		
		/* Green theme color */
		.bg-green-theme { background-color: #3cb372; }
		.bg-green-theme:hover { background-color: #2d8f5a; }
		.bg-green-theme-light { background-color: rgba(60, 179, 114, 0.1); }
		.bg-green-theme-lighter { background-color: rgba(60, 179, 114, 0.05); }
		.bg-green-theme-hover:hover { background-color: rgba(60, 179, 114, 0.15); }
		.text-green-theme { color: #3cb372; }
		.border-green-theme { border-color: #3cb372; }
		.border-green-theme-hover:hover { border-color: rgba(60, 179, 114, 0.3); }
	</style>
</head>
<body class="bg-white">
	<div class="min-h-screen bg-white">
		<!-- Hero Gallery -->
		<div class="relative" style="height: 70vh; overflow: hidden;" id="hero-gallery">
			<div class="absolute inset-0 transition-opacity duration-500" id="main-image-container">
				<img src="{{ $activity->images[0] }}" alt="{{ $activity->title }}" class="w-full h-full object-cover" id="main-image">
			</div>

			<div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent" style="background: linear-gradient(to top, rgba(0,0,0,0.7), rgba(0,0,0,0.2), transparent);"></div>

			<!-- Top Actions -->
			<div class="absolute top-6 left-6 right-6 flex justify-between items-center z-10">
				<a href="{{ url()->previous() ?: '/' }}" class="p-2 bg-white/10 backdrop-blur-md hover:bg-white/20 text-white rounded-full transition-all">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><path d="m15 18-6-6 6-6"/></svg>
				</a>
				<div class="flex gap-2">
					<button class="p-2 bg-white/10 backdrop-blur-md hover:bg-white/20 text-white rounded-full transition-all" onclick="toggleLike(this)">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5" id="heart-icon"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
					</button>
					<button class="p-2 bg-white/10 backdrop-blur-md hover:bg-white/20 text-white rounded-full transition-all">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"/><polyline points="16 6 12 2 8 6"/><line x1="12" x2="12" y1="2" y2="15"/></svg>
					</button>
				</div>
			</div>

			<!-- Navigation Arrows -->
			<button onclick="prevImage()" class="absolute left-4 top-1/2 transform -translate-y-1/2 p-3 bg-white/10 backdrop-blur-md hover:bg-white/20 rounded-full text-white transition-all z-10">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><path d="m15 18-6-6 6-6"/></svg>
			</button>
			<button onclick="nextImage()" class="absolute right-4 top-1/2 transform -translate-y-1/2 p-3 bg-white/10 backdrop-blur-md hover:bg-white/20 rounded-full text-white transition-all z-10">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><path d="m9 18 6-6-6-6"/></svg>
			</button>

			<!-- Thumbnails -->
			<div class="absolute bottom-0 left-0 right-0 flex gap-2 px-6 pb-20 z-10 overflow-x-auto">
				@foreach($activity->images as $index => $image)
				<button onclick="setCurrentImage({{ $index }})" class="relative flex-shrink-0 w-20 h-14 rounded-lg overflow-hidden border-2 transition-all thumbnail-btn {{ $index == 0 ? 'border-white' : 'border-transparent opacity-60 hover:opacity-100' }}" data-index="{{ $index }}">
					<img src="{{ $image }}" alt="" class="w-full h-full object-cover">
				</button>
				@endforeach
			</div>

			<!-- Video Button (moved after thumbnails to ensure proper z-index) -->
			<button onclick="openVideo()" class="absolute bottom-6 right-6 flex items-center gap-2 px-5 py-3 bg-white/10 backdrop-blur-md hover:bg-white/20 rounded-full text-white transition-all cursor-pointer" style="z-index: 20; pointer-events: auto;">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><polygon points="6 3 20 12 6 21 6 3"/></svg>
				<span class="font-medium">Watch Video</span>
			</button>
		</div>

		<!-- Content Section -->
		<div class="max-w-7xl mx-auto px-6 py-10">
			<div class="grid lg:grid-cols-3 gap-10">
				<div class="lg:col-span-2 space-y-10">
					<div>
						@php
							$categoryLabels = [
								'Tours' => 'Adventures',
								'Experiences' => 'Guided Tours',
								'Workshops' => 'Workshops & Classes',
							];
							$categoryLabel = $categoryLabels[$activity->category ?? ''] ?? ($activity->category ?? null);
						@endphp
						@if($categoryLabel)
						<div class="flex flex-wrap gap-2 mb-4">
							<span class="px-3 py-1 bg-green-theme-light text-green-theme rounded-full text-sm font-medium">{{ $categoryLabel }}</span>
						</div>
						@endif
						<h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4 leading-tight font-serif">
							{{ $activity->title }}
						</h1>
						<div class="flex flex-wrap items-center gap-6 text-gray-500">
							<div class="flex items-center gap-1.5">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-theme"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
								<span>{{ $activity->location }}</span>
							</div>
							<div class="flex items-center gap-1.5">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
								<span>{{ $activity->duration }}</span>
							</div>
							<div class="flex items-center gap-1.5">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="19" cy="11" r="3"/></svg>
								<span>{{ $activity->group_size }}</span>
							</div>
						</div>
					</div>

					<!-- Tabs -->
					<div x-data="{ tab: 'overview' }">
						<div class="flex bg-gray-100 p-1 rounded-full w-fit mb-8">
							<button @click="tab = 'overview'" :class="tab === 'overview' ? 'bg-white shadow-sm' : ''" class="px-6 py-2 rounded-full text-sm font-medium transition-all">Overview</button>
							<button @click="tab = 'facilities'" :class="tab === 'facilities' ? 'bg-white shadow-sm' : ''" class="px-6 py-2 rounded-full text-sm font-medium transition-all">Facilities</button>
						</div>

						<div x-show="tab === 'overview'" class="space-y-8" x-transition>
							<div>
								<h2 class="text-2xl font-bold mb-4 font-serif">About This Experience</h2>
								<div class="text-gray-600 leading-relaxed text-lg space-y-4">
									{!! nl2br(e($activity->description)) !!}
								</div>
							</div>

							<div>
								<h3 class="text-xl font-bold mb-4 font-serif">Highlights</h3>
								<ul class="grid md:grid-cols-2 gap-4">
									@foreach($activity->highlights as $highlight)
									<li class="flex items-start gap-3 p-4 bg-gray-50 rounded-xl border border-gray-100">
										<div class="p-1 bg-green-theme-light rounded-full">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-green-theme"><polyline points="20 6 9 17 4 12"/></svg>
										</div>
										<span class="text-gray-800">{{ $highlight }}</span>
									</li>
									@endforeach
								</ul>
							</div>
						</div>

						<div x-show="tab === 'facilities'" class="grid md:grid-cols-2 lg:grid-cols-3 gap-4" x-transition>
							@foreach($activity->facilities as $facility)
							<div class="p-6 bg-white border border-gray-100 rounded-2xl hover:shadow-xl transition-all group">
								<div class="p-3 bg-green-theme-lighter rounded-xl w-fit mb-4 group-hover:bg-green-theme-light transition-colors">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-theme"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
								</div>
								<h4 class="font-bold text-gray-900 mb-1">{{ $facility['name'] }}</h4>
								<p class="text-sm text-gray-500">{{ $facility['description'] }}</p>
							</div>
							@endforeach
						</div>
					</div>
				</div>

				<!-- Booking Sidebar -->
				<div class="lg:col-span-1">
					<div class="sticky top-6 space-y-4" x-data="{
						selectedPackage: '{{ $activity->packages[0]['id'] }}',
						tourName: {{ json_encode($activity->title) }},
						packages: {{ json_encode(array_map(fn($p) => ['id' => $p['id'], 'name' => $p['name'], 'price' => 'Rp ' . number_format($p['price'], 0, ',', '.')], $activity->packages)) }},
						getWhatsAppUrl() {
							const p = this.packages.find(x => x.id === this.selectedPackage) || this.packages[0];
							const msg = `Hello \nI'm interested in booking the following tour:\n\n Tour: ${this.tourName}\n Package: ${p.name}\n Price: ${p.price}\n\nCould you please help me with availability and booking details?\nThanks a lot!`;
							return 'https://wa.me/6287818653533?text=' + encodeURIComponent(msg);
						}
					}">
						<h3 class="text-xl font-bold mb-4 font-serif">Select Your Package</h3>
						
						@foreach($activity->packages as $package)
						<div 
							@click="selectedPackage = '{{ $package['id'] }}'"
							:class="selectedPackage === '{{ $package['id'] }}' ? 'border-green-theme bg-green-theme-lighter' : 'border-gray-200 bg-white'"
							class="relative p-6 rounded-2xl border-2 cursor-pointer transition-all border-green-theme-hover"
						>
							@if($package['popular'])
							<div class="absolute -top-3 left-4 px-3 py-1 bg-green-theme text-white text-xs font-bold rounded-full uppercase tracking-wider">
								Most Popular
							</div>
							@endif

							<div class="flex justify-between items-start mb-4">
								<div>
									<h4 class="font-bold text-lg text-gray-900">{{ $package['name'] }}</h4>
									<div class="flex items-baseline gap-2 mt-1">
										<span class="text-2xl font-bold text-gray-900">Rp {{ number_format($package['price'], 0, ',', '.') }}</span>
										<span class="text-sm text-gray-400 line-through">Rp {{ number_format($package['original_price'], 0, ',', '.') }}</span>
										<span class="text-xs text-gray-500">/person</span>
									</div>
								</div>
								<div :class="selectedPackage === '{{ $package['id'] }}' ? 'bg-green-theme border-green-theme' : 'border-gray-300'" class="w-6 h-6 rounded-full border-2 flex items-center justify-center transition-colors">
									<template x-if="selectedPackage === '{{ $package['id'] }}'">
										<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" class="text-white"><polyline points="20 6 9 17 4 12"/></svg>
									</template>
								</div>
							</div>

							<ul class="space-y-2">
								@foreach($package['features'] as $feature)
								<li class="flex items-center gap-2 text-sm text-gray-600">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-green-theme flex-shrink-0"><polyline points="20 6 9 17 4 12"/></svg>
									<span>{{ $feature }}</span>
								</li>
								@endforeach
							</ul>
						</div>
						@endforeach

						<a 
							:href="getWhatsAppUrl()"
							target="_blank"
							rel="noopener noreferrer"
							class="w-full py-5 bg-green-theme text-white text-lg font-bold rounded-xl mt-6 shadow-lg transition-all active:scale-95 block text-center"
						>
							Book Now
						</a>
						
						<p class="text-center text-sm text-gray-400">
							Free cancellation up to 24 hours before
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Video Modal -->
		<div id="video-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-black/90 backdrop-blur-sm">
			<div class="relative w-full max-w-5xl" style="aspect-ratio: 16/9; background: black; border-radius: 1.5rem; overflow: hidden; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);">
				<button onclick="closeVideo()" class="absolute top-4 right-4 p-2 bg-white/10 hover:bg-white/20 text-white rounded-full z-10 transition-all">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
				</button>
				<iframe id="video-iframe" class="w-full h-full" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>

	<script>
		const images = @json($activity->images);
		let currentIndex = 0;

		function setCurrentImage(index) {
			currentIndex = index;
			const mainImg = document.getElementById('main-image');
			mainImg.style.opacity = '0';
			
			setTimeout(() => {
				mainImg.src = images[currentIndex];
				mainImg.style.opacity = '1';
			}, 200);

			// Update thumbnails
			document.querySelectorAll('.thumbnail-btn').forEach((btn, i) => {
				if (i === index) {
					btn.classList.add('border-white');
					btn.classList.remove('border-transparent', 'opacity-60');
				} else {
					btn.classList.remove('border-white');
					btn.classList.add('border-transparent', 'opacity-60');
				}
			});
		}

		function nextImage() {
			currentIndex = (currentIndex + 1) % images.length;
			setCurrentImage(currentIndex);
		}

		function prevImage() {
			currentIndex = (currentIndex - 1 + images.length) % images.length;
			setCurrentImage(currentIndex);
		}

		function openVideo() {
			const modal = document.getElementById('video-modal');
			const iframe = document.getElementById('video-iframe');
			let videoUrl = "{{ $activity->video_url }}";
			
			// Convert YouTube Shorts URL to embed format
			if (videoUrl.includes('youtube.com/shorts/')) {
				const videoId = videoUrl.split('/shorts/')[1].split('?')[0];
				videoUrl = 'https://www.youtube.com/embed/' + videoId;
			} else if (videoUrl.includes('youtu.be/')) {
				const videoId = videoUrl.split('youtu.be/')[1].split('?')[0];
				videoUrl = 'https://www.youtube.com/embed/' + videoId;
			} else if (videoUrl.includes('youtube.com/watch?v=')) {
				const videoId = videoUrl.split('v=')[1].split('&')[0];
				videoUrl = 'https://www.youtube.com/embed/' + videoId;
			}
			
			iframe.src = videoUrl;
			modal.classList.remove('hidden');
			modal.classList.add('flex');
		}

		function closeVideo() {
			const modal = document.getElementById('video-modal');
			const iframe = document.getElementById('video-iframe');
			iframe.src = "";
			modal.classList.add('hidden');
			modal.classList.remove('flex');
		}

		function toggleLike(btn) {
			const icon = btn.querySelector('#heart-icon');
			const isLiked = icon.classList.contains('fill-red-500');
			
			if (isLiked) {
				icon.classList.remove('fill-red-500', 'text-red-500');
			} else {
				icon.classList.add('fill-red-500', 'text-red-500');
			}
		}
	</script>
	
	<!-- Project JavaScript Files (for navbar functionality) -->
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
	<script src="js/main.js"></script>
</body>
</html>
