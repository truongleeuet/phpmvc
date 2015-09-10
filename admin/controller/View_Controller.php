<?php
	if(!defined('PATH_SYSTEM')) die ('Bad requested!');
	class View_Controller extends FT_Controller{
		public function indexAction(){
			//Load view
			$data = array(
				'title' => 'Chao mung ban den voi freetuts.net'
			);
			$this->view->load('view',$data);

			//Show view
			$this->view->show();
		}
	}
?>