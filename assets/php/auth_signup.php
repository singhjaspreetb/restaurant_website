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
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $sql = "INSERT INTO `signin_signup`.`signup` (`Username`, `Email`, `Password`) VALUES ('$Username', '$Email', '$Password');";

    if($con->query($sql) == true){
        echo "<script>alert('Successfully Registered');</script>";
        echo "<script>window.location.assign('../../pages/signin_signup.html');</script>";
    }
    else{
        // echo "Error : $sql <br> $con->error";
        echo "<script>alert('Already Registered');</script>";
        echo "<script>window.location.assign('../../pages/signin_signup.html');</script>";
    }

    $con->close();

}

?>

