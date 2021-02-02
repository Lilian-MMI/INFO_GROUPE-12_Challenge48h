<?php
    session_start();

    if (isset($_SESSION['user']) && $_SESSION['winGame'] >= 1) {
        if ($_COOKIE["sessionCookie"] == "987654321") {
            $auth = true;
        } else {
            echo ("<script>alert('sessionTokenApi inversé...')</script>");
            echo ("<script>window.location = 'gameOne.php';</script>");
        }
    } else {
        echo ("<script>alert('Vous devez terminer le jeu 1')</script>");
        echo ("<script>window.location = '/index.php';</script>");
    }
