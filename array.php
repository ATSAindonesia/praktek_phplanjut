<?php
// Membuat array dengan nama dan umur
$data = array(
    array("nama" => "William", "umur" => 20),
    array("nama" => "Ani", "umur" => 30),
    array("nama" => "Citra", "umur" => 28),
    array("nama" => "Dewi", "umur" => 35),
    array("nama" => "devan", "umur" => 40),
    array("nama" => "Fita", "umur" => 22),
    array("nama" => "Galih", "umur" => 29),
    array("nama" => "Richard", "umur" => 32),
    array("nama" => "Indra", "umur" => 27),
    array("nama" => "Joko", "umur" => 31),
    array("nama" => "Lubu", "umur" => 38),
    array("nama" => "Lia", "umur" => 26),
    array("nama" => "Mira", "umur" => 33),
    array("nama" => "Mawar", "umur" => 34),
    array("nama" => "Jhon", "umur" => 36)
);

// Konversi array ke JSON
$json_data = json_encode($data);

// Tampilkan JSON
echo $json_data;
?>
