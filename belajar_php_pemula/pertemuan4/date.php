<?php
// Date 
// Fungsinya untuk Menampilkan tanggal dengan format tertentu
echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 january 1970
echo "<br>"; 
echo "<br>"; 
// echo time();
 echo date("l",time()-60*60*24*100);

echo "<br>"; 
echo "<br>"; 
// mktime
// Membuat sendiri detik
// mktime(0,0,0,0,0,0);
// jam,menit,detik,bulan,tanggal,tahun
echo date("l",mktime(0,0,0,01,11,1998));

echo "<br>"; 
echo "<br>"; 
// strtotime
echo date("l",strtotime("11 jan 1998"));

?>