<?php

//define Routes
$route['/'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index.html'] = array('controller' => 'IndexController', 'uniqueName' => 'index');


$route['/login'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/login.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login');

$route['/logout'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
$route['/logout.html'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');

$route['/spielernamen'] = array('controller' => 'PlayerNameController', 'uniqueName' => 'playername');


$route['/game'] = array('controller' => 'GameController', 'uniqueName' => 'game');

$route['/endstand'] = array('controller' => 'EndGameController', 'uniqueName' => 'endgame');

$route['/spieleranzahl'] = array('controller' => 'IndexController', 'uniqueName' => 'index');


