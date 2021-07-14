<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/signin_signup.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Sign In & Sign Up</title>
</head>

<body>
    <embed src="../assets/images/bg-audio.mp3" loop="true" autostart="true" width="2" height="0">

    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="../assets/php/login.php" method="POST" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="Username" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="Password" required>
                    </div>
                    <input type="submit" value="Login" class="btn solid">

                    <p class="social-text">Or Sign in with social platform</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                <form action="../assets/php/signup.php" method="POST" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="Username" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email" name="Email" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="Password" required>
                    </div>
                    <input type="submit" value="Sign up" class="btn solid">

                    <p class="social-text">Or Sign up with social platform</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit culpa sit, deserunt est esse cum vero temporibus quod voluptate obcaecati?</p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>
                <img src="../assets/images/log.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit culpa sit, deserunt est esse cum vero temporibus quod voluptate obcaecati?</p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <img src="../assets/images/reg.svg" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="../assets/js/signin_signup.js"></script>
</body>

</html>1