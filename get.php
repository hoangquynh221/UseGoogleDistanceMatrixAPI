<?php
header('Content-Type: application/json');
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$link = str_replace("http://localhost:8888/distance/get.php?url=","", $actual_link);
$data = file_get_contents($link);

echo $data;
