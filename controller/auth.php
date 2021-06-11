<?php
session_start();

if(isset($_SESSION["login"]) || $_SESSION["login"] == "true") {
    header("location: ../dashboard.php");
    exit;
}

require_once("../config.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = sha1(trim($_POST['password']));

    $query = "SELECT * FROM `users` WHERE email='" . $email . "' AND password='" . $password . "'";
    echo $query;
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        
        $_SESSION["name"] = $row["name"];
        $_SESSION["login"] = "true";

        header("location: ../dashboard.php");
        exit;
    }else {
        header("location: ../login.php");
        exit;
    }
}

?>