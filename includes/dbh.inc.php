<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "mariajestdziwna";
$dBName = "loginphp";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
