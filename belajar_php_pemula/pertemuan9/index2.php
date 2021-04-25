
<?php 
//Koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");
// Ambil data dari table mahasisewa / query data mahasiswa
$result = mysqli_query($conn,"SELECT * FROM mahasiswa");
// Ambil data (fetch) mahasiswa dari object result
// Ada 4 cara mengambil datanya 
// mysqli_fetch_row()       //Mengembalikan array numerik
// mysqli_fetch_assoc()     //Mengembalikan array Associative
// mysqli_fetch_array()    // Mengembalikan array keduanya numerik dan associative
// mysqli_fetch_object()

// while($mhs = mysqli_fetch_assoc($result)){

// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>

            <?php $i = 1; ?>
            <?php while( $row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">ubah</a> |
                    <a href="">hapus</a>
                </td>
                <td>
                    <img src="img/<?= $row["gambar"]; ?> "alt="ade fathi" width="50" height="50">
                </td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>

        </table>  
    </body>
</html>