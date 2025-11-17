<?php
include 'koneksi.php';
session_start();

$driver = mysqli_real_escape_string($koneksi, $_POST['driver']);
$age = mysqli_real_escape_string($koneksi, $_POST['age']);
$drive_time = mysqli_real_escape_string($koneksi, $_POST['drive_time']);
$rating = mysqli_real_escape_string($koneksi, $_POST['rating']);
$car_type = mysqli_real_escape_string($koneksi, $_POST['car_type']);
$car_name = mysqli_real_escape_string($koneksi, $_POST['car_name']);

$query = "INSERT INTO admins (driver, age, drive_time, rating, car_type, car_name) 
          VALUES ('$driver', '$age', '$drive_time', '$rating', '$car_type', '$car_name')";

if(mysqli_query($koneksi, $query)) {
    header('Location: Show_Data.php');
    exit;
} else {
    echo "Error: " . mysqli_error($koneksi);
    echo "<br><a href='Input_Data.php'>Kembali</a>";
}
?>
