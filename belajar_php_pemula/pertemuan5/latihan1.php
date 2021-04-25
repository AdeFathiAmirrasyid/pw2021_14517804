<?php
// array
// variable yang dapat memiliki banyak nilai
// Element pada array boleh memiliki  tipe data yang berbeda 
// Pasangan key dan value
// key nya adalah index, yang di mulai dari 0 

// Untuk Membuat Array
// Cara Lama 
$hari = array("senin","selasa","rabu");
// Cara Baru
$bulan = ["january","february","Maret"];
$arr1 = ["tulisan",123,false];

// Menampilkan Array 
// var_dump() / print_r()
var_dump($hari);
echo "<br>";
$hari[] = "kamis";
$hari[] = "jum'at";
var_dump($hari);




echo "<br>";
echo "<br>";
print_r($bulan);

echo "<br>";
echo "<br>";
// Menampilkan 1 element pada array 
echo $arr1[0];

?>
