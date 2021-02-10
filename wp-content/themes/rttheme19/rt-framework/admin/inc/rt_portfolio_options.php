<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
*  Portfolio Options
*/
$this->options["rt_portfolio_options"] = array(

	'title' => esc_html__("Portfolio Options",'rt_theme'), 
	//'description' => "", 
	'priority' => 4,
	'sections' => array(

						array(
							'id'       => 'misc',
							'title'    => esc_html__("Global Layout Options",'rt_theme'), 
							'controls' => array( 
												array(
													"id"          => RT_THEMESLUG."_portfolio_layout",															
													"label"       => esc_html__("Layout",'rt_theme'),
													"description" => esc_html__("Select and set a default column layout for the Portfolio category & archive listing pages for each of the (single) post items listed within those pages.",'rt_theme'),
													"choices"     =>  array(
																		"1/6" => "1/6", 
																		"1/4" => "1/4",
																		"1/3" => "1/3",
																		"1/2" => "1/2",
																		"1/1" => "1/1"
															  		),			
													"default"   => "1/2",
													"transport" => "refresh", 
													"type"      => "select"
												),										
												array(
													'id'          => RT_THEMESLUG.'_portfolio_layout_style',
													'label'       => esc_html__("Layout Style",'rt_theme'),
													"description" => esc_html__("Select and set a default layout style for the Portfolio category & archive listing pages",'rt_theme'),
													'type'        => 'select',
													'default'     => 'grid',
													"transport"   => "refresh",
													'choices'     => array(
																		"grid" => esc_html__("Grid",'rt_theme'),
																		"masonry" => esc_html__("Masonry",'rt_theme'),
																	),
												),
												array(
													"label"       => esc_html__("Item Style",'rt_theme'),
													"description" => esc_html__("Select a style for the portfolio item in listing pages & categories.",'rt_theme'),
													"id"          => RT_THEMESLUG."_portfolio_item_style",
													"choices"     =>  array(
																		"style-1" => esc_html__("Style 1 - Info under the featured image",'rt_theme'),						
																		"style-2" => esc_html__("Style 2 - Info embedded to the featured image ",'rt_theme'),
																	),			
													"default"   => "style-1",
													"transport" => "refresh", 
													"type"      => "select"
												),														
										),
						),							

						array(
							'id'       => 'style',
							'title'    => esc_html__("Listing Parameters",'rt_theme'), 
							'controls' => array( 

												array(
													"label"       => esc_html__("Amount of portfolio items to show per page",'rt_theme'),
													"description" => esc_html__("Set the amount of portfolio items to show per page before pagination kicks in.",'rt_theme'),
													"id"          => RT_THEMESLUG."_portf_pager",
													"min"         => "1",
													"max"         => "200",
													"default"     => "9", 
													"type"        => "number",
													"transport"   => "postMessage",
													"input_attrs" => array("min"=>1,"max"=>201)
												),
									
												array(
													"label"       => esc_html__("OrderBy Parameter",'rt_theme'),
													"description" => esc_html__("Select and set the sorting order for the portfolio items within the portfolio listing pages by this parameter.",'rt_theme'),
													"id"          => RT_THEMESLUG."_portf_list_orderby",
													"choices"     => array('author'=>esc_html__('Author','rt_theme'),'date'=>esc_html__('Date','rt_theme'),'title'=>esc_html__('Title','rt_theme'),'modified'=>esc_html__('Modified','rt_theme'),'ID'=>esc_html__('ID','rt_theme'),'rand'=>esc_html__('Randomized','rt_theme')), 
													"default"     => "date",
													"transport"   => "postMessage",
													"type"        => "select"
												),
									
												array(
													"label"       => esc_html__("Order",'rt_theme'),
													"description" => esc_html__("Select and set the ascending or descending order for the ORDERBY parameter.",'rt_theme'),
													"id"          => RT_THEMESLUG."_portf_list_order",
													"choices"     => array('ASC'=>esc_html__('Ascending','rt_theme'),'DESC'=>esc_html__('Descending','rt_theme')),
													"default"     => "DESC",
													"transport"   => "postMessage",				
													"type"        => "select"
												),

										),
						),		

						array(
							'id'       => 'featured_img',									
							'title'    => esc_html__("Featured Images",'rt_theme'), 
							"description" => __('Enable "Image Resize" to resize or crop the featured images automatically. These settings will be used as globaly and you can change for each portfolio post individiually (via edit post screen). <br /> Please note, since the theme is reponsive the images cannot be wider than the column they are in. Leave these values "0" to use theme defaults.','rt_theme'),

							'controls' => array( 

												array(
													"label"       => esc_html__("Image Resize",'rt_theme'),
													"id"          => RT_THEMESLUG."_portfolio_image_resize",
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
													"id"          => RT_THEMESLUG."_portfolio_image_width",
													"default"     => 0, 
													"type"        => "number",
													"transport"   => "postMessage",
													"input_attrs" => array("min"=>0,"max"=>3000, "data-depends-id" => RT_THEMESLUG."_portfolio_image_resize", "data-depends-values" => "true")
												),


												array(
													"label"       => esc_html__("Featured Image Max Height",'rt_theme'),
													"id"          => RT_THEMESLUG."_portfolio_image_height",
													"default"     => 0, 
													"type"        => "number",
													"transport"   => "postMessage",
													"input_attrs" => array("min"=>0,"max"=>3000, "data-depends-id" => RT_THEMESLUG."_portfolio_image_resize", "data-depends-values" => "true")
												),

												array(
													"label"       => esc_html__("Crop Featured Image",'rt_theme'),
													"id"          => RT_THEMESLUG."_portfolio_image_crop",
													"default"     => "",
													"transport"   => "postMessage",
													"type"        => "rt_checkbox",
													"input_attrs" => array("data-depends-id" => RT_THEMESLUG."_portfolio_image_resize", "data-depends-values" => "true")
												),
									 

										),
						),		


						array(
							'id'       => 'comment',									
							'title'    => esc_html__("Comments",'rt_theme'), 
							'controls' => array( 

												array(
													"label"       => esc_html__("Enable Commenting",'rt_theme'),
													"description" => esc_html__('If enabled your website visitors will be able to leave a comment in the single portfolio item page while viewing that single portfolio page. If enabled in here you can still turn commenting off in the single portfolio item itself by unchecking the comments option in that post in the admin backend. If you don&#39;t see that option you can enable it by clicking on the screen options below the admin name while you are working in the single portfolio item.','rt_theme'),
													"id"          => RT_THEMESLUG."_portfolio_comments",
													"default"     => "",
													"transport"   => "postMessage",
													"type"        => "checkbox"
												),
									 

										),
						),


				)
);
