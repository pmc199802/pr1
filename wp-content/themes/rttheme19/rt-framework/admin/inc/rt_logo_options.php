<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


/**
 * RT-Theme Logo Options
 */
$this->options["rt_logo_options"] = array(

		'title' => esc_html__("Logo Options",'rt_theme'), 
		'priority' => 1,
		"description" => esc_html__('Your site may have two different sets of logos to be used different header skins such as light or dark headers.','rt_theme'),
		'sections' => array(
 
								array(
									"id"          => RT_THEMESLUG."_logo_url", 	
									"label"       => esc_html__("Logo Image",'rt_theme'),
									"description" => esc_html__('Upload a image file by the use of the upload button or insert a valid url to a image to use as the website logo. Use a bigger image than the logo box width like 580px (width) to get a sharp look with the retina devices.','rt_theme'),
									"transport"   => "refresh",															
									"type"        => "rt_media"
								), 

								array(
									"id"          => RT_THEMESLUG."_sticky_logo_url", 	
									"label"       => esc_html__("Logo Image for the Sticky Header (optional)",'rt_theme'),
									"description" => esc_html__('Upload an alternative logo image for the sticky navigation bar.','rt_theme'),
									"transport"   => "refresh",															
									"type"        => "rt_media"
								), 

					)
	);