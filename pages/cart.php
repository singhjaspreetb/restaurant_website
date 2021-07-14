<?php
include("../assets/php/auth.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/cart.css" />
    <link rel="stylesheet" href="../assets/css/home.css" />
    <title>Cart</title>
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
                <li><a href="cart.php" class="active">Cart</a></li>
                <li><a href="order.php">order</a></li>
                <li class="d-flex">
                    <div class="container h-100">
                        <div class="d-flex justify-content-center h-100">
                            <div class="searchbar">
                                <input class="search_input" type="text" name="" placeholder="Search..." />
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

    <main>
        <?php
        $database = "cart";
        $server = "localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($server, $username, $password, $database);

        if (!$con) {
            die("Connection to this database failed due to" . mysqli_connect_error());
        }

        $menu_topic = $_SESSION['username'];
        $sql = "select * from " . $menu_topic . "";

        $data = mysqli_query($con, $sql);
        $total =  mysqli_num_rows($data);

        if ($total == 0) {
            echo    '
                <div style="text-align: center;">
                    <h1>Your Cart is Empty!</h1>
                </div>
                ';
        } else {
            $total_price = 0;
            while ($result = mysqli_fetch_assoc($data)) {
                $total_price = $total_price + $result['price'];
                echo '  
                <div class="row card-div">
                    <div class=" col-md-4 p-4"  style="width: 30rem;">
                        <img class="card-img-top p-4" src="' . $result['image'] . '" alt="Card image cap">
                    </div>
                    <div class="card col-md-8"  style="width: 30rem;">
                        <div class="card-body align-items-center">
                            <h5 class="card-title d-flex justify-content-center">' . $result['title'] . '</h5>
                            <p class="card-text p-2 d-flex justify-content-center">' . $result['info'] . '</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text-price p-2 d-flex justify-content-center"> Price - ' . $result['price'] . ' Rs</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex justify-content-center">
                                        <form action="../assets/php/cart.php" method="POST">
                                            <select required name="cart" style="visibility: hidden;">
                                                <option name="' . $result['menu_no'] . '" value="' . $result['menu_no'] . '"></option>
                                            </select>
                                            <input type="submit" name="submit" class="btn btn-primary " value="Remove Item">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            }
            echo '
            <div class="container p-4 card-div purchase" >
                <div class="row">
                    <div class="col-md-6">
                        <p class="card-text-price p-2 d-flex justify-content-center">Total Price - ' . $total_price . ' Rs</p>
                    </div>
                    <div class="col-md-6">
                        <form action="../assets/php/purchase.php" method="POST">
                            <select required name="price" style="visibility: hidden;">
                                <option name="' . $total_price . '" value="' . $total_price . '"></option>
                            </select>
                            <input type="submit" onclick="purchase()" name="submit" class="btn btn-primary " value="Purchase">
                        </form>
                    </div>
                </div>
            </div>';
                                    // <button onclick="purchase()"  class="btn center btn-primary d-flex justify-content-center">Purchase</button>

        }
        ?>

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
    <script>
        function purchase() {
            alert("Order Confrmed :)");
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../assets/js/home.js"></script>
</body>

</html>