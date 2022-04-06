<?php
    // logout php
    // start session
    session_start();
    // delete session
    unset($_SESSION["id"]);
    unset($_SESSION['username']);
    unset($_SESSION['idmachine']);

    // go to login page
    header("Location:login.php");
