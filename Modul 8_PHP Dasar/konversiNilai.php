<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Div and Span</title>
        <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
        <meta name="viewport" content="width=device-width, initial-scale-1">
        <meta name="description" content="Belajar PHP">
        <meta name="keywords" content="253307036">
        <meta name="author" content="Aulia Raya December">
    </head>
<body>

<?php

/* huruf    nilai
    C  = 0 -> 59
    BC = 0 -> 69
    B  = 0 -> 79
    AB = 0 -> 89
    A  = 0 -> 100
*/

$t = date("H"); //mendapatkan jam dengan format 1-24


if ($t < 12) {
    echo "Selamat Pagi!";
} elseif ($t < 16) {
    echo "Selamat Sore!";
} else {
    echo "Selamat Malam";
}

?>   
</body>
</html>