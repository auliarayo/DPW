<?php

$angka = array(12, 13, 15, 16, 67, 177, 444, 988, 76899, 32351);

echo "<h2>Ganjil atau Genap</h2>";
foreach ($angka as $nilai) {
    if ($nilai % 2 == 0) {
        echo "Nomor : $nilai Genap<br>";
    } else {
        echo "Nomor : $nilai Ganjil<br>";
    }
}
?>