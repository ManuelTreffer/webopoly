<?php

require_once('JSON.php');

//verbindung zur datenbank aufbauen...
$db = mysqli_connect("localhost", "webopolyteam", "webopoly", "testdatenbank_webopoly");
if(!$db)
{
    exit("Verbindungsfehler: ".mysqli_connect_error());
}

//werte entgegennehmen (score und userid)
if(isset($_POST['position']) && isset($_POST['userid']))
{
    $score = $_POST['position'];
    $userid = $_POST['userid'];

    //prüfen bzw. "sichern" dieser werte -> keine sql injection
    $position = mysqli_escape_string($db, $position);
    $userid = mysqli_escape_string($db, $userid);

    //sql statement -> update webopoly set points=score where id=userid
    $sql = "UPDATE webopoly SET position='".$position."' WHERE id=".$userid;
    $result = mysqli_query($db, $sql);

    if($result)
    {
        //alles ok -> bescheid sagen
        $json = new JSON();

        $json->result = true;
        $json->setMessage('ich habs gespeichert');
        $json->send();
    }
    else
    {
        //nichts ok -> bescheid sagen und entwickler auf die finger klopfen
        $json = new JSON();

        $json->result = false;
        $json->setMessage(mysqli_error($db));
        $json->send();
    }
}


