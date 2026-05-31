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

$warna = "biru";
switch ($warna) {
    case "merah":
        echo "Warna adalah merah";
        break;
    case "kuning":
        echo "Warna adalah kuning";
        break;
    case "hijau":
        echo "Warna adalah hijau";
        break;
    default:
    echo "Warna tidak dikenal";
}

echo "<br>";

?>   
</body>
</html>