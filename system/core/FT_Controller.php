<?php
	if (! defined('PATH_SYSTEM'))  die ('Bad requested!');

	class FT_Controller{

		//Doi tuong View
		protected $view = NULL;

		//Doi tuong Model
		protected $model = NUll;

		//Doi tuong library
		protected $library = NULL;

		//Doi tuong helper
		protected $helper = NULL;

		//Doi tuong config 
		protected $config = NULL;

		/**
		 * Ham khoi tao
		 */
		public function __construct(){
			//Loader cho config
			require_once PATH_SYSTEM . '/core/loader/FT_Config_Loader.php';
			$this->config = new FT_Config_Loader();
			$this->config->load('config');

			//Load Library
			require_once PATH_SYSTEM . '/core/loader/FT_Library_Loader.php';
			$this->library = new FT_Library_Loader();

			//Load Helper
			require_once PATH_SYSTEM . '/core/loader/FT_Helper_Loader.php';
			$this->helper = new FT_Helper_Loader();

			//Load View
			require_once PATH_SYSTEM  . '/core/loader/FT_View_Loader.php';
			$this->view = new FT_View_Loader();
		}
		
		/**
		 * Hàm chạy ứng dụng
		 *@desc tham số truyền vào gồm controller và action
		 */

		 /*
		  * 
		  
		 public function load($controller,$action){
		 	$controller = ucfirst(strtolower($controller)) . '_Controller';

		 	$action = strtolower($action) . 'Action';

		 	if(!file_exists(PATH_APPLICATION.'/controller/'.$controller.'.php')){
		 		die ('Controller no exists');
		 	}
		 	

		 	require_once PATH_APPLICATION . '/controller/' . $controller .'.php';
		 	if(!class_exists($controller)){
		 		die ('Controller is exists');
		 	}
		 	require_once PATH_APPLICATION . '/controller/' . $controller .'.php';

		 	$controllerObject = new $controller();
		 	if(!method_exists($controllerObject, $action)){
		 		die ('Action no exists');
		 	}

		 	$controllerObject->{$action}();
		 }
		 */
	}

?>