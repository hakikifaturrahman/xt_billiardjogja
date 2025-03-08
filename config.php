<?php
// Konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "xt_billiard";

// Koneksi ke database
$conn = mysqli_connect($host, $user, $pass, $db);

// Periksa koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
