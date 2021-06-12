<?php

$servername = "localhost";
$username = "Dr_Lecturer";
$password = "Thesis_On_My_Heart";
$db_name = "student";
$dbname = "99ac0926f154a8d14b89d8ca6351b627";
$flag_1 = "47uRKr34T1f{b3ware_with_LFI_789142ec6fa96d23cbc62540ea6b97f9}";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);
$connn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn || !$connn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
