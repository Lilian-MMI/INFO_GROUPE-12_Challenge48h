<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['winGame'] >= 3) {
    $auth = true;
} else {
    echo ("<script>alert('Vous devez terminer le jeu 3')</script>");
    echo ("<script>window.location = '/index.php';</script>");
}
