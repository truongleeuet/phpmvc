<?php
	if(!defined('PATH_SYSTEM')) die('Bad requested!');
	//Chuyen doi thanh chu so
	function string_to_int($str){
		return sprintf("%u",crc32($str));
	}
?>