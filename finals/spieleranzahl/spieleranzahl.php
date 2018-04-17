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

</head>
<body>
<div class="inner">
    <div class="logo">

        <img src="../../images/logo.png" class="logo_image">

    </div>
    <div class="spieleranzahl">

        <br>
        <h3>Spieleranzahl wählen:</h3>
        <br>
        <div class="input-group">
            <form action="../spielernamen/spielernamen.php" method="post">



                <input type="number" name="spieleranzahl">
                <!--<option value="1" name="spieleranzahl1">1</option>
                <option value="2" name="spieleranzahl2">2</option>
                <option value="3" name="spieleranzahl3">3</option>
                <option value="4" name="spieleranzahl4">4</option>
                <option value="5" name="spieleranzahl5">5</option>
                <option value="6" name="spieleranzahl6">6</option>
                <option value="7" name="spieleranzahl7">7</option>
                <option value="8" name="spieleranzahl8">8</option>-->




                <br>
                <input type="submit" value="Weiter" class="btn btn-danger"></input>

            </form>

            <img src="../welcometowebopoly.gif" width="168px" height="63px"> <img src="../Emoji1Jump.gif" height="300px">
        </div></div></div>
<div class="footer">
    <a class="nav-link" href="http://www.youtube.com" target="_blank">Ihr seid neu bei WEBopoly? Dann klickt hier für eine Anleitung! </a>

    <?php
    mysqli_query($db, "TRUNCATE TABLE webopoly");
    ?>

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