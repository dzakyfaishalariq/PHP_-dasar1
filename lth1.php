<?php
// membuat komentar
// komentar petama saya
/* 
komentar kedua saya 
*/
// maka hal ini akan saya mulai
// untuk melakukan hal yang luar biasa 
// mengunakan echo "ini adalah komentar";
// print_r("ini adalah komentar");
// untuk mendibug
// var_dump("ini adalah komentar");

// echo "hallo saya adalah Dzaky fasihalariq <br>";
// print_r('hallo saya adalah Dzaky fasihalariq <br>');
// var_dump('hallo saya adalah Dzaky fasihalariq <br>');
$nama = "Dzaky Fasihalariq";
$NPM = "G1A020003";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar php 1</title>
</head>

<body>
    <?php
    for ($i = 0; $i < 4; $i++) {
    ?>
        <h1>Hallo saya adalah <?php echo $nama ?></h1>
        <hr>
    <?php
    }
    ?>
    <?php
    // membuat penggabungan string
    echo $nama . " " . $NPM;
    ?>
</body>

</html>