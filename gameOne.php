<?php
    ob_start();
    require 'database.php';
    require 'session.php';
    session_start();
?>

<body>
    <h1>Game n°1</h1>
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
                header("Location: backoffice_accueil.php");
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