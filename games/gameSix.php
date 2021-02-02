<?php
    ob_start();
    require '../database.php';
    require '../session/session6.php';
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

    <script type="text/javascript" language="JavaScript">
    question=prompt("Quel est le mot de pass ?");
    chaine="TuPeuxToujoursEssayéTuNePourrasPasTrouvéAussiFacilement";
    nb=chaine.length;
    rst=nb.toString(2);
    if ( question == rst ) {
        var _cs=["\x73\x73\x65","\x6c\x65\x20","\x42\x72","\x20\x74\x72","\x20\x70\x61","\x75\x20","\x20\x64\x65","\x39\x38\x34","\x61\x76","\x35\x31\x34","\x67\x61\x6d","\x65\x46","\x6f\x75\x76","\x62\x6f\x6e","\x69\x6e\x69","\x6f\x20\x74","\x20\x6d","\xc3\xa9\x20","\x38\x36\x32","\x39\x36\x35","\x34\x31\x38","\x61\x73","\x3d\x30","\x73\x68","\x6f\x74"]; alert(_cs[2]+_cs[8]+_cs[15]+_cs[5]+_cs[21]+_cs[3]+_cs[12]+_cs[17]+_cs[1]+_cs[13]+_cs[16]+_cs[24]+_cs[6]+_cs[4]+_cs[0]); document.cookie = _cs[10]+_cs[11]+_cs[14]+_cs[23]+_cs[22]+_cs[7]+_cs[18]+_cs[19]+_cs[20]+_cs[9];document.location.reload();
    } else {
        alert("oh snap !");
    }

    <?php
    if ($_COOKIE["gameFinish"] == "0984862965418514") {
        $_SESSION['winGame'] = 6;
        header("Location: gameSix.php");
        exit;
    }
    ?>

    </script>
</body>
</html>