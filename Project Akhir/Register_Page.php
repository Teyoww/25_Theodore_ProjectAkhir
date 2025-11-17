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
  <link rel="stylesheet" href="Register_Page.css" />
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
  <br>
  <br>
  <br>
  <br>

<div class="base">
<form action="" method="post">
  <h1>Register Form</h1>
  <hr>
  
  <div class="container">
    <label for="username">Username</label>
    <input type="text" id="username" placeholder="Enter Username" name="username" required>
    
    <label for="nama_lengkap">Full Name</label>
    <input type="text" id="nama_lengkap" placeholder="Enter Your Full Name" name="nama_lengkap" required>
    
    <label for="umur">Age</label>
    <input type="text" id="umur" placeholder="Enter Age" name="umur" required>
    
    <label for="email">Email</label>
    <input type="email" id="email" placeholder="Enter Email" name="email" required>
    
    <label for="password">Password</label>
    <input type="password" id="password" placeholder="Enter Password" name="password" required>
    <br>
    <button type="submit" name="register" class="register">Register</button>
    
    <div class="login-link">Already have an account? <a href="Login_Page.php">Login here</a></div>
  </div>
</form>
</div>

</body>
<?php
include 'koneksi.php';
if(isset ($_POST['register'])){
    $username = $_POST['username'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $umur = $_POST['umur'];
    $email = $_POST['email'];

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


    $query = "INSERT INTO user (username, nama_lengkap, email,umur, password) VALUES ('$username','$nama_lengkap', '$email','$umur', '$password')";
    $result = mysqli_query($koneksi, $query);
    if($result){
        echo "<div style='text-align:center; padding:40px; color:white;'>";
        echo "Registration successful. You can now <a href='Login_Page.php' style='color:#ffffff; text-decoration:underline;'>login</a>.";
        echo "</div>";
    } else {
        echo "<div style='text-align:center; padding:40px; color:#ff6b6b;'>";
        echo "Error: " . htmlspecialchars(mysqli_error($koneksi));
        echo "</div>";
    }
}
?>

<!--Video Background-->
  <div class="video-background">
    <video autoplay muted loop playsinline>
      <source src="Videos/2 30mb.mp4" type="video/mp4" />
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
