<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: ../../pages/sigin_signup.php");
        exit();
    }
?>