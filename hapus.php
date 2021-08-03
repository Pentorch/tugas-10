<?php 

// koneksi database
include "koneksi.php";

$id = $_GET['id'];

mysqli_query($koneksi,"delete from produk where id='$id'");
header("location:index.php");

?>