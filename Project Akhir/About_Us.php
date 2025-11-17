<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Veloque | Feel the Exceptional</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet" />
  <link rel="icon" type="image" href="Images/Logo Only.png" />
  <link rel="stylesheet" href="Landing_Page.css" />
</head>
<body>

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg bg-black navbar-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="Images/Logo Only.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top" />
        VELOQUE
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="About_Us.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link register-btn" href="Login_Page.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- About Us Section -->
<section class="container" style="padding-top:120px; padding-bottom:60px; color:white;">
  <div class="row justify-content-center text-center">
    <div class="col-lg-8">
      <h1 class="fw-bold" style="font-family: 'Playfair Display', serif;">VELOQUE</h1>
      <p class="mt-3" style="font-size: 1.1rem; color: #cccccc; font-family: 'Roboto', sans-serif;">
        Veloque is a luxury online transportation platform designed for those who value comfort, style, and exceptional service. We connect you with premium vehicles and professional drivers to ensure every ride feels exclusive and unforgettable.
      </p>
    </div>
  </div>

  <div class="row text-white mt-5 g-4">
    <div class="col-md-4">
      <div class="p-4 h-100 rounded" style="background:#111; border:1px solid #222;">
        <h4 class="fw-bold">Exclusive Luxury Fleet</h4>
        <p class="mt-2" style="color: white;">Only high-end premium vehicles — no compromises, no exceptions.</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="p-4 h-100 rounded" style="background:#111; border:1px solid #222;">
        <h4 class="fw-bold">Professional Drivers</h4>
        <p class="mt-2" style="color: white;">Well-trained, courteous, and committed to delivering a smooth and elegant travel experience.</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="p-4 h-100 rounded" style="background:#111; border:1px solid #222;">
        <h4 class="fw-bold">Premium Service</h4>
        <p class="mt-2" style="color: white;">A seamless booking process and top-tier service from start to finish.</p>
      </div>
    </div>
  </div>
</section>

<!--Video Background-->
  <div class="video-background">
    <video autoplay muted loop playsinline>
      <source src="Videos/2 30mb.mp4" type="video/mp4" />
    </video>
  </div>
  <br>
  <br>
  <!--Footer-->
  <footer>
    <p>&copy; 2025 Veloque. All rights reserved.</p>
    <p>
      <a href="index.php">Home</a>
      |
      <a href="Login_Page.php">Login</a>
      |
      <a href="#">Privacy Policy</a>
      |
      <a href="#">Terms of Service</a>
    </p>
    <p>Email: support@veloquerents.com | Phone: +1(555)123-6789</p>
  </footer>