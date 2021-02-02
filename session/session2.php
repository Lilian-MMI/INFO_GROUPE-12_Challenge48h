<?php
    session_start();

    if (isset($_SESSION['user']) && $_SESSION['winGame'] == 1) {
        if ($_COOKIE["sessionTokenApi"] == "987654321") {
            $auth = true;
        } else {
            echo ("<script>alert('sessionTokenApi inversé...')</script>");
            echo ("<script>window.location = 'gameOne.php';</script>");
        }
    } else {
        echo "Vous devez terminer le jeu numéro 1.";
        header("Location: index.php");
    }
