<?php
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id    = $_POST["id"];
    $nama  = $koneksi->real_escape_string($_POST["nama"]);
    $email = $koneksi->real_escape_string($_POST["email"]);
    $kelas = $koneksi->real_escape_string($_POST["kelas"]);

    
    $stmt = $koneksi->prepare("UPDATE siswa SET nama = ?, email = ?, kelas = ? WHERE id = ?");
    $stmt->bind_param("sssi", $nama, $email, $kelas, $id);

    if ($stmt->execute()) {
        header("Location: tampil.php");
        exit;
    } else {
        echo "Gagal memperbarui data: " . $koneksi->error;
    }
    $stmt->close();
} else {
    die("Akses ditolak!");
}
?>
