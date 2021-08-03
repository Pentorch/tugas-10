<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/libraries/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/libraries/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center pt-4">
            List Produk
        </h1>
            <a href="tambah.php" class="btn btn-primary">Tambah</a>
            <div class="row justify-content-center align-content-center pt-2">
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Keterangan</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                    <?php 
                    include "koneksi.php";
                    $no = 1;
                    $data = mysqli_query($koneksi,"select * from produk order by id asc");
                    while ($a = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?= $no++ ;?></td>
                        <td><?= $a['nama_produk'] ;?></td>
                        <td><?= $a['keterangan'] ;?></td>
                        <td><?= $a['harga'] ;?></td>
                        <td><?= $a['jumlah'] ;?></td>
                        <td>
                            <a href="edit.php?id=<?= $a['id'] ;?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            ||
                            <a href="hapus.php?id=<?= $a['id'] ;?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php 
                }
                ?>    
                </table>
            </div>
    </div>
</body>
</html>