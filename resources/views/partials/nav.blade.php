<!-- Navigation Menu -->
<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light position-fixed" id="ftco-navbar">
	<div class="container">
		<a class="navbar-brand" href="/">Triphita<span>Journey, Memory, and Purpose</span></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>

		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="/" class="nav-link">Home</a></li>
				{{-- <li class="nav-item"><a href="/destination" class="nav-link">Stays</a></li> --}}
				<li class="nav-item {{ request()->is('activities*') ? 'active' : '' }}"><a href="{{ route('activities.index') }}" class="nav-link">Experience</a></li>
				<li class="nav-item"><a href="/blogs" class="nav-link">Blog</a></li>
				<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
			</ul>
		</div>
	</div>
</nav>
