<?php
session_start();
// cek session 
if (isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}

require "functions.php";

// ketika tombol login di tekan
if (isset($_POST["login"])) {
  $login = login($_POST);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3> Form Login </h3>

  <?php if (isset($login['error'])) :  ?>
      <p style="color : red; font-style: italic"><?= $login["pesan"]; ?></p>
    <?php endif; ?>

  <form action="" method="POST">
    <ul>
      <li>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" autofocus autocomplete="off" required>
      </li>

      <li>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
      </li>

      <li>
        <button type="submit" name="login">Login</button>
      </li>
      <li>
        <a href="registrasi.php">Tambah user baru</a>
      </li>
    </ul>
  </form>

</body>

</html>