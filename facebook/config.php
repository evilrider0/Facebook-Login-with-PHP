<?php
// Start Session
	session_start();

 //Autoload Facebook SDK 
	require_once 'Facebook/autoload.php';

// Create New FB Instance
	$FB = new \Facebook\Facebook([
		'app_id' => '268511250460242',
        'app_secret' => 'c0e6530a125c77cfa658212c9d3aa418',
        'default_graph_version' => 'v3.1'
	]);

	$helper = $FB->getRedirectLoginHelper();

 
?>