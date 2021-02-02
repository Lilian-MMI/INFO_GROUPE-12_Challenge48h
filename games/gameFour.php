<?php
ob_start();
require '../database.php';
require '../session/session4.php';
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Challenge 48h Hacking</title>
    <link href="/src/Images/logo.png" rel="icon" type="images/svg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="/src/js/index.js"></script>
    <link rel="stylesheet" href="/src/css/index.css">
    <link rel="stylesheet" href="/src/css/styles.css">
</head>

<body>

    <?php include('../tmpl/navbar.php'); ?>

    <p>A cette page, mon header est caché.</p>
    <p id="paragraphe_erreur_connexion" style='display:none; color:red; font-family: poppins_bold;'>Mot de passe éronné</p>
    <form method="POST">
        <label>Mot de passe</label>
        <input type="password" name="password_header" placeholder="Votre mot de passe" required>
        <input class="input_button" type="submit" value="Envoyer" name="upload_password">
    </form>

    <script>
        history.pushState({}, "", "");

        var erreur_connexion = document.getElementById('paragraphe_erreur_connexion');

        <?php
        if (!empty($_POST['upload_password'])) {
            if (isset($_POST['password_header'])) {
                $passwordHeader = getHeaderPassword($_POST['password_header']);

                if (!empty($passwordHeader)) {
                    $_SESSION['winGame'] = 4;
                    header("Location: gameFive.php");
                    exit;
                } else {
        ?>
                    erreur_connexion.style.display = 'inline';
        <?php
                }
            }
        }

        ?>
    </script>
</body>
</html>