<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Order Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .order-details {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        .order-details h2 { text-align: center; }
        .order-details p { margin: 10px 0; }
    </style>
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
            <a href="{{ url('/order') }}" class="nav-item nav-link">ORDER NOW</a>
            <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->

<div class="container mt-5">
    <div class="order-details">
        <h2>Order Confirmation</h2>
        <p><strong>Full Name:</strong> {{ session('nom') }}</p>
        <p><strong>Email:</strong> {{ session('email') }}</p>
        <p><strong>Category:</strong> {{ session('category') }}</p>
        <p><strong>Product:</strong> {{ session('product') }}</p>
        <p><strong>Quantity:</strong> {{ session('quantity') }}</p>
        <p><strong>Address of Departure:</strong> {{ session('adresse_depart') }}</p>
        <p><strong>Destination Address:</strong> {{ session('adresse_destin') }}</p>
        <p><strong>Telephone:</strong> {{ session('tel') }}</p>
        <p><strong>Additional Instructions:</strong> {{ session('message') }}</p>
        <p class="alert alert-success">Your order has been placed successfully!</p>
        <a href="{{ url('/order') }}" class="btn btn-primary">Place Another Order</a>
    </div>
</div>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer mt-5 pt-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Address</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

</body>
</html>
