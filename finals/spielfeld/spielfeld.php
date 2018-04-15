<<<<<<< HEAD
<?php
$db = mysqli_connect("localhost", "webopolyteam", "webopoly", "testdatenbank_webopoly");
if(!$db)
{
    exit("Verbindungsfehler: ".mysqli_connect_error());
}
?>


=======
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
                <script type="text/javascript" src="../js/alcohol_array.js"></script>



<<<<<<< HEAD
=======
=======
                <script type="text/javascript" src="../js/questions_array.js"></script>
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee


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
<<<<<<< HEAD

            <!--<a class="nav-link" href="../spieleranzahl/spieleranzahl.php">New Game/*</a>-->
        </li>
        <li class="nav-item">

            <a class="nav-link" href="../endstand/endstand.php">Finish Game</a>

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d

            <a class="nav-link" href="../spieleranzahl/spieleranzahl.php">New Game</a>
        </li>
        <li class="nav-item">

            <a class="nav-link" href="../endstand/endstand.php" type="submit">Finish Game</a>

<<<<<<< HEAD
=======
=======
            <a class="nav-link" href="../spieleranzahl/spieleranzahl.html">New Game</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../endstand/endstand.html">Finish Game</a>
>>>>>>> 3ba959df41a70966f0d61b5c209616bef8c45bcd
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://www.youtube.com" target="_blank">Anleitung</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Impressum</a>
        </li>
    </ul>
</div>
<<<<<<< HEAD
<div class="awesome_container">
=======
<div class="awesame_container">
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee






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

<<<<<<< HEAD
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
=======
        <img src="../../09_04_2018/spielfeld/spielfeld.png" alt="NUR EIN PLATZHALTER" class="spielfeld">
    </div>
    <div class="right">

<<<<<<< HEAD
        <h1>Punktetabelle</h1>
=======
        <h1>Ranking</h1>
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
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
<<<<<<< HEAD
                <td><img src="1emoji.png" width="35px"></td>
=======
<<<<<<< HEAD
                <td><img src="1emoji.png" width="35px"></td>
=======
<<<<<<< HEAD
                <td><img src="1emoji.png" width="35px"></td>
=======
                <td><img src="../emojis/1emoji.png" width="22px"></td>
>>>>>>> 3ba959df41a70966f0d61b5c209616bef8c45bcd
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
                <td><?php
                    $spielername1 = $_GET["spielername1"];
                    echo $spielername1;
                    ?></td>
<<<<<<< HEAD

                <td id ="1" ></td>
=======
<<<<<<< HEAD

                <td id ="1" ></td>
=======
<<<<<<< HEAD

                <td id ="1" ></td>
=======
                <td id ="1">


                </td>
>>>>>>> 3ba959df41a70966f0d61b5c209616bef8c45bcd
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee

            </tr>
            <tr>
                <th scope="row">2</th>
<<<<<<< HEAD
                <td><img src="2emoji.png" width="35px"></td>
=======
<<<<<<< HEAD
                <td><img src="2emoji.png" width="35px"></td>
=======
<<<<<<< HEAD
                <td><img src="2emoji.png" width="35px"></td>
=======
                <td><img src="../emojis/2emoji.png" width="22px"></td>
>>>>>>> 3ba959df41a70966f0d61b5c209616bef8c45bcd
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
                <td><?php
                    $spielername2 = $_GET["spielername2"];
                    echo $spielername2;
                    ?></td>
                <td id="2"></td>

            </tr>
            <tr>
                <th scope="row">3</th>
<<<<<<< HEAD
                <td><img src="3emoji.png" width="35px"></td>
=======
<<<<<<< HEAD
                <td><img src="3emoji.png" width="35px"></td>
=======
<<<<<<< HEAD
                <td><img src="3emoji.png" width="35px"></td>
=======
                <td><img src="../emojis/3emoji.png" width="22px"></td>
>>>>>>> 3ba959df41a70966f0d61b5c209616bef8c45bcd
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
                <td><?php
                    $spielername3 = $_GET["spielername3"];
                    echo $spielername3;
                    ?></td>
                <td id="3"></td>

            </tr>
            <tr>
                <th scope="row">4</th>
<<<<<<< HEAD
                <td><img src="4emoji.png" width="35px"></td>
=======
<<<<<<< HEAD
                <td><img src="4emoji.png" width="35px"></td>
=======
<<<<<<< HEAD
                <td><img src="4emoji.png" width="35px"></td>
=======
                <td><img src="../emojis/4emoji.png" width="22px"></td>
>>>>>>> 3ba959df41a70966f0d61b5c209616bef8c45bcd
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
                <td><?php
                    $spielername4 = $_GET["spielername4"];
                    echo $spielername4;
                    ?></td>
                <td id="4"></td>

            </tr>
            <tr>
                <th scope="row">5</th>
<<<<<<< HEAD
                <td><img src="5emoji.png" width="35px"></td>
=======
<<<<<<< HEAD
                <td><img src="5emoji.png" width="35px"></td>
=======
<<<<<<< HEAD
                <td><img src="5emoji.png" width="35px"></td>
=======
                <td><img src="../emojis/5emoji.png" width="22px"></td>
>>>>>>> 3ba959df41a70966f0d61b5c209616bef8c45bcd
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
                <td><?php
                    $spielername5 = $_GET["spielername5"];
                    echo $spielername5;
                    ?></td>
                <td id="5"></p></td>

            </tr>
            <tr>
                <th scope="row">6</th>
<<<<<<< HEAD
                <td><img src="6emoji.png" width="35px"></td>
=======
<<<<<<< HEAD
                <td><img src="6emoji.png" width="35px"></td>
=======
<<<<<<< HEAD
                <td><img src="6emoji.png" width="35px"></td>
=======
                <td><img src="../emojis/6emoji.png" width="22px"></td>
>>>>>>> 3ba959df41a70966f0d61b5c209616bef8c45bcd
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
                <td><?php
                    $spielername6 = $_GET["spielername6"];
                    echo $spielername6;
                    ?></td>
                <td id="6"></p></td>

            </tr>
            <tr>
                <th scope="row">7</th>
<<<<<<< HEAD
                <td><img src="7emoji.png" width="35px"></td>
=======
<<<<<<< HEAD
                <td><img src="7emoji.png" width="35px"></td>
=======
<<<<<<< HEAD
                <td><img src="7emoji.png" width="35px"></td>
=======
                <td><img src="../emojis/7emoji.png" width="22px"></td>
>>>>>>> 3ba959df41a70966f0d61b5c209616bef8c45bcd
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
                <td><?php
                    $spielername7 = $_GET["spielername7"];
                    echo $spielername7;
                    ?></td>
                <td id="7"></td>

            </tr>
            <tr>
                <th scope="row">8</th>
<<<<<<< HEAD
                <td><img src="8emoji.png" width="35px"></td>
=======
<<<<<<< HEAD
                <td><img src="8emoji.png" width="35px"></td>
=======
<<<<<<< HEAD
                <td><img src="8emoji.png" width="35px"></td>
=======
                <td><img src="../emojis/8emoji.png" width="22px"></td>
>>>>>>> 3ba959df41a70966f0d61b5c209616bef8c45bcd
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
                <td><?php
                    $spielername8 = $_GET["spielername8"];
                    echo $spielername8;
                    ?></td>
                <td id="8"></td>

            </tr>

            </tbody>
        </table>


<<<<<<< HEAD
        <?php

        $eintrag = "INSERT INTO webopoly (player) VALUES ('$spielername1'), ('$spielername2'), ('$spielername3'), ('$spielername4'), ('$spielername5'), ('$spielername6'), ('$spielername7'), ('$spielername8')";
        ?><?php
        $eintragen = mysqli_query($db, $eintrag);
        ?>



        <button onclick="on(); get_Surprise(); highlightPlayer();" id="aufgabe" class="btn btn-light" >Zur Frage</button>
=======

<<<<<<< HEAD
        <button onclick="on(); get_Alcohol(); highlightPlayer();" id="aufgabe" class="btn btn-light" >Zur Frage</button>
=======
        <button onclick="on(); get_Question();highlightPlayer();" id="aufgabe" class="btn btn-light" >Zur Frage</button>
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee

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

