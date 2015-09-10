<?php
	if(!defined('PATH_SYSTEM')) die ('Bad requested!');
	class Base_Controller extends FT_Controller{
		public function __construct(){
			parent::__construct();
		}
		public function load_header(){

		}
		public function load_footer(){

		}

		//Ham huy nay co nhiem vu show noi dung View luc nay controller 
		//khong cangoi den $this->view->show() nua
		public function __destruct(){
			$this->view->show();
		}
	}
?>