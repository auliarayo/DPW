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

$namaBuah = array("nanas", "mangga", "jeruk", "apel", "melon", "manggis");
echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . "." . "<br>" . "<br>";

//tampilkan mangga
echo "Saya suka " . $namaBuah[1] . "<br>";
//tampilkan jeruk
echo "Saya suka " . $namaBuah[2] . "<br>";
//tampilkan apel
echo "Saya suka " . $namaBuah[3] . "<br>";
//tampilkan manggis
echo "Saya suka " . $namaBuah[5] . "<br>" . "<br>";

// array dengan spesifik index
$umur = array("Aulia"=>"19 Tahun", "Lily"=>"25 Tahun", "Rora"=>"18 Tahun");
$umur['Jaya']="39 Tahun";
echo "Umur Rora adalah " . $umur['Rora'] . "<br>" . "<br>";

// tampilkan semua umur
foreach ($umur as $nama=>$usia) {
    echo "Umur $nama adalah $usia <br>";
}

?>   
</body>
</html>