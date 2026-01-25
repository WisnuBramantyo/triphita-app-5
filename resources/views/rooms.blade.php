<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-inner img {
            width: 100%;
            height: 50vh; /* Scales dynamically for mobile */
            object-fit: cover; /* Ensures images fit consistently */
        }

        .room img {
            width: 100%;
            max-height: 200px; /* Limit image height */
            object-fit: cover;
        }

        .room-list h2 {
            text-align: center;
        }

        .container-rooms-images {
            margin-bottom: 2rem; /* Add spacing below the slider */
        }

        @media (max-width: 768px) {
            .room {
                flex-direction: column;
                text-align: center;
            }

            .room .row {
                flex-direction: column;
            }

            .room img {
                margin-bottom: 15px;
            }
        }

        @media (max-width: 576px) {
            .carousel-inner img {
                height: 30vh; /* Smaller height for smaller devices */
            }
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            padding: 20px;
        }
        
        .carousel-indicators {
            margin-bottom: 0.5rem;
        }
        
        .carousel-indicators button {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin: 0 5px;
        }
        
        @media (max-width: 768px) {
            .carousel-caption {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Add navigation section here -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white ftco-navbar-light position-sticky" id="ftco-navbar">    
        <div class="container">
            <a class="navbar-brand" href="/">Triphita<span>Eco Stays and More</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="/" class="nav-link">Home</a></li>         
                    {{-- <li class="nav-item"><a href="/destination" class="nav-link">Stays</a></li> --}}
                    <li class="nav-item"><a href="/destination" class="nav-link">Experience</a></li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of navigation section -->

    <div class="container"> 
        <h2 class="text-center my-4">Potato Head Suites & Studios - CHSE certified</h2>

        <!-- Hotel Images Section -->
        <div class="container-rooms-images">
            <div id="hotelImagesCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Add Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#hotelImagesCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#hotelImagesCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#hotelImagesCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#hotelImagesCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#hotelImagesCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img src="/images/eco-stays-6.webp" class="d-block w-100 img-fluid rounded" alt="Hotel Main">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Hotel Main View</h5>
                            <p>Experience luxury at its finest</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="/images/eco-stays-2.webp" class="d-block w-100 img-fluid rounded" alt="Room 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Elegant Rooms</h5>
                            <p>Comfort meets style</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="/images/eco-stays-3.webp" class="d-block w-100 img-fluid rounded" alt="Room 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Modern Amenities</h5>
                            <p>Everything you need for a perfect stay</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="/images/eco-stays-4.webp" class="d-block w-100 img-fluid rounded" alt="Pool">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Swimming Pool</h5>
                            <p>Relax and unwind</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="/images/eco-stays-5.webp" class="d-block w-100 img-fluid rounded" alt="Dining Area">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Dining Area</h5>
                            <p>Savor delicious meals in style</p>
                        </div>
                    </div>
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#hotelImagesCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#hotelImagesCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- Room Details Section -->
        <div class="room-list">
            <h2 class="mb-4">Available Rooms</h2>

            <!-- Room 1 -->
            <div class="room mb-4 p-3 border rounded">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <img src="/images/potato-room-6.webp" class="img-fluid rounded" alt="Superior Queen">
                    </div>
                    <div class="col-md-6">
                        <h3>Superior Queen</h3>
                        <p>6m<sup>2</sup> | Wi-Fi | Free Parking</p>
                        <p>Refund & reschedule available until Dec 30, 2024.</p>
                    </div>
                    <div class="col-md-3 text-end">
                        <p class="price">IDR 446,281 / night</p>
                        <a href="booking-detail" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>

            <!-- Room 2 -->
            <div class="room mb-4 p-3 border rounded">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <img src="/images/potato-room-3.webp" class="img-fluid rounded" alt="Deluxe Queen">
                    </div>
                    <div class="col-md-6">
                        <h3>Deluxe Queen</h3>
                        <p>6m<sup>2</sup> | Wi-Fi | Free Parking</p>
                        <p>Refund & reschedule available until Dec 30, 2024.</p>
                    </div>
                    <div class="col-md-3 text-end">
                        <p class="price">IDR 520,661 / night</p>
                        <a href="booking-detail" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add these additional script references before the closing body tag -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.stellar.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/aos.js"></script>
    <script src="/js/jquery.animateNumber.min.js"></script>
    <script src="/js/bootstrap-datepicker.js"></script>
    <script src="/js/scrollax.min.js"></script>
    <script src="/js/main.js"></script>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
            crossorigin="anonymous"></script>
</body>
</html>
