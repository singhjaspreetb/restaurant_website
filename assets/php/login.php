<?php

if (isset($_POST['Username'])) {
    session_start();
    include('config.php');

    $Username = $_POST['Username'];
    $Password = $_POST['Password'];


    $sql = "select * from auth where username = '" . $Username . "' AND password = '" . $Password . "' limit 1";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $Username;
        echo "<script>alert('Successfully Logged In $Username');</script>";
        // echo "<script>window.location.assign('../../pages_user/home.php');</script>";
        header("Location: ../../pages_user/home.php");
        exit();
    }
    else {
        echo "Id or Password is incorrect";
    }

    $con->close();
}
