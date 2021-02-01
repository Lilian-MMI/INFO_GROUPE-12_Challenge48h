<?php
ob_start();
require 'database.php';
session_start();
?>

<!doctype html>
<html lang="fr">

<body>
    <p id="paragraphe_erreur_connexion" style='display:none; color:red; font-family: poppins_bold;'>Echec de
        connexion, veuillez réessayer.</p>
    <form method="POST">
        <label>Identifiant</label>
        <input type="text" name="username_admin" placeholder="Votre identifiant" required>
        <label>Mot de passe</label>
        <input type="password" name="password_admin" placeholder="Votre mot de passe" required>
        <input class="input_button" type="submit" value="Connexion" name="upload_connexion">
    </form>

    </p>
    <script>
        history.pushState({}, "", "");

        var erreur_connexion = document.getElementById('paragraphe_erreur_connexion');

        <?php
        if (!empty($_POST['upload_connexion'])) {
            if (isset($_POST['username_admin']) && isset($_POST['password_admin'])) {
                $user = getAdmin($_POST['username_admin'], $_POST['password_admin']);

                if (!empty($user)) {
                    $_SESSION['user'] = $user['username'];
                    header("Location: backoffice_accueil.php");
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