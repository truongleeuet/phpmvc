<?php
	class FT_View_Loader{
		/**
		 * @desc bien luu tru cac view da load
		 */
		private $__content = array();

		/**
		 * Load view
		 *@param string
		 *@param array
		 *@desc ham load view tham so truyen vao la ten cua view va du lieu truyen qua view
		 */
		public function load($view,$data = array()){

			//Chuyen mang du lieu thanh tung bien
			extract($data);

			//Chuyen noi dung view thanh bien thay vi in ra bang cach dung ob_start()
			ob_start();
			require_once PATH_APPLICATION . '/view/' .$view . '.php';
			$content = ob_get_contents();
			ob_end_clean();

			//Gan noi dung vao danh sach view da load
			$this->__content[] = $content;
		}

		/**
		 * Show view
		 *@desc Ham hien thi toan bo view da load duoc dung o controller
		 */
		public function show(){
			foreach($this->__content as $html){
				echo $html;
			}
		}
	}	
?>