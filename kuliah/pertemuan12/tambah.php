<?php 
session_start();
// cek session 
if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
} 

require "functions.php";

// cek apakah tombol tambah sudah ditekan
if( isset($_POST["tambah"])){
  if(tambah($_POST) > 0 ){
     echo "<script>
          alert('data berhasil ditambahkan');
          document.location.href = 'index.php';
        </script>";
  }else{
    echo "Data gagal ditambahkan";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3> Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST">
    <ul> 
      <li>
        <label for="nama">Name : </label>
        <input type="text" name="nama" id="nama" autofocus required>
      </li>

      <br>
      <li>
        <label for="nrp">NRP : </label>
        <input type="text" name="nrp" id="nrp" required>
      </li>

      <br>
      <li>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email" required>
      </li>

      <br>
      <li>
        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan" required> 
      </li>
      
      <br>
      <li>
        <label for="gambar">Gambar</label>
        <input type="text" name="gambar" id="gambar" required>
      </li>

      <br>
      <li>
        <button type="submit" name="tambah"> Tambah Data! </button>
      </li>
    </ul>
  </form>
</body>

</html>