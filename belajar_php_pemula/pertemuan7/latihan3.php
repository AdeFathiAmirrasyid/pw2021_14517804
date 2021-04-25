<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="latihan4.php" method="post">
    Masukan Nama : 
    <input type="text" name="name">
    
    <br>
    <button type="submit" name="submit">kirim!</button>

    </form>

<?php if (isset($_POST["submit"])) :?>
    <h1>Selamat Datang, <?= $_POST["name"]; ?></h1>
<?php endif; ?>
 
    <form  method="post">
    Masukan Nama : 
    <input type="text" name="name">
    
    <br>
    <button type="submit" name="submit">kirim!</button>
    </form>
   
</body>
</html>