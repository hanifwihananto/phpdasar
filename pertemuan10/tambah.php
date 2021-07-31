<?php 
	require 'functions.php';

	// Cek apakah tombol submit sudah ditekan atau belum 
	if(isset( $_POST["submit"]) ) {
		// Ambil data dari tiap elemen dalam form
		

		// Cek apakah data berasil ditambahkan atau tidak
		if (tambah($_POST) > 0) {
			echo "
				<script>
					alert('Data berhasil ditambahkan!');
					document.location.href = 'index.php';
				</script>
			";
		} else {
			echo "
				<script>
					alert('Data gagal ditambahkan!');
					document.location.href = 'index.php';
				</script>
			";
		}
 	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Data Mahasiswa</title>
	<style>		
		.input-data {
			background-color: lightblue;
			width: 350px;
			padding: 15px;
			margin-left: 50px;
			border-radius: 15px;
			justify-content: center;
		}

		input {
			width: 270px;
			height: 25px;
			border-radius: 5px;
		}

		li {
			list-style-type: none;
			margin: 10px 0px;
		}

		button {
			width: 100px;
			height: 30px;
			border-radius: 5px;
		}

	</style>
</head>
<body>

	<h1 class="tambah">Tambah Data Mahasiswa</h1>
	
	<form method="post">
		<div class="input-data">
			<ul>
				<li>
					<label for="nrp">NRP : </label>
					<input type="text" name="nrp" id="nrp">
				</li>

				<li>
					<label for="nama">Nama : </label>
					<input type="text" name="nama" id="nama">
				</li>

				<li>
					<label for="email">Email : </label>
					<input type="text" name="email" id="email">
				</li>

				<li>
					<label for="jurusan">Jurusan : </label>
					<input type="text" name="jurusan" id="jurusan">
				</li>

				<li>
					<label for="gambar">Gambar : </label>
					<input type="text" name="gambar" id="gambar">
				</li>

				<li>
					<button type="submit" name="submit">Tambah Data</button>
				</li>
			</ul>
		</div>
	</form>
</body>
</html>