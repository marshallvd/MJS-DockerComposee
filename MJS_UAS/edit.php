<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","","prodi");

//percabangan untuk mengecek apakah tombol simpan sudah ditekan atau belum
if(isset($_POST["submit"])) {
    //mengambil data dari form
    $nim = $_GET['NIM'];
    $namamhs = $_POST["Namamhs"];
    $alamatmhs = $_POST["Alamatmhs"];
    $kontakmhs = $_POST["Kontakmhs"];

//query untuuk menginputkan data
$sql = "UPDATE mahasiswa SET 
        Namamhs = '$namamhs',
        Alamatmhs = ' $alamatmhs',
        Kontakmhs = '$kontakmhs'
        WHERE NIM = '$nim'";
mysqli_query ($conn, $sql);
}

//alert apabila data berhasil diedit
if(mysqli_affected_rows($conn) > 0 ) {
    echo "
        <script>
            alert ('Data Berhasil Diedit');
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
    <title>Edit Data</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Edit Data Mahasiswa</h1>
            <form action="" method="POST">
                    
                <label for="Namamhs">Nama Mahasiswa : </label>
                <input class="ahay" type="text" name="Namamhs" id="Namamhs" required>
            
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
    
</body>
</html>