<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Webopoly</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>

<div class="navbar">
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="../spieleranzahl/spieleranzahl.html">New Game</a>
    </li>
    <li class="nav-item">
<<<<<<< HEAD
        <a class="nav-link" href="../endstand/endstand.php">Finish Game</a>
=======
<<<<<<< HEAD
        <a class="nav-link" href="../endstand/endstand.php">Finish Game</a>
=======
        <a class="nav-link" href="../endstand/endstand.html">Finish Game</a>
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
<div class="awesame_container">
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
            document.getElementById("wuerfel").src = randomNumber + ".png";
        }
    </script>
    <img src="0.png" id="wuerfel" width="100px" >
</div>


</div>
<div class="middle">

<img src="spielfeld.png" alt="NUR EIN PLATZHALTER" class="spielfeld">
</div>
<div class="right">

<<<<<<< HEAD
    <h1>Punktetabelle</h1>
=======
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee

       <tbody>
       <tr>
            <th scope="row">1</th>
            <td><img src="../../images/emojis/1emoji.png" width="22px"></td>
<<<<<<< HEAD
=======
=======
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td><img src="../../images/emojis/happy.png" width="22px"></td>
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
            <td>
                <?php
               $spielername1 = $_GET["spielername1"];
               echo $spielername1;
                ?>

            </td>
            <td>Otto</td>

        </tr>
        <tr>
            <th scope="row">2</th>
<<<<<<< HEAD
            <td><img src="../../images/emojis/2emoji.png" width="22px"></td>
=======
<<<<<<< HEAD
            <td><img src="../../images/emojis/2emoji.png" width="22px"></td>
=======
            <td><img src="../../images/emojis/lachen.png" width="22px"></td>
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
            <td><?php
                $spielername2 = $_GET["spielername2"];
                echo $spielername2;
                ?></td>
            <td>Thornton</td>

        </tr>
        <tr>
            <th scope="row">3</th>
<<<<<<< HEAD
            <td><img src="../../images/emojis/3emoji.png" width="22px"></td>
=======
<<<<<<< HEAD
            <td><img src="../../images/emojis/3emoji.png" width="22px"></td>
=======
            <td><img src="../../images/emojis/aeffchen.png" width="22px"></td>
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
            <td><?php
                $spielername3 = $_GET["spielername3"];
                echo $spielername3;
                ?></td>
            <td>the Bird</td>

        </tr>
        <tr>
            <th scope="row">4</th>
<<<<<<< HEAD
            <td><img src="../../images/emojis/4emoji.png" width="22px"></td>
=======
<<<<<<< HEAD
            <td><img src="../../images/emojis/4emoji.png" width="22px"></td>
=======
            <td><img src="../../images/emojis/brainfuck.png" width="22px"></td>
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
            <td><?php
                $spielername4 = $_GET["spielername4"];
                echo $spielername4;
                ?></td>
            <td>the Bird</td>

        </tr>
        <tr>
            <th scope="row">5</th>
<<<<<<< HEAD
                <td><img src="../../images/emojis/5emoji.png" width="22px"></td>
=======
<<<<<<< HEAD
                <td><img src="../../images/emojis/5emoji.png" width="22px"></td>
=======
            <td><img src="../../images/emojis/happy.png" width="22px"></td>
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
            <td><?php
                $spielername5 = $_GET["spielername5"];
                echo $spielername5;
                ?></td>
            <td>the Bird</td>

        </tr>
        <tr>
            <th scope="row">6</th>
<<<<<<< HEAD
            <td><img src="../../images/emojis/6emoji.png" width="22px"></td>
=======
<<<<<<< HEAD
            <td><img src="../../images/emojis/6emoji.png" width="22px"></td>
=======
            <td><img src="../../images/emojis/lachen.png" width="22px"></td>
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
            <td><?php
                $spielername6 = $_GET["spielername6"];
                echo $spielername6;
                ?></td>
            <td>the Bird</td>

        </tr>
        <tr>
            <th scope="row">7</th>
<<<<<<< HEAD
            <td><img src="../../images/emojis/7emoji.png" width="22px"></td>
=======
<<<<<<< HEAD
            <td><img src="../../images/emojis/7emoji.png" width="22px"></td>
=======
            <td><img src="../../images/emojis/aeffchen.png" width="22px"></td>
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
            <td><?php
                $spielername7 = $_GET["spielername7"];
                echo $spielername7;
                ?></td>
            <td>the Bird</td>

        </tr>
        <tr>
            <th scope="row">8</th>
<<<<<<< HEAD
            <td><img src="../../images/emojis/8emoji.png" width="22px"></td>
=======
<<<<<<< HEAD
            <td><img src="../../images/emojis/8emoji.png" width="22px"></td>
=======
            <td><img src="../../images/emojis/brainfuck.png" width="22px"></td>
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
            <td><?php
                $spielername8 = $_GET["spielername8"];
                echo $spielername8;
                ?></td>
            <td>the Bird</td>

        </tr>

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee




<<<<<<< HEAD
=======
=======
>>>>>>> eb3ae556031dd3a3d43d42a0e628a0c382435e5d
>>>>>>> 15e88eca22308dfa80d09ce1bf6a91f53ae1f8ee
        </tbody>
    </table>
</div>
</div>


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