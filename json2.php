<?php
$json_data=file_get_contents("pekerja.json");
$obj = json_decode($json_data);
echo $obj->{'name'};
?>