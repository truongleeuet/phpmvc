<?php
	if(! defined('PATH_SYSTEM')) die ('Bad requested');
	//Ham chay ung dung
	function FT_Load(){
		//Lay config khoi tao ban dau
		$config = include_once PATH_APPLICATION . '/config/init.php';

		//Neu khong truyen controller thi lay controller mac dinh
		$controller = empty($_GET['c']) ? $config['default_controller'] : $_GET['c'];

		//Neu khong co action thi lay action mac dinh
		$action = empty($_GET['a']) ? $config['default_action'] : $_GET['a'];

		//Chuyen doi ten controller vì nó có định dạng la {Name}_Controller
		$controller = ucfirst(strtolower($controller)) . '_Controller';

		//Chuyen doi ten action vi no co dinh dang {name}Action
		$action = strtolower($action) . 'Action';

		//Kiem tra file controller co ton tai hay khong 
		if(!file_exists(PATH_APPLICATION . '/controller/' . $controller .'.php')){
			die ('Don\'t find controller');
		}

		//Include controller chinh de cac controller con ke thua
		include_once PATH_SYSTEM . '/core/FT_Controller.php';
		//Goi file controller vao
		require_once PATH_APPLICATION . '/controller/' . $controller . '.php';
		//Kiem tra class controller co ton tai hay khong
		if(!class_exists($controller)){
			die ('Don\'t find Class controller');
		}
		//Khoi tao controller
		$controllerObject = new $controller();
		//Kiem tra action co ton tai khong
		if(!method_exists($controllerObject,$action)){
			die ('Don\'t find action');
		}
		//Chay ung dung
		$controllerObject->{$action}();
	}

?>