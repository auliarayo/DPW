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

/* operator logika yang bisa digunakan
* ==    sama dengan         $x == $y
* ===   identical           $x === $y
* !=    tidak sama dengan   $x != $y
* <>    tidak sama dengan   $x <> $y
* !==   not identical       $x !== $y
* >     lebih besar dari    $x > $y
* <     kurang dari         $x < $y
* >=    lebih besar atau sama dengan    $x >= $y
* <=    kurang dari atau sama dengan    $x <= $y
* <=>   spaceship           $x <=> $y
*/

$t = date("H"); //mendapatkan jam dengan format 1-24
echo "If <br>";
if ($t < 16) {
    echo "Selamat Siang!";
}

$t = date("H");
echo "<br><br> If dan Else <br>";
if ($t < 20) {
    echo "Selamat Siang!";
} else {
    echo "Selamat Malam!";
}


echo "<br><br> Nested If <br>";
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