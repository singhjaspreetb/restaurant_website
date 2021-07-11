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
    <link rel="stylesheet" href="../assets/css/menu.css" />
    <link rel="stylesheet" href="../assets/css/home.css" />
    <title>Menu</title>
</head>

<body>
    <embed src="../assets/images/bg-audio.mp3" loop="true" autostart="true" width="2" height="0">

    <header>
        <a href="home.php" class="logo"><img src="../assets/images/logo-img.png" alt="" /></a>
        <div id="menu-bar" class="fas fa-hamburger"></div>

        <nav class="navbar">
            <ul>
                <li><a href="home.php">home</a></li>
                <li><a href="#Veg">Veg</a></li>
                <li><a href="#Non-Veg">Non Veg</a></li>
                <li><a href="menu.php" class="active">menu</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="blog.php">blog</a></li>
                <li><a href="order.php">order</a></li>
                <li class="d-flex">
                    <div class="container h-100">
                        <div class="d-flex justify-content-center h-100">
                            <div class="searchbar">
                                <input class="search_input" type="text" name="" placeholder="Search..." style="font-size: 2rem;" />
                                <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
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

    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../assets/images/product-1.jpg" alt="First slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Lorem ipsum dolor sit.</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Itaque reprehenderit voluptatibus ducimus iure. Enim, fugiat
                            quisquam! Aliquid optio asperiores totam.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/images/product-2.jpg" alt="Second slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Lorem ipsum dolor sit.</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Itaque reprehenderit voluptatibus ducimus iure. Enim, fugiat
                            quisquam! Aliquid optio asperiores totam.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/images/product-3.jpg" alt="Third slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Lorem ipsum dolor sit.</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Itaque reprehenderit voluptatibus ducimus iure. Enim, fugiat
                            quisquam! Aliquid optio asperiores totam.
                        </p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <main>
        <section id="Veg">
            <h2 class="heading head-line"> Veg <span>popular</span></h2>
            <hr><br>
            <div class="row">
                <?php
                $database = "menu";
                $server = "localhost";
                $username = "root";
                $password = "";
                
                $con = mysqli_connect($server, $username, $password, $database);
                
                if (!$con) {
                    die("Connection to this database failed due to" . mysqli_connect_error());
                }
                
                $sql = "select * from veg";
                $data = mysqli_query($con, $sql);
                $total =  mysqli_num_rows($data);
                if ($total != 0) {
                    while ($result = mysqli_fetch_assoc($data)) {
                        echo '
                <div class="card-div col-md-4 p-4" style="width: 25rem;">
                    <div class="card">
                        <img class="card-img-top p-4" src="' . $result['image'] . '" alt="Card image cap">
                        <div class="card-body align-items-center">
                            <h5 class="card-title d-flex justify-content-center">' . $result['title'] . '</h5>
                            <p class="card-text p-2 d-flex justify-content-center"> Price - ' . $result['price'] . ' Rs</p>
                            <div class="d-flex justify-content-center">
                                <form action="../assets/php/menu.php" method="POST">
                                    <select required name="topic" style="visibility: hidden;">
                                        <option name="veg" value="veg"></option>
                                    </select>
                                    <select required name="cart" style="visibility: hidden;">
                                        <option name="' . $result['menu_no'] . '" value="' . $result['menu_no'] . '"></option>
                                    </select>
                                    <input type="submit" name="submit" class="btn btn-primary " value="Add to cart">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>';
                    }
                }
                ?>
            </div>
        </section>
        <section id="Non-Veg">
            <h2 class="heading head-line"> Non-Veg <span>popular</span></h2>
            <hr><br>
            <div class="row">
                <?php
                $database = "menu";
                $server = "localhost";
                $username = "root";
                $password = "";
                
                $con = mysqli_connect($server, $username, $password, $database);
                
                if (!$con) {
                    die("Connection to this database failed due to" . mysqli_connect_error());
                }
                
                $sql = "select * from nonveg";
                $data = mysqli_query($con, $sql);
                $total =  mysqli_num_rows($data);
                if ($total != 0) {
                    while ($result = mysqli_fetch_assoc($data)) {
                        echo '
                <div class="card-div col-md-4 p-4" style="width: 25rem;">
                    <div class="card">
                        <img class="card-img-top p-4" src="' . $result['image'] . '" alt="Card image cap">
                        <div class="card-body align-items-center">
                            <h5 class="card-title d-flex justify-content-center">' . $result['title'] . '</h5>
                            <p class="card-text p-2 d-flex justify-content-center"> Price - ' . $result['price'] . ' Rs</p>
                            <div class="d-flex justify-content-center">
                                <form action="../assets/php/menu.php" method="POST">
                                    <select required name="topic" style="visibility: hidden;">
                                        <option name="nonveg" value="nonveg"></option>
                                    </select>
                                    <select required name="cart" style="visibility: hidden;">
                                        <option name="' . $result['menu_no']  . '" value="' . $result['menu_no']  . '"></option>
                                    </select>
                                    <input type="submit" name="submit" class="btn btn-primary " value="Add to cart">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>';
                    }
                }
                ?>
            </div>
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
