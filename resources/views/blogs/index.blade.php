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
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="/">Triphita<span>Eco Stays and More</span></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
         <!-- <li class="nav-item"><a href="/stays" class="nav-link">Stays</a></li> -->
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
        <a href="{{ route('blogs.show', $blog->id) }}" class="block-20" style="background-image: url('{{ $blog->featured_image ?: 'images/image_1.jpg' }}');">
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
       <h3 class="heading"><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h3>
       <p>{{ $blog->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($blog->content), 160) }}</p>
       <p><a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-primary">Read more</a></p>
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

<!-- <section class="ftco-intro ftco-section ftco-no-pt">
 <div class="container">
  <div class="row justify-content-center">
   <div class="col-md-12 text-center">
    <div class="img"  style="background-image: url('images/bg_2.jpg');">
     <div class="overlay"></div>
     <h2>We Are Triphita An Eco Stays and More</h2>
     <p>We will make your days unforgettable and truly sustainable</p>
     <p class="mb-0"><a href="/activities/1" class="btn btn-primary px-4 py-3">Book Now</a></p>
   </div>
 </div>
</div>
</div>
</section> -->

<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url('images/bg_3.jpg');">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4">
          <h2 class="ftco-heading-2">About</h2>
          <p style="text-align: justify;">At Triphita, we curate meaningful travel experiences rooted in local knowledge and cultural authenticity. From guided tours and immersive adventures to hands-on workshops, each experience is designed to deepen connection with Indonesia's people, nature, and traditions.

Through responsible travel, we aim to support local communities, encourage mindful exploration, and ensure every journey leaves a positive impact.</p>
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
