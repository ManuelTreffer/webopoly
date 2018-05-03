<?php
class EndGameController extends Controller
{
    protected $viewFileName = "endgame"; //this will be the View that gets the data...
    protected $loginRequired = true;

public function run(){

    session_start();

   // require("../phpfiles/database_connection.php");

    $db = mysqli_connect("localhost", "webopolyteam", "webopoly", "testdatenbank_webopoly");
    if(!$db)
    {
        exit("Verbindungsfehler: ".mysqli_connect_error());
    }

    $sql = "SELECT * FROM webopoly ORDER BY points DESC, player ASC LIMIT 0, 4";
    $result = mysqli_query($db, $sql);

    $playerboard = array();


    if($result)
    {
        while($row = mysqli_fetch_array($result))
        {
            $playerboard[] = (object) $row;
        }
    }

    $spieleranzahl = $_SESSION['spieleranzahl'];

}


}