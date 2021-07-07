<?php
if(isset($_POST['FName']))
{
$database =  "order";
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username , $password, $database);

if(!$con){
    die("Connection to this database failed due to" . mysqli_connect_error());
}

    $FName = $_POST['FName'];
    $LName = $_POST['LName'];
    $Email = $_POST['Email'];
    $Mob = $_POST['Mob'];
    $Corder = $_POST['Corder'];

    $sql = "INSERT INTO `order`.`order_data` (`FName`, `LName`, `Email`, `Mob`, `Corder`) VALUES ('$FName', '$LName',' $Email', '$Mob', '$Corder');";

    if($con->query($sql) == true){
        echo "<script>alert('Successfully inserted');</script>";
        echo "<script>window.location.assign('../../pages/home.html');</script>";
    }
    else{
        echo "Error : $sql <br> $con->error";
    }

    $con->close();

}

?>

