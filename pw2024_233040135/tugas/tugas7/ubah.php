<?php
// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "unpas");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Mengambil NIM dari query string
$nim = $_GET['nim'];  // Perbaikan dari 'nrp' menjadi 'nim'

// SQL untuk mengambil data mahasiswa yang akan diubah
$sql = "SELECT * FROM mahasiswa WHERE NIM = '$nim'";
$result = $koneksi->query($sql);
$data = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = $_POST['nama'];  // Pastikan nama input sesuai dengan di form
    $jurusan = $_POST['jurusan'];  // Pastikan nama input sesuai dengan di form
    $gambar = $_POST['gambar'];  // Pastikan nama input sesuai dengan di form

    // SQL untuk update data
    $updateSql = "UPDATE mahasiswa SET Nama='$nama', Jurusan='$jurusan', Gambar='$gambar' WHERE NIM='$nim'";
    if ($koneksi->query($updateSql) === TRUE) {
        echo "Data berhasil diupdate.";
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $koneksi->error;
    }
}

$koneksi->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h2>Ubah Data Mahasiswa</h2>
    <form method="post">
        Nama: <input type="text" name="nama" value="<?php echo $data['Nama']; ?>"><br>
        Jurusan: <input type="text" name="jurusan" value="<?php echo $data['Jurusan']; ?>"><br>
        Gambar: <input type="text" name="gambar" value="<?php echo $data['Gambar']; ?>"><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>