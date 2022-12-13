<?php
// Koneksi database
require 'connection.php';

$nim = $_GET['NIM'];
$sqlGet = "SELECT * FROM mahasiswa WHERE NIM = '$nim'";
$queryGet = mysqli_query ($conn, $sqlGet);
$data = mysqli_fetch_array($queryGet);

if(isset($_POST["submit"])) {
    // Pindahkan data dari form ke variabel
    $nimB = $_POST["nim"];
    $namamhs = $_POST["nama"];
    $alamatmhs = $_POST["alamat"];
    $kontakmhs = $_POST["telepon"];

    // Qquery update data
    $sqlUpdate = "UPDATE mahasiswa SET 
                  NIM = '$nimB',
                  Namamhs = '$namamhs',
                  Alamatmhs = '$alamatmhs',
                  Kontakmhs = '$kontakmhs'
                 WHERE NIM = '$nim'";
    mysqli_query ($conn, $sqlUpdate);

    // Cek keberhasilan proses
    if(mysqli_affected_rows($conn) > 0 ) {
        echo "
            <script>
                alert ('Data berhasil diubah');
                document.location.href = '../index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert ('Data gagal diubah');
                document.location.href = '../index.php';
            </script>
        ";
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validasi Daftar Akun</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../css/styleForm.css">

    <!-- Font -->
    <script src="https://use.fontawesome.com/2e95bf0c1a.js"></script>
</head>
<body>
    <!-- Box -->
    <div class="box">
        <!-- Container -->
        <div class="container">
            <header>
                <h2>Ubah Data</h2>
            </header>

            <!-- Form -->
            <form class="form" id="form" method="POST">
                <div class="form-control">
                    <label>NIM</label>
                    <input type="number" value="<?php echo "$data[NIM]" ?>" name="nim" id="nim">
                    <i class="fa fa-check-circle"></i>
                    <i class="fa fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label>Nama</label>
                    <input type="text" placeholder="Nama..." value="<?php echo "$data[Namamhs]" ?>" name="nama" id="nama" maxlength="80">
                    <i class="fa fa-check-circle"></i>
                    <i class="fa fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label>Alamat</label>
                    <input type="text" placeholder="Alamat..." value="<?php echo "$data[Alamatmhs]" ?>" name="alamat" id="alamat" maxlength="80">
                    <i class="fa fa-check-circle"></i>
                    <i class="fa fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label>No. Telepon</label>
                    <input type="tel" placeholder="081xxxxxxxxx" value="<?php echo "$data[Kontakmhs]" ?>" name="telepon" id="telepon" maxlength="15">
                    <i class="fa fa-check-circle"></i>
                    <i class="fa fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>

                <input type="submit" name="submit" class="submit" value="Ubah Data">
            </form>
            <!-- Close Form -->
        </div>
        <!-- Close Container -->
    </div>
    <!-- Close Box -->
    
    <!-- Validasi -->
    <script type="text/javascript" src="../js/validationUpdate.js"></script>
</body>
</html>