<!DOCTYPE html>
<html lang="en">
<head>
  <title>Triphita</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
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
  
  <style>
    /* Force consistent blog preview image dimensions with responsive behavior */
    .blog-entry .block-20 {
      width: 100% !important;
      height: 270px !important;
      max-width: 100% !important;
      min-width: 100% !important;
      flex-shrink: 0;
    }
    
    /* Desktop: Fixed width for consistency */
    @media (min-width: 768px) {
      .blog-entry .block-20 {
        width: 289.99px !important;
        max-width: 289.99px !important;
        min-width: 289.99px !important;
      }
      
      /* Text content follows image width on desktop */
      .blog-entry .text {
        width: 289.99px !important;
        max-width: 289.99px !important;
        min-width: 289.99px !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
      }
    }
    
    /* Tablet: Medium width */
    @media (min-width: 576px) and (max-width: 767.98px) {
      .blog-entry .block-20 {
        width: 100% !important;
        max-width: 100% !important;
        min-width: 100% !important;
      }
      
      /* Text content follows image width on tablet */
      .blog-entry .text {
        width: 90% !important;
        max-width: 90% !important;
        min-width: 90% !important;
        margin-left: auto !important;
        margin-right: auto !important;
      }
    }
    
    /* Mobile: Full width */
    @media (max-width: 575.98px) {
      .blog-entry .block-20 {
        width: 100% !important;
        max-width: 100% !important;
        min-width: 100% !important;
      }
      
      /* Text content follows image width on mobile */
      .blog-entry .text {
        width: 95% !important;
        max-width: 95% !important;
        min-width: 95% !important;
        margin-left: auto !important;
        margin-right: auto !important;
      }
    }
    
    /* Ensure the blog entry container can accommodate the responsive width */
    .blog-entry {
      width: 100%;
      max-width: 100%;
    }
    
    /* Responsive text content positioning - FIXED OVERLAP ISSUE */
    .blog-entry .text {
      position: relative;
      z-index: 1;
      margin-top: -40px;
      background: #fff;
      box-shadow: 0px 10px 23px -8px rgba(0, 0, 0, 0.11);
      padding: 20px;
      padding-top: 35px; /* Extra top padding to accommodate the date badge */
      border-radius: 0 0 8px 8px;
    }
    
    /* Responsive heading size - INCREASED SPACING TO COMPLETELY PREVENT OVERLAP */
    .blog-entry .text .heading {
      font-size: 18px;
      margin-bottom: 16px;
      font-weight: 600;
      line-height: 1.3;
      margin-top: 25px; /* Increased space above title to completely prevent overlap with date badge */
    }
    
    /* Responsive button sizing */
    .blog-entry .text .btn {
      padding: 8px 16px;
      font-size: 14px;
    }
    
    /* Responsive date badge - ADJUSTED POSITIONING */
    .blog-entry .topp {
      position: absolute;
      top: -7px;
      left: 20px;
      padding: 5px 15px;
      background: #3cb372;
      border-radius: 4px;
      z-index: 2; /* Ensure it's above the text content */
    }
  </style>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="/">Triphita Beta<span>Eco Stays and More</span></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
         {{-- <li class="nav-item"><a href="/destination" class="nav-link">Stays</a></li> --}}
         <li class="nav-item"><a href="/destination" class="nav-link">Experience</a></li>
         <li class="nav-item active"><a href="/blogs" class="nav-link">Blog</a></li>
         <li class="nav-item"><a href="/contact.html" class="nav-link">Contact</a></li>
       </ul>
     </div>
   </div>
 </nav>
 <!-- END nav -->
 
 <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Blog</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row d-flex">
      @forelse($blogs as $blog)
      <div class="col-md-4 d-flex ftco-animate">
       <div class="blog-entry justify-content-end">
        <a href="{{ route('blogs.show', $blog->slug) }}" class="block-20" style="background-image: url('{{ $blog->featured_image ?: 'images/image_1.jpg' }}');">
        </a>
        <div class="text">
         <div class="d-flex align-items-center mb-4 topp">
          <div class="one">
           <span class="day">{{ $blog->created_at->format('d') }}</span>
         </div>
         <div class="two">
           <span class="yr">{{ $blog->created_at->format('Y') }}</span>
           <span class="mos">{{ $blog->created_at->format('F') }}</span>
         </div>
       </div>
       <h3 class="heading"><a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a></h3>
       <p>{{ $blog->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($blog->content), 160) }}</p>
       <p><a href="{{ route('blogs.show', $blog->slug) }}" class="btn btn-primary">Read more</a></p>
     </div>
   </div>
 </div>
 @empty
 <div class="col-md-12 text-center">
   <p>No blog posts yet.</p>
 </div>
 @endforelse
</div>
<div class="row mt-5">
  <div class="col text-center">
    {{ $blogs->links() }}
  </div>
</div>
</div>
</section>

<section class="ftco-intro ftco-section ftco-no-pt">
 <div class="container">
  <div class="row justify-content-center">
   <div class="col-md-12 text-center">
    <div class="img"  style="background-image: url('images/bg_2.jpg');">
     <div class="overlay"></div>
     <h2>We Are Triphita An Eco Stays and More</h2>
     <p>We will make your days unforgettable and truly sustainable</p>
     <p class="mb-0"><a href="/destination" class="btn btn-primary px-4 py-3">Book Now</a></p>
   </div>
 </div>
</div>
</div>
</section>

<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url('images/bg_3.jpg');">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4">
          <h2 class="ftco-heading-2">About</h2>
          <p>At Triphita, we curate eco-conscious stays and local experiences that celebrate Indonesia’s natural and cultural heritage. Through responsible travel, we strive to protect the planet and uplift communities.</p>
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

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
</body>
</html>
