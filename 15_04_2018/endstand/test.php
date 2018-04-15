
<?php
$db = mysqli_connect("localhost", "webopolyteam", "webopoly", "testdatenbank_webopoly");
if(!$db)
{
    exit("Verbindungsfehler: ".mysqli_connect_error());
}

echo "Spielerliste";
$erg = $db->query("SELECT player FROM webopoly")
    or die($db->error);

$datensatz = $erg->fetch_assoc();
echo "<pre>";
print_r($datensatz);
echo "</pre>";
?>