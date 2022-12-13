<?php
// Koneksi database
require 'connection.php';

$nim = $_GET['NIM'];

// Qquery delete data
$sqlDelete = "DELETE FROM mahasiswa
             WHERE NIM = '$nim'";
mysqli_query ($conn, $sqlDelete);

// Cek keberhasilan proses
echo "
    <script>
        alert ('Data berhasil dihapus');
        document.location.href = '../index.php';
    </script>
";
?>