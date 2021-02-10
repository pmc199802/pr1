<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * RT-Theme Blog Options
 */
		$this->options["rt_blog_options"] = array(

				'title' => esc_html__("Blog Options",'rt_theme'), 
				'description' => "", 
				'priority' => 6,
				'sections' => array(

									array(
										'id'       => 'misc',
										'title'    => esc_html__("Global Layout Options",'rt_theme'), 
										'controls' => array( 
															array(
																"id"          => RT_THEMESLUG."_blog_layout",															
																"label"       => esc_html__("Layout",'rt_theme'),
																"description" => esc_html__("Select and set a default column layout for the blog category & archive listing pages for each of the (single) post items listed within those pages.",'rt_theme'),
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
																'id'          => RT_THEMESLUG.'_blog_layout_style',
																'label'       => esc_html__("Layout Style",'rt_theme'),
																"description" => esc_html__("Select and set a default layout style for the blog category & archive listing pages",'rt_theme'),
																'type'        => 'select',
																'default'     => 'grid',
																"transport"   => "refresh",
																'choices'     => array(
																					"grid"    => esc_html__("Grid",'rt_theme'),
																					"masonry" => esc_html__("Masonry",'rt_theme'),
																				),
															),													
													),
									),							

									array(
										'id'          => 'featured_img',									
										'title'       => esc_html__("Featured Images",'rt_theme'), 
										"description" => esc_html__('Enable "Image Resize" to resize or crop the featured images automatically. These settings will be used as globaly and you can change for each portfolio post individiually (via edit post screen). <br /> Please note, since the theme is reponsive the images cannot be wider than the column they are in. Leave values "0" to use theme defaults.','rt_theme'),
										'controls'    => array( 

															array(
																"label"       => esc_html__("Featured Images in Lightbox",'rt_theme'), 
																"description" => esc_html__("Enable/Disable lightbox preview option for the features images. This option is only availble for the standard post types.",'rt_theme'),
																"id"          => RT_THEMESLUG."_use_lightbox",
																"default"     => "on",
																"transport"   => "postMessage",
																"type"        => "checkbox"
															),

															array(
																"label"       => esc_html__("Image Resize",'rt_theme'),
																"id"          => RT_THEMESLUG."_blog_image_resize",
																"choices"     => array(
																					"false" => esc_html__("Disabled",'rt_theme'),						
																					"true" => esc_html__("Enabled",'rt_theme'),
																				),			
																"default"   => "true",
																"transport" => "postMessage", 
																"type"      => "select"
															),		

															array(
																"label"       => esc_html__("Featured Image Max Width",'rt_theme'),
																"id"          => RT_THEMESLUG."_blog_image_width",
																"default"     => 0, 
																"type"        => "number",
																"transport"   => "postMessage",
																"input_attrs" => array("min"=>0,"max"=>3000, "data-depends-id" => RT_THEMESLUG."_blog_image_resize", "data-depends-values" => "true")
															),


															array(
																"label"       => esc_html__("Featured Image Max Height",'rt_theme'),
																"id"          => RT_THEMESLUG."_blog_image_height",
																"default"     => 0, 
																"type"        => "number",
																"transport"   => "postMessage",
																"input_attrs" => array("min"=>0,"max"=>3000, "data-depends-id" => RT_THEMESLUG."_blog_image_resize", "data-depends-values" => "true")
															),

															array(
																"label"       => esc_html__("Crop Featured Image",'rt_theme'),
																"id"          => RT_THEMESLUG."_blog_image_crop",
																"default"     => "",
																"transport"   => "postMessage",
																"type"        => "rt_checkbox",
																"input_attrs" => array("data-depends-id" => RT_THEMESLUG."_blog_image_resize", "data-depends-values" => "true")
															),


													),
									),		

									array(
										'id'          => 'excerpts',									
										'title'       => esc_html__("Excerpts",'rt_theme'), 
										"description" => esc_html__("As default the full blog content will be displayed on the blog listing pages and blog categories.  Enable the <a href=\"http://en.support.wordpress.com/splitting-content/excerpts/\">Excerpts</a> ( check the 'Use excerpts..' box below ) to minify the content automatically by using WordPress's excerpt option.  You can keep disabled and split your content manually by using <a href=\"http://en.support.wordpress.com/splitting-content/more-tag/\">The More Tag</a>",'rt_theme'),
										'controls'    => array( 

															array(
																"label"       => esc_html__("Use excerpts",'rt_theme'), 
																"id"          => RT_THEMESLUG."_use_excerpts",
																"default"     => "on",
																"transport"   => "postMessage",
																"type"        => "checkbox"
															),

													),
									),		


									array(
										'id'          => 'meta',									
										'title'       => esc_html__("Post Meta",'rt_theme'), 
										"description" => esc_html__("Customize the post meta info that displayed with posts.",'rt_theme'),
										'controls'    => array( 


														array(
															"id"          => RT_THEMESLUG."_archive_post_meta",	
															"label"       => "",
															"description" => esc_html__('For Listing Pages (Categories, Archives, Search)','rt_theme'),															
															"type"        => "rt_seperator"
														),

															array(
																"label"     => esc_html__("Show the Author Name",'rt_theme'),
																"id"        => RT_THEMESLUG."_show_author",
																"type"      => "checkbox",
																"default"   => "on",
																"transport" => "refresh",
															),

															array(
																"label"     => esc_html__("Show Categories",'rt_theme'),
																"id"        => RT_THEMESLUG."_show_categories",
																"type"      => "checkbox",
																"default"   => "on",
																"transport" => "refresh",
															), 		

															array(
																"label"     => esc_html__("Show Comment Numbers",'rt_theme'),
																"id"        => RT_THEMESLUG."_show_comment_numbers",
																"type"      => "checkbox",
																"default"   => "",
																"transport" => "refresh",
															), 	

															array(
																"label"     => esc_html__("Show Post Dates",'rt_theme'),
																"id"        => RT_THEMESLUG."_show_date",
																"default"   => "on",
																"type"      => "checkbox",
																"transport" => "refresh",
															), 	

														array(
															"id"          => RT_THEMESLUG."_single_post_meta",	
															"description" => esc_html__('For Single Post Pages','rt_theme'),															
															"type"        => "rt_seperator"
														),

															array(
																"label"     => esc_html__("Show the Author Name",'rt_theme'),
																"id"        => RT_THEMESLUG."_show_author_single",
																"type"      => "checkbox",
																"default"   => "on",
																"transport" => "refresh",
															),

															array(
																"label"     => esc_html__("Show Categories",'rt_theme'),
																"id"        => RT_THEMESLUG."_show_categories_single",
																"type"      => "checkbox",
																"default"   => "on",
																"transport" => "refresh",
															), 

															array(
																"label"     => esc_html__("Show Post Dates",'rt_theme'),
																"id"        => RT_THEMESLUG."_show_date_single",
																"default"   => "on",
																"type"      => "checkbox",
																"transport" => "refresh",
															), 	


													),
									),

									array(
										'id'          => 'single',									
										'title'       => esc_html__("Single Post Page",'rt_theme'), 
										'controls'    => array( 

															array(
																"label"       => esc_html__("Blog Name",'rt_theme'),
																"description" => esc_html__("The name that will be displayed as page title inside the header area of single post pages. Leave it blank to use the current post title.",'rt_theme'),
																"id"          => RT_THEMESLUG."_blog_page_name",
																"type"        => "text",
																"default"     => esc_html__("Blog ",'rt_theme'),
																"callback"    => "esc_html"
															),

															array(
																"label"   => esc_html__("Display author info box under posts",'rt_theme'),
																"id"      => RT_THEMESLUG."_show_author_info",
																"type"    => "checkbox",
																"default" => "on",
																"transport" => "refresh"
															),		

															array(
																"label"       => esc_html__("Hide Share Buttons",'rt_theme'), 
																"id"          => RT_THEMESLUG."_hide_share_buttons",
																"default"     => "",
																"transport"   => "refresh",
																"type"        => "checkbox"
															),								
													),
									),


							)
			);