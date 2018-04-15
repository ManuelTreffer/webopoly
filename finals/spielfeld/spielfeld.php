<?php
$db = mysqli_connect("localhost", "webopolyteam", "webopoly", "testdatenbank_webopoly");
if(!$db)
{
    exit("Verbindungsfehler: ".mysqli_connect_error());
}
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
            <tr>
                <th scope="row">1</th>
                <td><img src="1emoji.png" width="35px"></td>
                <td><?php
                    $spielername1 = $_GET["spielername1"];
                    echo $spielername1;
                    ?></td>

                <td id ="1" ></td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td><img src="2emoji.png" width="35px"></td>
                <td><?php
                    $spielername2 = $_GET["spielername2"];
                    echo $spielername2;
                    ?></td>
                <td id="2"></td>

            </tr>
            <tr>
                <th scope="row">3</th>
                <td><img src="3emoji.png" width="35px"></td>
                <td><?php
                    $spielername3 = $_GET["spielername3"];
                    echo $spielername3;
                    ?></td>
                <td id="3"></td>

            </tr>
            <tr>
                <th scope="row">4</th>
                <td><img src="4emoji.png" width="35px"></td>
                <td><?php
                    $spielername4 = $_GET["spielername4"];
                    echo $spielername4;
                    ?></td>
                <td id="4"></td>

            </tr>
            <tr>
                <th scope="row">5</th>
                <td><img src="5emoji.png" width="35px"></td>
                <td><?php
                    $spielername5 = $_GET["spielername5"];
                    echo $spielername5;
                    ?></td>
                <td id="5"></p></td>

            </tr>
            <tr>
                <th scope="row">6</th>
                <td><img src="6emoji.png" width="35px"></td>
                <td><?php
                    $spielername6 = $_GET["spielername6"];
                    echo $spielername6;
                    ?></td>
                <td id="6"></p></td>

            </tr>
            <tr>
                <th scope="row">7</th>
                <td><img src="7emoji.png" width="35px"></td>
                <td><?php
                    $spielername7 = $_GET["spielername7"];
                    echo $spielername7;
                    ?></td>
                <td id="7"></td>

            </tr>
            <tr>
                <th scope="row">8</th>
                <td><img src="8emoji.png" width="35px"></td>
                <td><?php
                    $spielername8 = $_GET["spielername8"];
                    echo $spielername8;
                    ?></td>
                <td id="8"></td>

            </tr>

            </tbody>
        </table>


        <?php

        $eintrag = "INSERT INTO webopoly (player) VALUES ('$spielername1'), ('$spielername2'), ('$spielername3'), ('$spielername4'), ('$spielername5'), ('$spielername6'), ('$spielername7'), ('$spielername8')";
        ?><?php
        $eintragen = mysqli_query($db, $eintrag);
        ?>



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


<script type="text/javascript" src="../js/showCurrentPlayer.js"></script>
<script type="text/javascript" src="../js/counterNew.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="../../js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>

