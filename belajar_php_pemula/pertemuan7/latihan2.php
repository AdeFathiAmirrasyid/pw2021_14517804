<?php 
//  cek apakah tidak ada data di $_GET
if( !isset($_GET["name"]) ||
    !isset($_GET["nrp"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["gambar"]) ){
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li>
            <img src="img/<?= $_GET["gambar"]; ?>" width="200" height="150">
        </li>
           <li>Name : <?= $_GET["name"] ?></li>
           <li>NRP : <?= $_GET["nrp"] ?></li>
           <li>Jurusan : <?= $_GET["jurusan"] ?></li>
           <li>Email : <?= $_GET["email"] ?></li>
    </ul>
<a href="latihan1.php">kembali ke daftar mahasiswa </a>
</body>
</html>