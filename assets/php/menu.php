<?php
include('auth.php');
$database = "menu";
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("Connection to this database failed due to" . mysqli_connect_error());
}


if (isset($_POST['cart'])) {
    $menu_no = $_POST['cart'];
    $topic = $_POST['topic'];
    $sql = "select * from " . $topic . " where menu_no=" . $menu_no . "";

    $data = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($data);

    $menu_topic = $_SESSION['username'];
    $title = $result['title'];
    $price = $result['price'];
    $image = $result['image'];
    $info = $result['info'];

    $sql2 = "INSERT INTO `cart`.`$menu_topic` (`title`, `price`, `image`, `info`) VALUES ('$title','$price','$image','$info');";

    $database2 = "cart";
    $server2 = "localhost";
    $username2 = "root";
    $password2 = "";

    $con2 = mysqli_connect($server2, $username2, $password2, $database2);

    if (!$con2) {
        die("Connection to this database failed due to" . mysqli_connect_error());
    }
    if ($con2->query($sql2) == true) {
        echo "<script>alert('Added to Cart');</script>";
        echo "<script>window.location.assign('../../pages/menu.php');</script>";

    } else {
        echo "<script>alert('Try Again!');</script>";
    }
}
