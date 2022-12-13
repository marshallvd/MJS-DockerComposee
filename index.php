<?php
// Koneksi database
require 'php/connection.php';

// Mengambil semua data mahasiswa
$data = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/styleIndex.css">

    <!-- Font -->
    <script src="https://use.fontawesome.com/2e95bf0c1a.js"></script>

    <title>Data Mahasiswa CRUD</title>
</head>

<body>
    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h2 class="text-center fw-bold">Data Mahasiswa</h2>
                <hr>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <a href="php/addData.php" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data</a>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md">
                <!-- Table -->
                <table id="data" class="table table-striped table-responsive table-hover text-center" style="width:100%">
                    <thead class="table" style="background-color: #8a880e; color: #ffffff">
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kontak</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($data)) : ?>
                            <tr>
                                <td><?= $row['NIM']; ?></td>
                                <td><?= $row['Namamhs']; ?></td>
                                <td><?= $row['Alamatmhs']; ?></td>
                                <td><?= $row['Kontakmhs']; ?></td>
                                <td>
                                    <a href="php/updateData.php?NIM=<?= $row['NIM'] ?>" class="btn btn-warning btn-sm" style="font-weight: 600;"><i class="bi bi-pencil-square"></i>&nbsp;Update</a>
                                    <a href="php/deleteData.php?NIM=<?= $row['NIM'] ?>" class="btn btn-danger btn-sm" style="font-weight: 600;" onclick="return confirm('Apakah Anda yakin untuk menghapus data NIM: <?= $row['NIM']; ?>?');"><i class="bi bi-trash-fill"></i>&nbsp;Hapus</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
                <!-- Close Table -->
            </div>
        </div>
    </div>
    <!-- Close Container -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Data Tables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
    <script src="js/dataTables.js"></script>
</body>

</html>