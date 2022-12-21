<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","","prodi");

//mengambil data NIM dari form yang sudah ada
$nim = $_GET['NIM'];

//query untuk menghapus data berdasarkan nim yang dipilih
$sql = "DELETE FROM mahasiswa
        WHERE NIM = '$nim'";
mysqli_query ($conn, $sql);


//alert yang akan muncul apabila data sudah berhasil diedit
echo "
    <script>
        alert ('Data Berhasil Dihapus');
        document.location.href = 'admin.php';
    </script>
";
?>