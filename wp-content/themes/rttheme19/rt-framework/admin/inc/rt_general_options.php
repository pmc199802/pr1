<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * RT-Theme Options Without Panels
 */
$this->options["rt_single_options"] = array(

			array(
				'id'       => 'logo',
				'title' => esc_html__("Logo Options",'rt_theme'), 
				'priority' => 1,
				"description" => '<ul><li>'.esc_html__('Select image files to use as the website logo.','rt_theme').'</li><li>'.esc_html__('There is a "Logo Box" that holds the logo image. The box dimensions can be adjusted by using settings inside the "Styling Options / Logo Box" section. For the vertical header, it is 290px wide minus the logo box paddings.','rt_theme').'</li><li>'.esc_html__('Retina Devices: There are two ways to get a sharp looking logo on retina devices. You can either use 2x bigger images than the "Logo Box" dimensions for the "Standard Logo" or upload separate files by using the second form set below. Use the second option if your logo does not look good when resized by browser.','rt_theme').'</li></ul>',
				'controls' => array( 



									array(
										"id"          => RT_THEMESLUG."_logo_seperator",
										"label"       => esc_html__('Standard Logo','rt_theme'),
										"type"        => "rt_subsection_heading",
										"description" => esc_html__('The default logo set of your website.','rt_theme'),
									),

									array(
										"id"          => RT_THEMESLUG."_logo_url", 	
										"label"       => esc_html__("Logo Image",'rt_theme'),
										"transport"   => "refresh",															
										"type"        => get_theme_mod(RT_THEMESLUG."_logo_url") == "" || is_numeric( get_theme_mod(RT_THEMESLUG."_logo_url") )? "media" : "rt_media",
									), 

									array(
										"id"          => RT_THEMESLUG."_sticky_logo_url", 	
										"label"       => esc_html__("Logo Image for the Sticky Header (optional)",'rt_theme'),
										"description" => esc_html__('Upload an alternative logo image for the sticky navigation bar.','rt_theme'),
										"transport"   => "refresh",															
										"type"        => get_theme_mod(RT_THEMESLUG."_sticky_logo_url") == "" || is_numeric( get_theme_mod(RT_THEMESLUG."_sticky_logo_url") )? "media" : "rt_media",
									),


									array(
										"id"          => RT_THEMESLUG."_logo_seperator2",
										"label"       => esc_html__('Retina Logo (optional)','rt_theme'),
										"description" => esc_html__('Use a bigger image than the standard logo like 2x to get a sharp look on retina devices. The retina and standard logo images must be in the same aspect ratio. For example; create 200x100px logo for 100x50px standard logo image.','rt_theme'),
										"type"        => "rt_subsection_heading",
									),

									array(
										"id"          => RT_THEMESLUG."_logo_url_2x", 	
										"label"       => esc_html__("Retina Logo Image",'rt_theme'),				
										"description" => "",
										"transport"   => "refresh",															
										"type"        => "media",
									), 

									array(
										"id"          => RT_THEMESLUG."_sticky_logo_url_2x", 	
										"label"       => esc_html__("Retina Logo Image for the Sticky Header (optional)",'rt_theme'),
										"description" => esc_html__('Upload an alternative logo image for the sticky navigation bar.','rt_theme'),
										"transport"   => "refresh",															
										"type"        => "media",
									)

							),
			), 


			array(
				'id'       => 'copyright',
				'title'    => esc_html__("Copyright Text",'rt_theme'), 
				'controls' => array( 

									array(
										"id"          => RT_THEMESLUG."_copyright", 	
										"label"       => esc_html__("Copyright Text",'rt_theme'),
										"description" => esc_html__('The copyright text will be displayed in the footer of your website.','rt_theme'),
										"transport"   => "refresh",		
										"default"     =>  'Copyright &copy; Company Name, Inc.',													
										"type"        => "textarea",
										"sanitize_callback" => "rt_sanitize_basic_html"
									), 

							),
			), 

	);

/**
 * RT-Theme General Options
 */
