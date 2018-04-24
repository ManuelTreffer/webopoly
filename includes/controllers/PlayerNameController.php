<?php

class PlayerNameController extends Controller
{
	protected $viewFileName = "playername"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
        if(isset($_POST['spieleranzahl']) && $_POST['spieleranzahl'] > 8 && $_POST['spieleranzahl'] <= 0) {
            $this->view->WrongPlayerNumber = true;
        }
        else if(isset($_POST['spieleranzahl']))
        {
            $_SESSION['spieleranzahl'] = $_POST["spieleranzahl"];

        }

        $this->view->spieleranzahl = $_SESSION['spieleranzahl'];


    }

}