<?php
include("../assets/php/auth.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/post.css" />
    <link rel="stylesheet" href="../assets/css/home.css" />
    <title>Post</title>
</head>

<body>
    <embed src="../assets/images/bg-audio.mp3" loop="true" autostart="true" width="2" height="0">

    <header>
        <a href="home.php" class="logo"><img src="../assets/images/logo-img.png" alt="" /></a>
        <div id="menu-bar" class="fas fa-hamburger"></div>

        <nav class="navbar">
            <ul>
                <li><a href="home.php">home</a></li>
                <li><a href="blog.php">blog</a></li>
                <li><a href="menu.php">menu</a></li>
                <li><a href="#">Cart</a></li>
                <li><a href="order.php">order</a></li>
                <li>
                    <a class="nav-link" href="../assets/php/logout.php">
                        <button class="btn btn-outline-primary" type="submit">
                            Logout
                        </button>
                    </a>
                </li>
                <li>
                    <h2 class="username" style="font-size: 3rem; color:yellow; text-shadow:0px 0px 15px black; font-family: sans-serif;">
                        <?php
                        echo $_SESSION["username"];
                        ?>
                    </h2>
                </li>
            </ul>
        </nav>
    </header>
    <main>

        <section>
            <?php

            $database = "blog";
            $server = "localhost";
            $username = "root";
            $password = "";

            $con = mysqli_connect($server, $username, $password, $database);

            if (!$con) {
                die("Connection to this database failed due to" . mysqli_connect_error());
            }

            if (isset($_POST['blog'])) {

                $blog_no = $_POST['blog'];
                $topic = $_POST['topic'];


                $sql = "select * from " . $topic . " where blog_no=" . $blog_no . "";

                $data = mysqli_query($con, $sql);
                $result2 = mysqli_fetch_assoc($data);

                $title = $result2['title'];
                $headline = $result2['headline'];
                $image = $result2['image'];
                $info = $result2['info'];

                // echo '<script>alert("hi hello")</script>';
                // echo "<script>alert('$title $haedline $image $info')</script>";

                if ($result2 != "") {

                    echo '
                <div class="row">

                    <div class="col-md-8">
                        <img src="'.$image.'" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4">
                        <h1  class="title p-4">'.$title.'</h1>
                        <p class="headline p-4">'.$headline.'</p>
                    </div>
                </div>
                <div class="p-4">
                    <p class="para">'.$info.'</p>
                </div>';
                } 
                else {
                    echo "<h1>Not Data</h1>";
                }
            }
            ?>
        </section>

    </main>


    <footer>
        <div class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>contact info</h3>
                    <p><i class="fas fa-map-marker-alt"></i> abc, Indai 123456</p>
                    <p><i class="fas fa-envelope"></i> xyz@gmail.com</p>
                    <p><i class="fas fa-phone"></i> +123-456-7890</p>
                    <p><i class="fas fa-phone"></i> +111-222-3333</p>
                </div>

                <div class="box">
                    <h3>branch location</h3>
                    <a href="#">india</a>
                    <a href="#">USA</a>
                    <a href="#">france</a>
                    <a href="#">russia</a>
                </div>

                <div class="box">
                    <h3>quick links</h3>
                    <a href="#">home</a>
                    <a href="#">menu</a>
                    <a href="#">popular</a>
                    <a href="#">blog</a>
                    <a href="#">order</a>
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#">instagram</a>
                    <a href="#">facebook</a>
                    <a href="#">twitter</a>
                    <a href="#">linkedin</a>
                </div>
            </div>

            <h1 class="credit">
                created by <a href="#">F4 Group </a> all rights reserved.
            </h1>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../assets/js/home.js"></script>
</body>

</html>