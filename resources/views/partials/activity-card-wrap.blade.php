{{-- Shared activity list card (same on /activities and homepage featured carousel) --}}
<div class="project-wrap">
	<a href="{{ route('activities.show', $activity['id']) }}" class="img" style="background-image: url('{{ asset(ltrim($activity['image'] ?? 'images/destination-1.jpg', '/')) }}');">
		@if(!empty($activity['badge']))
			<span class="activity-badge">{{ $activity['badge'] }}</span>
		@endif
		<span class="price">From Rp {{ number_format($activity['price_from'] ?? 0, 0, ',', '.') }}</span>
	</a>
	<div class="text p-4">
		<span class="days">{{ $activity['duration'] ?? '—' }}</span>
		<h3><a href="{{ route('activities.show', $activity['id']) }}">{{ $activity['title'] ?? 'Activity' }}</a></h3>
		<p class="location"><span class="fa fa-map-marker"></span> {{ $activity['location'] ?? '—' }}</p>
		<div class="mt-2">
			@if(!empty($activity['discount_percent']))
				<span class="activity-discount">{{ $activity['discount_percent'] }}% off</span>
				<span class="activity-price-original">Rp {{ number_format($activity['price_original'] ?? $activity['price_from'], 0, ',', '.') }}</span>
			@endif
			<span class="activity-price-from">Rp {{ number_format($activity['price_from'] ?? 0, 0, ',', '.') }}</span>
			<span class="text-muted small">/ person</span>
		</div>
	</div>
</div>
