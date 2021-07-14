<?php
if (isset($_POST['Username'])) {
    include('config.php');

    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $sql = "INSERT INTO `f4_food`.`auth` (`username`, `email`, `password`) VALUES ('$Username', '$Email', '$Password');";

    if ($con->query($sql) == true) {

        $database2 = "cart";
        $server2 = "localhost";
        $username2 = "root";
        $password2 = "";

        $con2 = mysqli_connect($server2, $username2, $password2, $database2);

        if (!$con2) {
            die("Connection to this database failed due to" . mysqli_connect_error());
        }

        $sql2 = "CREATE TABLE `cart`.`$Username`(
            menu_no INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
            title VARCHAR(15) NOT NULL,
            price float(5) NOT NULL,
            image blob NOT NULL,
            info text NOT NULL
        )";
        if ($con2->query($sql2) == true) {
            echo "<script>alert('Successfully Registered');</script>";
            echo "<script>window.location.assign('../../pages/signin_signup.php');</script>";
        }
    } else {
        echo "<script>alert('Already Registered');</script>";
        echo "<script>window.location.assign('../../pages/signin_signup.php');</script>";
    }
    $con->close();
}
