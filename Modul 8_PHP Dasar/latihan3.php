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

    $x=5;
    $y=10;

    //arithmetic operator
    echo "Penambahan ".$x + $y."<br>";
    echo "Pengurangan ".$x - $y."<br>";
    echo "Perkalian ".$x * $y."<br>";
    echo "Pembagian ".$x / $y."<br>";
    echo "Modulus ".$x % $y."<br>";
    echo "Exponensial ".$x ** $y."<br>";
    echo ("<br>");

    //assigment operator
    $x +=2; //$x = $x + 2
    $y *=2; //$y = $y * 2
    echo "Penambahan x".$x."<br>";
    echo "Perkalian y".$y."<br>";
    echo ("<br>");

    //increment/decrement operators
    echo "Isi ++x = ".++$x."<br>";
    echo "Isi x++ = ".$x++."<br>";
    echo "Isi x = ".$x."<br>";
    echo ("<br>");
    echo "Isi --y = ".--$y."<br>";
    echo "Isi y-- = ".$y--."<br>";
    echo "Isi y = ".$y."<br>";
    echo ("<br>");

    //conditional assignment operators
    $user = "Aulia Raya";

    //<kondisi> ? <nilai_jika_kondisi_true> : <nilai_jika_kondisi_false>
        $status = (empty($user)) ? "kosong" : "ada isi";
        echo $status."<br>";
        
    //variablw $color diisi dengan "red" jika $color tidak ada atau null
    echo $color = $color ?? "red";
?>   
</body>