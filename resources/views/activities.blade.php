<!DOCTYPE html>
<html lang="en">
<head>
  <title>Triphita - Tours & Activities</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <style>
    .activity-badge { background: #3cb372; color: #fff; font-size: 11px; font-weight: 700; text-transform: uppercase; padding: 4px 10px; border-radius: 4px; position: absolute; top: 44px; left: 12px; z-index: 2; }
    .activity-card .project-wrap .text .days { color: #3cb372; }
    .activity-card .project-wrap .text ul li span { color: #3cb372; }
    .activity-price-from { font-size: 18px; font-weight: 700; color: #333; }
    .activity-price-original { font-size: 14px; color: #999; text-decoration: line-through; margin-left: 6px; }
    .activity-discount { font-size: 12px; font-weight: 600; color: #3cb372; }
    .filter-sidebar .custom-control-label { cursor: pointer; }
    .booked-count { font-size: 12px; color: #666; }
    #ftco-navbar.ftco-navbar-light { position: relative; top: 0; }
    .activities-search-section { padding-top: 1.5rem; }

    .search-pill { display: flex; align-items: stretch; max-width: 720px; margin: 0 auto; border-radius: 9999px; overflow: hidden; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08); background: #fff; }
    .search-pill .search-pill-input-wrap { flex: 1; display: flex; align-items: center; padding: 0 1.25rem; background: #fff; border: 1px solid rgba(0, 0, 0, 0.08); border-right: none; border-radius: 9999px 0 0 9999px; }
    .search-pill .search-pill-input-wrap .fa { color: #999; margin-right: 0.5rem; font-size: 1rem; }
    .search-pill .search-pill-input-wrap input { border: none !important; background: transparent !important; padding: 0.875rem 0 !important; font-size: 1rem; color: #333 !important; flex: 1; min-width: 0; }
    .search-pill .search-pill-input-wrap input::placeholder { color: #999; }
    .search-pill .search-pill-btn { padding: 0 2rem; background: #3cb372 !important; color: #fff !important; border: none !important; border-radius: 0 9999px 9999px 0; font-weight: 600; font-size: 1rem; cursor: pointer; white-space: nowrap; }
    .search-pill .search-pill-btn:hover { background: #2d8f5a !important; color: #fff !important; }

    .category-pills { display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 0.5rem; padding: 0.75rem 1rem; background: #fff; border-radius: 9999px; box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08); max-width: fit-content; margin: 0 auto; }
    .category-pills .cat-pill { display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 9999px; text-decoration: none; color: #333; font-weight: 500; font-size: 0.875rem; transition: background 0.2s, color 0.2s; }
    .category-pills .cat-pill .cat-pill-icon { font-size: 1.25rem; margin-bottom: 0.25rem; color: #3cb372; }
    .category-pills .cat-pill:hover { background: rgba(60, 179, 114, 0.1); color: #333; }
    .category-pills .cat-pill.active { background: rgba(60, 179, 114, 0.2); color: #1d7043; }
    .category-pills .cat-pill.active .cat-pill-icon { color: #3cb372; }

    .activities-categories-section { padding-bottom: 0.5rem !important; }
    .activities-main-section { padding-top: 1.5rem !important; }

    .sort-mobile-btn { display: flex; align-items: center; justify-content: space-between; width: 100%; padding: 0.75rem 1rem; background: #fff; border: 1px solid rgba(0, 0, 0, 0.1); border-radius: 0.5rem; font-weight: 600; color: #333; text-align: left; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.06); }
    .sort-mobile-btn:hover { color: #333; text-decoration: none; background: #f8f9fa; }
    .sort-mobile-btn .fa-chevron-down { transition: transform 0.2s; color: #3cb372; }
    .sort-mobile-btn[aria-expanded="true"] .fa-chevron-down { transform: rotate(180deg); }
    .sort-mobile-panel { background: #fff; border: 1px solid rgba(0, 0, 0, 0.1); border-top: none; border-radius: 0 0 0.5rem 0.5rem; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06); }
    .sort-mobile-panel a { display: block; padding: 0.75rem 1rem; color: #555; text-decoration: none; border-bottom: 1px solid #f0f0f0; }
    .sort-mobile-panel a:last-child { border-bottom: none; }
    .sort-mobile-panel a:hover { background: rgba(60, 179, 114, 0.08); color: #1d7043; }
    .sort-mobile-panel a.active { background: rgba(60, 179, 114, 0.15); color: #1d7043; font-weight: 600; }

    @media (max-width: 991.98px) {
      .activities-search-section { padding-top: 1rem; }
      .search-pill { max-width: 100%; flex-wrap: wrap; border-radius: 1rem; }
      .search-pill .search-pill-input-wrap { flex: 1 1 100%; padding: 0.75rem 1rem; border-radius: 1rem 1rem 0 0; border-bottom: none; }
      .search-pill .search-pill-btn { flex: 1 1 100%; padding: 0.875rem 1rem; border-radius: 0 0 1rem 1rem; min-height: 48px; }
      .category-pills { width: 100%; max-width: 100%; padding: 0.5rem 0.75rem; gap: 0.375rem; border-radius: 1rem; overflow-x: auto; -webkit-overflow-scrolling: touch; flex-wrap: nowrap; justify-content: flex-start; }
      .category-pills .cat-pill { flex: 0 0 auto; padding: 0.5rem 0.75rem; font-size: 0.8125rem; min-height: 48px; }
      .activities-main-section { padding-top: 1rem !important; }
      .filter-sidebar { padding: 1rem; margin-bottom: 1rem; background: #f8f9fa; border-radius: 0.5rem; }
      .activity-card .project-wrap .text h3 { font-size: 1.1rem; }
      .activity-price-from { font-size: 1rem; }
    }
    @media (max-width: 575.98px) {
      .container { padding-left: 1rem; padding-right: 1rem; }
      .activity-badge { font-size: 10px; padding: 3px 8px; top: 38px; }
      .project-wrap .img .price { font-size: 14px; padding: 6px 10px; }
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">Triphita<span>Journey, Memory, and Purpose</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="{{ route('activities.index') }}" class="nav-link">Experience</a></li>
          <li class="nav-item"><a href="/blogs" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="ftco-section ftco-no-pb activities-search-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ftco-animate">
          <form action="{{ route('activities.index') }}" method="GET" class="search-pill">
            <input type="hidden" name="category" value="{{ $category }}">
            <input type="hidden" name="sort" value="{{ $sort }}">
            <div class="search-pill-input-wrap">
              <span class="fa fa-search"></span>
              <input type="text" id="q" name="q" value="{{ request('q') }}" placeholder="Search for places or activities">
            </div>
            <button type="submit" class="search-pill-btn">Search</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pt activities-categories-section" style="margin-top: -0.5rem;">
    <div class="container">
      <nav class="category-pills mb-3">
        <a class="cat-pill {{ $category === 'all' ? 'active' : '' }}" href="{{ route('activities.index', ['category' => 'all', 'sort' => $sort, 'q' => request('q')]) }}">
          <span class="cat-pill-icon fa fa-th-large"></span>
          <span>All</span>
        </a>
        <a class="cat-pill {{ $category === 'Tours' ? 'active' : '' }}" href="{{ route('activities.index', ['category' => 'Tours', 'sort' => $sort, 'q' => request('q')]) }}">
          <span class="cat-pill-icon fa fa-compass"></span>
          <span>Adventures</span>
        </a>
        <a class="cat-pill {{ $category === 'Experiences' ? 'active' : '' }}" href="{{ route('activities.index', ['category' => 'Experiences', 'sort' => $sort, 'q' => request('q')]) }}">
          <span class="cat-pill-icon fa fa-map-signs"></span>
          <span>Guided Tours</span>
        </a>
        <a class="cat-pill {{ $category === 'Workshops' ? 'active' : '' }}" href="{{ route('activities.index', ['category' => 'Workshops', 'sort' => $sort, 'q' => request('q')]) }}">
          <span class="cat-pill-icon fa fa-paint-brush"></span>
          <span>Workshops & Classes</span>
        </a>
      </nav>
    </div>
  </section>

  <section class="ftco-section activities-main-section">
    <div class="container">
      <div class="row">
        @php
          $sortLabels = ['popular' => 'Popular', 'price_low' => 'Lowest price first', 'price_high' => 'Highest price first', 'rating' => 'Highest rating first'];
          $currentSortLabel = $sortLabels[$sort] ?? 'Popular';
        @endphp
        <div class="col-12 col-lg-3 order-1 order-lg-1 d-none d-lg-block">
          <div class="filter-sidebar ftco-animate">
            <form action="{{ route('activities.index') }}" method="GET" id="filter-form">
              <input type="hidden" name="category" value="{{ $category }}">
              <input type="hidden" name="q" value="{{ request('q') }}">
              <div class="mb-4">
                <label class="d-block mb-3 font-weight-bold">Sort by</label>
                <ul class="list-unstyled">
                  <li class="mb-2">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="sort-popular" name="sort" value="popular" class="custom-control-input" {{ $sort === 'popular' ? 'checked' : '' }} onchange="document.getElementById('filter-form').submit()">
                      <label class="custom-control-label" for="sort-popular">Popular</label>
                    </div>
                  </li>
                  <li class="mb-2">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="sort-price-low" name="sort" value="price_low" class="custom-control-input" {{ $sort === 'price_low' ? 'checked' : '' }} onchange="document.getElementById('filter-form').submit()">
                      <label class="custom-control-label" for="sort-price-low">Lowest price first</label>
                    </div>
                  </li>
                  <li class="mb-2">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="sort-price-high" name="sort" value="price_high" class="custom-control-input" {{ $sort === 'price_high' ? 'checked' : '' }} onchange="document.getElementById('filter-form').submit()">
                      <label class="custom-control-label" for="sort-price-high">Highest price first</label>
                    </div>
                  </li>
                  <li class="mb-2">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="sort-rating" name="sort" value="rating" class="custom-control-input" {{ $sort === 'rating' ? 'checked' : '' }} onchange="document.getElementById('filter-form').submit()">
                      <label class="custom-control-label" for="sort-rating">Highest rating first</label>
                    </div>
                  </li>
                </ul>
              </div>
            </form>
          </div>
        </div>

        <div class="col-12 col-lg-9 order-2 order-lg-2">
          <div class="d-lg-none mb-3">
            <button type="button" class="sort-mobile-btn" data-toggle="collapse" data-target="#sort-mobile-panel" aria-expanded="false" aria-controls="sort-mobile-panel">
              <span>Sort by: {{ $currentSortLabel }}</span>
              <span class="fa fa-chevron-down"></span>
            </button>
            <div class="collapse" id="sort-mobile-panel">
              <div class="sort-mobile-panel">
                <a href="{{ route('activities.index', ['category' => $category, 'sort' => 'popular', 'q' => request('q')]) }}" class="{{ $sort === 'popular' ? 'active' : '' }}">Popular</a>
                <a href="{{ route('activities.index', ['category' => $category, 'sort' => 'price_low', 'q' => request('q')]) }}" class="{{ $sort === 'price_low' ? 'active' : '' }}">Lowest price first</a>
                <a href="{{ route('activities.index', ['category' => $category, 'sort' => 'price_high', 'q' => request('q')]) }}" class="{{ $sort === 'price_high' ? 'active' : '' }}">Highest price first</a>
                <a href="{{ route('activities.index', ['category' => $category, 'sort' => 'rating', 'q' => request('q')]) }}" class="{{ $sort === 'rating' ? 'active' : '' }}">Highest rating first</a>
              </div>
            </div>
          </div>
          <div class="row">
            @forelse($activities as $activity)
              <div class="col-12 col-md-6 col-lg-4 ftco-animate activity-card">
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
                    <div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
                      <span class="booked-count"><span class="fa fa-users"></span> {{ $activity['booked_count'] ?? 0 }}+ booked</span>
                    </div>
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
              </div>
            @empty
              <div class="col-12 text-center py-5">
                <p class="text-muted">No activities match your filters. Try a different category or search.</p>
                <a href="{{ route('activities.index') }}" class="btn btn-primary">View all activities</a>
              </div>
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url({{ asset('images/bg_3.jpg') }});">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md pt-5">
          <div class="ftco-footer-widget pt-md-5 mb-4">
            <h2 class="ftco-heading-2">About</h2>
            <p style="text-align: justify;">At Triphita, we curate meaningful travel experiences rooted in local knowledge and cultural authenticity. From guided tours and immersive adventures to hands-on workshops, each experience is designed to deepen connection with Indonesia's people, nature, and traditions. Through responsible travel, we aim to support local communities, encourage mindful exploration, and ensure every journey leaves a positive impact.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
              <li class="ftco-animate"><a href="https://www.instagram.com/my.triphita/" target="_blank" rel="noopener noreferrer"><span class="fa fa-instagram"></span></a></li>
              <li class="ftco-animate"><a href="https://www.linkedin.com/company/triphita" target="_blank" rel="noopener noreferrer"><span class="fa fa-linkedin"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md pt-5 border-left">
          <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Information</h2>
            <ul class="list-unstyled">
              <li><a href="about.html" class="py-2 d-block">About Us</a></li>
              <li><a href="#" class="py-2 d-block">Privacy and policy</a></li>
              <li><a href="#" class="py-2 d-block">Booking Condition</a></li>
              <li><a href="#" class="py-2 d-block">General Inquiries</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md pt-5 border-left">
          <div class="ftco-footer-widget pt-md-5 mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon fa fa-map-marker"></span><span class="text">Denpasar Selatan, Denpasar, Bali, Indonesia</span></li>
                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">Contact@triphita.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
        </div>
      </div>
    </div>
  </footer>

  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/scrollax.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
