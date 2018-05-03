<?php


class IndexController extends Controller
{
	protected $viewFileName = "index"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{

	    WebopolyModel::emptyTable();


	    //TRUNCATE
	}

}