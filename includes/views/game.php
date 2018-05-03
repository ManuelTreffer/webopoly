<?php

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
<script type="text/javascript">
    var qtyPlayers = <?php echo $spieleranzahl; ?>;
</script>
<div id="overlay" >
    <div id="second_overlay">
        <div id="text">
            <p id="showCurrentPlayer">

                <img src="img/1emoji.png" id="playerEmoji" width="40px" > ist an der Reihe!

                <script>var jmax = <?php echo $spieleranzahl?>;
                    var j=1;
                    function highlightPlayer() {


                        document.getElementById("playerEmoji").src = "img/"+ j+ "emoji.png";
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

            <a class="nav-link" href="endstand">Spiel beenden</a>

        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://www.youtube.com" target="_blank">Anleitung</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="logout">Logout</a>
        </li>
    </ul>
</div>
<div class="awesome_container">





    <div class="left">

        <div class="wuerfel_1">

            <?php for($i = 0; $i <=10; $i++){
                echo "<br>";
            }?><button onclick="myFunction(); movePlayer()" class="btn btn-light">Würfeln</button>



            <!-- Hier wird eine Random Zahl zwischen 1 und 6 generiert, die optisch als Würfel dargestellt wird.
            Bei jedem erneuten Klick auf "Würfeln" wird eine neue Zahl generiert.
           -->

            <p id="randomNumber"></p>

            <script>


                var randomNumber;
                function myFunction() {
                    randomNumber = Math.round(Math.random() * (1 - 6)) + 6;
                    //document.getElementById("randomNumber").innerHTML = randomNumber;
                    document.getElementById("wuerfel").src = "img/" + randomNumber + ".png";





                }
                var zugSpieler = 1;
                //   var playerPosition = [1, 1, 1, 1, 1, 1, 1, 1];


                var playerPosition = [];

                for(i = 0; i < qtyPlayers; i++) {
                    playerPosition[i] = 1;
                }






                function movePlayer(){

                    if((playerPosition[zugSpieler-1]+randomNumber)>12){

                        playerPosition[zugSpieler-1]=playerPosition[zugSpieler-1]+randomNumber-12;
                    } else {
                        playerPosition[zugSpieler-1]+=randomNumber;
                    }

                    document.getElementById("zelle"+playerPosition[zugSpieler-1]).appendChild(document.getElementById('player' + zugSpieler)).innerHTML;


                    on();
                    getTask();
                    highlightPlayer();

                    //formel prüfen..
                    zugSpieler = (zugSpieler + 1) % (qtyPlayers + 1);

                    if(zugSpieler == 0)
                    {
                        zugSpieler = 1;
                    }




                    // uebergeben von currentPlayer und position des players

                    /*$.ajax({
                        'url': '../savePosition.php',
                        'method': 'post',
                        'data': {'position': playerPosition[zugSpieler-1], 'userid': zugSpieler},
                        'success': function(receivedData) {
                            //im erfolgsfall
                            if(receivedData.result) {
                                //console.log('hat geklappt');
                            } else {
                                //console.log('hat nicht geklappt');
                            }
                        }
                    });*/
                }


            </script>
            <img src="img/1.png" id="wuerfel" width="100px" >
        </div>


    </div>
    <div class="middle">

        <div class="gameboard">
            <div class="reihe">
                <div class="zelle katFragen"><img src="img/truth.png" class="spacer">
                    <div class="feld" id="zelle4"></div>
                </div>
                <div class="zelle katActivity"><img src="img/activity.png" class="spacer">
                    <div class="feld" id="zelle5"></div>

                </div>
                <div class="zelle katAlkohol"><img src="img/drink.png" class="spacer">
                    <div class="feld" id="zelle6"></div>

                </div>
                <div class="zelle katFragen"><img src="img/truth.png" class="spacer">
                    <div class="feld" id="zelle7"></div>

                </div>
            </div>
            <div class="reihe">
                <div class="links">
                    <div class="zelle katAlkohol"><img src="img/drink.png" class="spacer">
                        <div class="feld" id="zelle3"></div>

                    </div>
                    <div class="zelle katActivity"><img src="img/activity.png" class="spacer">
                        <div class="feld" id="zelle2"></div>

                    </div>
                </div>
                <div class="mitte">
                    <img src="img/logo.png" alt="WEBopoly">
                </div>
                <div class="rechts">
                    <div class="zelle katActivity"><img src="img/activity.png" class="spacer">
                        <div class="feld" id="zelle8"></div>

                    </div>
                    <div class="zelle katAlkohol"><img src="img/drink.png" class="spacer">
                        <div class="feld" id="zelle9"></div>

                    </div>
                </div>
            </div>
            <div class="reihe">
                <div class="zelle katFragen"><img src="img/truth.png" class="spacer">
                    <div class="feld" id="zelle1">
                        <?php
                        for($r = 0; $r<$spieleranzahl; $r++){?>
                            <img width="200px" src="img/<?php echo $r+1; ?>emoji.png"  id="player<?php echo $r+1; ?>" class="playerFigure">
                        <?php }?>
                    </div>
                </div>
                <div class="zelle katAlkohol"><img src="img/drink.png" class="spacer">
                    <div class="feld" id="zelle12"></div>

                </div>
                <div class="zelle katActivity"><img src="img/activity.png" class="spacer">
                    <div class="feld" id="zelle11"></div>

                </div>
                <div class="zelle katFragen"><img src="img/truth.png" class="spacer">
                    <div class="feld" id="zelle10"></div>

                </div>
            </div>
        </div>


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
            <?php foreach($this->players as $playerObj): ?>
            <tr>
                <th scope="row"><?php echo $playerObj->id; ?></th>
                <td><img src="img/<?php echo $playerObj->id; ?>emoji.png" width="35px"></td>
                <td><?php echo $playerObj->player; ?></td>

                <td id="<?php echo $playerObj->id; ?>" ></td>
            </tr>
            <?php endforeach; ?>


            </tbody>
        </table>


        <script>

            function getTask() {

                switch(playerPosition[zugSpieler-1]){
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


        <!--<button id="aufgabe" class="btn btn-light" >Zur Frage</button>-->

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


<!--<script type="text/javascript" src="../js/showCurrentPlayer.js"></script>-->
<script type="text/javascript" src="js/alleAufgabenZusammen.js"></script>
<script type="text/javascript" src="js/counterNew.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="../../js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>

