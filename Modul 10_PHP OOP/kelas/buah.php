<?php
class buah
{
    public $nama, $warna, $buah;
    private $berat;
    
}

$mango = new buah();
$mango->nama = 'Mango'; // OK
$mango->warna = 'Yellow'; // ERROR: access to protected property > make public
$mango->buah = '300'; // ERROR: variable not found > add public variable

?>