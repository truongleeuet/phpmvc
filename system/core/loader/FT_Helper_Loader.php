<?php
	class FT_Helper_Loader{
		/**
		 * Load Helper
		 *@param string
		 *@desc ham load helper tham so truyen vao la ten cua helper
		 */
		public function load($helper){
			$helper = ucfirst($helper) . '_Helper';
			require_once(PATH_SYSTEM . '/helper/' . $helper . '.php');
		}
	}
?>