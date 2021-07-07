

<?php
if(isset($_POST['Username']))
{
    $database = "order";
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username , $password);

if(!$con){
    die("Connection to this database failed due to" . mysqli_connect_error());
}

    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $sql = "INSERT INTO `signin_signup`.`signup` (`Username`, `Email`, `Password`) VALUES ('$Username', '$Email', '$Password');";

    if($con->query($sql) == true){
        echo "Successfully inserted";
    }
    else{
        echo "Error : $sql <br> $con->error";
    }

    $con->close();

}

?>

