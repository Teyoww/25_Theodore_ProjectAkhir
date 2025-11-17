<?php

$koneksi = mysqli_connect("localhost","root","mysql","project_psas");

//cek koneksi
if(mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>