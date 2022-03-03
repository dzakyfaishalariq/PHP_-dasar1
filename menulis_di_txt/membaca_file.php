<?php
$read = file("newfile.txt");
foreach ($read as $line) {
    echo $line . "<br>";
}
