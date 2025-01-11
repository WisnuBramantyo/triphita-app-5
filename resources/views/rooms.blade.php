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
    </style>
</head>
<body>
    <!-- Add navigation section here -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white ftco-navbar-light position-sticky" id="ftco-navbar">    
        <div class="container">
            <a class="navbar-brand" href="/">Triphita<span>Eco Tours and Hotels</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="destination" class="nav-link">Destination</a></li>
                    <li class="nav-item active"><a href="hotel" class="nav-link">Hotel</a></li>
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
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/potato-room-1.webp" class="d-block w-100 img-fluid rounded" alt="Hotel Main">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/potato-room-2.jpg" class="d-block w-100 img-fluid rounded" alt="Room 1">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/potato-room-3.webp" class="d-block w-100 img-fluid rounded" alt="Room 2">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/potato-room-4.jpg" class="d-block w-100 img-fluid rounded" alt="Pool">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/potato-room-5.jpg" class="d-block w-100 img-fluid rounded" alt="Dining Area">
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
                        <img src="/images/potato-room-7.jpg" class="img-fluid rounded" alt="Deluxe Queen">
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
</body>
</html>
