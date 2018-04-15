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
<div class="inner">
    <div class="logo">

        <img src="../../images/logo.png" class="logo_image">

    </div>
    <div class="endstand">

        <br>
        <h3>Gratulation! <br> So sehen Sieger aus:</h3>
        <br>
        <div class="ranking_endstand">


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
                    <td><img src="../1emoji.png" width="32px"></td>
                    <td><?php
                        $spielername1 = $_GET["spielername1"];
                        echo $spielername1;
                        ?></td>
                    <td>Otto</td>

                </tr>
                <tr class="opacity tr2">
                    <th scope="row">2</th>
                    <td><img src="../2emoji.png" width="32px"></td>
                    <td><?php
                        $spielername2 = $_GET["spielername2"];
                        echo $spielername2;
                        ?></td>
                    <td>Thornton</td>

                </tr>
                <tr class="opacity tr3">
                    <th scope="row">3</th>
                    <td><img src="../3emoji.png" width="32px"></td>
                    <td><?php
                        $spielername3 = $_GET["spielername3"];
                        echo $spielername3;
                        ?></td>
                    <td>the Bird</td>

                </tr>
                <tr class="opacity tr4">
                    <th scope="row">4</th>
                    <td><img src="../4emoji.png" width="32px"></td>
                    <td><?php
                        $spielername4 = $_GET["spielername4"];
                        echo $spielername4;
                        ?></td>
                    <td>the Bird</td>

                </tr>


                </tbody>
            </table>
        </div>

    </div>
    <br>
    <a href="../spieleranzahl/spieleranzahl.php" class="btn"><button class="btn btn-danger" type="button">New Game</button></a>
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