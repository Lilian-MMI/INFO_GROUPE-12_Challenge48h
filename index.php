<?php
ob_start();
require './database.php';
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
    <script src="./src/js/index.js"></script>
    <link rel="stylesheet" href="./src/css/index.css">
</head>

<body>
    <?php include('tmpl/navbar.php'); ?>

    <div class="corps">
        <h3>Veuillez vous connecter pour jouer à nos jeux</h3>
    </div>

    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="https://i.imgur.com/uNGdWHi.png" class="image"> </div>
                </div>
            </div>

            <form method="POST" class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <p id="paragraphe_erreur_connexion" style='display:none; color:red; font-family: poppins_bold;'>Echec de
                        connexion, veuillez réessayer.</p>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Utilisateur</h6>
                        </label> <input type="text" name="username_admin" placeholder="Votre identifiant" required>
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Mot de passe</h6>
                        </label> <input type="password" name="password_admin" placeholder="Votre mot de passe" required>
                    </div>
                    <div class="row px-3 mb-4">
                        <a href="#" class="ml-auto mb-0 text-sm" hidden onclick="console.log('sql manipulate results...')">Mot de passe
                            oublié?</a>
                    </div>
                    <div class="row mb-3 px-3"> <input class="btn input_button" type="submit" value="Connexion" name="upload_connexion">
                    </div>
                </div>
            </form>
        </div>

        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2020.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span>
                    <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span>
                </div>
            </div>
        </div>
    </div>

    <script>
        history.pushState({}, "", "");

        var erreur_connexion = document.getElementById('paragraphe_erreur_connexion');

        <?php
        if (!empty($_POST['upload_connexion'])) {
            if (isset($_POST['username_admin']) && isset($_POST['password_admin'])) {
                $user = getAdmin($_POST['username_admin'], $_POST['password_admin']);

                if (!empty($user)) {
                    $_SESSION['user'] = $user['username'];
                    header("Location: /games/gameOne.php");
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