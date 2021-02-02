<?php
    session_start();

    if (isset($_SESSION['user']) && $_SESSION['winGame'] >= 2) {
        $auth = true;
    } else {
        echo ("<script>alert('Vous devez terminer le jeu 2')</script>");
        echo ("<script>window.location = '/index.php';</script>");
    }
