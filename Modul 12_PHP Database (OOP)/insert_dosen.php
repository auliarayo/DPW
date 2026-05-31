<?php
$con = new mysqli("localhost", "root", "", "dpw");

//check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

//eksekusi DML INSERT menggunakan OOP
$sql = "INSERT INTO t_dosen (idDosen, namaDosen, noHP) VALUES (10, 'Angger Binuko Paksi, M.Kom.', '085155442789')";
$hasil = $con->query($sql);

if ($hasil === TRUE) {
    echo "Data dosen berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>