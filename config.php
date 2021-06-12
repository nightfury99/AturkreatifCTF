<?php

$servername = "localhost";
$username = "Dr_Lecturer";
$password = "Thesis_On_My_Heart";
$db_name = "student";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
