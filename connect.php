<?php
$host = "localhost";
$user = "u409952495_executor";
$ps = "writ3r!suM";
$dataB = "u409952495_jrupiter";

$dbc = mysqli_connect($host, $user, $ps, $dataB);
// Check connection
if (!$dbc) {
  die("Connection failed: " . mysqli_connect_error());
}


?>
