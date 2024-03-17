<?php  

$mahasiswa = [
[
    'gambar' => 'luffy.jpg',
    'nrp' => '233040100',
    'nama' => 'Monkey D. Luffy',
    'email' => 'mugiwara@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'naruto.jpg',
    'nrp' => '233040101',
    'nama' => 'Uzumaki Naruto',
    'email' => 'uzumaki@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'ichigo.jpg',
    'nrp' => '233040102',
    'nama' => 'Kurosaki Ichigo',
    'email' => 'ishigami@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'goku.jpg',
    'nrp' => '233040103',
    'nama' => 'Son Goku',
    'email' => 'kamehameha@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'natsu.jpg',
    'nrp' => '233040104',
    'nama' => 'Natsu Dragneel',
    'email' => 'fairytail@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'meliodas.jpg',
    'nrp' => '233040105',
    'nama' => 'Meliodas',
    'email' => 'demonking@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'yuuji.jpg',
    'nrp' => '233040106',
    'nama' => 'Itadori Yuuji',
    'email' => 'sukuna@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'denji.jpg',
    'nrp' => '233040107',
    'nama' => 'Denji',
    'email' => 'makima-san@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'eren.jpg',
    'nrp' => '233040108',
    'nama' => 'Eren Yeager',
    'email' => 'sasageyo@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'ayanokouji.jpg',
    'nrp' => '233040109',
    'nama' => 'Kiyotaka Ayanokouoji',
    'email' => 'ayanotrex@gmail.com',
    'jurusan' => 'Teknik Informatika'
],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $m) { ?>
    <ul>
        <li>
            <img src="img/<?= $m['gambar']; ?>" width = 200px >
        </li>
        <li>NRP : <?= $m['nrp']; ?></li>
        <li>Nama : <?= $m['nama']; ?></li>
        <li>Email : <?= $m['email']; ?></li>
        <li>Jurusan : <?= $m['jurusan']; ?></li>
        </li>
    </ul>
    <?php } ?>
</body>
</html>
