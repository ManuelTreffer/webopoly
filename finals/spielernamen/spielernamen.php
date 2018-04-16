<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Spielername</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<div class="inner">
    <div class="logo">

        <img src="../../images/logo.png" class="logo_image">

    </div>
    <div class="spielernamen">

        <br>
        <h3>Spielernamen eingeben:</h3>
        <br>
        <form action="../spielfeld/spielfeld.php" method="post">

            <?php

            $spieleranzahl = $_POST["spieleranzahl"];

            switch ($spieleranzahl) {
                case 1:
                    echo '<div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../1emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername1">
        </div>
        <br><input type="submit" value="Start" class="btn btn-danger"></input>';
                    break;
                case 2:
                    echo '<div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../1emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername1">
        </div><div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../2emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername2">
        </div>
        <br><input type="submit" value="Start" class="btn btn-danger"></input>';
                    break;
                case 3:
                    echo '<div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../1emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername1">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../2emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername2">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../3emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername3">
        </div>
        <br><input type="submit" value="Start" class="btn btn-danger"></input>';
                    break;
                case 4:
                    echo '
<div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../1emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername1">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../2emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername2">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../3emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername3">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../4emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername4">
        </div>
        <br><input type="submit" value="Start" class="btn btn-danger"></input>';
                    break;
                case 5:
                    echo '<div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../1emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername1">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../2emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername2">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../3emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername3">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../4emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername4">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../5emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername5">
        </div>
        <br><input type="submit" value="Start" class="btn btn-danger"></input>';
                    break;
                case 6:
                    echo '<div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../1emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername1">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../2emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername2">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../3emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername3">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../4emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername4">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../5emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername5">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../6emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername6">
        </div>
        <br><input type="submit" value="Start" class="btn btn-danger"></input>';
                    break;
                case 7:
                    echo '<div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../1emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername1">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../2emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername2">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../3emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername3">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../4emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername4">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../5emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername5">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../6emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername6">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../7emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername7">
        </div>
        <br><input type="submit" value="Start" class="btn btn-danger"></input>';
                    break;
                case 8:
                    echo '<div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../1emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername1">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../2emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername2">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../3emoji.png" width="30px""> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername3">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../4emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername4">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../5emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername5">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../6emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername6">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../7emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername7">
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../8emoji.png" width="30px"> </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername8">
        </div>
        <br><input type="submit" value="Start" class="btn btn-danger"></input>';

                    break;

                default:
                    echo "Bitte gib eine Anzahl zwischen 1 und 8 ein";

            }


            ?>


            <!--   <div class="input-group input-group-sm mb-3">
                   <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../../images/emojis/3emoji.png" width="22px"> </span>
                   </div>
                   <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername3">
               </div>
               <div class="input-group input-group-sm mb-3">
                   <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../../images/emojis/4emoji.png" width="22px"> </span>
                   </div>
                   <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername4">
               </div>
               <div class="input-group input-group-sm mb-3">
                   <div class="input-group-prepend">
                           <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../../images/emojis/5emoji.png" width="22px"> </span>
                   </div>
                   <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername5">
               </div>
               <div class="input-group input-group-sm mb-3">
                   <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../../images/emojis/6emoji.png" width="22px"> </span>
                   </div>
                   <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername6">
               </div>
               <div class="input-group input-group-sm mb-3">
                   <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../../images/emojis/7emoji.png" width="22px"> </span>
                   </div>
                   <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername7">
               </div>
               <div class="input-group input-group-sm mb-3">
                   <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-sm"><img src="../../images/emojis/8emoji.png" width="22px"> </span>
                   </div>
                   <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="spielername8">
               </div>

       -->


        </form>
    </div>
    <a href="../spieleranzahl/spieleranzahl.php" class="zurueck">Zurück</a>
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