<?php 
// Date
// Untuk menampilkan tanggal dengan format tertentu
echo date("l, d-M-Y");
echo "<br><br>";

// Time
// UNIX Time Stamp / EPOCH Time
// Detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
echo date("l, d M Y", time() + 60*60*24*100);
echo "<br><br>";

// mktime
// Membuat sendiri detik
// mktime(0,0,0,0,0,0);
// Jam, Menit, Detik, Bulan, Tanggal, Tahun
echo date("l", mktime(0,0,0,6,29,2004));
echo "<br><br>";

// strtotime
echo strtotime("3 jul 2005");
echo "<br>";
echo date("l, d M Y", strtotime("3 jul 2005"));
 ?>