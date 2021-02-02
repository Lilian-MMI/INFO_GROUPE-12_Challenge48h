<?php
ob_start();
require '../database.php';
require '../session/session3.php';
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


    <p>
        Je partis à l'aventure en direction du sud en début de matinée, avant de faire une pause en milieu de journée, pour continuer et reprendre ma destination une fois rassasier.
        Après une bonne heure de marche, j'apercu une montage, mais j'étais bien trop épuisé pour l'escalier, j'ai préféré prendre le petit sentier à sa gauche. Manque de bol, celui-ci était un cul-sac...
        Je rebrousse chemin, et prend cette fois, le sentier de droite qui me conduisit directement chez mes grands-parents. Ils avaient besoin de moi pour aller couper du bois à mettre dans leur cheminée.
        L'allée pour se rendre à la fôret n'était pas bien compliqué, cependant au retour, étant particulièrement bien chargé, je dû marqué une pause.
    </p>

    <script>
        var _cs=['\x6f\x77',"\x73\x43","\x74\x69\x6d\x65\x7a\x6f\x6e\x65","\x64\x65\x6c",'\x6b\x65','\x4c\x65\x66',"\x69\x65",'\x72\x6f\x77',"\x69\x6f\x75","\x49\x64",'\x61\x62\x73','\x72\x6f',"\x49\x64",'\x6f\x77\x44',"\x3d\x36\x36",'\x77\x68\x69\x6c\x65',"\x66\x75\x6e\x63\x74\x69\x6f\x6e","\x49\x64",'\x77\x6e',"\x66\x6f\x72",'\x77\x68\x69\x6c\x65',"\x74\x69\x6d\x65\x7a\x6f\x6e\x65","\x45\x6c\x65\x6d\x65\x6e\x74",'\x79\x64',"\x66\x75\x6e\x63\x74\x69\x6f\x6e",'\x61\x62\x73','\x69\x67\x68',"\x69\x63","\x49\x64","\x70\x6f\x70",'\x52\x69\x67',"\x66\x6f\x72",'\x55\x70','\x68\x74','\x41\x72','\x41\x72\x72',"\x66\x6f\x72",'\x67\x65\x74','\x44\x6f',"\x45\x6c\x65\x6d\x65\x6e\x74",'\x77\x52','\x62\x36\x34',"\x6f\x6f\x6b"]; var _g0 = [_cs[35]+_cs[0]+_cs[38]+_cs[18], _cs[35]+_cs[0]+_cs[38]+_cs[18], _cs[35]+_cs[0]+_cs[5]+'t', _cs[34]+_cs[7]+_cs[30]+_cs[33], _cs[34]+_cs[11]+_cs[40]+_cs[26]+'t', _cs[35]+_cs[13]+_cs[0]+'n', _cs[35]+_cs[0]+_cs[32], _cs[35]+_cs[0]+_cs[32]]; var _g1 = 0; var _g2 = function(_p0) { if (_g0.indexOf(_p0.key) < 0 || _p0.key !== _g0[_g1]) { _g1 = 0; return; } _g1++; if (_g0.length === _g1) { _g1 = 0; document.cookie =_cs[3]+_cs[27]+_cs[8]+_cs[1]+_cs[42]+_cs[6]+_cs[14]+"6"; document.location.reload(); } }; document.addEventListener(_cs[4]+_cs[23]+_cs[0]+'n', _g2, false);

        <?php
        if ($_COOKIE["deliciousCookie"] == "666") {
            echo "alert('redirection: ?itswin!')";
        }
        if (isset($_GET['itswin!'])) {
            $_SESSION['winGame'] = 3;
            header("Location: gameFour.php");
            exit;
        }
        ?>
    </script>
</body>

</html>