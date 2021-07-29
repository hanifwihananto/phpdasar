<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan Array</title>
	<style>
		.kotak {
			width: 70px;
			height: 70px;
			background-color: #BADA55;
			text-align: center;
			line-height: 70px;
			float: left;
			transition: 1s;
			margin: 5px;
		}

		.kotak:hover {
			transform: rotate(360deg);
			border-radius: 50%;
		}
	</style>
</head>

<body>
	<?php 
	$angka = [1,2,3,4,5,6,7,8,9,0];
	 ?>

	<?php foreach ($angka as $ang) : ?>
	
	<div class="kotak"><?= $ang; ?></div>
	
	<?php endforeach; ?>
</body>
</html>