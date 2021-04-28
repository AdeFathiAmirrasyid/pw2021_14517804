<?php
session_start();
// cek session 
if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}


require "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tombol cari di clik 
if( isset($_POST['cari'])){
  $mahasiswa = cari($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>

<a href="logout.php">Logout</a>
  <h1>Daftar Mahasiswa</h1>

  <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>
    
    <form action="" method="post"> 
      <input type="text" name="keyword" size="40" placeholder="Search" autocomplete="off" autofocus>
      <button type="submit" name="cari">Cari!</button>
    </form>

    <br> 
  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

<?php if(empty($mahasiswa)) : ?>
  <tr>
    <td colspan="4"><p>data mahasiswa tidak dapat ditemukan! </p></td>
  </tr>

<?php endif ?>

    <?php $i = 1;
    foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $mhs["gambar"]; ?>" width="50" height="50" alt=""></td>
        <td><?= $mhs["nama"]; ?></td>
        <td>
          <a href="detail.php?id=<?= $mhs["id"]; ?>">lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>