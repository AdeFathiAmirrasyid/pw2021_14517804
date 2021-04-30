<?php 
//Koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows; 
}

function tambah($data){ 
       global $conn;
    // Ambil data dari tiap element  dalam form
        $nrp     = htmlspecialchars($data["nrp"]);
        $nama    = htmlspecialchars($data["nama"]);
        $email   = htmlspecialchars($data["email"]);  
        $jurusan = htmlspecialchars($data["jurusan"]);
    
        // upload gambar 
        $gambar = upload();
        if( !$gambar ){
            return false;
        }
    // query insert data 
        $query = "INSERT INTO mahasiswa VALUES
        ('','$nrp','$nama','$email','$jurusan','$gambar')";
        mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function upload(){
   $nameFile    = $_FILES["gambar"]["name"];
   $ukuranFile  = $_FILES["gambar"]["size"];
   $error    = $_FILES["gambar"]["error"];
   $tmpName    = $_FILES["gambar"]["tmp_name"];

   if( $error === 4 ){
    echo "
    <script>
    alert('Pilih gambar terlebih dahulu');
    </script>
    ";
    return false;
   }

//    cek apakah  yang  di upload adalah gambar
$ektensiGambarValid = ['jpg','jpeg','png'];
$ektensiGambar = explode('.',$nameFile);
$ektensiGambar = strtolower(end($ektensiGambar));
if( !in_array($ektensiGambar,$ektensiGambarValid)){
    echo "
    <script>
    alert('Yang anda upload bukan gambar');
    </script>
    ";
    return false;

    }
//  cek jika jika ukurannya terlalu besar
if($nameFile > 5000000){
    echo "
    <script>
    alert('Ukuran terlalu besar!'); 
    </script>
    ";
    return false;
    }


// Lolos pengecekan, gambar siap di upload
// generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ektensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
}

function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM mahasiswa WHERE id = $id"); 
    return mysqli_affected_rows($conn);
}
function edit($data){
    global $conn;
    // Ambil data dari tiap element  dalam form
        $id     = $data["id"];
        $nrp     = htmlspecialchars($data["nrp"]);
        $nama    = htmlspecialchars($data["nama"]);
        $email   = htmlspecialchars($data["email"]);  
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambarlama  = htmlspecialchars($data["gambarlama"]);

        // cek apakah user pilih gambar baru atau tidak
        if($_FILES["gambar"]["error"] === 4){
            $gambar = $gambarlama;
        }else{
            $gambar = upload();
        }
        
    // query insert data 
        $query = "UPDATE mahasiswa SET
                    nrp = '$nrp',
                    nama = '$nama',
                    email = '$email',
                    jurusan = '$jurusan',
                    gambar = '$gambar'
                    WHERE id = $id
                    ";
        mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}
function cari($keyword){
    $query = "SELECT * FROM mahasiswa WHERE
                nama LIKE '%$keyword%' OR
                nrp  LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%' ";
                return query($query);
}

function registrasi($data){
    global $conn;

    $username  = strtolower(stripslashes($data["username"]));
    $password  = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);

    // cek username sudah  ada atau belom 
    $result =  mysqli_query($conn,"SELECT username FROM users WHERE username = '$username' ");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('username sudah terdaftar!')
              </script>";
              return false;
    }

    // cek konfirmasi password
    if( $password !== $password2){
        echo "
        <script>
            alert('konfirmasi password tidak sesuai');
        </script>
        ";
        return false;
    }
    // enkripsi password
    $password = password_hash($password,PASSWORD_DEFAULT);

    // MD5 Enkripsi
    // $password = md5($password);
    mysqli_query($conn,"INSERT INTO users VALUES ('','$username','$password')");
    return mysqli_affected_rows($conn);
}
?>