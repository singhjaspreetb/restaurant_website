<?php
include('auth.php');
$database = "cart";
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("Connection to this database failed due to" . mysqli_connect_error());
}


if (isset($_POST['cart'])) {
    $menu_no = $_POST['cart'];
    $menu_topic = $_SESSION['username'];

    $sql = "DELETE FROM `$menu_topic` WHERE `$menu_topic`.`menu_no` = " . $menu_no . ";";

    if ($con->query($sql) == true) {
        echo "<script>alert('Removed From Cart');</script>";
        echo "<script>window.location.assign('../../pages/cart.php');</script>";
    } 
    else {
        echo "<script>alert('Try Again!');</script>";
    }
}
?>