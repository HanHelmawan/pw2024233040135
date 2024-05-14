<?php 
// Informasi koneksi database
$host = 'localhost'; // Host database
$user = 'root'; // Username database
$password = ''; // Password database
$database = 'unpas'; // Nama database

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query untuk mengambil data mahasiswa
$sql = "SELECT * FROM mahasiswa";
$result = $koneksi->query($sql);

$koneksi->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Fakultas</th>
                <th>Jurusan</th>
                <th>Gambar</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                $no = 1;
                // output data setiap baris
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $no++ . "</td>
                            <td>" . $row["NIM"] . "</td>
                            <td>" . $row["Nama"] . "</td>
                            <td>" . $row["Fakultas"] . "</td>
                            <td>" . $row["Jurusan"] . "</td>
                            <td><img src='./img/" . $row["Gambar"] . "' alt='Gambar' style='width:100px;'></td>
                            <td>" . $row["Status"] . "</td>
                            <td><a href='ubah.php?nim=" . $row["NIM"] . "'>Ubah</a> | <a href='hapus.php?nim=" . $row["NIM"] . "'>Hapus</a></td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>