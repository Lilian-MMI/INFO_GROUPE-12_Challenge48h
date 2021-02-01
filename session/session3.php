<?php
    session_start();

    if (isset($_SESSION['user']) && $_SESSION['winGame'] == 2) {
        $auth = true;
    } else {
        echo "Vous devez terminer le jeu numéro 2.";
        header("Location: index.php");
    }
