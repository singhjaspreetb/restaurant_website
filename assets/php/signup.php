<?php
if(isset($_POST['Username']))
{
    include('config.php');

    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $sql = "INSERT INTO `f4_food`.`auth` (`username`, `email`, `password`) VALUES ('$Username', '$Email', '$Password');";

    if($con->query($sql) == true){
        echo "<script>alert('Successfully Registered');</script>";
        echo "<script>window.location.assign('../../pages_user/signin_signup.php');</script>";
    }
    else{
        echo "<script>alert('Already Registered');</script>";
        echo "<script>window.location.assign('../../pages_user/signin_signup.php');</script>";
    }
    $con->close();
}
?>
