<?php



// Array Associative
// Definisinya Sama Sepertiarray numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    ["name" => "Insanie",
     "nrp" => "1234567",
     "jurusan" => "Management",
     "email" => "diahinsanie@gmail.com",
     "gambar" => "ace.jpg"],

    ["name" => "Alisia",
     "nrp" => "1234567",
     "jurusan" => "Perawat",
     "email" => "alisia@gmail.com",
     "gambar" => "law.png"],

    ["name" => "Jazilah",
     "nrp" => "1234567",
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
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $m) : ?>
         <li>
            <img src="img/<?= $m["gambar"]; ?>" width="200" height="150">
        </li>
           <li>Name : <?= $m["name"] ?></li>
           <li>NRP : <?= $m["nrp"] ?></li>
           <li>Jurusan : <?= $m["jurusan"] ?></li>
           <li>Email : <?= $m["email"] ?></li>
           <?php echo "<br>"?>
        <?php endforeach; ?>
    </ul>
</body>
</html>