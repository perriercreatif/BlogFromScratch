<?php

	session_start();

	//need seriously an autoloader
	require('Controller/BDDConnect.php');
	require('Controller/Router.php');
	require('Controller/MainController.php');
	require('Controller/model.php');
	
	$myRouter = new Router();
	$myRouter->checkRoute();
 ?>
