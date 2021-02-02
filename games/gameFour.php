<?php
ob_start();
require '../database.php';
require '../session/session4.php';
session_start();
?>

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
                $_SESSION['winGame'] = 3;
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