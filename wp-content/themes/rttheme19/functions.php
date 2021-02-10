<?php 
/**
 * RT-THEME Main Functions File
 *
 * @author 		RT-Themes
 * @package 	RT-Framework/Functions
 * @since 		1.0
 * @version    1.0
 */


//definitions
define('RT_FRAMEWOK', TRUE);
define( 'REV_SLIDER_AS_THEME', true);
if ( ! isset( $content_width ) ){
	$content_width = 1060;
} 

if ( ! function_exists("rtframework_load") ){
	/**
	 *
	 * Load the theme
	 *
	 * @return class [RT Main Class] 
	 *
	 */
	function rtframework_load(){

		require_once ( get_template_directory() . '/rt-framework/classes/loading.php' );
		$rttheme = new RTTheme();

		/*
		* 	 DO NOT CHANGE slug => "" !!! 
		*/
		$rttheme->start(array('theme' => 'RT-THEME 19','slug' => 'rttheme19','version' => '1.0'));
	
	}
}
rtframework_load(); 