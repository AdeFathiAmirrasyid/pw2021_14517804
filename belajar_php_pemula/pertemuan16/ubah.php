<?php 
session_start();
if( !isset($_SESSION["login"])){
    header("Location: login.php");
}

require "functions.php";
//Mengambil data dari URL    
$id  = $_GET["id"];
// query data mahasiswa berdasarkan id nya 
$mhs = query( "SELECT * FROM mahasiswa WHERE id = $id")[0];
//cek apakah tombol submit sudah ditekan atau belum 
if( isset($_POST["submit"])){
    //cek apakah  data  berhasil  di ubah  atau tidak
    if( edit($_POST) > 0){
        echo "
        <script>
        alert('data berhasil di ubah!');
        document.location.href = 'index.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('data gagal di ubah!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data mahasiswa</title>
</head>
    <body>
        <h1>Edit data mahasiswa</h1>
        <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
                <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"]; ?>">
            <ul>
                <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" value="<?= $mhs["nrp"]; ?>" required >
                </li>
                <br>
                <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>" required>
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
                <label for="gambar">Gambar : </label><br>
                <img src="img/<?= $mhs["gambar"]; ?> " width="50" height="50"> <br>
                <input type="file" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>"  required>
                </li>
                <br>
                <li>
                <button type="submit" name="submit">Edit Data!</button>
                </li>
            </ul>
        </form>
    </body>
</html>