<?php

//adopts the playerenumber from index.php and saves it as $spieleranzahl

$spieleranzahl = $this->spieleranzahl;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Webopoly</title>
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
<script type="text/javascript">

    //saves $spieleranzahl as qtyPlayers in JavaScript

    var qtyPlayers = <?php echo $spieleranzahl; ?>;
</script>
<div id="overlay">
    <div id="secondOverlay">
        <div id="text">
            <p id="showCurrentPlayer">

                <img src="img/1emoji.png" id="playerEmoji" width="40px"> ist an der Reihe!

                <!--this function shows the current player Emoji in the overlay-->

                <script>var jmax = <?php echo $spieleranzahl?>;
                    var j = 1;

                    function highlightPlayer() {


                        document.getElementById("playerEmoji").src = "img/" + j + "emoji.png";
                        j++;

                        if (j == jmax + 1) {
                            j = 1;
                        }


                    }

                </script>
            </p>
            <h1>

                <!-- Displays the questions/tasks from the allTasks.js -->
                <div id="textQuestions">

                    <br>
                    <p id="demo">
            </h1>

            <!--Buttons, if task has been done, player gets the point, otherwise player does not get a point-->
            <h4><br>Aufgabe erledigt?</h4>
            <button id="pointsYesBtn" onclick="countScore(); off();" class="btn pointsYes btn-dark" value="0">JA
            </button>
            <button id="pointsNoBtn" onclick=" nextPlayer(); off();" class="btn pointsNo btn-danger">NEIN</button>

            </p></div>
    </div>
</div>
</div>


<!--Navigation to the other pages-->

<div class="navbar">
    <ul class="nav">
        <li class="nav-item">

        </li>
        <li class="nav-item">

            <a class="nav-link" href="endstand">Spiel beenden</a>

        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://youtu.be/6_OB6ZAsG58" target="_blank">Anleitung</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="logout">Logout</a>
        </li>
    </ul>
</div>


