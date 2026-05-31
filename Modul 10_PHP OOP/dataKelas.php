<?php
require_once ('kelas/mahasiswa.php');

$mhs = new mahasiswa("Aulia Raya");
$mhs->setNIM("253307036");
$mhs->setJurusan("Teknik Informatika");
$mhs->setKelas("2B");

echo "<h3> Data Mahasiswa </h3>";
echo "Nama: " . $mhs->getNama() . "<br>";
echo "NIM: " . $mhs->getNIM() . "<br>";
echo "Jurusan: " . $mhs->getJurusan() . "<br>";
echo "Kelas: " . $mhs->getKelas() . "<br>";
?>