<?php
$value = "Dzaky Faishalariq";
setcookie("nama", $value, time() + (86400 * 30), '/');
if (isset($_COOKIE['nama'])) {
    echo "Nama : " . $_COOKIE['nama'] . "<br>";
}
echo "Cookie berhasil di set";
