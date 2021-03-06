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
<div class="inner">
    <div class="logo">

        <img src="img/logo.png" class="logoImage">

    </div>

    <!-- Form to initialize the number of players -->

    <div class="playerQuantity">

        <br>
        <h2>Spieleranzahl eingeben:</h2>
        <br>
        <div class="input-group mb-3 a">
            <form action="spielernamen" method="post">


                <input type="number" name="spieleranzahl">
                <input type="submit" value="Weiter" class="btn btn-light">

            </form>

            <br><br>



        </div>
    </div><h6>Bitte gib einen Wert zwischen 1 und 8 ein!</h6></div>

<div class="footer">

    <!-- Link to our video instructions about the game -->

    <a class="nav-link" href="https://youtu.be/6_OB6ZAsG58" target="_blank">Ihr seid neu bei WEBopoly? Dann klickt hier für eine Anleitung! </a>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>