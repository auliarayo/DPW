<?php
require_once ('kelas/manusia.php');

$aulia = new manusia;
$aulia->setNama("Aulia Raya");
$aulia->setUmur(19);

$hayyu = new manusia;
$hayyu->setNama("Hayyu Adhini");
$hayyu->setUmur(22);

echo "Identitas Hayyu:<br>";
echo "Nama: " . $hayyu->getNama() . "<br>";

echo "<br>Identitas Anda:<br>";
echo "Nama: " . $aulia->getNama() . "<br>";
echo "Umur: " . $aulia->getUmur() . " tahun<br>";
echo "NIK: " . $aulia->getNIK() . "<br>";
?>