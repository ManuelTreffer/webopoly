<?php

session_start();

require("../phpfiles/database_connection.php");


$spieleranzahl = $_SESSION['spieleranzahl'];

echo '<script>var s = '.json_encode($_SESSION['spieleranzahl']).';</script>';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Webopoly</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">


    <!--
    Folgendes <style> ist für das Design der Fragen/...!
    -->


    <style>
        #text{
            position: absolute;
            top: 50%;
            left: 50%;
            font-size: 35px;
            color: black;
            transform: translate(-60%, -50%);
            /*text-shadow: 5px 5px 5px black;*/
            -ms-transform: translate(-60%,-50%);
        }
    </style>
</head>

<body>

<div id="overlay" >
    <div id="second_overlay">
        <div id="text">
            <p id="showCurrentPlayer">
                
           <img src="1emoji.png" id="playerEmoji" width="40px" > ist an der Reihe!

<script>var jmax = <?php echo $spieleranzahl?>;
var j=1;
    function highlightPlayer() {


        document.getElementById("playerEmoji").src = j+ "emoji.png";
        j++;

        if (j == jmax+1) {
            j = 1;
        }



    }

</script>
            </p>

            <div id="text_questions">
                <script type="text/javascript" src="../js/questions_array.js"></script>





                <br>
                <p id="demo">
                <h4>Aufgabe erledigt?</h4>
                <button id="points_yes_btn" onclick="countScore(); off();" class="btn punkte_ja btn-dark" value="0">JA</button>
                <button id="points_no_btn" onclick=" nextPlayer(); off();" class="btn punkte_nein btn-danger">NEIN</button>

                </p></div>
        </div>
    </div>
</div>





<div class="navbar">
    <ul class="nav">
        <li class="nav-item">

            <!--<a class="nav-link" href="../spieleranzahl/spieleranzahl.php">New Game/*</a>-->
        </li>
        <li class="nav-item">

            <a class="nav-link" href="../endstand/endstand.php">Finish Game</a>

        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://www.youtube.com" target="_blank">Anleitung</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Impressum</a>
        </li>
    </ul>
</div>
<div class="awesome_container">


    <?php

    $spielername1 = $_POST["spielername1"];
    $spielername2 = $_POST["spielername2"];
    $spielername3 = $_POST["spielername3"];
    $spielername4 = $_POST["spielername4"];
    $spielername5 = $_POST["spielername5"];
    $spielername6 = $_POST["spielername6"];
    $spielername7 = $_POST["spielername7"];
    $spielername8 = $_POST["spielername8"];



    $eintrag = "INSERT INTO webopoly (player) VALUES ('$spielername1'), ('$spielername2'), ('$spielername3'), ('$spielername4'), ('$spielername5'), ('$spielername6'), ('$spielername7'), ('$spielername8')";
    ?><?php
    $eintragen = mysqli_query($db, $eintrag);
    ?>



    <div class="left">

        <div class="wuerfel_1">

            <button onclick="myFunction()" class="btn btn-light">Würfeln</button>



            <!-- Hier wird eine Random Zahl zwischen 1 und 6 generiert, die optisch als Würfel dargestellt wird.
            Bei jedem erneuten Klick auf "Würfeln" wird eine neue Zahl generiert.
           -->

            <p id="randomNumber"></p>

            <script>



                function myFunction() {
                    var randomNumber = Math.round(Math.random() * (1 - 6)) + 6;
                    //document.getElementById("randomNumber").innerHTML = randomNumber;
                    document.getElementById("wuerfel").src = "../" + randomNumber + ".png";
                }
            </script>
            <img src="1.png" id="wuerfel" width="100px" >
        </div>


    </div>
    <div class="middle">

        <table class="spielbrettTabelle">
            <tr class="tableRow tableRow1">
                <td class="zelle zelle4 katActivity">

                </td>
                <td class="zelle zelle5 katAlkohol">

                </td>
                <td class="zelle zelle6 katFragen">

                </td>
                <td class="zelle zelle7 katUeberraschung">

                </td>
            </tr>
            <tr class="tableRow tableRow2">
                <td class="zelle zelle3 katUeberraschung">

                </td>
                <td class="zelle zelleCenter" rowspan="2" colspan="2">
                    <img src="../logo_webopoly_zugeschnitten.png" alt="WEBopoly">
                </td>
                <td class="zelle zelle8 katActivity">

                </td>
            </tr>
            <tr class="tableRow tableRow3">
                <td class="zelle zelle2 katFragen">

                </td>
                <td class="zelle zelle9 katAlkohol">

                </td>
            </tr>
            <tr class="tableRow tableRow4">
                <td class="zelle zelle1 katAlkohol">

                </td>
                <td class="zelle zelle12 katActivity">

                </td>
                <td class="zelle zelle11 katUeberraschung">

                </td>
                <td class="zelle zelle10 katFragen">

                </td>
            </tr>
        </table>
    </div>
    <div class="right">

        <h1>Punktetabelle</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Emoji</th>
                <th scope="col">Spielername</th>
                <th scope="col">Punkte</th>
            </tr>
            </thead>
            <tbody>
            <?php for($i = 0; $i < $spieleranzahl; $i++): ?>
                <tr>
                    <th scope="row"><?php echo $i+1; ?></th>
                    <td><img src="<?php echo $i+1; ?>emoji.png" width="35px"></td>
                    <td><?php
                        $erg = $db->query("SELECT player FROM webopoly WHERE id='".($i+1)."'")
                        or die($db->error);

                        $datensatz = $erg->fetch_assoc();
                        echo $datensatz["player"];
                        ;
                        ?></td>

                    <td id="<?php echo $i+1; ?>" ></td>

                </tr>
            <?php endfor; ?>


            </tbody>
        </table>






        <button onclick="on(); get_Question(); highlightPlayer();" id="aufgabe" class="btn btn-light" >Zur Frage</button>

        <script>
            function on() {
                document.getElementById("overlay").style.display = "block";
            }

            function off() {
                document.getElementById("overlay").style.display = "none";
            }
        </script>

    </div>
</div>

<script type="text/javascript">
    var qtyPlayers = <?php echo $spieleranzahl; ?>;
</script>
<!--<script type="text/javascript" src="../js/showCurrentPlayer.js"></script>-->
<script type="text/javascript" src="../js/counterNew.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="../../js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>

