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
    <link rel="stylesheet" href="../../css/background.css">
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
<script type="text/javascript">
    var qtyPlayers = <?php echo $spieleranzahl; ?>;
</script>
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

   /* $spielername1 = $_POST["spielername1"];
    $spielername2 = $_POST["spielername2"];
    $spielername3 = $_POST["spielername3"];
    $spielername4 = $_POST["spielername4"];
    $spielername5 = $_POST["spielername5"];
    $spielername6 = $_POST["spielername6"];
    $spielername7 = $_POST["spielername7"];
    $spielername8 = $_POST["spielername8"];*/

    $eintrag = "INSERT INTO webopoly (player) VALUES ";

   for($i = 1; $i <= $spieleranzahl; $i++)
   {
       $eintrag .= "('".$_POST["spielername".$i]."'),";
   }

    $eintrag = substr($eintrag, 0, -1);


    $eintragen = mysqli_query($db, $eintrag);
    ?>



    <div class="left">

        <div class="wuerfel_1">

            <button onclick="myFunction(); movePlayer()" class="btn btn-light">Würfeln</button>



            <!-- Hier wird eine Random Zahl zwischen 1 und 6 generiert, die optisch als Würfel dargestellt wird.
            Bei jedem erneuten Klick auf "Würfeln" wird eine neue Zahl generiert.
           -->

            <p id="randomNumber"></p>

            <script>


                var randomNumber;
                function myFunction() {
                     randomNumber = Math.round(Math.random() * (1 - 6)) + 6;
                    //document.getElementById("randomNumber").innerHTML = randomNumber;
                    document.getElementById("wuerfel").src = "../" + randomNumber + ".png";





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

                        $.ajax({
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
                        });
                    }


            </script>
            <img src="1.png" id="wuerfel" width="100px" >
        </div>


    </div>
    <div class="middle">

        <div class="gameboard">
            <div class="reihe">
                <div class="zelle katFragen"><img src="td.png" class="spacer">
                    <div class="feld" id="zelle4"></div>
                </div>
                <div class="zelle katActivity"><img src="td.png" class="spacer">
                    <div class="feld" id="zelle5"></div>

                </div>
                <div class="zelle katAlkohol"><img src="td.png" class="spacer">
                    <div class="feld" id="zelle6"></div>

                </div>
                <div class="zelle katFragen"><img src="td.png" class="spacer">
                    <div class="feld" id="zelle7"></div>

                </div>
            </div>
            <div class="reihe">
                <div class="links">
                    <div class="zelle katAlkohol"><img src="td.png" class="spacer">
                        <div class="feld" id="zelle3"></div>

                    </div>
                    <div class="zelle katActivity"><img src="td.png" class="spacer">
                        <div class="feld" id="zelle2"></div>

                    </div>
                </div>
                <div class="mitte">
                    <img src="../logo_webopoly_zugeschnitten.png" alt="WEBopoly">
                </div>
                <div class="rechts">
                    <div class="zelle katActivity"><img src="td.png" class="spacer">
                        <div class="feld" id="zelle8"></div>

                    </div>
                    <div class="zelle katAlkohol"><img src="td.png" class="spacer">
                        <div class="feld" id="zelle9"></div>

                    </div>
                </div>
            </div>
            <div class="reihe">
                <div class="zelle katFragen"><img src="td.png" class="spacer">
                    <div class="feld" id="zelle1">
                        <?php
                        for($r = 0; $r<$spieleranzahl; $r++){?>
                            <img src="<?php echo $r+1; ?>emoji.png" width="35px" id="player<?php echo $r+1; ?>">
                        <?php }?>
                    </div>
                </div>
                <div class="zelle katAlkohol"><img src="td.png" class="spacer">
                    <div class="feld" id="zelle12"></div>

                </div>
                <div class="zelle katActivity"><img src="td.png" class="spacer">
                    <div class="feld" id="zelle11"></div>

                </div>
                <div class="zelle katFragen"><img src="td.png" class="spacer">
                    <div class="feld" id="zelle10"></div>

                </div>
            </div>
        </div>


        <!--<table class="spielbrettTabelle">
            <tr class="tableRow tableRow1">
                <td class="zelle zelle4 katFragen" id="zelle4">
                    <img src="td.png" class="spacer">
                </td>
                <td class="zelle zelle5 katActivity" id="zelle5">
                    <img src="td.png" class="spacer">
                </td>
                <td class="zelle zelle6 katAlkohol" id="zelle6">
                    <img src="td.png" class="spacer">
                </td>
                <td class="zelle zelle7 katFragen" id="zelle7">
                    <img src="td.png" class="spacer">
                </td>
            </tr>
            <tr class="tableRow tableRow2">
                <td class="zelle zelle3 katAlkohol" id="zelle3">
                    <img src="td.png" class="spacer">
                </td>
                <td class="zelleCenter" rowspan="2" colspan="2">
                    <img src="../logo_webopoly_zugeschnitten.png" alt="WEBopoly">
                </td>
                <td class="zelle zelle8 katActivity" id="zelle8">
                    <img src="td.png" class="spacer">
                </td>
            </tr>
            <tr class="tableRow tableRow3">
                <td class="zelle zelle2 katActivity" id="zelle2">
                    <img src="td.png" class="spacer">
                </td>
                <td class="zelle zelle9 katAlkohol" id="zelle9">
                    <img src="td.png" class="spacer">
                </td>
            </tr>
            <tr class="tableRow tableRow4">
                <td class="zelle zelle1 katFragen" id="zelle1">
                    <img src="td.png" class="spacer">
                    <?php
                    for($r = 0; $r<$spieleranzahl; $r++){?>
                        <img src="<?php echo $r+1; ?>emoji.png" width="35px" id="player<?php echo $r+1; ?>">
                    <?php }?>

                </td>
                <td class="zelle zelle12 katAlkohol" id="zelle12">
                    <img src="td.png" class="spacer">
                </td>
                <td class="zelle zelle11 katActivity" id="zelle11">
                    <img src="td.png" class="spacer">
                </td>
                <td class="zelle zelle10 katFragen" id="zelle10">
                    <img src="td.png" class="spacer">
                </td>
            </tr>
        </table>-->
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
<script type="text/javascript" src="../js/alleAufgabenZusammen.js"></script>
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

