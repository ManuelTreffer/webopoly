
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

        <img src="img/logo.png" class="logo_image">

    </div>
    <div class="endstand">

        <br>
        <h3>Gratulation! <br> So sehen Sieger aus:</h3>
        <br>
        <div class="ranking_endstand">


            <?php


            ?>

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

                <?php foreach($playerboard as $key => $playerObj): ?>
                    <tr <?php if($key > 0): ?>class="opacity tr<?php echo ($key+1); ?>"<?php endif; ?>>
                        <th scope="row"><?php echo $key+1?></th>
                        <td><img src="../<?php echo $playerObj->id; ?>emoji.png" width="32px"></td>
                        <td><?php echo $playerObj->player; ?></td>
                        <td><?php echo $playerObj->points; ?></td>

                    </tr>
                <?php endforeach; ?>




                </tbody>
            </table>
        </div>

    </div>
    <br>
    <a href="spieleranzahl" class="btn"><button class="btn btn-danger" type="button">New Game

        </button></a>
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