<?php 
// $mahasiswa = [
//     ["Hanif Wihananto","0047131517", "hanifwihananto@gmail.com", "Teknik Elektro"],
//     ["Kharin Nova","0049647381", "kharinnova@gmail.com", "Kedokteran"],
// ]

$mahasiswa = [
    [ 
        "nama" => "Hanif Wihananto",
        "nrp" => "0047131517",
        "email" => "hanifwihananto@gmail.com",
        "jurusan" => "Teknik Elektro",
        "gambar" => "elon-musk.jpg"
    ],

    [ 
        "nama" => "Kharin Nova",
        "nrp" => "0049647381",
        "email" => "kharinnova@gmail.com",
        "jurusan" => "Kedokteran",
        "gambar" => "najwa-shihab.jpg"
    ],

    [ 
        "nama" => "Yuke Brillianth",
        "nrp" => "0056234014",
        "email" => "yukebrillianth@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "mark-zuckerberg.jpg"
    ],

    [ 
        "nama" => "Raja Nava",
        "nrp" => "0673247865",
        "email" => "rajanava@gmail.com",
        "jurusan" => "Ilmu Komunikasi",
        "gambar" => "jeff-bezos.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        img {
            width: 200px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="">
            </li>
            <li><?= $mhs["nama"]; ?></li>
            <li><?= $mhs["nrp"]; ?></li>
            <li><?= $mhs["email"]; ?></li>
            <li><?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>