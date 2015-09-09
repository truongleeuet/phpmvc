<?php
	class FT_Config_Loader{
		protected $config = array();

		/**
		 * Load helper
		 *@param string
		 *@desc ham load helper , tham so truyen vao la ten cua helper
		 */
		public function load($config){
			if(file_exists(PATH_APPLICATION . '/config/' . $config .'.php')){
				$config = include_once PATH_APPLICATION . '/config/' . $config .'.php';
				if(! empty($config)){
					foreach($config as $key=>$item){
						$this->config[$key] = $item;
					}
				}
				return true;
			}
			return false;
		}
		/**
		 * Get item config
		 * @param string
		 * @param string
		 * @desc ham get config item tham so truyen vao la ten cua item va tham so mac dinh
		 */
		public function item($key,$default_val = ''){
			return isset($this->config[$key]) ? $this->config[$key] : $default_val;
		}

		/**
		 * Set item config
		 * @param string
		 *@param string
		 *@desc ham set config item tham so truyen vao la ten cua item va gia tri cua no
		 */

		public function set_item($key,$val){
			$this->config[$key] = $val;
		}
	}
?>