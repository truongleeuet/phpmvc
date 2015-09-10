<?php
	if(!defined('PATH_SYSTEM')) die ('Bad requested!');
	class Helper_Controller extends FT_Controller{
		public function indexAction(){
			//Load helper
			$this->helper->load('string');
			//Goi den ham string_to_int
			echo string_to_int('freetuts.net');
		}
	}
?>