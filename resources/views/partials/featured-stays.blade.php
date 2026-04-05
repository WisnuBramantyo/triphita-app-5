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
							<div class="activity-card ftco-animate">
								@include('partials.activity-card-wrap', ['activity' => $activity])
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
