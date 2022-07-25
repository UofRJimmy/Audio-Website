<?php 

$server = "localhost";
$user = "test";
$password = "123456";
$database = "another";

$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>