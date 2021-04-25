<?php
// Variable scope / lingkup variable

// Di PHP ada suatu variable super global
// SUPERGLOBALS
// variable global milik PHP
// merupakan  Arrar Assosiative
var_dump($_GET);

$mahasiswa = [
    ["name" => "Insanie",
     "nrp" => "12345",
     "jurusan" => "Management",
     "email" => "diahinsanie@gmail.com",
     "gambar" => "ace.jpg"],

    ["name" => "Alisia",
     "nrp" => "678910",
     "jurusan" => "Perawat",
     "email" => "alisia@gmail.com",
     "gambar" => "law.png"],

    ["name" => "Jazilah",
     "nrp" => "11121314",
     "jurusan" => "Pegawai Bank",
     "email" => "jazilah@gmail.com",
     "gambar" => "boa.jpg"]
    ];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
   <ul>
    <?php foreach( $mahasiswa as $mhs) : ?>
         <li>
         <a href="latihan2.php?name=<?= $mhs["name"];?>& nrp=<?= $mhs["nrp"]; ?>& email=<?= $mhs["email"]; ?>& jurusan=<?= $mhs["jurusan"]; ?>& gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["name"]; ?></a>
        </li>
   <?php endforeach;?>
   </ul>
</body>

</html>