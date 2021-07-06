<?php
if(isset($_POST['FName']))
{
// $database =  "order";
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username , $password);

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
        echo "Successfully inserted";
    }
    else{
        echo "Error : $sql <br> $con->error";
    }

    $con->close();

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/order.css">
    
    <title>Website name | Contact Us</title>

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- <embed src="../assets/images/bg-audio.mp3" loop="true" autostart="true" width="2" height="0"> -->

    <section>

        <div class="container">
            <div class="contactinfo">
                <div>
                    <h2>Contact Info</h2>
                    <ul class="info">
                        <li>
                            <span><img src="/assets/images/pngwing.com (2).png" alt="Image_location"></span>
                            <span>Abc Mall, 
                                <br>punjab 14013
                                <br>India
                            </span>
                        </li>
                        <li>
                            <span><img src="/assets/images/pngwing.com.png" alt="Image_mail"></span>
                            <span> Xyz@Gmail.Com</span>
                        </li>
                        <li>
                            <span><img src="/assets/images/pngwing.com (1).png" alt="Image_call"></span>
                            <span>+91-11-2220-3333</span>
                        </li>
                    </ul>
                </div>
                <ul class="sci">
                  


                    <li> <a href="#"> <img src="/assets/images/5771768.png" alt=""> </a> </li>
                    <li> <a href="#"> <img src="/assets/images/5771783.png" alt=""> </a> </li>
                    <li> <a href="#"> <img src="/assets/images/5772032.png" alt=""> </a> </li>
                    <li> <a href="#"> <img src="/assets/images/5841491.png" alt=""> </a> </li>

                </ul>
            </div>

            
            <div class="contactForm">
                <h2>Request Your Custom Order ...  </h2>

                <form class="formBox" action="backend.php"  method="POST">


                    <div class="inputBox w50">
                        <input type="text" name="FName" required>
                        <span>First Name</span>
                    </div>

                    <div class="inputBox w50">
                        <input type="text" name="LName" required>
                        <span>Last Name</span>
                    </div>

                    <div class="inputBox w50">
                        <input  type="email" name="Email" required  >
                        <span>E-mail Address</span>
                    </div>

                    <div class="inputBox w50">
                        <input type="tel" name="Mob" required>
                        <span>Mobile Number</span>
                    </div>

                    <div class="inputBox w100">
                        <textarea name="Corder" required ></textarea>
                        <span> Write Your Custom Order Here .. </span>
                    </div>

                    <div class="inputBox w100">
                        <input class = "submit"type="submit" value="Send">
                        <button class="btn"><a href="home.html">Home</a></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>