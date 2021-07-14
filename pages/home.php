<?php
include("../assets/php/auth.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="../assets/css/home.css">

</head>

<body>
    <embed src="../assets/images/bg-audio.mp3" loop="true" autostart="true" width="2" height="0">
    <header>

        <a href="home.php" class="logo"><img src="../assets/images/logo-img.png" alt=""></a>
        <div id="menu-bar" class="fas fa-hamburger"></div>

        <nav class="navbar">
            <ul>
                <li><a class="active" href="#home">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#popular">popular</a></li>
                <li><a href="#blog">blog</a></li>
                <li><a href="menu.php">menu</a></li>
                <li><a href="order.php">order</a></li>
                <li>
                    <a href="cart.php">Cart</a>
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


    <section class="home" id="home">

        <div class="content" data-aos="fade-right">
            <h3>We belive good food offer great smile</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, odit distinctio error corporis adipisci
                molestias eveniet optio quaerat tempore asperiores!</p>
            <a href="#"><button class="btn">get started</button></a>
        </div>

        <div class="image" data-aos="fade-up">
            <img src="../assets/images/home-img.png" alt="">
        </div>

    </section>

    <section class="about" id="about">

        <div class="image" data-aos="fade-right"></div>

        <div class="content" data-aos="fade-left">
            <h3>GREAT TASTE, GOOD TIMES</h3>
            <p>Dear diet, things just aren’t looking good for the both of us. It’s not me, it’s you. You’re too much
                work. You’re boring and I can’t stop cheating on you.</p>
            <p>There’s absolutely no need for me to go to the gym. The name of the cashier at the Mcdonald’s I frequent
                is Jim, so same thing!</p>
            <a href="about-us.html"><button class="btn">learn more</button></a>
        </div>

    </section>

    <section class="popular" id="popular">

        <h1 class="heading"> most <span>popular</span> foods </h1>

        <div class="box-container">

            <div class="box" data-aos="fade-right">
                <img src="../assets/images/img1.jpg" alt="">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$30.00</div>
                <a href="#"><button class="btn btn-danger my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="20" data-quantity="1" data-image="...">add to cart</button></a>
            </div>

            <div class="box" data-aos="fade-left">
                <img src="../assets/images/img2.jpg" alt="">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$30.00</div>
                <a href="#"><button class="btn btn-danger my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="20" data-quantity="1" data-image="...">add to cart</button></a>
            </div>

            <div class="box" data-aos="fade-right">
                <img src="../assets/images/img3.jpg" alt="">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$30.00</div>
                <a href="#"><button class="btn btn-danger my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="20" data-quantity="1" data-image="...">add to cart</button></a>
            </div>


            <div class="box" data-aos="fade-right">
                <img src="../assets/images/img3.jpg" alt="">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$30.00</div>
                <a href="#"><button class="btn btn-danger my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="20" data-quantity="1" data-image="...">add to cart</button></a>
            </div>

            <div class="box" data-aos="fade-left">
                <img src="../assets/images/img4.jpg" alt="">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$30.00</div>
                <a href="#"><button class="btn btn-danger my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="20" data-quantity="1" data-image="...">add to cart</button></a>
            </div>

            <div class="box" data-aos="fade-right">
                <img src="../assets/images/img6.jpg" alt="">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$30.00</div>
                <a href="#"><button class="btn btn-danger my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="20" data-quantity="1" data-image="...">add to cart</button></a>
            </div>


        </div>

    </section>

    <section class="blog" id="blog">

        <h1 class="heading"> our food <span>blog</span> </h1>

        <div class="box-container">

            <div class="box" data-aos="fade-up">
                <img src="../assets/images/img1.jpg" alt="">
                <h3>delicious food</h3>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="../assets/images/img2.jpg" alt="">
                <h3>delicious food</h3>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="../assets/images/img3.jpg" alt="">
                <h3>delicious food</h3>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="../assets/images/img4.jpg" alt="">
                <h3>delicious food</h3>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="../assets/images/img5.jpg" alt="">
                <h3>delicious food</h3>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="../assets/images/img6.jpg" alt="">
                <h3>delicious food</h3>
            </div>

        </div>
        <a href="blog.php" style="position: relative; left: 43%; right: 57%;"><button class="btn head text-center">View All</button></a>
    </section>

    <div class="footer">

        <div class="box-container">

            <div class="box">
                <h3>contact info</h3>
                <p> <i class="fas fa-map-marker-alt"></i> abc, Indai 123456 </p>
                <p> <i class="fas fa-envelope"></i> xyz@gmail.com </p>
                <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
                <p> <i class="fas fa-phone"></i> +111-222-3333 </p>
            </div>

            <div class="box">
                <h3>branch location</h3>
                <a href="#">india</a>
                <a href="#">USA</a>
                <a href="#">france</a>
                <a href="#">russia</a>
            </div>

            <div class="box">
                <h3>quick links </h3>
                <a href="#">home</a>
                <a href="#">about</a>
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

        <h1 class="credit">created by <a href="#">F4 Group </a> all rights reserved. </h1>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="../assets/js/home.js"></script>
    <script>
        AOS.init({
            delay: 400,
            duration: 1000
        })
    </script>

</body>

</html>