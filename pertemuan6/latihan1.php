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

		.clear {
			clear: both;
		}
	</style>
</head>

<body>
	<?php 
	// $angka = [1,2,3,4,5,6,7,8,9,0];
	$angka = [
		[1,2,3],
		[4,5,6],
		[7,8,9]
	];
	 ?>

	<?php foreach ($angka as $ang) : ?>
		<?php foreach($ang as $num) : ?>
			<div class="kotak"><?= $num; ?></div>
		<?php endforeach; ?>
		<div class="clear"></div>
	<?php endforeach; ?>
</body>
</html>