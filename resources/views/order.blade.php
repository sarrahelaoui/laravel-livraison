<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Delivery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/favicon.ico" rel="icon">

    <style>
        .order-form {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto; /* Center horizontally */
        }
        .order-form h2 { text-align: center; margin-bottom: 20px; }
        .order-form label { display: block; margin-bottom: 5px; font-weight: bold; }
        .order-form input, .order-form textarea, .order-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .order-form button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            width: 100%;
            cursor: pointer;
            border-radius: 4px;
        }
        .order-form button:hover { background-color: #218838; }
        .error { color: red; font-size: 12px; }
    </style>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="lib/animate/animate.min.css">
    <link rel="stylesheet" href="lib/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="lib/lightbox/css/lightbox.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

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

            @guest
                <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                <a href="{{ route('register') }}" class="nav-item nav-link">Sign Up</a>
            @else
                <a href="{{ route('profile.show') }}" class="nav-item nav-link">Profile</a>
                <a href="{{ route('logout') }}" class="nav-item nav-link"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
        </div>
        <a href="#formulaire" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Make An Order<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->

@if (session('status'))
<div class="alert-success">
    {{ session('status') }}
</div>
@endif
<ul>
    @foreach($errors->all() as $error)
    <li class="alert alert-danger">{{$error}}</li>
    @endforeach
</ul>

<!-- Order Form -->
<form action="/ajouter/traitement" method="POST" class="order-form" id="orderForm" onsubmit="return validateForm()">
    @csrf
    <h2>Order Now</h2>

    <label for="name">Full Name</label>
    <input type="text" id="name" name="nom" placeholder="Your Name" required>
    <div class="error" id="nameError"></div>

    <input type="email" id="email" name="email" placeholder="Your Email" required>

    <label for="CATEGORIES">CATEGORIES</label>
    <select id="CATEGORIES" name="category" required>
        <option value="">Select a category</option>
        <option value="Food">Food</option>
        <option value="Clothes">Clothes</option>
        <option value="Technology">Technology</option>
        <option value="Furniture">Furniture</option>
        <option value="Toys">Toys</option>
        <option value="Home Essentials">Home Essentials</option>
    </select>
    <div class="error" id="CATEGORIESError"></div>

    <label for="product">Product</label>
    <input type="text" id="product" name="product" placeholder="Your product" required>
    <div class="error" id="productError"></div>

    <label for="quantity">Quantity</label>
    <input type="number" id="quantity" name="quantity" min="1" placeholder="Enter quantity" required>
    <div class="error" id="quantityError"></div>

    <label for="adresse-depart">Address of Departure</label>
    <input type="text" id="adresse-depart" name="adresse_depart" placeholder="Enter address of departure" required>
    <div class="error" id="adresse-departError"></div>

    <label for="adresse-destin">Destination Address</label>
    <input type="text" id="adresse-destin" name="adresse_destin" placeholder="Enter destination address" required>
    <div class="error" id="adresse-destinError"></div>

    <label for="tel">Telephone</label>
    <input type="tel" id="tel" name="tel" placeholder="Enter phone number" required>
    <div class="error" id="telError"></div>

    <label for="message">Additional Instructions (optional)</label>
    <textarea id="message" name="message" rows="4" placeholder="Your message"></textarea>

    <button type="submit">Order Now</button>
</form>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Address</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href="#"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<script>
    function validateForm() {
        let isValid = true;

        // Clear previous error messages
        document.querySelectorAll('.error').forEach((error) => { error.textContent = ''; });

        // Validate Name
        const name = document.getElementById('name').value;
        if (name.trim() === '') {
            document.getElementById('nameError').textContent = 'Please enter your name';
            isValid = false;
        }

        // Validate Email
        const email = document.getElementById('email').value;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            document.getElementById('emailError').textContent = 'Please enter a valid email address';
            isValid = false;
        }

        // Validate Telephone
        const tel = document.getElementById('tel').value;
        const telPattern = /^[0-9]{8}$/;
        if (!telPattern.test(tel)) {
            document.getElementById('telError').textContent = 'Please enter a valid phone number';
            isValid = false;
        }

        // Validate Quantity
        const quantity = document.getElementById('quantity').value;
        if (quantity < 1) {
            document.getElementById('quantityError').textContent = 'Please enter a valid quantity';
            isValid = false;
        }

        return isValid;
    }
</script>

</body>
</html>
