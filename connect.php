<?php
$host = "localhost";
$user = "u409952495_executor";
$ps = "writ3r!suM";
$dataB = "u409952495_jrupiter";

$dbc = mysqli_connect($host, $user, $ps, $dataB)
OR die(mysqli_connect_error());
mysqli_set_charset($dbc, 'utf-8');

// Check connection
//if (!$dbc) {
//  die("Connection failed: " . //mysqli_connect_error());
//}


?>
