<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * RT-Theme Product Options
 */

$this->options["rt_product_options"] = array(

		'title' => esc_html__("Product Options",'rt_theme'), 
		//'description' => "", 
		'priority' => 5,
		'sections' => array(

							array(
								'id'       => 'misc',
								'title'    => esc_html__("Global Layout Options",'rt_theme'), 
								'controls' => array( 
													array(
														"id"          => RT_THEMESLUG."_product_layout",															
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
														'id'          => RT_THEMESLUG.'_product_layout_style',
														'label'       => esc_html__("Layout Style",'rt_theme'),
														"description" => esc_html__("Select and set a default layout style for the product category & archive listing pages",'rt_theme'),
														'type'        => 'select',
														'default'     => 'grid',
														"transport"   => "refresh",
														'choices'     => array(
																			"grid" => esc_html__("Grid",'rt_theme'),
																			"masonry" => esc_html__("Masonry",'rt_theme'),
																		),
													),													
											),
							),							

							array(
								'id'       => 'style',
								'title'    => esc_html__("Listing Parameters",'rt_theme'), 
								'controls' => array( 

													array(
														"label"       => esc_html__("Amount of product items to show per page",'rt_theme'),
														"description" => esc_html__("Set the amount of portfolio items to show per page before pagination kicks in.",'rt_theme'),
														"id"          => RT_THEMESLUG."_product_list_pager",
														"min"         => "1",
														"max"         => "200",
														"default"     => "9", 
														"type"        => "number",
														"transport"   => "refresh",
														"input_attrs" => array("min"=>1,"max"=>201)
													),
										
													array(
														"label"       => esc_html__("OrderBy Parameter",'rt_theme'),
														"description" => esc_html__("Select and set the sorting order for the product items within the product listing pages by this parameter.",'rt_theme'),
														"id"          => RT_THEMESLUG."_product_list_orderby",
														"choices"     => array('author'=>esc_html__('Author','rt_theme'),'date'=>esc_html__('Date','rt_theme'),'title'=>esc_html__('Title','rt_theme'),'modified'=>esc_html__('Modified','rt_theme'),'ID'=>esc_html__('ID','rt_theme'),'rand'=>esc_html__('Randomized','rt_theme')), 
														"default"     => "date",
														"transport"   => "refresh",
														"type"        => "select"
													),
										
													array(
														"label"       => esc_html__("Order",'rt_theme'),
														"description" => esc_html__("Select and set the ascending or descending order for the ORDERBY parameter.",'rt_theme'),
														"id"          => RT_THEMESLUG."_product_list_order",
														"choices"     => array('ASC'=>esc_html__('Ascending','rt_theme'),'DESC'=>esc_html__('Descending','rt_theme')),
														"default"     => "DESC",
														"transport"   => "refresh",				
														"type"        => "select"
													),

											),
							),		

							array(
								'id'       => 'cat_display',
								'title'    => esc_html__("Category Display Options",'rt_theme'), 
								'controls' => array( 


													array(
														"id"          => RT_THEMESLUG."_hide_current_category_desc",															
														"label"       => esc_html__("Current Category Description Visibility",'rt_theme'),
														"choices"     =>  array(
																					"false" => esc_html__("Display",'rt_theme'),						
																					"true" => esc_html__("Hide",'rt_theme'),
																				),				
														"default"   => "false",
														"transport" => "refresh", 
														"type"      => "select"
													),		


													array(
														"id"          => RT_THEMESLUG."_category_display",															
														"label"       => esc_html__("Layout",'rt_theme'),
														"choices"     =>  array(
																					"products_only"   => esc_html__("Show products only" ,'rt_theme'), 
																					"both"            => esc_html__("Show products and subcategories",'rt_theme'),
																					"categories_only" => esc_html__("Show subcategories only",'rt_theme') 
																  				),			
														"default"   => "products_only",
														"transport" => "refresh", 
														"type"      => "select"
													),		
																			
													array(
														'id'          => RT_THEMESLUG.'_product_category_layout_style',
														'label'       => esc_html__("Layout Style",'rt_theme'),
														"description" => esc_html__("Select a default layout style for the product subcategory lists",'rt_theme'),
														'type'        => 'rt_select',
														'default'     => 'grid',
														"transport"   => "refresh",
														'choices'     => array(
																			"grid" => esc_html__("Grid",'rt_theme'),
																			"masonry" => esc_html__("Masonry",'rt_theme'),
																		),
														"input_attrs" => array( "data-depends-id" => RT_THEMESLUG."_category_display", "data-depends-values" => "both,categories_only")
													),	

													array(
														"id"          => RT_THEMESLUG."_product_category_layout",															
														"label"       => esc_html__("Subcategory Column Layout",'rt_theme'),
														"description" => esc_html__("Select a default column layout for the product subcategory lists",'rt_theme'),
														"choices"     =>  array(
																			"1/6" => "1/6", 
																			"1/4" => "1/4",
																			"1/3" => "1/3",
																			"1/2" => "1/2",
																			"1/1" => "1/1"
																  		),			
														"default"   => "1/3",
														"transport" => "refresh", 
														"type"      => "rt_select",
														"input_attrs" => array( "data-depends-id" => RT_THEMESLUG."_category_display", "data-depends-values" => "both,categories_only")
													),		

													array(
														"id"          => RT_THEMESLUG."_product_category_list_orderby",															
														"label"       => esc_html__("Subcategory List OrderBy Parameter",'rt_theme'),
														"choices"     =>  array(
																					'id'    => 'ID',
																					'name'  => 'Name',
																					'slug'  => 'Slug',
																					'count' => 'Count'
																  			),			
														"default"   => "name",
														"transport" => "refresh", 
														"type"      => "rt_select",
														"input_attrs" => array( "data-depends-id" => RT_THEMESLUG."_category_display", "data-depends-values" => "both,categories_only")
													),		


													array(
														"id"          => RT_THEMESLUG."_product_category_list_order",															
														"label"       => esc_html__("Subcategory List Order",'rt_theme'),
														"choices"     => array('ASC'=>esc_html__('Ascending','rt_theme'),'DESC'=>esc_html__('Descending','rt_theme')),		
														"default"   => "ASC",
														"transport" => "refresh", 
														"type"      => "rt_select",
														"input_attrs" => array( "data-depends-id" => RT_THEMESLUG."_category_display", "data-depends-values" => "both,categories_only")
													),		


													array(
														"id"          => RT_THEMESLUG."_product_category_show_names",															
														"label"       => esc_html__("Display Subcategory Names",'rt_theme'),
														"choices"     =>  array(
																				"false" => esc_html__("Disabled",'rt_theme'),						
																				"true" => esc_html__("Enabled",'rt_theme'),
																			),				
														"default"   => "true",
														"transport" => "refresh", 
														"type"      => "rt_select",
														"input_attrs" => array( "data-depends-id" => RT_THEMESLUG."_category_display", "data-depends-values" => "both,categories_only")
													),	


													array(
														"id"          => RT_THEMESLUG."_product_category_show_desc",															
														"label"       => esc_html__("Display Subcategory Descriptions",'rt_theme'),
														"choices"     =>  array(
																				"false" => esc_html__("Disabled",'rt_theme'),						
																				"true" => esc_html__("Enabled",'rt_theme'),
																			),				
														"default"   => "true",
														"transport" => "refresh", 
														"type"      => "rt_select",
														"input_attrs" => array( "data-depends-id" => RT_THEMESLUG."_category_display", "data-depends-values" => "both,categories_only")
													),	


													array(
														"id"          => RT_THEMESLUG."_product_category_show_thumbs",															
														"label"       => esc_html__("Display Subcategory Thumbnails",'rt_theme'),
														"choices"     =>  array(
																				"false" => esc_html__("Disabled",'rt_theme'),						
																				"true" => esc_html__("Enabled",'rt_theme'),
																			),				
														"default"   => "true",
														"transport" => "refresh", 
														"type"      => "rt_select",
														"input_attrs" => array( "data-depends-id" => RT_THEMESLUG."_category_display", "data-depends-values" => "both,categories_only")
													),	

 
 													array(
														"id"          => RT_THEMESLUG."_product_category_crop",															
														"label"       => esc_html__("Crop Subcategory Images",'rt_theme'),
														"choices"     =>  array(
																				"false" => esc_html__("Disabled",'rt_theme'),						
																				"true" => esc_html__("Enabled",'rt_theme'),
																			),				
														"default"   => "true",
														"transport" => "refresh", 
														"type"      => "rt_select",
														"input_attrs" => array( "data-depends-id" => RT_THEMESLUG."_category_display", "data-depends-values" => "both,categories_only")
													),	


													array(
														"label"       => esc_html__("Subcategory Maximum Image Height",'rt_theme'),
														"description" => esc_html__("Set the maximum height in pixels for the product category images in product categories. The &#39;Crop Subcategory Images&#39; must be enabled to use this option.",'rt_theme'),
														"id"          => RT_THEMESLUG."_product_category_image_height",
														"default"     => 240, 
														"type"        => "number",
														"transport"   => "postMessage",
														"input_attrs" => array( "data-depends-id" => RT_THEMESLUG."_category_display", "data-depends-values" => "both,categories_only")
													),


											),
							),		


							array(
								'id'       => 'currency',									
								'title'    => esc_html__("Currency Options",'rt_theme'), 
								'controls' => array( 

													array(
														"label"       => esc_html__("Currency",'rt_theme'),
														"description" => esc_html__('Set a default currency sign/character.','rt_theme'),
														"id"          => RT_THEMESLUG."_currency",
														"default"     => "$",
														"type"        => "text", 
														"transport"   => "refresh",
													),

													array(
														"label"        => esc_html__("Currency Location",'rt_theme'),
														"description" => esc_html__('Select the location for the currency sign/character (before or after the price label).','rt_theme'),
														"id"          => RT_THEMESLUG."_currency_location",
														"choices"     =>  array( "before" => esc_html__("Before the numbers",'rt_theme'),  "after" => esc_html__("After the numbers",'rt_theme')  ),
														"default"     => "before", 
														"type"        => "select",
														"transport"   => "refresh",
													),
										 
													array(
														"label"        => esc_html__("Display Price in Product Lists",'rt_theme'),
														"description" => esc_html__('Display the price in lists like product categories','rt_theme'),
														"id"          => RT_THEMESLUG."_show_price_in_list",
														"choices"     =>  array( "true" => esc_html__("Yes",'rt_theme'),  "false" => esc_html__("No",'rt_theme')  ),
														"default"     => "true", 
														"type"        => "select",
														"transport"   => "refresh",
													),										 

													array(
														"label"        => esc_html__("Display Price in Single Product Pages",'rt_theme'),
														"description" => esc_html__('Display the price in single product page','rt_theme'),
														"id"          => RT_THEMESLUG."_show_price_in_pages",
														"choices"     =>  array( "true" => esc_html__("Yes",'rt_theme'),  "false" => esc_html__("No",'rt_theme')  ),
														"default"     => "true", 
														"type"        => "select",
														"transport"   => "refresh",
													),				

											),
							),

						array(
							'id'       => 'featured_img',									
							'title'    => esc_html__("Featured Images",'rt_theme'), 
							"description" => __('Enable "Image Resize" to resize or crop the featured images automatically. These settings will be used as globaly.<br /> Please note, since the theme is reponsive the images cannot be wider than the column they are in. Leave these values "0" to use theme defaults.','rt_theme'),

							'controls' => array( 

												array(
													"label"       => esc_html__("Image Resize",'rt_theme'),
													"id"          => RT_THEMESLUG."_product_image_resize",
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
													"id"          => RT_THEMESLUG."_product_image_width",
													"default"     => 0, 
													"type"        => "number",
													"transport"   => "postMessage",
													"input_attrs" => array("min"=>0,"max"=>3000, "data-depends-id" => RT_THEMESLUG."_product_image_resize", "data-depends-values" => "true")
												),


												array(
													"label"       => esc_html__("Featured Image Max Height",'rt_theme'),
													"id"          => RT_THEMESLUG."_product_image_height",
													"default"     => 0, 
													"type"        => "number",
													"transport"   => "postMessage",
													"input_attrs" => array("min"=>0,"max"=>3000, "data-depends-id" => RT_THEMESLUG."_product_image_resize", "data-depends-values" => "true")
												),

												array(
													"label"       => esc_html__("Crop Featured Image",'rt_theme'),
													"id"          => RT_THEMESLUG."_product_image_crop",
													"default"     => "",
													"transport"   => "postMessage",
													"type"        => "rt_checkbox",
													"input_attrs" => array("data-depends-id" => RT_THEMESLUG."_product_image_resize", "data-depends-values" => "true")
												),
									 

										),
						),		

							array(
								'id'          => 'single',									
								'title'       => esc_html__("Single Product Layout",'rt_theme'), 
								'description' => esc_html__("These options for default single product page layout. ",'rt_theme'), 
								'controls'    => array( 

													array(
														"id"          => RT_THEMESLUG."_product_content_width",															
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
														"id"          => RT_THEMESLUG."_product_content_style",
														"choices"     =>  array(
																			"1" => esc_html__("Stlye 1 - Horizontal Tabs",'rt_theme'),
																			"2" => esc_html__("Stlye 2 - Left Vertical Tabs",'rt_theme'),
																			"3" => esc_html__("Stlye 3 - Right Vertical Tabs",'rt_theme'),
																			"4" => esc_html__("Stlye 4 - Accordion",'rt_theme'),
																  		),			
														"default"   => "1",
														"transport" => "refresh", 
														"type"      => "select"
													),

													array(
														"label"       => esc_html__("Hide Share Buttons",'rt_theme'), 
														"id"          => RT_THEMESLUG."_hide_product_share_buttons",
														"default"     => "",
														"transport"   => "refresh",
														"type"        => "checkbox"
													),												 
											),
							),		

							array(
								'id'       => 'related',									
								'title'    => esc_html__("Related Products",'rt_theme'), 
								'controls' => array( 

													array(
														"id"          => RT_THEMESLUG."_related_product_layout",															
														"label"       => esc_html__("Layout",'rt_theme'),
														"description" => esc_html__("Select and set a default column layout for the related products list.",'rt_theme'),
														"choices"     =>  array(
																			"1/6" => "1/6", 
																			"1/4" => "1/4",
																			"1/3" => "1/3",
																			"1/2" => "1/2"
																  		),			
														"default"   => "1/2",
														"transport" => "refresh", 
														"type"      => "select"
													),	
										
													array(
														"label"       => esc_html__("Crop Featured Image",'rt_theme'),
														"description" => esc_html__('Enable cropping for product images inside the related products list.','rt_theme'),
														"id"          => RT_THEMESLUG."_related_product_image_crop",
														"default"     => "",
														"transport"   => "postMessage",
														"type"        => "checkbox"
													),
										 
											),
							),		


					)
	);
