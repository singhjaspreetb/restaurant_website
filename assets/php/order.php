<?php
if (isset($_POST['FName'])) {

    include('config.php');


    $FName = $_POST['FName'];
    $LName = $_POST['LName'];
    $Email = $_POST['Email'];
    $Mob = $_POST['Mob'];
    $Corder = $_POST['Corder'];

    $sql = "INSERT INTO `f4_food`.`order_data` (`f_name`, `l_name`, `email`, `mob`, `cus_order`) VALUES ('$FName', '$LName',' $Email', '$Mob', '$Corder');";

    if ($con->query($sql) == true) {
        echo "<script>alert('Your Resquest Submitted');</script>";
        header("Location: ../../pages/home.php");
    } 
    else {
        echo "<script>alert('Try Again!');</script>";
    }

    $con->close();
}

?>
