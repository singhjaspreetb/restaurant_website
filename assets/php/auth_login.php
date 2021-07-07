<?php
if(isset($_POST['Username']))
{
    $database = "signin_signup";
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username , $password,$database);

if(!$con){
    die("Connection to this database failed due to" . mysqli_connect_error());
}

    $Username = $_POST['Username'];
    $Password = $_POST['Password'];


    $sql = "select * from signup where Username = '".$Username."' AND Password = '".$Password."' limit 1";

    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result) == 1){
        echo "Successfully Logged In";
        exit();
    }
    else{
        echo "Id or Password is incorrect";
    }

    $con->close();

}

?>
