<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link rel="stylesheet" href="assets/libraries/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center pt-4">
            Tambah Data
        </h1>    
        <form action="" method="post">
        <div class="form-group row justify-content-center align-content-center">
                    <div class="col-sm-10">
                        <label for="">Nama Produk</label>
                        <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Isi Nama Produk">
                    </div>
                </div>
        <div class="form-group row justify-content-center align-content-center">
                    <div class="col-sm-10">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Isi Keterangan Produk">
                    </div>
                </div>
        <div class="form-group row justify-content-center align-content-center">
                    <div class="col-sm-10">
                        <label for="">Harga</label>
                        <input type="text" name="harga" id="harga" class="form-control" placeholder="Isi Harga Produk">
                    </div>
                </div>
        <div class="form-group row justify-content-center align-content-center">
                    <div class="col-sm-10">
                        <label for="">Jumlah</label>
                        <input type="text" name="jumlah" id="jumlah" class="form-control" placeholder="Isi Jumlah Produk">
                    </div>
                </div>
        <div class="form-group row justify-content-center align-content-center">
                    <div class="col-sm-10">
                <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                <a href="index.php" class="btn btn-dark">kembali</a>
                </div>        
            </div>
            </div>
            <?php 
            // koneksi database
            include 'koneksi.php';
            //jika tombol simpan di tekan/klik
            if(isset($_POST['submit'])){
                $nama_produk		= $_POST['nama_produk'];
                $keterangan	        = $_POST['keterangan'];
                $harga		        = $_POST['harga'];
                $jumlah		        = $_POST['jumlah'];
                
                $sql = mysqli_query($koneksi,"insert into produk values('','$nama_produk','$keterangan','$harga','$jumlah')");
                
                if($sql){
                    echo '<script language="javascript">alert("Data Berhasil Ditambahkan");  
                    window.location = "index.php";  
                </script>';
                }else{
                    echo '<div class="alert alert-warning">Gagal melakukan proses data.</div>';
                }
            }
            ?>
        </form>
</body>
</html>