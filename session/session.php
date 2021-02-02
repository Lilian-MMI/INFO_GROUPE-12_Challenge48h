<?php
    session_start();

    if (isset($_SESSION['user'])) {
        $auth = true;
    } else {
        echo ("<script>alert('Vous devez être connecté')</script>");
        echo ("<script>window.location = 'gameOne.php';</script>");
    }