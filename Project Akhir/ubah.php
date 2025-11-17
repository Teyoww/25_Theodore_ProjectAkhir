<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $driver = mysqli_real_escape_string($koneksi, $_POST['driver']);
    $age = mysqli_real_escape_string($koneksi, $_POST['age']);
    $drive_time = mysqli_real_escape_string($koneksi, $_POST['drive_time']);
    $rating = mysqli_real_escape_string($koneksi, $_POST['rating']);
    $car_type = mysqli_real_escape_string($koneksi, $_POST['car_type']);
    $car_name = mysqli_real_escape_string($koneksi, $_POST['car_name']);

    $query = "UPDATE admins SET 
                driver='$driver',
                age='$age',
                drive_time='$drive_time',
                rating='$rating',
                car_type='$car_type',
                car_name='$car_name'
              WHERE id_user='$id'";

    if (mysqli_query($koneksi, $query)) {
        header('Location: Show_Data.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    $id = isset($_GET['id']) ? mysqli_real_escape_string($koneksi, $_GET['id']) : '';
    $result = mysqli_query($koneksi, "SELECT * FROM admins WHERE id_user='$id'");
    $data = mysqli_fetch_assoc($result);
    
    if (!$data) {
        echo "Data tidak ditemukan.";
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Update Driver - Veloque</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet" />
  <link rel="icon" type="image" href="Images/Logo Only.png" />
  <link rel="stylesheet" href="Landing_Page.css" />
  <link rel="stylesheet" href="Input_Data.css" />
</head>
<body>
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

  <div class="full">
    <fieldset>
      <legend>Update Driver Details</legend>
      <form method="post" action="ubah.php">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['id_user']); ?>">
        
        <div class="form-group">
          <label for="driver">Driver Name</label>
          <input type="text" id="driver" name="driver" value="<?php echo htmlspecialchars($data['driver']); ?>" required>
        </div>
        <div class="form-group">
          <label for="age">Age</label>
          <input type="number" id="age" name="age" value="<?php echo htmlspecialchars($data['age']); ?>" required>
        </div>
        <div class="form-group">
          <label for="drive_time">Driving Time</label>
          <input type="text" id="drive_time" name="drive_time" value="<?php echo htmlspecialchars($data['drive_time']); ?>" required>
        </div>
        <div class="form-group">
          <label for="rating">Rating</label>
          <input type="number" id="rating" name="rating" value="<?php echo htmlspecialchars($data['rating']); ?>" step="0.1" min="0" max="5" required>
        </div>
        <div class="form-group">
          <label for="car_type">Car Type</label>
          <input type="text" id="car_type" name="car_type" value="<?php echo htmlspecialchars($data['car_type']); ?>" required>
        </div>
        <div class="form-group">
          <label for="car_name">Car Name</label>
          <input type="text" id="car_name" name="car_name" value="<?php echo htmlspecialchars($data['car_name']); ?>" required>
        </div>

        <div class="form-actions">
          <input type="submit" value="Simpan">
          <a href="Show_Data.php">Kembali</a>
        </div>
      </form>
    </fieldset>
  </div>
</body>
</html>
