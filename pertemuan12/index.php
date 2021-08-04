<?php 
	require 'functions.php';
	$mahasiswa = query("SELECT * FROM mahasiswa");

	// Tombol cari ditekan 
	if (isset($_POST["cari"])) {
		$mahasiswa = cari($_POST["keyword"]);
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Admin</title>
	<style>
		.tambah {
			text-decoration: none;
			color: black;
		}

		img {
			width: 70px;
		}

		.input-cari {
			width: 250px;
			height: 25px;
			border-radius: 15px;
			outline: none;
		}

		.btn-cari {
			height: 25px;
			background-color: skyblue;
			border-radius: 10px;
		}

	</style>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>

	<button><a target="_blank" href="tambah.php" class="tambah">Tambah Data Mahasiswa</a></button>	
	<br><br>

	<form action="" method="post">
		<input class="input-cari" type="text" name="keyword" autofocus placeholder="Masukkan pencarian..." autocomplete="off">
		<button class="btn-cari" type="submit" name="cari">Cari</button>
		<button class="btn-cari"><a class="tambah" href="index.php">Refresh</a></button>
	</form>
	<br>
	
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach ($mahasiswa as $mhs) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a target="_blank" href="ubah.php?id=<?= $mhs["id"]; ?>">Ubah</a> | 
				<a target="_blank" href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('Yakin?'); ">Hapus</a>
			</td>
			<td><img src="img/<?= $mhs["gambar"]; ?>"></td>
			<td><?= $mhs["nrp"]; ?></td>
			<td><?= $mhs["nama"]; ?></td>
			<td><?= $mhs["email"]; ?></td>
			<td><?= $mhs["jurusan"]; ?></td>
		</tr>
		<?php $i++ ?>
		<?php endforeach; ?>

	</table>
</body>
</html>