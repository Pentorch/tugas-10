<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
$hapus = mysqli_query($koneksi,"delete from produk where id='$id'");

if($hapus){
				echo '<script language="javascript">alert("Data Berhasil Dihapus");  
                window.location = "index.php";  
            </script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses Hapus data.</div>';
			}
?>