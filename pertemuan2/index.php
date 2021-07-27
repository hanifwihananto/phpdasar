<?php 
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print : Menampilkan
// print_r() : Menampilkan String / Array
// var_dump() : Untuk debugging

// Penulisan PHP
// 1. PHP di dalam HTML (Lebih Baik)
// 2. HTML di dalam PHP (Lebih Ribet)

// Variabel dan Tipe Data
// Variabel
$nama = "hanif";
// echo "Nama saya $nama";

// Operator
// Aritmatika
// + - * / %
$x = 10;
$y = 20;
echo $x * $y;

// Penggabungan String / concatenation / concat
// .
$nama_depan = "Hanif";
$nama_belakang = "Wihananto";
echo $nama_depan." ".$nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=

$nama1 = "Hanif";
$nama1 .= " ";
$nama1 .= "Wihananto";
echo $nama1;

// Perbandingan
// <, >, <=, >=, ==, !=

// Identitas
// ===, !== { Tipe Data }

// Logika
// &&, ||, !

 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Belajar PHP</title>
 </head>
 <body>
     <h1>Halo, Selamat Datang <?= $nama; ?></h1>
 </body>
 </html>