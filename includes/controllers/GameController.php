<?php

class GameController extends Controller
{
	protected $viewFileName = "game"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
        $this->view->spieleranzahl = $_SESSION['spieleranzahl'];



        $this->checkForScoreSave();

        WebopolyModel::insertPlayers($this->view->spieleranzahl);

        $this->view->players = WebopolyModel::getPlayers();



    }

    public function checkForScoreSave()
    {
        if(isset($_POST['score']) && isset($_POST['userid']))
        {
            $score = $_POST['score'];
            $userid = $_POST['userid'];



            if(WebopolyModel::saveScore($score, $userid))
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
                $json->setMessage('es ist ein fehler beim speichern des scores passiert');
                $json->send();
            }
        }
    }

}