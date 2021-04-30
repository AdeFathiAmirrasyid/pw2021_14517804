<?php
session_start();
// cek session 
if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require "functions.php";

// jika tidak ada id di url  
if( !isset($_GET["id"])){
  header("Location: index.php");
  exit;
}

// ambil id dari URL 
$id = $_GET["id"];

// Query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
// cek apakah tombol ubah sudah ditekan
if (isset($_POST["ubah"])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('data berhasil diubah');
          document.location.href = 'index.php';
        </script>";
  } else {
    echo "Data gagal diubah";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <h3> Form Ubah Data Mahasiswa</h3>
  <form action="" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
    <ul>
      <li>
        <label for="nama">Name : </label>
        <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>" autofocus required>
      </li>

      <br>
      <li>
        <label for="nrp">NRP : </label>
        <input type="text" name="nrp" id="nrp" value="<?= $mhs["nrp"]; ?>" required>
      </li>

      <br>
      <li>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>" required>
      </li>

      <br>
      <li>
        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>" required>
      </li>

      <br>
      
      <li>
      <input type="hidden" name="gambar_lama" value="<?= $mhs["gambar"]; ?>">
        <label for="gambar">Gambar</label>
        <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        <img src="img/<?= $mhs["gambar"]; ?>" width="120" style="display: block;" class="img-preview">
      </li>

      <br>
      <li>
        <button type="submit" name="ubah"> Ubah Data! </button>
      </li>
    </ul>
  </form>

  <script src="js/script13.js"></script>
</body>

</html>