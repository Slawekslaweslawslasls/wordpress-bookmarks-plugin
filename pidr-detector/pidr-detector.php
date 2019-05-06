<?php
/*
Wordpress Pidr Detector

Replaces all your 'pidr' words into most humanic and loyal word - chelovek.

Plugin Name: Pidr Detector
Plugin URI: https://slawek.dev
Description: Replaces all your 'pidr' (set by default or can be specified in words.txt) words into most humanic and loyal word - chelovek.
Version: 1.0
Author: Slawek Bezborodov <slawek@slawek.dev>
Author URI: https://slawek.dev
*/

define ('PIDR_DETECTOR_DIR', plugin_dir_path(__FILE__));

function pidr_detector_content($the_content){
	static $rescue_humanity=array();

	if(empty(file_get_contents(PIDR_DETECTOR_DIR.'words.txt'))){
		$rescue_humanity[]='пидр';

	}else{
		$rescue_humanity=explode(',', file_get_contents(PIDR_DETECTOR_DIR.'words.txt'));
	}

	for ($i=0, $j=count($rescue_humanity); $i<$j; $i++) { 
		 
		$the_content=preg_replace('#'.$rescue_humanity[$i]. '#iu','человек', $the_content);
	}

	return $the_content;
}
add_filter('the_content','pidr_detector_content');