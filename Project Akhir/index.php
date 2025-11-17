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

  <!--Hero-->
  <div class="hero-center">
    <div class="jumbotron text-center text-white">
      <h1 class="display-4">Travel Anytime & Anywhere</h1>
      <p class="lead">Luxury car transport tailored to your journey</p>
    </div>
  </div>

  <!--Carousel and Card-->
  <div class="blur-background-box">
    <h2 class="text-white">Explore Our Options Of Transport</h2>
    <p class="text-white">Choose from a fleet of luxurious, high-performance vehicles tailored to elevate your journey.</p>
    <section class="carousel-section">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Images/SVJ.jpg" class="d-block w-100" />
            <div class="carousel-caption d-none d-md-block">
              <h5>Luxury Only</h5>
              <p>Top-tier vehicles for every occasion</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Images/CARS 1.jpg" class="d-block w-100" />
            <div class="carousel-caption d-none d-md-block">
              <h5>Concierge Support</h5>
              <p>24/7 personalized customer service</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Images/CARS 2.jpg" class="d-block w-100" />
            <div class="carousel-caption d-none d-md-block">
              <h5>Nationwide Pickup</h5>
              <p>Airports, hotels, and more</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <h2 class="text-white">Our Transport Highlights</p>
    <div class="container my-5">
      <div class="row justify-content-center g-4">
        <div class="col-md-4">
          <div class="card h-100">
            <img src="Images/CARD 1.jpg" class="card-img-top" alt="Car 1">
            <div class="card-body">
              <h5 class="card-title">Porsche Taycan Turbo S</h5>
              <p class="card-text">Electric power, instant torque, pure adrenaline.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <img src="Images/CARD 2.jpg" class="card-img-top" alt="Car 2">
            <div class="card-body">
              <h5 class="card-title">Aston Martin Vantage</h5>
              <p class="card-text">Sleek, agile, and unmistakably British.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <img src="Images/CARD 3.jpg" class="card-img-top" alt="Car 3">
            <div class="card-body">
              <h5 class="card-title">Mercedes-AMG E63s</h5>
              <p class="card-text">Luxury meets brutal V8 performance.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

  <!--Video Background-->
  <div class="video-background">
    <video autoplay muted loop playsinline>
      <source src="Videos/Audi RS7 Sportback.mp4" type="video/mp4" />
    </video>
  </div>

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

</body>
</html>
