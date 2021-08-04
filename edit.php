<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="assets/libraries/css/bootstrap.min.css">
</head>
<body>
    <?php 
            // koneksi database
            include "koneksi.php";
            //jika sudah mendapatkan parameter GET id dari URL
            if (isset($_GET['id'])) {
             //membuat variabel $id untuk menyimpan id dari GET id di URL
            $id = $_GET['id'];
            //query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'") or die(mysqli_error($koneksi));
			
			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>
            <?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$nama_produk	    = $_POST['nama_produk'];
			$keterangan	        = $_POST['keterangan'];
			$harga		        = $_POST['harga'];
			$jumlah		        = $_POST['jumlah'];
			
			$sql = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah=$jumlah WHERE id='$id'") or die(mysqli_error($koneksi));
			
			if($sql){
				echo '<script language="javascript">alert("Berhasil menyimpan data."); document.location="index.php?id='.$id.'";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>
    <div class="container">
        <h1 class="text-center pt-4">
            Update Data
        </h1>    
        <form action="" method="post">
        <div class="form-group row justify-content-center align-content-center">
                    <div class="col-sm-10">
                        <label for="">Nama Produk</label>
                        <input type="hidden" name="id" id="id" value="<?= $id ;?>">
                        <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="<?= $data['nama_produk'] ;?>">
                    </div>
                </div>
        <div class="form-group row justify-content-center align-content-center">
                    <div class="col-sm-10">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" id="keterangan" class="form-control" value="<?= $data['keterangan'] ;?>">
                    </div>
                </div>
        <div class="form-group row justify-content-center align-content-center">
                    <div class="col-sm-10">
                        <label for="">Harga</label>
                        <input type="text" name="harga" id="harga" class="form-control" value="<?= $data['harga'] ;?>">
                    </div>
                </div>
        <div class="form-group row justify-content-center align-content-center">
                    <div class="col-sm-10">
                        <label for="">Jumlah</label>
                        <input type="text" name="jumlah" id="jumlah" class="form-control" value="<?= $data['jumlah'] ;?>">
                    </div>
                </div>
        <div class="form-group row justify-content-center align-content-center">
                    <div class="col-sm-10">
                <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                <a href="index.php" class="btn btn-dark">kembali</a>
                </div>        
            </div>
            </div>
            
        </form>
</body>
</html>