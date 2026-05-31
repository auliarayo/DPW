<?php

//soal: array dengan index nama dan umur, konversi ke JSON
$data = array(
    array("nama" => "habibbah", "umur" => 20),
    array("nama" => "cindy", "umur" => 21),
    array("nama" => "alfi", "umur" => 19),
    array("nama" => "fikka", "umur" => 22),
    array("nama" => "nadin", "umur" => 20),
    array("nama" => "aulia", "umur" => 23),
    array("nama" => "rhenanda", "umur" => 21),
    array("nama" => "anggun", "umur" => 24),
    array("nama" => "hayyu", "umur" => 19),
    array("nama" => "nadhin", "umur" => 22),
    array("nama" => "widya", "umur" => 20),
    array("nama" => "aurellia", "umur" => 21),
    array("nama" => "ranita", "umur" => 23)
);

//konversi ke JSON
$json = json_encode($data, JSON_PRETTY_PRINT);

echo "<h2>Data Array (Nama dan Umur)</h2>";
echo "<h3>Data dalam format Array:</h3>";
echo "<pre>";
print_r($data);
echo "</pre>";

echo "<h3>Data dalam format JSON:</h3>";
echo "<pre>";
echo $json;
echo "</pre>";
?>