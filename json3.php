<?php
$json_data=file_get_contents("pekerja2.json");
$obj = json_decode($json_data);
echo "Nama : "; echo $obj->nama;
echo "<br>";
echo "Nama anak pertama: ";echo $obj->anak[0];
echo "<br>";
echo "Nama anak kedua: ";echo $obj->anak[1];
echo "<br>";
echo "Nama anak ketiga: ";echo $obj->anak[2];
?>