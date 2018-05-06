<?php

echo $this->header;

?>
    <!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Webopoly</title>
    <link rel="stylesheet" href="css/background_login_logout.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="css/style.css">
    <!--<link rel="stylesheet" href="css/style.css">-->

</head>
<div id="main">
    <div class="row">
        <br>
        <h1 class="col-xs-12"><br>WEBopoly Login</h1>
        <p class="col-xs-12">
            <br>Melden Sie sich bitte an, um WEBopoly spielen zu können. Sie besitzen noch keinen Account? Dann können Sie sich <a href="login#registrierung" class="registerOverlay">hier registrieren</a>.
        </p>

        <form method="post" action="login" class="form-horizontal col-xs-12">
            <?php if($this->errorPasswd == true): ?>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4>Benutzername und/oder Passwort sind falsch</h4>
                    <p>Prüfen Sie bitte ob Sie sich nicht vertippt haben und versuchen Sie es erneut!</p>
                </div>
            <?php endif; ?><br>
            <div class="form-group">
                <label for="username" class="col-xs-12 col-md-2"></label>
                <div class="col-xs-12 col-md-10">
                    <input type="text" name="username" id="username" class="text form-control" value="" placeholder="Benutzername">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-xs-12 col-md-2"></label>
                <div class="col-xs-12 col-md-10">
                    <input type="password" name="password" id="password" class="text form-control" value="" placeholder="Passwort">
                </div>
            </div>
            <button type="submit" class="btn btn-light loginBtn">Anmelden</button>
            <input type="hidden" name="action" value="login">
        </form>
    </div>
</div>

<div class="modal fade<?php if($registerError):?> in<?php endif; ?>" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="registerModalLabel">Registrierung</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <p class="col-xs-12">
                        Wir benötigen folgende Angaben um Sie für unseren Dienst registrieren zu können:
                    </p>

                    <form method="post" action="login" class="col-xs-12 resgisterForm">
                        <br>
                        <div class="form-group">
                            <label for="name">Benutzername:</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Benutzernamen eingeben">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Passwort (mindestens 8 Zeichen):</label>
                            <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Bitte Passwort eingeben (mind. 8 Zeichen)">
                        </div>
                        <div class="form-group">
                            <label for="pwd2">Passwort (wiederholen):</label>
                            <input type="password" name="pwd2" class="form-control" id="pwd2" placeholder="Bitte das Passwort wiederholen">
                        </div>

                        <input type="hidden" name="action" value="register">

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Abbrechen</button>
                <button type="button" class="btn btn-primary">Registrieren</button>
            </div>
        </div>
    </div>
</div>
<div class="footer">

    <a class="nav-link" href="impressum">Impressum</a>

</div>
<?php

echo $this->footer;

?>