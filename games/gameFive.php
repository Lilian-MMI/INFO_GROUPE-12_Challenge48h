<?php
ob_start();
require '../database.php';
require '../session/session5.php';
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
    <link href="../src/Images/logo.jpg" rel="icon" type="images/svg" >
    <link rel="stylesheet" href="../src/css/BatailleNavale.css" >
</head>

<body>

    <?php include('../tmpl/navbar.php'); ?>

    <body>
        <h1>Welcome on the third game !</h1>
        <div id="bataille">
            <img src="/src/Images/batailleNavale.png" class="schema" >
            <pre id="hint">                        J'ai toucher 
                        mon adversaire sur touts les coups,
                        en tirant mes coups dans
                        le sens de lecture normalle.</pre>
        </div>
        <div id="form">                                                                                                                                     <!--Oh tiens ! Bonjour à vous ! Mais ? Pourquoi on est sur cette ligne ?-->                                 
            <form class="form" onsubmit="return false;" name="passwordFind">
                <input type="password" class="mdp" name="password" required>
                <input type="submit" class="valid" value="Valider !" onclick="return _f0()">
            </form>
        </div>
    </body>
</html>

<script>
var _cs=["\x35\x38\x33","\x67\x61\x6d","\x42\x79","\x33\x37","\x64\x65\x20","\x67\x65\x74","\x70\x61\x73","\x2f\x3f\x4f","\x73\x65\x20","\x65\x73","\x32\x38\x31","\x4c\x65","\x73\x68\x3d","\x74\x20\x69","\x37\x35","\x2b\x3b","\x65\x46\x69","\x31\x34\x31","\x5e\x7e","\x65\x63","\x6f\x74\x20","\x37\x33","\x3d\x5d\x7d","\x72\x72","\x4b\x7b\x2d","\x6e\x63\x6f","\x5f\x6f","\x20\x6d","\x6e\x69"]; function _f0() { if(document.passwordFind.password.value != _cs[15]+_cs[24]+_cs[22]+_cs[18]+_cs[7]+_cs[26]) { alert(_cs[11]+_cs[27]+_cs[20]+_cs[4]+_cs[6]+_cs[8]+_cs[9]+_cs[13]+_cs[25]+_cs[23]+_cs[19]+"t") ;return false } else { document.cookie = _cs[1]+_cs[16]+_cs[28]+_cs[12]+_cs[14]+_cs[10]+_cs[3]+_cs[21]+_cs[17]+_cs[0]+"8";document.location.reload(); return true } }
</script>


<?php
if ($_COOKIE["gameFinish"] == "7528137731415838") {
    $_SESSION['winGame'] = 5;
    header("Location: gameSix.php");
    exit;
}
?>