<?php 
// Array
// Variabel yang dapat memiliki benyak nilai
// Elemen pada array boleh memiliki tipe data yang berbeda 
// Pasangan antara key dan value
// key nya adalah index, yang dimulai dari 0

// Membuat Array
// Cara Lama
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at");

// Cara Baru
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli"];
$arr1 = [123, "tulisan", false];

// Menampilkan Array
// var_dump() print_r()
var_dump($hari);
echo "<br><br>";
print_r($bulan);
echo "<br><br>";

// Menampilkan 1 elemen pada array
echo $hari[2];
echo "<br><br>";

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Sabtu";
echo "<br><br>";
var_dump($hari);
 ?>