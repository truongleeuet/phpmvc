<?php
	if(!defined('PATH_SYSTEM')) die ('Bad requested!');
	class FT_Library_Loader{
		/**
		 * Load Library
		 *@param string
		 *@param array
		 *@desc ham load library tham so truyen vao la ten cua library
		 *va danh sach cac bien trong ham khoi tao neu co
		 */
		public function load($library,$args = array()){
			//Neu thu vien chua duoc load thi thuc hien load
			if(empty($this->{$library})){
				//Chuyen chu hoa dau va them hau to _Library
				$class = ucfirst($library) . '_Library';
				require_once(PATH_SYSTEM . '/library/' . $class .'.php');
				$this->{$library} = new $class($args);
			}
		}
	}
?>