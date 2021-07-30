<?php 
	// Koneksi ke database
	$conn = mysqli_connect("localhost", "root", "", "phpdasar");

	// Ambil data dari tabel mahasiswa / query data mahasiswa
	$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

	// Ambil data (fetch) mahasiswa dari object result
	// mysqli_fetch_row()
	// mysqli_fetch_assoc()
	// mysqli_fetch_array()
	// mysqli_fetch_object()

	$mhs = mysqli_fetch_row($result);
	var_dump($mhs);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Admin</title>
	<style>
		img {
			width: 70px;
		}
	</style>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>
	
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

		<tr>
			<td>1.</td>
			<td>
				<a href="">Ubah</a> | 
				<a href="">Hapus</a>
			</td>
			<td><img src="img/elon-musk.jpg"></td>
			<td>049701315</td>
			<td>Hanif Wihananto</td>
			<td>hanifwihananto@gmail.com</td>
			<td>Teknik Elektro</td>
		</tr>
	</table>
</body>
</html>