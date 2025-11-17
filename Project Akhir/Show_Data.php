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
  <link rel="stylesheet" href="Table.css" />
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
<br>
<br>

<div class="full" style="padding-bottom: ">
  <h1 class="table-title">Data Website VELOQUE</h1>
  <table class="data-table">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Age</th>
      <th>Driving Time</th>
      <th>Rating</th>
      <th>Car Type</th>
      <th>Car Name</th>
      <th>Actions</th>
    </tr>
    <?php 
        include 'koneksi.php';
        $no = 1;
        $project_psas = mysqli_query($koneksi,"SELECT * FROM admins");
        while($d = mysqli_fetch_array($project_psas)){
            ?>
            <tr>
              <td><?php echo htmlspecialchars($d['id_user']); ?></td>
              <td><?php echo htmlspecialchars($d['driver']); ?></td>
              <td><?php echo htmlspecialchars($d['age']); ?></td>
              <td><?php echo htmlspecialchars($d['drive_time']); ?></td>
              <td><?php echo htmlspecialchars($d['rating']); ?></td>
              <td><?php echo htmlspecialchars($d['car_type']); ?></td>
              <td><?php echo htmlspecialchars($d['car_name']); ?></td>
              <td>
                <a href="ubah.php?id=<?php echo $d['id_user']; ?>">Update</a>
                |
                <a href="hapus.php?id=<?php echo $d['id_user']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
              </td>
            </tr>
            <?php 
        }

        ?>
    </table>
    <br />
    <a class="add-link" href='Input_Data.php'>+ Add Driver</a>

  </div>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

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