<?php 

$koneksi = mysqli_connect("localhost","root","","arkademy");
if (mysqli_connect_errno()) {
    echo "koneksi gagal terhubung" . mysqli_connect_error();
}
?>