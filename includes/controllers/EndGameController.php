<?php
class EndGameController extends Controller
{
    protected $viewFileName = "endgame"; //this will be the View that gets the data...
    protected $loginRequired = true;

public function run(){

    session_start();

   // require("../phpfiles/database_connection.php");

    WebopolyModel::showEndgame();

}


}