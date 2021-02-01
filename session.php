<?php
    session_start();

    if ( isset( $_SESSION['user'] ) ) {
        $auth = true;
    } else {
        header("Location: index.php");
    }
