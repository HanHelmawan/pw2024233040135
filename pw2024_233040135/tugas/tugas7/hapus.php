<?php
// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "unpas");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Mengambil NRP dari query string
$nim = $_GET['nim'];

// SQL untuk menghapus data
$sql = "DELETE FROM mahasiswa WHERE  nim = '$nim'";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil dihapus.";
} else {
    echo "Error: " . $koneksi->error;
}

$koneksi->close();

// Redirect ke halaman utama
header("Location: index.php");
exit();