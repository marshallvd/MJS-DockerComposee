<?php
//koneksi ke database
$conn = mysqli_connect ("localhost", "root", "", "prodi");

//ambil data dari tabel mahasiswa
$hasil = mysqli_query($conn, "SELECT * FROM mahasiswa");

//cek ambil data di tabel mahasiswa
if(!$hasil){
    echo mysqli_error();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styletambah.css">
    <title>HALAMAN ADMIN</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="center-warp">
                <h1>DATA MAHASISWA</h1>
                <hr><br>
                <center>
                    <table cellspacing="1" cellpadding="10">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Kontak</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <!--sekarang perlu mengisi data tabel sesuai dengan tabel mahasiswa-->
                        <!--perlu untuk perulangan (while) untuk mengisi data pada tabel-->
                        <?php
                        while ($row = mysqli_fetch_array($hasil)) :
                        ?>

                        <tr>
                            <td><?= $row["NIM"]?></td>
                            <td><?= $row["Namamhs"]?></td>
                            <td><?= $row["Alamatmhs"]?></td>
                            <td><?= $row["Kontakmhs"]?></td>
                            <td>
                                <a href="edit.php?NIM=<?= $row["NIM"]?>">Edit</a> ||
                                <a href="delete.php?NIM=<?= $row["NIM"]?>">Delete</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </table>
                </center>
            </div>
            <center>
                <a class="tambah" href="tambah.php">TAMBAH DATA MAHASISWA BARU</a>
            </center>
        </div>
    </div>


    
</body>
</html>