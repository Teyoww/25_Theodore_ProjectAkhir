<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    
    $query = "DELETE FROM admins WHERE id_user='$id'";
    
    if (mysqli_query($koneksi, $query)) {
        header('Location: Show_Data.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
        echo "<br><a href='Show_Data.php'>Kembali</a>";
    }
} else {
    echo "ID tidak ditemukan.";
    echo "<br><a href='Show_Data.php'>Kembali</a>";
}
?>
