<?php
	define('PATH_SYSTEM',__DIR__.'/system');
	define('PATH_APPLICATION',__DIR__.'/admin');

	require (PATH_SYSTEM.'/config/config.php');

	//Mo file FT_Common.php file nay chua ham FT_Load chay he thong
	include_once PATH_SYSTEM . '/core/FT_Common.php';

	//Chuong trinh chinh
	FT_Load();

	/*$segment = array(
		'controller' => '',
		'action' => array()
	);

	$segment['controller'] = empty($_GET['c']) ? CONTROLLER_DEFAULT : $_GET['c'];

	$segment['action'] = empty($_GET['a']) ? ACTION_DEFAULT : $_GET['a'];

	require_once PATH_SYSTEM . '/core/FT_Controller.php';
	$controller = new FT_Controller();
	$controller->load($segment['controller'],$segment['action']);
	*/
?>