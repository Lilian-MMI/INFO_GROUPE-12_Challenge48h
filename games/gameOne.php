<?php
ob_start();
require '../database.php';
require '../session/session.php';
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Challenge 48h Hacking</title>
    <link href="./src/Images/logo.png" rel="icon" type="images/svg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="../../src/js/index.js"></script>
    <link rel="stylesheet" href="../..//src/css/index.css">
</head>

<body>
    <?php include('../tmpl/navbar.php'); ?>

    <div class="corps">
        <h1>Jeux numéro 1</h1>
    </div>

    <h2>Beat the machine</h2>
    <p>Score de la machine à battre: 100</p>
    <p id="displayScore"></p>
    <form method="POST" onsubmit="document.getElementById('score').value = Math.floor(Math.random() * 99);">
        <input id="score" name="score" hidden />
        <input type="submit" value="Nombre aléatoire" name="submit_random_number" />
    </form>

    <script>
        history.pushState({}, "", "");
        var displayScore = document.getElementById('displayScore')

        <?php
        if (!empty($_POST['submit_random_number'])) {
            if ($_POST['score'] > 100) {
                $_SESSION['winGame'] = 1;
                setcookie("sessionTokenApi", "123456789", time() + 900);
                header("Location: gameTwo.php");
                exit;
            } else {
        ?>
                displayScore.textContent = 'Votre score est de : ' + <?php echo $_POST['score'] ?>;
        <?php
            }
        }
        ?>
    </script>
</body>