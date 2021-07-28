<?php 
$mahasiswa = [
    ["Hanif Wihananto", "0049131517", "Teknik Elektro", "hanifwihananto@gmail.com"],
    ["Kharin Nova", "0049133434", "Kedokteran", "kharinnova@gmail.com"],
    ["Yuke Brillianth", "0049678798", "Teknik Informatika", "yukebrillianth@gmail.com"]
];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        li {
            list-style-type: none;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul> 
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NISN : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>