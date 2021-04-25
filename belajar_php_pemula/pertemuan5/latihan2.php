<?php
// Melakukan Perulangan Pada Array
// Menggunakan for / foreach
$angka = [3,5,6,7,2,12,32,54,21,52,32,33,21,1222]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 Pertemuan 5</title>
    <style>
        .kotak{
            width:50px;
            height:50px;
            background-color:salmon;
            text-align:center;
            line-height:50px;
            margin : 3px;
            float:left;
        }
        .clear{
            clear:both;
        }
    </style>
</head>
<body>

<?php for($i = 0; $i < count($angka); $i++){?>
    <div class="kotak"> <?= $angka[$i] ?></div>
<?php } ?>


<div class="clear"></div>
<?php foreach( $angka as $a) { ?>
    <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>


<div class="clear"></div>
<?php foreach( $angka as $a) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>
</body>
</html>