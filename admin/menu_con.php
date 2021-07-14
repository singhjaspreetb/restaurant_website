<?php
$database = "menu";
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("Connection to this database failed due to" . mysqli_connect_error());
}
?>