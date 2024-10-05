<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Woody - Carpenter Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>123 Street, New York, USA</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary">DELIVERY</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
            <a href="{{ url('/service') }}" class="nav-item nav-link">Service</a>
            <a href="{{ url('/project') }}" class="nav-item nav-link">Categories</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{ url('/feature') }}" class="dropdown-item">Feature</a>
                    <a href="{{ url('/order') }}" class="dropdown-item">ORDER NOW</a>
                    <a href="{{ url('/team') }}" class="dropdown-item">Our Team</a>
                    <a href="{{ url('/testimonial') }}" class="dropdown-item">Testimonial</a>
                    <a href="{{ url('/food') }}" class="dropdown-item">Food</a>
                </div>
            </div>
            <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>

            <!-- Authentication Links -->
            @guest
                <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                <a href="{{ route('register') }}" class="nav-item nav-link">Sign Up</a>
            @else
                <a href="{{ route('profile.show') }}" class="nav-item nav-link">Profile</a>
                <a href="{{ route('logout') }}" class="nav-item nav-link"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                   Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
        </div>
        <a href="#formulaire" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Make An Order<i class="fa fa-arrow-right ms-3"></i></a>

    </div>
</nav>
<!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white"  a href="{{ url('/about') }}">About</a></li>
                    <li class="breadcrumb-item"><a class="text-white"  a href="{{ url('/contact') }}">Contact</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



   <!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="section-title text-center">
            <h1 class="display-5 mb-5">Our Services</h1>
        </div>
        <div class="row g-4">
            <!-- Reliable Delivery -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" id="reliable-delivery">
                <div class="service-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/service1.png" alt="">
                    </div>
                    <div class="p-4 text-center border border-5 border-light border-top-0">
                        <h4 class="mb-3">Reliable Delivery</h4>
                        <p>We provide swift and dependable delivery solutions tailored to your needs. Whether it’s food, groceries, or special items, we ensure your orders reach you quickly and safely.</p>
                        <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Efficient Delivery -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s" id="efficient-delivery">
                <div class="service-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/service2.png" alt="">
                    </div>
                    <div class="p-4 text-center border border-5 border-light border-top-0">
                        <h4 class="mb-3">Efficient Delivery Services</h4>
                        <p>We specialize in fast and efficient delivery services, ensuring your items arrive at your doorstep in perfect condition. Count on us for reliable and timely deliveries.</p>
                        <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Customized Delivery Options -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s" id="customized-delivery">
                <div class="service-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/service3.png" alt="">
                    </div>
                    <div class="p-4 text-center border border-5 border-light border-top-0">
                        <h4 class="mb-3">Customized Delivery Options</h4>
                        <p>We offer customized delivery options to meet your specific needs. Our team is dedicated to making sure your items are delivered exactly when and where you need them.</p>
                        <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Express Delivery -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s" id="express-delivery">
                <div class="service-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/service6.png" alt="">
                    </div>
                    <div class="p-4 text-center border border-5 border-light border-top-0">
                        <h4 class="mb-3">Express Delivery</h4>
                        <p>Need it fast? Our express delivery service guarantees quick turnaround times for urgent deliveries. Perfect for time-sensitive items, we’ll get your order to you in record time!</p>
                        <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Secure Transport -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" id="secure-transport">
                <div class="service-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/service4.png" alt="">
                    </div>
                    <div class="p-4 text-center border border-5 border-light border-top-0">
                        <h4 class="mb-3">Secure Transport for Your Deliveries</h4>
                        <p>We guarantee safe and secure transport for all your delivery needs. Whether it's furniture, groceries, or special items, you can trust us to handle your deliveries with the utmost care and efficiency.</p>
                        <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Grocery Delivery -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s" id="grocery-delivery">
                <div class="service-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/img9.png" alt="">
                    </div>
                    <div class="p-4 text-center border border-5 border-light border-top-0">
                        <h4 class="mb-3">Grocery Delivery</h4>
                        <p>Get your groceries delivered right to your door! We provide a wide selection of fresh produce, dairy, and pantry staples, ensuring you never run out of your essentials.</p>
                        <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


    <!-- Quote Start -->
    <div id="formulaire" class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/img10.png" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">MAKE ORDER NOW</h1>
                        </div>
                        <p class="mb-4 pb-2">Ready to enjoy fast and reliable delivery? Place your order today and experience the convenience of having your essentials delivered right to your doorstep!</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select id="serviceSelect" class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="food">Food</option>
                                        <option value="clothes">Clothes</option>
                                        <option value="technology">Technology</option>
                                        <option value="furniture">Furniture</option>
                                        <option value="toys">Toys</option>
                                        <option value="home-essential">Home Essential</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Order Now"></textarea>
                                </div>

                                <div class="col-12">
                                    <button id="submitBtn" class="btn btn-primary w-100 py-3" type="button">Submit</button>
                                </div>

                                <!-- JavaScript to handle redirection -->
                                <script>
                                    document.getElementById('submitBtn').addEventListener('click', function() {
                                        // Get the selected service
                                        var selectedService = document.getElementById('serviceSelect').value;

                                        // Based on the selected value, redirect to the appropriate page
                                        switch (selectedService) {
                                            case 'food':
                                                window.location.href = '/food';  // Replace with actual URL
                                                break;
                                            case 'clothes':
                                                window.location.href = '#';  // Replace with actual URL
                                                break;
                                            case 'technology':
                                                window.location.href = '#';  // Replace with actual URL
                                                break;
                                            case 'furniture':
                                                window.location.href = '#';  // Replace with actual URL
                                                break;
                                            case 'toys':
                                                window.location.href = '#';  // Replace with actual URL
                                                break;
                                            case 'home-essential':
                                                window.location.href = '/#';  // Replace with actual URL
                                                break;
                                            default:
                                                alert('Please select a service.');
                                        }
                                    });
                                </script>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->
  </div>

   <!-- Testimonial Start -->
   <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-title text-center">
            <h1 class="display-5 mb-5">Testimonial</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 90px; height: 90px;">
                <div class="testimonial-text text-center p-4">
                    <p>"I couldn’t be happier with the delivery service! My groceries arrived fresh and on time. The team was professional and courteous. Highly recommend!"</p>
                    <h5 class="mb-1">Sarah Johnson</h5>
                    <span class="fst-italic">doctor</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 90px; height: 90px;">
                <div class="testimonial-text text-center p-4">
                    <p>"Fast delivery and great customer support! They really went above and beyond to ensure my furniture was delivered safely. Will definitely use them again!"</p>
                    <h5 class="mb-1"> Michael Smith</h5>
                    <span class="fst-italic">nurse</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 90px; height: 90px;">
                <div class="testimonial-text text-center p-4">
                    <p> "The best food delivery service I've tried! The variety of options and the quick service made my experience fantastic. I’ll be ordering again soon!".</p>
                    <h5 class="mb-1"> Emily Davis</h5>
                    <span class="fst-italic">Professor</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 90px; height: 90px;">
                <div class="testimonial-text text-center p-4">
                    <p> "I needed an urgent delivery for a last-minute gift, and they delivered it in no time! Exceptional service and friendly staff. Thank you for saving the day!"</p>
                    <h5 class="mb-1"> David Lee</h5>
                    <span class="fst-italic">teacher</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">QualityServices</h4>

                    <a class="btn btn-link" href="#reliable-delivery">Reliable Delivery</a>
                    <a class="btn btn-link" href="#efficient-delivery">Efficient Delivery Services</a>
                    <a class="btn btn-link" href="#customized-delivery">Customized Delivery Options</a>
                    <a class="btn btn-link" href="#express-delivery">Express Delivery</a>
                    <a class="btn btn-link" href="#secure-transport">Secure Transport for Your Deliveries</a>
                    <a class="btn btn-link" href="#grocery-delivery">Grocery Delivery</a>


                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="{{ url('/about') }}">About Us</a>
                    <a class="btn btn-link" href="{{ url('/contact') }}">Contact Us</a>
                    <a class="btn btn-link" href="{{ url('/service') }}">Our Services</a>
                    <a class="btn btn-link" href="#">Terms & Condition</a>
                    <a class="btn btn-link" href="#">Support</a>
                </div>


                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Drop your mail here</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Delivery site<br>
                            you're welcome any time
                        </a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
