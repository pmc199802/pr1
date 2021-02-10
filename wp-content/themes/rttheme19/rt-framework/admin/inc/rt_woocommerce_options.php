<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


/**
 * RT-Theme WooCommerce Options
 */

$this->options["woocommerce"] = array(

		'title' => esc_html__("WooCommerce",'rt_theme'), 
		'description' => "", 
		'priority' => 10,
		'sections' => array(

						array(
							'id'       => 'product_lists',									
							'title'    => esc_html__("Product Listing Pages",'rt_theme'), 
							"description" => "",

							'controls' => array( 


												array(
													"id"          => "rt-theme-19_woo_seperator_fi_0",	 
													"label"       => esc_html__('Global Layout Options','rt_theme'),		
													"description" => "",
													"type"        => "rt_seperator"
												),


												array(
													"id"          => RT_THEMESLUG."_woo_layout",															
													"label"       => esc_html__("Layout",'rt_theme'),
													"description" => esc_html__("Select and set a default column layout for the product category & archive listing pages for each of the (single) post items listed within those pages.",'rt_theme'),
													"choices"     =>  array(
																		"1/6" => "1/6", 
																		"1/4" => "1/4",
																		"1/3" => "1/3",
																		"1/2" => "1/2",
																		"1/1" => "1/1"
															  		),			
													"default"   => "1/3",
													"transport" => "refresh", 
													"type"      => "select"
												),			

												array(
													"label"       => esc_html__("Amount of product items to show per page",'rt_theme'),
													"description" => esc_html__("Set the amount of portfolio items to show per page before pagination kicks in.",'rt_theme'),
													"id"          => RT_THEMESLUG."_woo_list_pager",
													"min"         => "1",
													"max"         => "200",
													"default"     => "9", 
													"type"        => "number",
													"transport"   => "refresh",
													"input_attrs" => array("min"=>1,"max"=>201),
													"callback"    => array(&$this, 'rt_sanitize_number')
												),


												array(
													"id"          => "rt-theme-19_woo_seperator_fi_1",	 
													"label"       => esc_html__('Featured Images','rt_theme'),		
													"description" => esc_html__('Enable the "Image Resize" to resize or crop the featured images automatically. These settings will be used as globaly.<br /> Please note, since the theme is reponsive the images cannot be wider than the column they are in. Leave these values "0" to use theme defaults.','rt_theme'),																										
													"type"        => "rt_seperator"
												),



												array(
													"label"       => esc_html__("Image Resize",'rt_theme'),
													"id"          => RT_THEMESLUG."_woo_image_resize",
													"choices"     =>  array(
																		"false" => esc_html__("Disabled",'rt_theme'),						
																		"true" => esc_html__("Enabled",'rt_theme'),
																	),			
													"default"   => "true",
													"transport" => "postMessage", 
													"type"      => "select"
												),		

												array(
													"label"       => esc_html__("Featured Image Max Width",'rt_theme'),
													"id"          => RT_THEMESLUG."_woo_image_width",
													"default"     => 0, 
													"type"        => "number",
													"transport"   => "postMessage",
													"input_attrs" => array("min"=>0,"max"=>3000, "data-depends-id" => RT_THEMESLUG."_woo_image_resize", "data-depends-values" => "true")
												),

												array(
													"label"       => esc_html__("Featured Image Max Height",'rt_theme'),
													"id"          => RT_THEMESLUG."_woo_image_height",
													"default"     => 0, 
													"type"        => "number",
													"transport"   => "postMessage",
													"input_attrs" => array("min"=>0,"max"=>3000, "data-depends-id" => RT_THEMESLUG."_woo_image_resize", "data-depends-values" => "true")
												),

												array(
													"label"       => esc_html__("Crop Featured Image",'rt_theme'),
													"id"          => RT_THEMESLUG."_woo_image_crop",
													"default"     => "",
													"transport"   => "postMessage",
													"type"        => "rt_checkbox",
													"input_attrs" => array("data-depends-id" => RT_THEMESLUG."_woo_image_resize", "data-depends-values" => "true")
												),
									 

										),
							),		
 	

							array(
								'id'       => 'related',									
								'title'    => esc_html__("Single Product Page",'rt_theme'), 
								'controls' => array( 

 													array(
														"id"          => "rt-theme-19_woo_seperator0",	
														"label"       => "",
														"description" => esc_html__('Single Product Layout','rt_theme'),															
														"type"        => "rt_seperator"
													),


													array(
														"id"          => RT_THEMESLUG."_woo_content_width",															
														"label"       => esc_html__("Product Info Width",'rt_theme'),
														"description" => esc_html__("Select a width for the content block that contains product title, short info and the images.",'rt_theme'),
														"choices"     =>  array(
																			"1/6" => "1/6",
																			"1/4" => "1/4",
																			"1/3" => "1/3",
																			"1/2" => "1/2",
																			"1/1" => "1/1"
																  		),			
														"default"   => "1/1",
														"transport" => "refresh", 
														"type"      => "select"
													),	
										
													array(
														"label"       => esc_html__("Tabular Content Style",'rt_theme'),
														"description" => esc_html__('Select a style for the tabular content.','rt_theme'),
														"id"          => RT_THEMESLUG."_woo_content_style",
														"choices"     =>  array(
																			"1" => esc_html__("Stlye 1 - Horizontal Tabs",'rt_theme'),
																			"2" => esc_html__("Stlye 2 - Left Vertical Tabs",'rt_theme'),
																			"3" => esc_html__("Stlye 3 - Right Vertical Tabs",'rt_theme'),
																  		),			
														"default"   => "1",
														"transport" => "refresh", 
														"type"      => "select"
													),

													array(
														"label"       => esc_html__("Hide Share Buttons",'rt_theme'), 
														"id"          => RT_THEMESLUG."_hide_woo_share_buttons",
														"default"     => "",
														"transport"   => "refresh",
														"type"        => "checkbox"
													),	

 													array(
														"id"          => "rt-theme-19_woo_seperator1",	
														"label"       => "",
														"description" => esc_html__('Product Images','rt_theme'),															
														"type"        => "rt_seperator"
													),

													array(
														"id"          => RT_THEMESLUG."_woo_image_style",
														"label"       => esc_html__("Product Image Gallery Style",'rt_theme'),
														"description" => esc_html__("Select a gallery style for the product images on the single page.",'rt_theme'),
														"choices"     =>  array(
																			"" => esc_html__("Plugin's Default Gallery",'rt_theme'),
																			"theme" => esc_html__("RT-Theme 19's Gallery",'rt_theme'),
																  		),
														"default"   => "default",
														"transport" => "refresh",
														"type"      => "select"
													),


													array(
														"label"       => esc_html__("Disable Product Image Zoom",'rt_theme'),
														"description" => "",
														"id"          => RT_THEMESLUG."_woo_disable_zoom",
														"default"     => "",
														"transport"   => "refresh",
														"type"        => "rt_checkbox",
														"input_attrs" => array("data-depends-id" => RT_THEMESLUG."_woo_image_style", "data-depends-values" => "")
													),

 
 													array(
														"label"       => esc_html__("Disable Lightbox",'rt_theme'),
														"description" => "",
														"id"          => RT_THEMESLUG."_woo_disable_lightbox",
														"default"     => "",
														"transport"   => "refresh",
														"type"        => "rt_checkbox",
														"input_attrs" => array("data-depends-id" => RT_THEMESLUG."_woo_image_style", "data-depends-values" => "")
													),

 													array(
														"id"          => "rt-theme-19_woo_seperator2",	
														"label"       => "",
														"description" => esc_html__('Related Products','rt_theme'),															
														"type"        => "rt_seperator"
													),


													array(
														"id"          => RT_THEMESLUG."_woo_related_product_layout",															
														"label"       => esc_html__("Layout",'rt_theme'),
														"description" => esc_html__("Select and set a default column layout for the related products list.",'rt_theme'),
														"choices"     =>  array(
																			"1/6" => "1/6", 
																			"1/4" => "1/4",
																			"1/3" => "1/3",
																			"1/2" => "1/2",
																			"1/1" => "1/1"
																  		),			
														"default"   => "1/3",
														"transport" => "refresh", 
														"type"      => "select"
													),	
										
											),
							),		

					)
	);