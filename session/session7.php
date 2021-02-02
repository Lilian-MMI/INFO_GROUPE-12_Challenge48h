<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['winGame'] >= 6) {
    $auth = true;
} else {
    echo ("<script>alert('Vous devez terminer le jeu 6')</script>");
    echo ("<script>window.location = '/index.php';</script>");
}
