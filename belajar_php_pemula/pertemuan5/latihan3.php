<?php
$mahasiswa = [
["Insanie","1234567","Management","diahinsanie@gmail.com"],
["Alisia","1234567","Perawat","alisia@gmail.com"],
["Jazilah","1234567","Pegawai Bank","jazilah@gmail.com"]
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
           <li>Name : <?= $m[0] ?></li>
           <li>NRP : <?= $m[1] ?></li>
           <li>Jurusan : <?= $m[2] ?></li>
           <li>Email : <?= $m[3] ?></li>
           <?php echo "<br>"?>
        <?php endforeach; ?>
    </ul>
</body>
</html>