<div class="awesomeContainer">
    <div class="left">



        <div class="dice1">

            <?php for ($i = 0; $i <= 10; $i++) {
                echo "<br>";
            } ?>
            <button onclick="myFunction(); movePlayer()" class="btn btn-light">Würfeln</button>


            <!--
            A random number from 1 to 6 is generated and saved in "randomNumber". The random number is displayed as a dice on the
            left side of the page. On each click on the button "Würfeln" a new number is generated.
           -->

            <p id="randomNumber"></p>
            <script>


                var randomNumber;

                function myFunction() {
                    randomNumber = Math.round(Math.random() * (1 - 6)) + 6;
                    //document.getElementById("randomNumber").innerHTML = randomNumber;
                    document.getElementById("dice").src = "img/" + randomNumber + ".png";


                }


                /*var zugSpieler saves the current player*/
                var zugSpieler = 1;

                /*a new array is generated and initialized*/
                var playerPosition = [];

                for (i = 0; i < qtyPlayers; i++) {
                    playerPosition[i] = 1;
                }

                /*the function movePlayer() gets called when you click on the "Würfeln" button
                * it adds the random number to the current playerPosition
                * if the number is higher than the maximum number of fields, we subtract this number of fields*/
                function movePlayer() {

                    if ((playerPosition[zugSpieler - 1] + randomNumber) > 12) {

                        playerPosition[zugSpieler - 1] = playerPosition[zugSpieler - 1] + randomNumber - 12;
                    } else {
                        playerPosition[zugSpieler - 1] += randomNumber;
                    }

                    document.getElementById("cell" + playerPosition[zugSpieler - 1]).appendChild(document.getElementById('player' + zugSpieler)).innerHTML;


                    on();
                    getTask();
                    highlightPlayer();

                    //resets the number of the current player to 1 if the maximum of players has been reached
                    zugSpieler = (zugSpieler + 1) % (qtyPlayers + 1);

                    if (zugSpieler == 0) {
                        zugSpieler = 1;
                    }

                }


            </script>

            <br>
            <img src="img/1.png" id="dice" width="100px">
        </div>


    </div>
    <div class="middle">

        <!--this is our gameboard - it consists of 12 fields and our logo in the middle
        each cell has its own id-->

        <div class="gameboard">
            <div class="reihe">
                <div class="cell"><img src="img/truth.png" class="spacer">
                    <div class="field" id="cell4"></div>
                </div>
                <div class="cell"><img src="img/activity.png" class="spacer">
                    <div class="field" id="cell5"></div>

                </div>
                <div class="cell"><img src="img/drink.png" class="spacer">
                    <div class="field" id="cell6"></div>

                </div>
                <div class="cell"><img src="img/truth.png" class="spacer">
                    <div class="field" id="cell7"></div>

                </div>
            </div>
            <div class="reihe">
                <div class="boardLeft">
                    <div class="cell"><img src="img/drink.png" class="spacer">
                        <div class="field" id="cell3"></div>

                    </div>
                    <div class="cell"><img src="img/activity.png" class="spacer">
                        <div class="field" id="cell2"></div>

                    </div>
                </div>
                <div class="boardMiddle">
                    <img src="img/logo.png" alt="WEBopoly">
                </div>
                <div class="boardRight">
                    <div class="cell"><img src="img/activity.png" class="spacer">
                        <div class="field" id="cell8"></div>

                    </div>
                    <div class="cell"><img src="img/drink.png" class="spacer">
                        <div class="field" id="cell9"></div>

                    </div>
                </div>
            </div>
            <div class="reihe">
                <div class="cell"><img src="img/truth.png" class="spacer">
                    <div class="field" id="cell1">

                        <!--Players start here, shows each emoji of the players-->

                        <?php
                        for ($r = 0; $r < $spieleranzahl; $r++) {
                            ?>
                            <img width="200px" src="img/<?php echo $r + 1; ?>emoji.png" id="player<?php echo $r + 1; ?>"
                                 class="playerFigure">
                        <?php } ?>
                    </div>
                </div>
                <div class="cell"><img src="img/drink.png" class="spacer">
                    <div class="field" id="cell12"></div>

                </div>
                <div class="cell"><img src="img/activity.png" class="spacer">
                    <div class="field" id="cell11"></div>

                </div>
                <div class="cell"><img src="img/truth.png" class="spacer">
                    <div class="field" id="cell10"></div>

                </div>
            </div>
        </div>
    </div>
    <div class="right">

        <!--shows the current points of each player-->

        <div>
            <img src="img/pointtable.png" class="pointtableImg" width="250px"></div>
        <div class="pointtable">
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

                <!--adopts the playerName, the player emoji and the current points from the database and inserts those values in this table-->
                <?php foreach ($this->players as $playerObj): ?>
                    <tr>
                        <th scope="row"><?php echo $playerObj->id; ?></th>
                        <td><img src="img/<?php echo $playerObj->id; ?>emoji.png" width="35px"></td>
                        <td><?php echo $playerObj->player; ?></td>

                        <td id="<?php echo $playerObj->id; ?>"></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!--this script checks the current playerPosition and displays either the Questions/Tasks/Alcohol in the overlay above-->
        <script type="text/javascript">

            function getTask() {


                switch (playerPosition[zugSpieler - 1]) {
                    case 1:
                    case 4:
                    case 7:
                    case 10:
                        get_Question();
                        break;
                    case 2:
                    case 5:
                    case 8:
                    case 11:
                        get_Aufgabe();
                        break;
                    case 3:
                    case 6:
                    case 9:
                    case 12:
                        get_Alcohol();
                        break;


                }


            }


        </script>


        <script type="text/javascript">


            function on() {
                document.getElementById("overlay").style.display = "block";
            }

            function off() {
                document.getElementById("overlay").style.display = "none";
            }
        </script>

    </div>
</div>


<script type="text/javascript" src="js/game.js"></script>
<script type="text/javascript" src="js/allTasks.js"></script>
<script type="text/javascript" src="js/counterNew.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>

