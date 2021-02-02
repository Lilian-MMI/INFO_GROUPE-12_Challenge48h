<?php
    ob_start();
    require '../database.php';
    require '../session/session2.php';
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

        <div class="align_block">
            <div class="title">
                <h1>Jeux numéro 2 !</h1>
                <ul>
                    <li>C'est au noir de jouer</li>
                    <li>Trouvez les bons coups à faire !</li>
                    <li>Pour chaque coup on note : R pour Roi, D pour Dame, T pour Tour, F pour Fou et C pour Cavalier</li>
                    <li>Lorsque la pièce jouée capture une pièce adverse, on le mentionne en ajoutant une croix entre l'initiale de la pièce et la case d'arrivée (Cxe5)</li>
                </ul>
            </div>
            <div class="chessboard">
                <img id="img" src="/src/Images/start.png">
            </div>
        </div>
        <div class="align_button">
            <div class="input">
                <input type="text" id="answer" style="display: block" placeholder="Saisir votre réponse ici" disabled>
            </div>
            <div class="button">
                <button type="button" id="validation" onclick="_f2()" style="display: block">Valider</button>
                <button type="button" id="valid" onclick="_f0()" style="display: none">Valider</button>
            </div>
            <button type="button" id="next" onclick="_f1()" style="display: none">Suivant</button>
        </div>
        <div class="align_button">
            <button type="button" id="reponse" onclick="_f4()" style="display: block">Réponse</button>
            <button type="button" id="reponse2" onclick="_f3()" style="display: none">Réponse</button>
        </div>

        <script type="text/javascript">
        var _cs=['\x70\x6f\x6e','\x66\x75\x6e\x63\x74\x69\x6f\x6e',"\x69\x6f\x6e","\x72\x20\x63","\x6d\x61","\x70\x6f\x6e","\x66\x6f\x72","\x3d\x36","\x27\x65","\x74\x20\x64",'\x77\x65\x72',"\x45\x6c\x65\x6d\x65\x6e\x74","\x2f\x73\x72",'\x42\x79',"\x70\x6f","\x37\x37","\x31\x2e",'\x6e\x6f\x6e','\x65\x32',"\x6f\x6c","\x6f\x6e","\x74\x69\x6f",'\x70\x6f\x70',"\x61\x75","\x78\x2e\x70","\x61\x73",'\x70\x6f',"\x74\x69\x6d\x65","\x73\x20\x6c","\x6e\x73\x69","\x6e\x66","\x63\x2f\x49",'\x69\x64',"\x62\x6f\x6e","\x74\x69\x6d\x65",'\x6f\x6e',"\x61\x20\x44","\x66\x75\x6e\x63",'\x67\x65\x74','\x66\x75\x6e\x63\x74\x69\x6f\x6e','\x6d\x61\x74\x68',"\x41\xc3\xaf","\x6d\x61\x67",'\x69\x64\x74',"\x49\x64",'\x76\x61\x6c',"\x77\x69\x6e\x64\x6f\x77","\x6f\x6f","\x69\x73\x65","\x69\x74","\x67\x61",'\x77\x65','\x76\x61','\x70\x78',"\xc3\xa9\x63",'\x61\x6e','\x61\x62\x73','\x20\x61\x6e','\x6d\x61\x74\x68',"\x66\x6f\x72",'\x6d\x61\x74\x68',"\x49\x64","\x6e\x73\x65","\x65\x75","\x67\x75\x65","\x37\x31","\x77\x69\x6e\x64\x6f\x77","\x72\x20\x6c","\x31\x30\x32\x34","\x39\x34\x36","\x20\x62","\x20\x4d","\x75\x70","\x72\x63\x2f","\x66\x75\x6e\x63",'\x6d\x61\x74\x68',"\x20\x6d\x6f","\x77\x69\x6e\x64\x6f\x77",'\x77\x68\x69\x6c\x65',"\x76\x61\x69","\x73\x20\x70","\x66\x6f\x72",'\x42\x79',"\x65\x73\x73",'\x6e\x65\x78',"\x61\x6d\x65",'\x6f\x63',"\x6e\x65",'\x30',"\x62\x36\x34",'\x61\x6e\x73',"\x27\x61","\x62\x69","\x76\x75","\x45\x6c\x65\x6d\x65\x6e\x74","\x6e\x67",'\x42\x79',"\x6d\x65\x46",'\x66\x75\x6e\x63\x74\x69\x6f\x6e',"\x61\x20\x63","\x65\x72\x74","\x2f\x65","\x6e\x2c\x20","\x2e\x70\x6e","\x62\x36\x34","\x72\x20",'\x66\x75\x6e\x63\x74\x69\x6f\x6e','\x6c\x69',"\x49\x6d",'\x42\x79',"\x62\x36\x34","\x20\x6c",'\x73\x65',"\x72\x65\x73","\x2f\x63",'\x67\x65\x74',"\x77\x69\x6e\x64\x6f\x77","\x49\x64","\x31\x38",'\x37\x30\x30','\x67\x65\x74',"\x6c\x69","\x6f\x75\x70","\x73\x20\x63","\x41\x72","\x20\x21","\x49\x64","\x20\x62\x6f",'\x6e\x65',"\x77\x69\x6e\x64\x6f\x77","\x65\x20\x6d","\x63\x68\x65",'\x61\x62\x73','\x67\x65\x74','\x69\x6d\x67',"\x49\x64","\x6c\x65",'\x61\x62\x73',"\x4e\x6f\x74","\x45\x6c\x65\x6d\x65\x6e\x74","\x64\x65","\x74\x20","\x2f\x49","\x63\x26\x6d","\x42\x6f","\x74\x69\x6d\x65\x7a\x6f\x6e\x65",'\x78\x2d\x77',"\x75\x74",'\x70\x6f\x70',"\x74\x65","\x72\x65","\x49\x64","\x77\x69\x6e\x64\x6f\x77",'\x67\x65\x74',"\x54\x78\x68","\x32\x39","\x75\x74\x20","\x32\x38","\x53\x6f\x75","\x6f\x6e\x6e","\x31\x30\x32\x34","\x20\x6e",'\x61\x62\x73','\x66\x75\x6e\x63\x74\x69\x6f\x6e',"\x62\x36\x34",'\x54\x78',"\x61\x74","\x77\x69\x6e\x64\x6f\x77","\x66\x75\x6e\x63","\x62\x36\x34",'\x70\x6f\x70',"\x54\x75","\x65\x73\x2f","\x61\x69","\x72\xc3\xaa","\xc3\xa9","\x61\x74\x69","\x73\x74",'\x77\x68\x69\x6c\x65',"\x73\x72\x63",'\x66\x75\x6e\x63\x74\x69\x6f\x6e',"\x67\x65\x73","\x64\x69\x6c","\x20\x70\x72","\x67\x65\x20","\x64\x69","\x45\x6c\x65\x6d\x65\x6e\x74",'\x61\x62\x73',"\x6e\x73",'\x6f\x63\x6b',"\x73\x68",'\x6e\x73',"\x63\x27",'\x73\x77\x65',"\x2e\x2e\x2f","\x77\x69\x6e\x64\x6f\x77",'\x61\x74\x69',"\x76\x65\x20","\x6f\x72\x6d",'\x78\x74',"\x63\x6f",'\x73\x63',"\x6f\x75","\x20\x43","\x72\x68\x6f","\x20\x73","\x62\x36\x34","\x20\x70\x65","\x61\x67","\x6c\x61","\x2e\x2e","\x27\x65\x66","\x31\x2e\x70","\x49\x64","\x65\x20","\x65\x6d\x70","\x73\x65","\x65\x73",'\x6d\x61\x74\x68',"\x73\x20\x69","\x6c\x61\x20",'\x68\x32',"\x44\x68\x34","\x66\x65","\x31\x30\x32\x34","\x62\x36\x34","\x72\x6f","\x69\x6e\x69","\x75\x72",'\x62\x6c',"\x20\x6c\x65","\x65\x20\x65","\x75\x70\x64",'\x64\x20',"\x70\x6e\x67",'\x65\x72','\x28\x6d\x61',"\x74\x69\x6d\x65\x7a\x6f\x6e\x65","\x2f\x73",'\x6d\x61\x74\x68',"\x74\x69\x6d\x65",'\x72\x65','\x6d\x61\x74\x68',"\x20\x72",'\x65\x6e',"\x2f\x63\x6f",'\x30',"\x76\x61","\x33\x34","\x20\x64",'\x73\x77',"\x45\x6c\x65\x6d\x65\x6e\x74","\x73\x75",'\x68\x3a']; var _g0 = 0; function _f4() { var _v0 = _cs[201]+_cs[241]+_cs[244]+_cs[57]+_cs[233]+_cs[236]+_cs[146]+_cs[43]+_cs[253]+_cs[119]+_cs[53]+')'; var _v1 = window.matchMedia(_v0).matches; if (_v1) { alert(_cs[165]+_cs[221]) } else { alert(_cs[171]+_cs[161]+_cs[91]+_cs[80]+_cs[25]+_cs[243]+_cs[215]+_cs[121]+_cs[230]+_cs[123]+_cs[20]+_cs[185]+_cs[21]+_cs[188]+_cs[161]+_cs[54]+_cs[83]+_cs[173]+_cs[113]); } } function _f3() { var _v0 = _cs[124]+_cs[174]+_cs[149]+_cs[125]+_cs[203]+_cs[8]+_cs[177]+_cs[127]+_cs[102]+_cs[192]+_cs[217]+_cs[141]+_cs[33]+_cs[111]+_cs[36]+_cs[85]+_cs[70]+_cs[202]+_cs[184]+_cs[220]+_cs[252]+_cs[67]+_cs[99]+_cs[19]+_cs[159]+_cs[214]+_cs[140]+_cs[249]+_cs[226]+_cs[49]+_cs[214]+_cs[204]+_cs[47]; _g0 = _g0 + 1; if (_g0 == 15) { alert(_v0) } } function _f2() { var _v0 = document.getElementById(_cs[90]+_cs[10]).value; var _v1 = document.getElementById(_cs[134]); var _v2 = _cs[138]+_cs[150]+_cs[205]+_cs[49]+_cs[231]+_cs[177]+_cs[243]+_cs[217]+_cs[14]+_cs[29]+_cs[197]+_cs[14]+_cs[228]+_cs[76]+_cs[92]+_cs[136]; var _g1 = _cs[41]+_cs[130]+_cs[23]+_cs[79]+_cs[216]+_cs[243]+_cs[175]+_cs[14]+_cs[62]; if (_v0 == _cs[154]+"2") { _v1.src = _cs[210]+_cs[12]+_cs[31]+_cs[42]+_cs[217]+_cs[114]+_cs[122]+_cs[16]+_cs[234]; document.getElementById(_cs[55]+_cs[250]+_cs[235]).style.display = _cs[17]+'e'; document.getElementById(_cs[45]+_cs[32]+_cs[196]+_cs[35]).style.display = _cs[17]+'e'; document.getElementById(_cs[84]+'t').style.display = _cs[229]+_cs[189]; document.getElementById(_cs[241]+_cs[0]+_cs[112]).style.display = _cs[17]+'e'; } else { alert(_g1); document.getElementById(_cs[90]+_cs[51]+'r').value = ''; console.log(_v2); } } function _f1() { var _v0 = document.getElementById(_cs[134]); if (_v0.src.match(_cs[194]+_cs[179]+_cs[142]+_cs[4]+_cs[181]+_cs[245]+_cs[72]+_cs[212]+_cs[95])) { _v0.src = _cs[210]+_cs[238]+_cs[73]+_cs[108]+_cs[208]+_cs[172]+_cs[200]+_cs[232]+_cs[63]+_cs[24]+_cs[95]; document.getElementById(_cs[90]+_cs[10]).value = ''; document.getElementById(_cs[55]+_cs[193]+'r').style.display = _cs[229]+_cs[189]; document.getElementById(_cs[128]+_cs[199]).style.display = _cs[17]+'e'; document.getElementById(_cs[52]+_cs[107]+'d').style.display = _cs[229]+_cs[189]; document.getElementById(_cs[241]+_cs[26]+_cs[191]+_cs[18]).style.display = _cs[229]+_cs[86]+'k'; console.log(_cs[158]+_cs[28]+_cs[211]+_cs[223]+_cs[9]+_cs[214]+_cs[209]+_cs[183]+_cs[83]+_cs[2]+_cs[71]+_cs[105]+_cs[144]+_cs[147]+_cs[20]+_cs[207]+_cs[156]+_cs[182]+_cs[93]+_cs[64]+_cs[3]+_cs[100]+_cs[173]+_cs[87]+_cs[219]+_cs[30]+_cs[198]+_cs[176]+_cs[20]+"s") } } function _f0() { var _v0 = _cs[41]+_cs[130]+_cs[23]+_cs[247]+_cs[48]+_cs[243]+_cs[175]+_cs[5]+_cs[216]; var _v1 = document.getElementById(_cs[90]+_cs[51]+'r').value; var _v2 = document.getElementById(_cs[134]); if (_v1 == _cs[222]) { _v2.src = _cs[210]+_cs[238]+_cs[73]+_cs[108]+_cs[208]+_cs[217]+_cs[101]+_cs[131]+_cs[143]+_cs[166]+_cs[103]+"g"; document.getElementById(_cs[90]+_cs[10]).style.display = _cs[17]+'e'; document.getElementById(_cs[52]+_cs[107]+'d').style.display = _cs[17]+'e'; document.cookie = _cs[50]+_cs[97]+_cs[227]+_cs[190]+_cs[7]+_cs[65]+_cs[69]+_cs[157]+_cs[248]+_cs[155]+_cs[118]+_cs[15]; document.location.reload(); } else { alert(_v0); document.getElementById(_cs[90]+_cs[10]).value = ''; } }
        </script>

        <?php
        if ($_COOKIE["gameFinish"] == "6719462834291877") {
            $_SESSION['winGame'] = 2;
            header("Location: gameThree.php");
            exit;
        }
        ?>
    </body>
</html>