<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","","prodi");

//cek apakah button simpan sudah ditekan atau belum
if(isset($_POST["submit"])) {
    //ambil data dari form
    $nim = $_POST["NIM"];
    $namamhs = $_POST["Namamhs"];
    $alamatmhs = $_POST["Alamatmhs"];
    $kontakmhs = $_POST["Kontakmhs"];

//query menginputkan data
$insert = "INSERT INTO mahasiswa
            VALUES 
            ('$nim' , '$namamhs' , '$alamatmhs' , '$kontakmhs')";
mysqli_query ($conn, $insert);
}

//cek data berhasil diinputkan

if(mysqli_affected_rows($conn) > 0 ) {
    echo "
        <script>
            alert ('Data Berhasil Ditambahkan');
            document.location.href = 'admin.php';
        </script>
    ";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styletambah.css">
    <title>Tambah Data</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="center-warp">
                <br>
                <h1>Tambah Data Mahasiswa Baru</h1>
                <hr>
                <form action="" method="POST">
                    <label for="NIM">NIM : </label>
                    <input type="text" name="NIM" id="NIM" required >

                    <label for="Namamhs">Nama Mahasiswa : </label>
                    <input type="text" name="Namamhs" id="Namamhs" required>

                    <label for="Alamatmhs">Alamat Mahasiswa :</label>
                    <input type="text" name="Alamatmhs" id="Alamatmhs">

                    <label for="Kontakmhs">Kontak Mahasiswa : </label>
                    <input type="text" name="Kontakmhs" id="Kontakmhs" required>
                    <center>
                        <button class="tambah" type="submit" name="submit">Simpan</button>
                        <br><button class="tambah" type="reset" name="reset">RESET</button>
                    </center>
                </form>
            </div>
        </div>
    </div>

    
</body>
</html>