<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["login"]);
header("location: ../login.php");
?>