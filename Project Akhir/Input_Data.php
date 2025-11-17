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
  <link rel="stylesheet" href="Input_Data.css" />
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
            <a class="nav-link active" aria-current="page" href="Input_Data.php">Input Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Show_Data.php">Show Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link register-btn" href="index.php">Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <body>
  <div class="full">
    <fieldset>
      <legend>Adding Driver Details</legend>

      <form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="driver">Driver Name</label>
          <input type="text" id="driver" name="driver" placeholder="Enter driver name" required>
        </div>
        <div class="form-group">
          <label for="age">Age</label>
          <input type="number" id="age" name="age" placeholder="Enter age" required>
        </div>
        <div class="form-group">
          <label for="drive_time">Driving Time</label>
          <input type="text" id="drive_time" name="drive_time" placeholder="e.g., 5 years" required>
        </div>
        <div class="form-group">
          <label for="rating">Rating</label>
          <input type="number" id="rating" name="rating" placeholder="e.g., 4.5" step="0.1" min="0" max="5" required>
        </div>
        <div class="form-group">
          <label for="car_type">Car Type</label>
          <input type="text" id="car_type" name="car_type" placeholder="e.g., Sedan, SUV" required>
        </div>
        <div class="form-group">
          <label for="car_name">Car Name</label>
          <input type="text" id="car_name" name="car_name" placeholder="e.g., Toyota Camry" required>
        </div>
        <div class="form-actions">
          <input type="submit" value="Save">
          <a href="Show_Data.php">Back</a>
        </div>
      </form>
    </fieldset>
  </div>

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

  <!--Video Background-->
  <div class="video-background">
    <video autoplay muted loop playsinline>
      <source src="Videos/2 30mb.mp4" type="video/mp4" />
    </video>
  </div>