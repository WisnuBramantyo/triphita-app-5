<!DOCTYPE html>
<html lang="en">
<head>
    <title>Triphita - Tours</title>
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
     <a class="navbar-brand" href="/">Triphita Beta<span>Eco Stays and More</span></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item"><a href="/" class="nav-link">Home</a></li>         
         <li class="nav-item"><a href="https://booking.triphita.com/en/all-properties" class="nav-link">Stays</a></li>
         <li class="nav-item"><a href="/destination" class="nav-link">Experience</a></li>
         <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
         <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
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
         <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Tour List <i class="fa fa-chevron-right"></i></span></p>
         <h1 class="mb-0 bread">Tours List</h1>
     </div>
 </div>
</div>
</section>

{{-- search feature --}}
<section class="ftco-section ftco-no-pb">
   <div class="container">
      <div class="row">
       <div class="col-md-12">
          <div class="search-wrap-1 ftco-animate">
             <form action="{{ route('destination.search') }}" class="search-property-1" method="GET">
              <div class="row no-gutters">
                <div class="col-md d-flex">
                  <div class="form-group p-4 border-0">
                    <label for="#">Destination</label>
                    <div class="form-field">
                      <div class="icon"><span class="fa fa-search"></span></div>
                      {{-- <input type="text" class="form-control" placeholder="Search place"> --}}
                      <input type="text" class="form-control" id="destination" name="destination" value="{{ request('destination') }}" placeholder="Search place">
                    </div>
                  </div>
                </div>
                <div class="col-lg d-flex">
                  <div class="form-group p-4">
                    <label for="#">Check-in date</label>
                    <div class="form-field">
                      <div class="icon"><span class="fa fa-calendar"></span></div>
                      <input type="text" class="form-control checkin_date" placeholder="Check In Date">
                    </div>
                  </div>
                </div>
                <div class="col-lg d-flex">
                  <div class="form-group p-4">
                    <label for="#">Check-out date</label>
                    <div class="form-field">
                      <div class="icon"><span class="fa fa-calendar"></span></div>
                      <input type="text" class="form-control checkout_date" placeholder="Check Out Date">
                    </div>
                  </div>
                </div>
                
                <div class="col-lg d-flex">
                  <div class="form-group d-flex w-100 border-0">
                    <div class="form-field w-100 align-items-center d-flex">
                      <input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary p-0">
                    </div>
                  </div>
                </div>
              </div>
</form>
</div>
</div>
</div>
</div>
</section>

{{-- end of search feature --}}

{{-- query result from search feature --}}
<section class="ftco-section">
  <div class="container">
     <div class="row">
        @forelse($destinations as $destination)
           <div class="col-md-4 ftco-animate">
              <div class="project-wrap">
                 <a href="#" class="img" style="background-image: url('{{ asset('images/destination-1.jpg') }}');">
                    <span class="price">{{ number_format($destination->price, 2) }}/person</span>
                 </a>
                 <div class="text p-4">
                    <span class="days">Available from {{ $destination->check_in }} to {{ $destination->check_out }}</span>
                    <h3><a href="#">{{ $destination->name }}</a></h3>
                    <p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
                    <ul>
                       <li><span class="flaticon-shower"></span>2</li>
                       <li><span class="flaticon-king-size"></span>3</li>
                       <li><span class="flaticon-mountains"></span>Near Mountain</li>
                    </ul>
                 </div>
              </div>
           </div>
        @empty
           <div class="col-md-12 text-center">
              <p>No destinations found. Try another search.</p>
           </div>
        @endforelse
     </div>
  </div>
</section>
{{-- query result from search feature --}}


<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
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