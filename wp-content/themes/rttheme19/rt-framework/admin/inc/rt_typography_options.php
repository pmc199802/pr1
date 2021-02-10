<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * RT-Theme Blog Options
 */
		$this->options["typography"] = array(

				'title' => esc_html__("Typography Options",'rt_theme'),
				'description' => "",
				'priority' => 3,
				'sections' => array(

									array(
										'id'       => 'body',
										'title'    => esc_html__("Body",'rt_theme'),
										'controls' => array(
															array(
																"id"          => RT_THEMESLUG.'_body_font',
																"label"       => esc_html__("Font",'rt_theme'),
																//"description" => esc_html__("",'rt_theme'),
																"choices"     =>  $this->fonts,
																"input_attrs" => array("class"=>"rt_fonts", "data-variant-id"=> RT_THEMESLUG.'_body_font_variant', "data-subset-id"=> RT_THEMESLUG.'_body_font_subset'),
																"default"   => "google||Source Sans Pro",
																"transport" => "refresh",
																"type"      => "rt_select",
																"rt_skin"   => true
															),

															array(
																"id"          => RT_THEMESLUG.'_body_font_subset',
																"label"       => esc_html__("Subsets",'rt_theme'),
																//"description" => esc_html__("",'rt_theme'),
																"choices"     => array(),
																"default"     => array("latin","latin-ext"),
																"input_attrs" => array("multiple"=>"multiple"),
																"transport"   => "refresh",
																"type"        => "rt_select",
																"rt_skin"   => true
															),

															array(
																"id"          => RT_THEMESLUG.'_body_font_variant',
																"label"       => esc_html__("Font Weight",'rt_theme'),
																//"description" => esc_html__("",'rt_theme'),
																"choices"     =>  array(),
																"default"     => "regular",
																"transport"   => "refresh",
																"type"        => "rt_select",
																"rt_skin"   => true
															),

															array(
																"label"       => esc_html__("Body Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_body_font_size",
																"default"     => "15",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),

													),
									),

									array(
										'id'       => 'headings',
										'title'    => esc_html__("Headings",'rt_theme'),
										'controls' => array(
															array(
																"id"          => RT_THEMESLUG.'_heading_font',
																"label"       => esc_html__("Font",'rt_theme'),
																//"description" => esc_html__("",'rt_theme'),
																"choices"     =>  $this->fonts,
																"input_attrs" => array("class"=>"rt_fonts", "data-variant-id"=> RT_THEMESLUG.'_heading_font_variant', "data-subset-id"=> RT_THEMESLUG.'_heading_font_subset'),
																"default"   => "google||Roboto",
																"transport" => "refresh",
																"type"      => "rt_select",
																"rt_skin"   => true
															),

															array(
																"id"          => RT_THEMESLUG.'_heading_font_subset',
																"label"       => esc_html__("Subsets",'rt_theme'),
																//"description" => esc_html__("",'rt_theme'),
																"choices"     => array(),
																"default"     => array("latin","latin-ext"),
																"input_attrs" => array("multiple"=>"multiple"),
																"transport"   => "refresh",
																"type"        => "rt_select",
																"rt_skin"   => true
															),

															array(
																"id"          => RT_THEMESLUG.'_heading_font_variant',
																"label"       => esc_html__("Font Weight",'rt_theme'),
																//"description" => esc_html__("",'rt_theme'),
																"choices"     =>  array(),
																"default"     => "300",
																"transport"   => "refresh",
																"type"        => "rt_select",
																"rt_skin"   => true
															),


															array(
																"label"       => esc_html__("H1 Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_h1_font_size",
																"default"     => "44",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),

															array(
																"label"       => esc_html__("H2 Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_h2_font_size",
																"default"     => "30",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),
															array(
																"label"       => esc_html__("H3 Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_h3_font_size",
																"default"     => "26",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),
															array(
																"label"       => esc_html__("H4 Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_h4_font_size",
																"default"     => "24",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),
															array(
																"label"       => esc_html__("H5 Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_h5_font_size",
																"default"     => "22",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),
															array(
																"label"       => esc_html__("H6 Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_h6_font_size",
																"default"     => "20",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),

													),
									),

									array(
										'id'       => 'menu',
										'title'    => esc_html__("Main Menu",'rt_theme'),
										'controls' => array(
															array(
																"id"          => RT_THEMESLUG.'_menu_font',
																"label"       => esc_html__("Font",'rt_theme'),
																//"description" => esc_html__("",'rt_theme'),
																"choices"     =>  $this->fonts,
																"input_attrs" => array("class"=>"rt_fonts", "data-variant-id"=> RT_THEMESLUG.'_menu_font_variant', "data-subset-id"=> RT_THEMESLUG.'_menu_font_subset'),
																"default"   => "google||Roboto Condensed",
																"transport" => "refresh",
																"type"      => "rt_select",
																"rt_skin"   => true
															),

															array(
																"id"          => RT_THEMESLUG.'_menu_font_subset',
																"label"       => esc_html__("Subsets",'rt_theme'),
																//"description" => esc_html__("",'rt_theme'),
																"choices"     =>  array(),
																"default"     => array("latin","latin-ext"),
																"input_attrs" => array("multiple"=>"multiple"),
																"transport"   => "refresh",
																"type"        => "rt_select",
																"rt_skin"   => true
															),

															array(
																"id"          => RT_THEMESLUG.'_menu_font_variant',
																"label"       => esc_html__("Font Weight",'rt_theme'),
																//"description" => esc_html__("",'rt_theme'),
																"choices"     =>  array(),
																"default"     => "regular",
																"transport"   => "refresh",
																"type"        => "rt_select",
																"rt_skin"   => true
															),

															array(
																"label"       => esc_html__("Top Level Item Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_menu_font_size",
																"default"     => "16",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),

															array(
																"label"       => esc_html__("Mobile Menu - Top Level Item Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_mobile_menu_font_size",
																"default"     => "14",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),

													),
									),

									array(
										'id'       => 'sub_menu',
										'title'    => esc_html__("Sub Menu",'rt_theme'),
										'controls' => array(
															array(
																"id"          => RT_THEMESLUG.'_sub_menu_font',
																"label"       => esc_html__("Font",'rt_theme'),
																//"description" => esc_html__("",'rt_theme'),
																"choices"     =>  $this->fonts,
																"input_attrs" => array("class"=>"rt_fonts", "data-variant-id"=> RT_THEMESLUG.'_sub_menu_font_variant', "data-subset-id"=> RT_THEMESLUG.'_sub_menu_font_subset'),
																"default"   => "google||Roboto Condensed",
																"transport" => "refresh",
																"type"      => "rt_select",
																"rt_skin"   => true
															),

															array(
																"id"          => RT_THEMESLUG.'_sub_menu_font_subset',
																"label"       => esc_html__("Subsets",'rt_theme'),
																//"description" => esc_html__("",'rt_theme'),
																"choices"     => array(),
																"default"     => array("latin","latin-ext"),
																"input_attrs" => array("multiple"=>"multiple"),
																"transport"   => "refresh",
																"type"        => "rt_select",
																"rt_skin"   => true
															),

															array(
																"id"          => RT_THEMESLUG.'_sub_menu_font_variant',
																"label"       => esc_html__("Font Weight",'rt_theme'),
																//"description" => esc_html__("",'rt_theme'),
																"choices"     =>  array(),
																"default"     => "regular",
																"transport"   => "refresh",
																"type"        => "rt_select",
																"rt_skin"   => true
															),

															array(
																"label"       => esc_html__("Sub Level Item Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_menu_sub_font_size",
																"default"     => "16",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),

															array(
																"label"       => esc_html__("Mobile Menu - Sub Level Item Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_mobile_menu_sub_font_size",
																"default"     => "14",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),

													),
									),

									array(
										'id'       => 'miscellaneous',
										'title'    => esc_html__("Miscellaneous",'rt_theme'),
										'controls' => array(

															array(
																"id"          => RT_THEMESLUG."_sub_page_header_t_seperator",
																"label"       => esc_html__('Sub-Header Page Title','rt_theme'),
																"type"        => "rt_subsection_heading"
															),

															array(
																"id"          => RT_THEMESLUG."_sub_page_header_title_font",
																"label"       => esc_html__("Sub-Header Page Title Font",'rt_theme'),
																"description" => "",
																"transport"   => "refresh",
																"choices"     => array(																					
																					"body" => esc_html__("Use the body font family",'rt_theme'), 
																					"heading" => esc_html__("Use the heading font family",'rt_theme'),
																					"secondary" => esc_html__("Use the secondary font family",'rt_theme'),
																					"menu" => esc_html__("Use the menu font family",'rt_theme'), 
																					"sub_menu" => esc_html__("Use the sub menu font family",'rt_theme'), 
																				),
																"type"    => "select",
																"default" => "heading",
																"rt_skin" => true
															),

															array(
																"label"       => esc_html__("Sub-Header Page Title Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_sub_page_header_title_font_size",
																"default"     => "34",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),

															array(
																"id"          => RT_THEMESLUG."_products_t_seperator",
																"label"       => esc_html__('Products','rt_theme'),
																"type"        => "rt_subsection_heading"
															),

															array(
																"id"          => RT_THEMESLUG."_product_title_font",
																"label"       => esc_html__("Product Headings Font",'rt_theme'),
																"description" => "",
																"transport"   => "refresh",
																"choices"     => array(																					
																					"body" => esc_html__("Use the body font family",'rt_theme'), 
																					"heading" => esc_html__("Use the heading font family",'rt_theme'),
																					"secondary" => esc_html__("Use the secondary font family",'rt_theme'),
																					"menu" => esc_html__("Use the menu font family",'rt_theme'), 
																					"sub_menu" => esc_html__("Use the sub menu font family",'rt_theme'), 
																				),
																"type"    => "select",
																"default" => "body",
																"rt_skin" => true
															),

															array(
																"label"       => esc_html__("Product Headings Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_product_title_font_size",
																"default"     => "18",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),
 
															array(
																"label"       => esc_html__("Product Carousel Headings Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_product_carousel_title_font_size",
																"default"     => "15",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),
 

															array(
																"id"          => RT_THEMESLUG."_portfolio_t_seperator",
																"label"       => esc_html__('Portfolio','rt_theme'),
																"type"        => "rt_subsection_heading"
															),

															array(
																"id"          => RT_THEMESLUG."_portfolio_title_font",
																"label"       => esc_html__("Portfolio Headings Font",'rt_theme'),
																"description" => "",
																"transport"   => "refresh",
																"choices"     => array(																					
																					"body" => esc_html__("Use the body font family",'rt_theme'), 
																					"heading" => esc_html__("Use the heading font family",'rt_theme'),
																					"secondary" => esc_html__("Use the secondary font family",'rt_theme'),
																					"menu" => esc_html__("Use the menu font family",'rt_theme'), 
																					"sub_menu" => esc_html__("Use the sub menu font family",'rt_theme'), 
																				),
																"type"    => "select",
																"default" => "body",
																"rt_skin" => true
															),

															array(
																"label"       => esc_html__("Portfolio Heading Font Size (Style 1)",'rt_theme'),
																"id"          => RT_THEMESLUG."_portfolio_title_font_size_1",
																"default"     => "22",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),

															array(
																"label"       => esc_html__("Portfolio Heading Font Size (Style 2)",'rt_theme'),
																"id"          => RT_THEMESLUG."_portfolio_title_font_size_2",
																"default"     => "22",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"     => true
															),
 
															array(
																"label"       => esc_html__("Portfolio Carousel Headings Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_portfolio_carousel_title_font_size",
																"default"     => "22",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"     => true
															),
 
  															array(
																"id"          => RT_THEMESLUG."_blog_t_seperator",
																"label"       => esc_html__('Blog','rt_theme'),
																"type"        => "rt_subsection_heading"
															),

 															array(
																"label"       => esc_html__("Blog Heading Font Size (Loop)",'rt_theme'),
																"id"          => RT_THEMESLUG."_blog_title_font_size",
																"default"     => "26",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"     => true
															),

															array(
																"id"          => RT_THEMESLUG."_blog_carousel_title_font",
																"label"       => esc_html__("Blog Carousel Heading Font",'rt_theme'),
																"description" => "",
																"transport"   => "refresh",
																"choices"     => array(																					
																					"body" => esc_html__("Use the body font family",'rt_theme'), 
																					"heading" => esc_html__("Use the heading font family",'rt_theme'), 
																				),
																"type"    => "select",
																"default" => "body",
																"rt_skin" => true
															),
 
															array(
																"label"       => esc_html__("Blog Carousel Heading Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_blog_carousel_title_font_size",
																"default"     => "15",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"     => true
															),


 															array(
																"id"          => RT_THEMESLUG."_news_t_seperator",
																"label"       => esc_html__('Latest News','rt_theme'),
																"type"        => "rt_subsection_heading"
															),

															array(
																"id"          => RT_THEMESLUG."_news_title_font",
																"label"       => esc_html__("Latest News Heading Font",'rt_theme'),
																"description" => "",
																"transport"   => "refresh",
																"choices"     => array(																					
																					"body" => esc_html__("Use the body font family",'rt_theme'), 
																					"heading" => esc_html__("Use the heading font family",'rt_theme'), 
																					"secondary" => esc_html__("Use the secondary font family",'rt_theme'), 
																					"menu" => esc_html__("Use the menu font family",'rt_theme'), 
																					"sub_menu" => esc_html__("Use the sub menu font family",'rt_theme'), 
																				),
																"type"    => "select",
																"default" => "body",
																"rt_skin" => true
															),

															array(
																"label"       => esc_html__("Latest News Headings Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_news_title_font_size",
																"default"     => "17",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),


 															array(
																"id"          => RT_THEMESLUG."_widgets_t_seperator",
																"label"       => esc_html__('Widgets','rt_theme'),
																"type"        => "rt_subsection_heading"
															),
 
															array(
																"label"       => esc_html__("Widget Heading Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_widget_title_font_size",
																"default"     => "17",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),


 															array(
																"id"          => RT_THEMESLUG."_tabs_t_seperator",
																"label"       => esc_html__('Tabs','rt_theme'),
																"type"        => "rt_subsection_heading"
															),

															array(
																"id"          => RT_THEMESLUG."_tabs_title_font",
																"label"       => esc_html__("Tabs Heading Font",'rt_theme'),
																"description" => "",
																"transport"   => "refresh",
																"choices"     => array(																					
																					"body" => esc_html__("Use the body font family",'rt_theme'), 
																					"heading" => esc_html__("Use the heading font family",'rt_theme'),
																					"secondary" => esc_html__("Use the secondary font family",'rt_theme'),
																					"menu" => esc_html__("Use the menu font family",'rt_theme'), 
																					"sub_menu" => esc_html__("Use the sub menu font family",'rt_theme'), 
																				),
																"type"    => "select",
																"default" => "body",
																"rt_skin" => true
															),

															array(
																"label"       => esc_html__("Tabs Heading Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_tabs_title_font_size",
																"default"     => "15",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),


 															array(
																"id"          => RT_THEMESLUG."_accordions_t_seperator",
																"label"       => esc_html__('Accordions','rt_theme'),
																"type"        => "rt_subsection_heading"
															),

															array(
																"id"          => RT_THEMESLUG."_accordion_title_font",
																"label"       => esc_html__("Accordions Heading Font",'rt_theme'),
																"description" => "",
																"transport"   => "refresh",
																"choices"     => array(																					
																					"body" => esc_html__("Use the body font family",'rt_theme'), 
																					"heading" => esc_html__("Use the heading font family",'rt_theme'),
																					"secondary" => esc_html__("Use the secondary font family",'rt_theme'),
																					"menu" => esc_html__("Use the menu font family",'rt_theme'), 
																					"sub_menu" => esc_html__("Use the sub menu font family",'rt_theme'), 
																				),
																"type"    => "select",
																"default" => "body",
																"rt_skin" => true
															),

															array(
																"label"       => esc_html__("Accordions Heading Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_accordion_title_font_size",
																"default"     => "15",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),


 															array(
																"id"          => RT_THEMESLUG."_header_t_seperator",
																"label"       => esc_html__('Header Widgets','rt_theme'),
																"type"        => "rt_subsection_heading"
															),

															array(
																"id"          => RT_THEMESLUG."_header_widget_font",
																"label"       => esc_html__("Header Widget Font",'rt_theme'),
																"description" => "",
																"transport"   => "refresh",
																"choices"     => array(																					
																					"body" => esc_html__("Use the body font family",'rt_theme'), 
																					"heading" => esc_html__("Use the heading font family",'rt_theme'),
																					"secondary" => esc_html__("Use the secondary font family",'rt_theme'),
																					"menu" => esc_html__("Use the menu font family",'rt_theme'), 
																					"sub_menu" => esc_html__("Use the sub menu font family",'rt_theme'), 
																				),
																"type"    => "select",
																"default" => "body",
																"rt_skin" => true
															),

															array(
																"label"       => esc_html__("Header Widget Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_header_widget_font_size",
																"default"     => "12",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),

 															array(
																"id"          => RT_THEMESLUG."_topbar_t_seperator",
																"label"       => esc_html__('Top Bar','rt_theme'),
																"type"        => "rt_subsection_heading"
															),

															array(
																"id"          => RT_THEMESLUG."_topbar_font",
																"label"       => esc_html__("Top Bar Font",'rt_theme'),
																"description" => "",
																"transport"   => "refresh",
																"choices"     => array(																					
																					"body" => esc_html__("Use the body font family",'rt_theme'), 
																					"heading" => esc_html__("Use the heading font family",'rt_theme'),
																					"secondary" => esc_html__("Use the secondary font family",'rt_theme'),
																					"menu" => esc_html__("Use the menu font family",'rt_theme'), 
																					"sub_menu" => esc_html__("Use the sub menu font family",'rt_theme'), 
																				),
																"type"    => "select",
																"default" => "body",
																"rt_skin" => true
															),

															array(
																"label"       => esc_html__("Top Bar Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_topbar_font_size",
																"default"     => "12",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),

 															array(
																"id"          => RT_THEMESLUG."_breadcrumb_t_seperator",
																"label"       => esc_html__('Breadcrumb','rt_theme'),
																"type"        => "rt_subsection_heading"
															),

															array(
																"label"       => esc_html__("Breadcrumb Menu Font Size",'rt_theme'),
																"id"          => RT_THEMESLUG."_breadcrumb_font_size",
																"default"     => "11",
																"type"        => "number",
																"transport"   => "refresh",
																"input_attrs" => array("min"=>10,"max"=>100),
																"rt_skin"   => true
															),

													),
									),

									array(
												'id'          => 'secondary',
												'title'       => esc_html__("Secondary Font",'rt_theme'),
												'description' => esc_html__("You can select a font family to set as a secondary font. It is available to use within some modules as an option. You can also use it for any module by using 'secondary-font' class name or adding the text between &lt;em&gt;&lt;/em&gt; tags inside an heading.",'rt_theme'),
												'controls' => array( 

																	array(
																		"id"          => RT_THEMESLUG.'_secondary_font',															
																		"label"       => esc_html__("Font",'rt_theme'),
																		"choices"     => $this->fonts,
																		"input_attrs" => array("class"=>"rt_fonts", "data-variant-id"=> RT_THEMESLUG.'_secondary_font_variant', "data-subset-id"=> RT_THEMESLUG.'_secondary_font_subset'),
																		"default"   => "",
																		"transport" => "refresh", 
																		"type"      => "rt_select",
																		"rt_skin"   => true
																	),

																	array(
																		"id"          => RT_THEMESLUG.'_secondary_font_subset',															
																		"label"       => esc_html__("Subsets",'rt_theme'),
																		"choices"     => array(),			
																		"default"     => "",
																		"input_attrs" => array("multiple"=>"multiple"),
																		"transport"   => "refresh", 
																		"type"        => "rt_select",
																		"rt_skin"   => true
																	),

																	array(
																		"id"          => RT_THEMESLUG.'_secondary_font_variant',															
																		"label"       => esc_html__("Font Weight",'rt_theme'),
																		"choices"     => "",			
																		"default"     => "italic",
																		"transport"   => "refresh", 
																		"type"        => "rt_select",
																		"rt_skin"   => true
																	),

															),
											),				
							)
			);
