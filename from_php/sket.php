<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan from</title>
</head>

<body>
    <form action="sket.php" method="POST">
        <label for="soal1">
            Masukan nama :
        </label>
        <input type="text" name="nama" id="soal1">
        <br>
        <label for="soal2">
            Masukan NPM :
        </label>
        <input type="text" name="npm" id="soal2">
        <button type="submit">kelik</button>
    </form>
    <?php
    if (isset($_POST['nama']) && isset($_POST['npm'])) {
        echo "Nama : " . $_POST['nama'] . "<br>";
        echo "NPM : " . $_POST['npm'];
    }
    ?>
</body>

</html>