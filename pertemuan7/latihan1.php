<?php 
// $_GET

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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar Mahasiswa</title>
</head>
<body>
	
	<h1>Daftar Mahasiswa</h1>

	<ul>
	<?php foreach($mahasiswa as $mhs) : ?>
		<li>
			<a href="latihan2.php?gambar=<?= $mhs["gambar"]; ?>&nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>"><?= $mhs["nama"]; ?></a>
		</li>
	<?php endforeach; ?>
	</ul>

</body>
</html>