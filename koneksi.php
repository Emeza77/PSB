<?php
$host = "localhost"; // ganti dengan nama host database Anda
$user = "root"; // ganti dengan username database Anda
$password = ""; // ganti dengan password database Anda
$database = "db_dftrsiswa"; // ganti dengan nama database Anda

$koneksi = mysqli_connect($host, $user, $password, $database);

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit;
}
?>
