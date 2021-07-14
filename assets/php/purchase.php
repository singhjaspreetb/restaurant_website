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

if (isset($_POST['price'])) {
    $cart_name = $_SESSION['username'];
    $total_price = $_POST['price'];
    $sql = "select * from " . $cart_name . "";

    $data = mysqli_query($con, $sql);

    $database2 = "f4_food";
    $server2 = "localhost";
    $username2 = "root";
    $password2 = "";

    $con2 = mysqli_connect($server, $username, $password, $database);

    if (!$con2) {
        die("Connection to this database failed due to" . mysqli_connect_error());
    }
    
    while ($result = mysqli_fetch_assoc($data)) {
        $title=$result['title'];
        $menu_no=$result['menu_no'];

        $sql2="INSERT INTO `f4_food`.`orders`(`menu_no`, `title`, `name`) VALUES ('$menu_no','$title','$cart_name')";
        $sql3="DELETE FROM `cart`.`$cart_name` WHERE menu_no=$menu_no.";

        if ($con2->query($sql2) == true){
            if($con->query($sql3) == true) {
                echo "<script>alert('Total Price : $total_price Username : $cart_name Your Order has been Registred');</script>";
                echo "<script>window.location.assign('../../pages/menu.php');</script>";
            }
            else {

                echo "<script>alert('Try Again');</script>";
            }
        }else {

            echo "<script>alert('Try Again');</script>";
        }
    }
}
?>