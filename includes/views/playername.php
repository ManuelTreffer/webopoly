<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Spielername</title>
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="inner">
    <div class="logo">

        <img src="img/logo.png" class="logo_image">

    </div>
    <div class="spielernamen">

        <br>
        <h3>Spielernamen eingeben:</h3>
        <br>
        <form action="game" method="post">

            <?php for($i = 1; $i <= $this->spieleranzahl; $i++):?>
            <div class="input-group input-group-sm mb-3 a">

                <p><div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm"><img src="img/<?php echo $i; ?>emoji.png" width="30px"> </span>
                </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername<?php echo $i; ?>"><br>
                </p><br><br>
            <?php endfor; ?>


            </div>
            <input class="btn btn-light" type="submit" value="Starten">
        </form>
    </div>
    <a href="index" class="zurueck">Zurück</a>
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