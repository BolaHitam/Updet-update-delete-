<?php
$host = "localhost";
$user = "root";
$pass = "";
$nama_db = "sekolah1";

$koneksi = mysqli_connect($host, $user, $pass, $nama_db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
