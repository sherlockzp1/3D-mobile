<?php
	require 'view/load.php';
	require 'model/model.php';
	require 'controller/controller.php';

	$pageURI = $_SERVER['REQUEST_URI'];
	$pageURI = explode("/", $pageURI);
	$pageURI = $pageURI[sizeof($pageURI) - 1];

	if (!$pageURI || $pageURI == 'lab' || $pageURI == 'index.php') $pageURI = 'home';

	new Controller($pageURI);
?>