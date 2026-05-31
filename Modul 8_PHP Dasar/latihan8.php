<?php

$array = array(
    "1A" => array("Anggita", "Shafira", "David"),
    "1B" => array("Aulia", "Aurellia", "Rhenanda")
);

//menampilkan data array
echo "<h3>Semua data array:</h3>";
print_r($array);
echo "<br><br>";

//menampilkan kelas 1A
echo "<h3>Kelas 1A:</h3>";
print_r($array['1A']);
echo "<br><br>";

//menampilkan kelas 1B dengan index 0
echo "Kelas 1B index 0: " . $array['1B'][0];
echo "<br>";

//tampilkan Aurellia
echo "Aurellia: " . $array['1B'][1];
echo "<br>";

//tampilkan David
echo "David: " . $array['1A'][2];
echo "<br>";

//data kelas bisa ditulis juga dengan
$array_simple = [
    "1A" => ["Anggita", "Shafira", "David"],
    "1B" => ["Aulia", "Aurellia", "Rhenanda"]
];
?>