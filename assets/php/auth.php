<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: ../../pages_user/sigin_signup.php");
        exit();
    }
?>