$this->options["rt_general_options"] = array(

		'title' => esc_html__("General Options",'rt_theme'), 
		'priority' => 1,
		//'description' => esc_html__("General Options Desc",'rt_theme'), 
		'sections' => array(
			

							array(
								'id'       => 'performance',
								'title'    => esc_html__("Performance",'rt_theme'), 
								"description" => esc_html__('Speed up your website by using minified and combined versions of the css/js files that used for the theme. ','rt_theme'),								
								'controls' => array(

													array(
														"id"        => RT_THEMESLUG."_optimize_css",															
														"label"     => esc_html__("Combine & optimize CSS files of the theme",'rt_theme'),														
														"default"   => "",
														"transport" => "refresh",
														"type"      => "checkbox",
													),	

													array(
														"id"        => RT_THEMESLUG."_optimize_js",															
														"label"     => esc_html__("Combine & optimize JS files of the theme",'rt_theme'),														
														"default"   => "",
														"transport" => "refresh",
														"type"      => "checkbox",
													),	

											),
							),


							array(
								'id'       => 'breadcrumb',
								'title'    => esc_html__("Breadcrumb Menus",'rt_theme'), 
								'controls' => array( 

													array(
														"id"          => RT_THEMESLUG."_blog_page",															
														"label"       => esc_html__("Blog Start Page",'rt_theme'),
														"description" => esc_html__("Select blog start page to add after home link.",'rt_theme'),
														"default"   => "0",
														"transport" => "refresh", 
														"type"      => "dropdown-pages"
													),														
													array(
														"id"          => RT_THEMESLUG."_product_list",															
														"label"       => esc_html__("Product Showcase Start Page",'rt_theme'),
														"description" => esc_html__("Select product start page to add after the home link.",'rt_theme'),
														"default"   => "0",
														"transport" => "refresh", 
														"type"      => "dropdown-pages"
													),												
													array(
														"id"          => RT_THEMESLUG."_portf_page",															
														"label"       => esc_html__("Portfolio Start Page",'rt_theme'),
														"description" => esc_html__("Select portfolio start page to add after the home link.",'rt_theme'),		
														"default"   => "0",
														"transport" => "refresh", 
														"type"      => "dropdown-pages"
													),	
													array(
														"id"          => RT_THEMESLUG."_staff_page",															
														"label"       => esc_html__("Team Start Page",'rt_theme'),
														"description" => esc_html__("Select team/staff start page to add after the home link.",'rt_theme'),		
														"default"   => "0",
														"transport" => "refresh", 
														"type"      => "dropdown-pages"
													),

													array(
														"id"          => RT_THEMESLUG."_shop_start_page",															
														"label"       => esc_html__("WooCommerce Shop Start Page",'rt_theme'),
														"description" => esc_html__("Select shop start page to add after the home link for WooCommerce links. Note: When you define a start page by using this option, the default WooCommerce breadcrumb menu will be disabled.",'rt_theme'),		
														"default"   => "0",
														"transport" => "refresh", 
														"type"      => "dropdown-pages"
													),													
											),
							),


							array(
								'id'       => 'sidebars',
								'title'    => esc_html__("Sidebar Options",'rt_theme'), 
								'controls' => array( 
													
													array(
														"id"          => RT_THEMESLUG."_default_sidebar_position",	
														"label"       => esc_html__("Default Sidebar Position",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",															
														"choices"     => array(		
																			""      => esc_html__("No Sidebar",'rt_theme'),
																			"left"  => esc_html__("Left Sidebar",'rt_theme'),
																			"right" => esc_html__("Right Sidebar",'rt_theme'), 
																		),  
														"type" => "select",
														"default" => "",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_sidebar_blog_cats",	
														"label"       => esc_html__("Sidebar Position for Blog Categories",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",															
														"choices"     => array(		
																			""      => esc_html__("No Sidebar",'rt_theme'),
																			"left"  => esc_html__("Left Sidebar",'rt_theme'),
																			"right" => esc_html__("Right Sidebar",'rt_theme'), 
																		),  
														"type" => "select",
														"default" => "",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_sidebar_portfolio_cats",	
														"label"       => esc_html__("Sidebar Position for Portfolio Categories",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",															
														"choices"     => array(		
																			""      => esc_html__("No Sidebar",'rt_theme'),
																			"left"  => esc_html__("Left Sidebar",'rt_theme'),
																			"right" => esc_html__("Right Sidebar",'rt_theme'), 
																		),  
														"type" => "select",
														"default" => "",
														"rt_skin"   => true
													),												

													array(
														"id"          => RT_THEMESLUG."_sidebar_product_cats",	
														"label"       => esc_html__("Sidebar Position for Product Showcase Categories",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",															
														"choices"     => array(		
																			""      => esc_html__("No Sidebar",'rt_theme'),
																			"left"  => esc_html__("Left Sidebar",'rt_theme'),
																			"right" => esc_html__("Right Sidebar",'rt_theme'), 
																		),  
														"type" => "select",
														"default" => "",
														"rt_skin"   => true
													),	

													array(
														"id"          => RT_THEMESLUG."_sidebar_woo_cats",	
														"label"       => esc_html__("Sidebar Position for WooCommerce Categories",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",															
														"choices"     => array(		
																			""      => esc_html__("No Sidebar",'rt_theme'),
																			"left"  => esc_html__("Left Sidebar",'rt_theme'),
																			"right" => esc_html__("Right Sidebar",'rt_theme'), 
																		),  
														"type" => "select",
														"default" => "",
														"rt_skin"   => true
													),	
													
													/*
													array(
														"id"          => RT_THEMESLUG."_sidebar_test_cats",	
														"label"       => esc_html__("Sidebar Position for Testimonial Categories",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",															
														"choices"     => array(		
																			""      => esc_html__("No Sidebar",'rt_theme'),
																			"left"  => esc_html__("Left Sidebar",'rt_theme'),
																			"right" => esc_html__("Right Sidebar",'rt_theme'), 
																		),  
														"type" => "select",
														"default" => "",
														"rt_skin"   => true
													),	
													*/

											),
							),


							array(
								'id'          => 'page_comments',
								'title'       => esc_html__("Page Comments",'rt_theme'), 
								"description" => esc_html__("Turn ON this option if you want to allow comments on regular pages. Make sure 'Allow Comments' box is also checked for individual pages. If you dont see that option in your pages make sure to turn on the &#39;discussions&#39; option in the screen options below the admin name while you are in that page editing the content.",'rt_theme'),				
								'controls'    => array( 

													array(
														"id"        => RT_THEMESLUG."_allow_page_comments",															
														"label"     => esc_html__("Allow comments on pages",'rt_theme'),														
														"default"   => 0,
														"transport" => "refresh",
														"type"      => "checkbox",
													),	

											),
							),
   

							array(
								'id'          => 'page_loading',
								'title'       => esc_html__("Page Loading Effect",'rt_theme'), 
								"description" => esc_html__("Check this option to enable page loading effect",'rt_theme'),				
								'controls'    => array( 

													array(
														"id"          => RT_THEMESLUG."_page_loading_effect",															
														"label"       => esc_html__("Page Loading Effect",'rt_theme'),
														"description" => esc_html__("Displays the loading animation while the page loading.",'rt_theme'),																		
														"default"     => 1,
														"transport"   => "refresh",
														"type"        => "checkbox",
													),	

													array(
														"id"          => RT_THEMESLUG."_page_leaving_effect",
														"label"       => esc_html__("Extend The Loading Effect",'rt_theme'),
														"description" => esc_html__("Starts the loading animation the moment a local link clicked.",'rt_theme'),																		
														"default"     => "",
														"transport"   => "refresh",
														"type"        => "checkbox",
													),	

											),
							),


							array(
								'id'          => 'go_to_top',
								'title'       => esc_html__("Go to Top Button",'rt_theme'), 
								"description" => esc_html__("Check this option to display a 'go to top' button right bottom corner of your website",'rt_theme'),				
								'controls'    => array( 

													array(
														"id"        => RT_THEMESLUG."_go_top_button",															
														"label"     => esc_html__("Display go to top button",'rt_theme'),														
														"default"   => 0,
														"transport" => "refresh",
														"type"      => "checkbox",
													),	

											),
							),

							array(
								'id'          => 'google_maps',
								'title'       => esc_html__("Google Maps",'rt_theme'), 
								"description" => esc_html__("Enter your Google API key. Refer online documentation of the theme to learn how to get your API key.",'rt_theme'),				
								'controls'    => array( 

														array(
															"id"        => RT_THEMESLUG."_google_api_key",															
															"label"     => esc_html__("Google API Key",'rt_theme'),														
															"default"   => "",
															"transport" => "refresh",
															"type"      => "text",
														),	

											),
							),							

					)
	);