<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan 1</title>

	<style>
		.warna-baris {
			background-color: silver;
		}
	</style>
</head>

<body>
	<h3>Example :</h3>

	<table border="1" cellpadding="10" cellspacing="0">
		<?php for ($i = 1; $i <= 5; $i++) : ?>
			<?php if ($i % 2 == 1) : ?>
				<tr class="warna-baris">
				<?php else : ?>
				<tr>
				<?php endif; ?>

				<?php for ($j = 1; $j <= 5; $j++) : ?>
					<td><?php echo "$i, $j" ?> </td>
				<?php endfor; ?>
				</tr>
			<?php endfor; ?>
	</table>
	<br>

</body>

</html>

<?php
// Perulangan
// for
// while
// do..while
// foreach : Perulangan khusus array

// for
for ($i = 0; $i < 5; $i++) {
	echo "Hello World! <br>";
}
echo "<br>";

// while
$i = 0;
while ($i < 5) {
	echo "Hallo Dunia! <br>";
	$i++;
}
echo "<br>";

$i = 1;
// do..while
do {
	echo $i . ". Haii World! <br>";
	$i++;
} while ($i < 5);
echo "<br>";
?>