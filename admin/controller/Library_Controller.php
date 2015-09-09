<?php
	if(!defined('PATH_SYSTEM')) die ('Bad requested!');
	class Library_Controller extends FT_Controller{
		public function indexAction(){
			//Tao moi thu vien
			$this->library->load('upload');

			//Goi den phuong thuc upload
			$this->library->upload->upload();
		}
	}
?>