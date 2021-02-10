<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


/**
 * Create options
 */
$this->options["rt_color_schemas"] = array(
		'title' => esc_html__("Styling Options",'rt_theme'),
		//'description' => esc_html__("Color Schemas Desc",'rt_theme'),
		'priority'=> 2,
		'sections' => array(

							array(
								'id'       => 'layout',
								'title'    => esc_html__("Design Options",'rt_theme'),
								"description" => esc_html__('Header layout is the main design element of the theme. There are many design elements and css files depends this option. Use the settigns inside the "Styling Options" such as Header Options, Logo Box, Main Navigation and Shortcut Buttons in order to customize the header design. Since all the header designs follows the same settings, when you switch between the header layouts it may not be look as the demo. You can apply the default settings by using the button below.','rt_theme'),
								'controls' => array(

													array(
														"id"          => RT_THEMESLUG."_layout",
														"label"       => esc_html__("Select Header Layout",'rt_theme'),
														'description' => "",
														"transport"   => "refresh",
														"choices"     => array(
																			"layout1" => esc_html__("Layout 1 - Vertical Navigation",'rt_theme'),
																			"layout2" => esc_html__("Layout 2 - Horizontal Navigation",'rt_theme'),
																			"layout3" => esc_html__("Layout 3 - Horizontal Navigation (v2)",'rt_theme'),
																			"layout4" => esc_html__("Layout 4 - Centered Logo",'rt_theme'),
																		),
														"type"    => "select",
														"default" => "layout1",
														"rt_skin" => true
													),

													array(
														"id"          => RT_THEMESLUG."_default_header_settings",
														"label"       => esc_html__("Default Header Settings",'rt_theme'),
														"description" => esc_html__('In order to apply some part of the header related default settings of the selected header layout, you can use the button below. This tool is only useful when you switch to another header. To apply an entire skin as seen on the demo site, use the Styling Options > Pre-Made Skins','rt_theme').'<br /><br /><span id="rt-header-defaults" class="button-secondary rt-skin-selector" tabindex="0">'.esc_html__('Apply defaults','rt_theme').'</span>',
														"type"        => "rt_seperator"
													),

											),
							),

							array(
								'id'       => 'content_rows',
								'title'    => esc_html__("Content Rows",'rt_theme'),
								'controls' => array(

													array(
														"id"          => RT_THEMESLUG."_default_content_row_width",
														"label"       => esc_html__("Default Content Holder Width",'rt_theme'),
														"description" => esc_html__("Select a globally width for the content rows.",'rt_theme'),
														"transport"   => "refresh",
														"choices"     => array(
																			"default" => esc_html__("Content Width",'rt_theme'),
																			"fullwidth" => esc_html__("Full Width",'rt_theme'),
																		),
														"type"    => "select",
														"default" => "default",
														"rt_skin" => true
													),


													array(
														"id"          => RT_THEMESLUG."_default_content_alignment",
														"label"       => esc_html__("Content Align",'rt_theme'),
														"description" => esc_html__("Select a globally content alignment for the content rows. Works with only full width rows.",'rt_theme'),
														"transport"   => "refresh",
														"choices"     => array(
																			"default" => esc_html__("Default",'rt_theme'),
																			"center" => esc_html__("Centered",'rt_theme'),
																		),
														"type"    => "select",
														"default" => "default",
														"rt_skin" => true
													),


													array(
														"id"          => RT_THEMESLUG."_overlapped_firt_row",
														"label"       => esc_html__("Overlapped First Row",'rt_theme'),
														"description" => esc_html__("Makes the first row overlapped to the sub-header area. Works with only 'Content Width' rows.",'rt_theme'),
														"transport"   => "refresh",
														"choices"     => array(
																			"true" => esc_html__("Enabled",'rt_theme'),
																			"false" => esc_html__("Disabled",'rt_theme'),
																		),
														"type"    => "select",
														"default" => "true",
														"rt_skin" => true
													),

											),
							),

							array(
								'id'       => 'body',
								'title'    => esc_html__("Body",'rt_theme'),
								"description" => '<a class="highlight-section icon-flash" data-section-selector="body" href="#" title="'.esc_html__('Blink the body in the current page','rt_theme').'"></a>'. esc_html__('Following settings will be applied to the page body. Remember if your have solid background color or image set for left and right sides, the body will be covered by them.','rt_theme'),
								'controls' => array(

													array(
														"id"          => RT_THEMESLUG."_body_seperator1",
														"label"       => "",
														"description" => esc_html__('Video Background','rt_theme'),
														"type"        => "rt_seperator"
													),

													array(
														"id"          => RT_THEMESLUG."_background_video_mp4",
														"label"       => esc_html__("MP4 file",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => "",
														"description" => esc_html__("MP4 File URL",'rt_theme'),
														"type"        => "rt_media",
														"rt_skin"     => true
												 	),

													array(
														"id"          => RT_THEMESLUG."_background_video_webm",
														"label"       => esc_html__("WEBM file",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => "",
														"description" => esc_html__("WEBM File URL",'rt_theme'),
														"type"        => "rt_media",
														"rt_skin"     => true
													),

 													array(
														"id"          => RT_THEMESLUG."_body_seperator2",
														"label"       => "",
														"description" => esc_html__('Classic Background','rt_theme'),
														"type"        => "rt_seperator"
													),


													array(
														"id"          => RT_THEMESLUG."_body_background_color",
														"label"       => esc_html__("Background Color",'rt_theme'),
														"description" => "",
														"transport"   => "postMessage",
														"default"     => "#cccccc",
														"type"        => "color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_body_background_image_url",
														"label"       => esc_html__("Background Image",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"type"        => "rt_media",
														"default"     => "",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_body_background_position",
														"label"       => esc_html__("Position",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																			"right top"     => esc_html__("Right Top",'rt_theme'),
																			"right center"  => esc_html__("Right Center",'rt_theme'),
																			"right bottom"  => esc_html__("Right Bottom",'rt_theme'),
																			"left top"      => esc_html__("Left Top",'rt_theme'),
																			"left center"   => esc_html__("Left Center",'rt_theme'),
																			"left bottom"   => esc_html__("Left Bottom",'rt_theme'),
																			"center top"    => esc_html__("Center Top",'rt_theme'),
																			"center center" => esc_html__("Center Center",'rt_theme'),
																			"center bottom" => esc_html__("Center Bottom",'rt_theme'),
																		),
														"type" => "select",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_body_background_attachment",
														"label"       => esc_html__("Attachment",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array("scroll" =>esc_html__("Scroll",'rt_theme'), "fixed"  =>esc_html__("Fixed",'rt_theme')),
														"type"        => "radio",
														"default"     => "scroll",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_body_background_repeat",
														"label"       => esc_html__("Repeat",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																		"repeat"       => esc_html__("Tile",'rt_theme'),
																		"repeat-x"     => esc_html__("Tile Horizontally",'rt_theme'),
																		"repeat-y"     => esc_html__("Tile Vertically",'rt_theme'),
																		"no-repeat"    => esc_html__("No Repeat",'rt_theme'),
																		),
														"type"    => "radio",
														"default" => "repeat",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_body_background_size",
														"label"       => esc_html__("Background Size",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																		"auto auto" => esc_html__("Auto",'rt_theme'),
																		"cover" => esc_html__("Cover",'rt_theme'),
																		"contain" => esc_html__("Contain",'rt_theme'),
																		"100% auto" => esc_html__("100%",'rt_theme'),
																		"50% auto" => esc_html__("50%",'rt_theme'),
																		"25% auto" => esc_html__("25%",'rt_theme'),
																		),
														"default" => "auto auto",
														"type"    => "select",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_left_row_seperator",
														"label"       => "",
														"description" => esc_html__('Mobile Devices','rt_theme'),
														"type"        => "rt_seperator"
													),

													array(
														"id"          => RT_THEMESLUG."_body_background_attachment_mobile",
														"label"       => esc_html__("Attachment",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array("scroll" =>esc_html__("Scroll",'rt_theme'), "fixed"  =>esc_html__("Fixed",'rt_theme')),
														"type"        => "radio",
														"default"     => "scroll",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_body_seperator",
														"label"       => "",
														"description" => esc_html__('Body Margins','rt_theme'),
														"type"        => "rt_seperator"
													),

													array(
														"id"          => RT_THEMESLUG."_body_margin_top",
														"label"       => esc_html__("Body Top Margin (px)",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => "",
														"input_attrs" => array("min"=>0,"max"=>500),
														"rt_skin"     => true
												 	),

													array(
														"id"          => RT_THEMESLUG."_body_margin_bottom",
														"label"       => esc_html__("Body Bottom Margin (px)",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => "",
														"input_attrs" => array("min"=>0,"max"=>500),
														"rt_skin"     => true
													)

											),
							),

							array(
								'id'       => 'left',
								'title'    => esc_html__("Left Side",'rt_theme'),
								"description" => '<a class="highlight-section icon-flash" data-section-selector="#left_side" href="#" title="'.esc_html__('Blink the left side in the current page','rt_theme').'"></a>'. esc_html__('Use following settings to customize the left side of your website.','rt_theme'),
								'controls' => array(

													array(
														"id"          => RT_THEMESLUG."_left_side_shadow",
														"label"       => esc_html__("Shadow",'rt_theme'),
														"description" => "Add a shadow to the left side",
														"transport"   => "refresh",
														"default"     => "",
														"type"        => "checkbox",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_left_side_width",
														"label"       => esc_html__("Left Side Width (% Percent)",'rt_theme'),
														"description" => esc_html__('Customize the widht of the left area. The default value is 30%. Please note: There is a minumum width for the sidebar which is 290px.','rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => 30,
														"input_attrs" => array("min"=>10,"max"=>100),
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_left_side_content_align",
														"label"       => esc_html__("Left content alignment",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																			"default" => esc_html__("Default",'rt_theme'),
																			"center"  => esc_html__("Center",'rt_theme'),
																		),
														"type"    => "select",
														"default" => "default",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_left_row_seperator_1",
														"label"       => "",
														"description" => esc_html__('Paddings','rt_theme'),
														"type"        => "rt_seperator"
													),

													array(
														"id"          => RT_THEMESLUG."_left_top_padding",
														"label"       => esc_html__("Top Padding (px)",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => 50,
														"input_attrs" => array("min"=>0,"max"=>500),
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_left_row_seperator_2",
														"label"       => "",
														"description" => esc_html__('Background','rt_theme'),
														"type"        => "rt_seperator"
													),


													array(
														"id"          => RT_THEMESLUG."_left_background_color",
														"label"       => esc_html__("Background Color",'rt_theme'),
														"description" => "",
														"transport"   => "postMessage",
														"default"     => "#222222",
														"type"        => "rt_color",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_left_background_image_url",
														"label"       => esc_html__("Background Image",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"type"        => "rt_media",
														"default"	=> "",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_left_background_parallax_effect",
														"label"       => esc_html__("Parallax Effect",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "on",
														"type"        => "checkbox",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_left_background_position",
														"label"       => esc_html__("Position",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																			"right top"     => esc_html__("Right Top",'rt_theme'),
																			"right center"  => esc_html__("Right Center",'rt_theme'),
																			"right bottom"  => esc_html__("Right Bottom",'rt_theme'),
																			"left top"      => esc_html__("Left Top",'rt_theme'),
																			"left center"   => esc_html__("Left Center",'rt_theme'),
																			"left bottom"   => esc_html__("Left Bottom",'rt_theme'),
																			"center top"    => esc_html__("Center Top",'rt_theme'),
																			"center center" => esc_html__("Center Center",'rt_theme'),
																			"center bottom" => esc_html__("Center Bottom",'rt_theme'),
																		),
														"type" => "select",
														"default" => "left top",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_left_background_repeat",
														"label"       => esc_html__("Repeat",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																			"repeat"    => esc_html__("Tile",'rt_theme'),
																			"repeat-x"  => esc_html__("Tile Horizontally",'rt_theme'),
																			"repeat-y"  => esc_html__("Tile Vertically",'rt_theme'),
																			"no-repeat" => esc_html__("No Repeat",'rt_theme'),
																		),
														"type"    => "radio",
														"default" => "no-repeat",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_left_background_size",
														"label"       => esc_html__("Background Size",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																			"auto auto" => esc_html__("Auto",'rt_theme'),
																			"cover"     => esc_html__("Cover",'rt_theme'),
																			"contain"   => esc_html__("Contain",'rt_theme'),
																			"100% auto" => esc_html__("100%",'rt_theme'),
																			"50% auto"  => esc_html__("50%",'rt_theme'),
																			"25% auto"  => esc_html__("25%",'rt_theme'),
																		),
														"default" => "cover",
														"type"    => "select",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_left_row_seperator_3",
														"label"       => "",
														"description" => esc_html__('Mobile Devices','rt_theme'),
														"type"        => "rt_seperator"
													),

													array(
														"id"          => RT_THEMESLUG."_body_background_attachment_mobile",
														"label"       => esc_html__("Attachment",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array("scroll" =>esc_html__("Scroll",'rt_theme'), "fixed"  =>esc_html__("Fixed",'rt_theme')),
														"type"        => "radio",
														"default"     => "scroll",
														"rt_skin"     => true
													),

											),
							),

							array(
								'id'       => 'right',
								'title'    => esc_html__("Right Side",'rt_theme'),
								"description" => '<a class="highlight-section icon-flash" data-section-selector="#right_side" href="#" title="'.esc_html__('Blink the right side in the current page','rt_theme').'"></a>'. esc_html__('Use following settings to customize the right side of your website.','rt_theme'),
								'controls' => array(

													array(
														"id"          => RT_THEMESLUG."_right_top_padding",
														"label"       => esc_html__("Top Padding (px)",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => 50,
														"input_attrs" => array("min"=>0,"max"=>500),
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_right_background_color",
														"label"       => esc_html__("Background Color",'rt_theme'),
														"description" => "",
														"transport"   => "postMessage",
														"default"     => "",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_right_background_image_url",
														"label"       => esc_html__("Background Image",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"type"        => "rt_media",
														"default"	=> "",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_right_background_position",
														"label"       => esc_html__("Position",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																			"right top"     => esc_html__("Right Top",'rt_theme'),
																			"right center"  => esc_html__("Right Center",'rt_theme'),
																			"right bottom"  => esc_html__("Right Bottom",'rt_theme'),
																			"left top"      => esc_html__("Left Top",'rt_theme'),
																			"left center"   => esc_html__("Left Center",'rt_theme'),
																			"left bottom"   => esc_html__("Left Bottom",'rt_theme'),
																			"center top"    => esc_html__("Center Top",'rt_theme'),
																			"center center" => esc_html__("Center Center",'rt_theme'),
																			"center bottom" => esc_html__("Center Bottom",'rt_theme'),
																		),
														"type"    => "select",
														"rt_skin" => true
													),


													array(
														"id"          => RT_THEMESLUG."_right_background_attachment",
														"label"       => esc_html__("Attachment",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array("scroll" =>esc_html__("Scroll",'rt_theme'), "fixed"  =>esc_html__("Fixed",'rt_theme')),
														"type"        => "radio",
														"default"     => "scroll",
														"rt_skin"   => true
													),


													array(
														"id"          => RT_THEMESLUG."_right_background_repeat",
														"label"       => esc_html__("Repeat",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																		"repeat"       => esc_html__("Tile",'rt_theme'),
																		"repeat-x"     => esc_html__("Tile Horizontally",'rt_theme'),
																		"repeat-y"     => esc_html__("Tile Vertically",'rt_theme'),
																		"no-repeat"    => esc_html__("No Repeat",'rt_theme'),
																		),
														"type"    => "radio",
														"default" => "repeat",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_right_background_size",
														"label"       => esc_html__("Background Size",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																		"auto auto" => esc_html__("Auto",'rt_theme'),
																		"cover" => esc_html__("Cover",'rt_theme'),
																		"contain" => esc_html__("Contain",'rt_theme'),
																		"100% auto" => esc_html__("100%",'rt_theme'),
																		"50% auto" => esc_html__("50%",'rt_theme'),
																		"25% auto" => esc_html__("25%",'rt_theme'),
																		),
														"default" => "auto auto",
														"type"    => "select",
														"rt_skin"   => true
													),


											),
							),

							array(
								'id'       => 'main_header',
								'title'    => esc_html__("Header",'rt_theme'),
								"description" => '<a class="highlight-section icon-flash" data-section-selector=".top-header" href="#" title="'.esc_html__('Blink main header in the current page. ','rt_theme').'"></a>'. esc_html__('Use following settings to customize the header section of your website.','rt_theme'),
								'controls' => array(


													array(
														"id"          => RT_THEMESLUG."_sticky_header",
														"label"       => esc_html__("Sticky Header",'rt_theme'),
														"description" =>  esc_html__("If checked the main header will stick to the top of the browser window while scrolling down through the page content.",'rt_theme'),
														"transport"   => "refresh",
														"default"     => "",
														"type"        => "checkbox",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_overlapped_header",
														"label"       => esc_html__("Overlapped Header",'rt_theme'),
														"description" => esc_html__("If checked the main header will be overlapped onto the next content.",'rt_theme'),
														"transport"   => "refresh",
														"default"     => false,
														"type"        => "checkbox",
														"rt_skin"     => true
													),


													array(
														"id"          => RT_THEMESLUG."_main_header_height",
														"label"       => esc_html__("Header Height (px)",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => 100,
														"input_attrs" => array("min"=>60,"max"=>500),
														"rt_skin"     => true
													),


													array(
														"id"          => RT_THEMESLUG."_main_header_seperator_1",
														"label"       => esc_html__('Paddings','rt_theme'),
														"type"        => "rt_subsection_heading"
													),

													array(
														"id"          => RT_THEMESLUG."_main_header_padding_top",
														"label"       => esc_html__("Top Padding (px)",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => 40,
														"input_attrs" => array("min"=>0,"max"=>500),
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_main_header_padding_bottom",
														"label"       => esc_html__("Bottom Padding (px)",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => 40,
														"input_attrs" => array("min"=>0,"max"=>500),
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_main_header_border_seperator",
														"label"       => esc_html__('Border','rt_theme'),
														"type"        => "rt_subsection_heading"
													),

													array(
														"id"          => RT_THEMESLUG."_main_header_border_size",
														"label"       => esc_html__("Bottom Border (px)",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => 0,
														"input_attrs" => array("min"=>0,"max"=>500),
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_main_header_border_color",
														"label"       => esc_html__("Bottom Border Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_main_header_element_border_color",
														"label"       => esc_html__("Element Divider Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_main_header_seperator_2",
														"label"       => esc_html__('Widths','rt_theme'),
														"type"        => "rt_subsection_heading"
													),


													array(
														"id"          => RT_THEMESLUG."_main_header_row_background_width",
														"label"       => esc_html__("Header Bar Width",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																			"fullwidth" => esc_html__("Full Width",'rt_theme'),
																			"default"   => esc_html__("Default",'rt_theme'),
																		),
														"type"    => "select",
														"default" => "fullwidth",
														"rt_skin" => true
													),

													array(
														"id"          => RT_THEMESLUG."_main_header_row_content_width",
														"label"       => esc_html__("Header Bar Content Width",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																			"fullwidth" => esc_html__("Full Width",'rt_theme'),
																			"default"   => esc_html__("Default",'rt_theme'),
																		),
														"type"    => "select",
														"default" => "default",
														"rt_skin" => true
													),


													array(
														"id"          => RT_THEMESLUG."_main_header_seperator_3",
														"label"       => esc_html__('Header Background','rt_theme'),
														"type"        => "rt_subsection_heading"
													),

													array(
														"id"          => RT_THEMESLUG."_main_header_row_bg_color",
														"label"       => esc_html__("Background Color",'rt_theme'),
														"description" => "",
														"transport"   => "postMessage",
														"default"     => "#2a2a2a",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_main_header_row_bg_image",
														"label"       => esc_html__("Background Image",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"type"        => "rt_media",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_main_header_row_bg_position",
														"label"       => esc_html__("Position",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																			"right top"     => esc_html__("Right Top",'rt_theme'),
																			"right center"  => esc_html__("Right Center",'rt_theme'),
																			"right bottom"  => esc_html__("Right Bottom",'rt_theme'),
																			"left top"      => esc_html__("Left Top",'rt_theme'),
																			"left center"   => esc_html__("Left Center",'rt_theme'),
																			"left bottom"   => esc_html__("Left Bottom",'rt_theme'),
																			"center top"    => esc_html__("Center Top",'rt_theme'),
																			"center center" => esc_html__("Center Center",'rt_theme'),
																			"center bottom" => esc_html__("Center Bottom",'rt_theme'),
																		),
														"type"    => "select",
														"rt_skin" => true
													),


													array(
														"id"          => RT_THEMESLUG."_main_header_row_bg_attachment",
														"label"       => esc_html__("Attachment",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array("scroll" =>esc_html__("Scroll",'rt_theme'), "fixed"  =>esc_html__("Fixed",'rt_theme')),
														"type"        => "radio",
														"default"     => "scroll",
														"rt_skin"   => true
													),


													array(
														"id"          => RT_THEMESLUG."_main_header_row_bg_image_repeat",
														"label"       => esc_html__("Repeat",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																		"repeat"       => esc_html__("Tile",'rt_theme'),
																		"repeat-x"     => esc_html__("Tile Horizontally",'rt_theme'),
																		"repeat-y"     => esc_html__("Tile Vertically",'rt_theme'),
																		"no-repeat"    => esc_html__("No Repeat",'rt_theme'),
																		),
														"type"    => "radio",
														"default" => "repeat",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_main_header_row_bg_size",
														"label"       => esc_html__("Background Size",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																		"auto auto" => esc_html__("Auto",'rt_theme'),
																		"cover" => esc_html__("Cover",'rt_theme'),
																		"contain" => esc_html__("Contain",'rt_theme'),
																		"100% auto" => esc_html__("100%",'rt_theme'),
																		"50% auto" => esc_html__("50%",'rt_theme'),
																		"25% auto" => esc_html__("25%",'rt_theme'),
																		),
														"default" => "auto auto",
														"type"    => "select",
														"rt_skin"   => true
													),


													array(
														"id"          => RT_THEMESLUG."_main_header_seperator_4",
														"label"       => esc_html__('Sticky Header Background','rt_theme'),
														"type"        => "rt_subsection_heading"
													),

													array(
														"id"          => RT_THEMESLUG."_sticky_header_bg_color",
														"label"       => esc_html__("Background Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_main_header_seperator_5",
														"label"       => esc_html__('Header Widgets','rt_theme'),
														"type"        => "rt_subsection_heading"
													),

													array(
														"id"          => RT_THEMESLUG."_header_widgets_font_color",
														"label"       => esc_html__("Font Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#ffffff",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

											),
							),

							array(
								'id'       => 'header',
								'title'    => esc_html__("Sub Header",'rt_theme'),
								"description" => '<a class="highlight-section icon-flash" data-section-selector=".sub_page_header" href="#" title="'.esc_html__('Blink sub header (if used ) in the current page. ','rt_theme').'"></a>'. esc_html__('Use following settings to customize the sub header section of your website.','rt_theme'),
								'controls' => array(


													array(
														"id"          => RT_THEMESLUG."_sub_header_style",
														"label"       => esc_html__("Style",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(																			
																				"default-style" => esc_html__("Default",'rt_theme'),
																				"center-style"  => esc_html__("Centered",'rt_theme'),
																			),
														"type"    => "select",
														"default" => "",
														"rt_skin" => true
													),


													array(
														"id"          => RT_THEMESLUG."_hide_page_title",
														"label"       => esc_html__("Hide Page Titles",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "",
														"type"        => "checkbox",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_hide_breadcrumb_menu",
														"label"       => esc_html__("Hide Breadcrumb Menus",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "",
														"type"        => "checkbox",
														"rt_skin"     => true
													),


													array(
														"id"          => RT_THEMESLUG."_header_row_seperator",
														"label"       => "",
														"description" => esc_html__('Sub Header Bar Styling','rt_theme'),
														"type"        => "rt_seperator"
													),

													array(
														"id"          => RT_THEMESLUG."_header_padding_top",
														"label"       => esc_html__("Top Padding (px)",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => 50,
														"input_attrs" => array("min"=>0,"max"=>500),
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_header_padding_bottom",
														"label"       => esc_html__("Bottom Padding (px)",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => 70,
														"input_attrs" => array("min"=>0,"max"=>500),
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_header_shadows",
														"label"       => esc_html__("Shadow",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "",
														"type"        => "checkbox",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_header_row_background_width",
														"label"       => esc_html__("Width",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																			"fullwidth" => esc_html__("Full Width",'rt_theme'),
																			"default"   => esc_html__("Default",'rt_theme'),
																		),
														"type"    => "select",
														"default" => "fullwidth",
														"rt_skin" => true
													),

													array(
														"id"          => RT_THEMESLUG."_header_row_font_color",
														"label"       => esc_html__("Page Title Font Color",'rt_theme'),
														"description" => "",
														"transport"   => "postMessage",
														"default"     => "#555555",
														"type"        => "color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_header_row_background_width",
														"label"       => esc_html__("Width",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																			"fullwidth" => esc_html__("Full Width",'rt_theme'),
																			"default"   => esc_html__("Default",'rt_theme'),
																		),
														"type"    => "select",
														"default" => "fullwidth",
														"rt_skin" => true
													),

													array(
														"id"          => RT_THEMESLUG."_header_row_bg_color",
														"label"       => esc_html__("Background Color",'rt_theme'),
														"description" => "",
														"transport"   => "postMessage",
														"default"     => "rgba(255, 255, 255, 0.3)",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_header_row_bg_image",
														"label"       => esc_html__("Background Image",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"type"        => "rt_media",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_header_row_bg_effect",
														"label"       => esc_html__("Parallax Effect",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																			"parallax" => esc_html__("Enabled",'rt_theme'),
																			""         => esc_html__("Disabled",'rt_theme'),
																		),
														"type"    => "select",
														"default" => "fulwidth",
														"rt_skin" => true
													),

													array(
														"id"          => RT_THEMESLUG."_header_row_bg_position",
														"label"       => esc_html__("Position",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																			"right top"     => esc_html__("Right Top",'rt_theme'),
																			"right center"  => esc_html__("Right Center",'rt_theme'),
																			"right bottom"  => esc_html__("Right Bottom",'rt_theme'),
																			"left top"      => esc_html__("Left Top",'rt_theme'),
																			"left center"   => esc_html__("Left Center",'rt_theme'),
																			"left bottom"   => esc_html__("Left Bottom",'rt_theme'),
																			"center top"    => esc_html__("Center Top",'rt_theme'),
																			"center center" => esc_html__("Center Center",'rt_theme'),
																			"center bottom" => esc_html__("Center Bottom",'rt_theme'),
																		),
														"type"    => "select",
														"rt_skin" => true
													),


													array(
														"id"          => RT_THEMESLUG."_header_row_bg_attachment",
														"label"       => esc_html__("Attachment",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array("scroll" =>esc_html__("Scroll",'rt_theme'), "fixed"  =>esc_html__("Fixed",'rt_theme')),
														"type"        => "radio",
														"default"     => "scroll",
														"rt_skin"   => true
													),


													array(
														"id"          => RT_THEMESLUG."_header_row_bg_image_repeat",
														"label"       => esc_html__("Repeat",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																		"repeat"       => esc_html__("Tile",'rt_theme'),
																		"repeat-x"     => esc_html__("Tile Horizontally",'rt_theme'),
																		"repeat-y"     => esc_html__("Tile Vertically",'rt_theme'),
																		"no-repeat"    => esc_html__("No Repeat",'rt_theme'),
																		),
														"type"    => "radio",
														"default" => "repeat",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_header_row_bg_size",
														"label"       => esc_html__("Background Size",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																		"auto auto" => esc_html__("Auto",'rt_theme'),
																		"cover" => esc_html__("Cover",'rt_theme'),
																		"contain" => esc_html__("Contain",'rt_theme'),
																		"100% auto" => esc_html__("100%",'rt_theme'),
																		"50% auto" => esc_html__("50%",'rt_theme'),
																		"25% auto" => esc_html__("25%",'rt_theme'),
																		),
														"default" => "auto auto",
														"type"    => "select",
														"rt_skin"   => true
													),


													array(
														"id"          => RT_THEMESLUG."_breadcrumb_seperator",
														"label"       => "",
														"description" => esc_html__('Breadcrumb Menu Styling','rt_theme'),
														"type"        => "rt_seperator"
													),

													array(
														"id"          => RT_THEMESLUG."_breadcrumb_font_color",
														"label"       => esc_html__("Breadcrumb Font Color",'rt_theme'),
														"description" => "",
														"transport"   => "postMessage",
														"default"     => "#999",
														"type"        => "color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_breadcrumb_link_color",
														"label"       => esc_html__("Breadcrumb Link Color",'rt_theme'),
														"description" => "",
														"transport"   => "postMessage",
														"default"     => "#777",
														"type"        => "color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_breadcrumb_bg_color",
														"label"       => esc_html__("Breadcrumb Background Color",'rt_theme'),
														"description" => "",
														"transport"   => "postMessage",
														"default"     => "rgba(255, 255, 255, 0.5)",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

											),
							),

							array(
								'id'          => 'logobg',
								'title'       => esc_html__("Logo Box",'rt_theme'),
								"description" => '<a class="highlight-section icon-flash" data-section-selector=".site-logo" href="#" title="'.esc_html__('Blink the body in the current page','rt_theme').'"></a>'. esc_html__('The box that includes the logo image. Change the paddings to reduce or increase the white space around the logo image.','rt_theme'),
								'controls'    => array(

													array(
														"id"          => RT_THEMESLUG."_logo_box_width",
														"label"       => esc_html__("Logo Maximum Width",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => 300,
														"input_attrs" => array("min"=>0,"max"=>1000),
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_logo_box_height",
														"label"       => esc_html__("Logo Maximum Height",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => 200,
														"input_attrs" => array("min"=>0,"max"=>1000),
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_logo_padding_t",
														"label"       => esc_html__("Top Padding (px)",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => 40,
														"input_attrs" => array("min"=>0,"max"=>100),
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_logo_padding_b",
														"label"       => esc_html__("Bottom Padding (px)",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => 40,
														"input_attrs" => array("min"=>0,"max"=>100),
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_logo_padding_l",
														"label"       => esc_html__("Left Padding (px)",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => 20,
														"input_attrs" => array("min"=>0,"max"=>100),
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_logo_padding_r",
														"label"       => esc_html__("Right Padding (px)",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => 20,
														"input_attrs" => array("min"=>0,"max"=>100),
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_logo_seperator_1",
														"label"       => "",
														"description" => esc_html__('Desktop View','rt_theme'),
														"type"        => "rt_seperator"
													),

													array(
														"id"          => RT_THEMESLUG."_logo_background_color",
														"label"       => esc_html__("Background Color",'rt_theme'),
														"description" => "",
														"transport"   => "postMessage",
														"default"     => "rgba( 0, 0, 0, 0.65 )",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_logo_bottom_border_color",
														"label"       => esc_html__("Bottom Border Color",'rt_theme'),
														"description" => "",
														"transport"   => "postMessage",
														"default"     => "#2F2F2F",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_logo_font_color",
														"label"       => esc_html__("Font Color",'rt_theme'),
														"description" => esc_html__('Color for text logos','rt_theme'),
														"transport"   => "refresh",
														"default"     => "#fff",
														"type"        => "rt_color",
														"rt_skin"     => true
													),


													array(
														"id"          => RT_THEMESLUG."_logo_seperator_2",
														"label"       => "",
														"description" => esc_html__('Mobile View','rt_theme'),
														"type"        => "rt_seperator"
													),

													array(
														"id"          => RT_THEMESLUG."_logo_background_color_mobile",
														"label"       => esc_html__("Background Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "rgba( 0, 0, 0, 0.65 )",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_logo_bottom_border_color_mobile",
														"label"       => esc_html__("Bottom Border Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#2F2F2F",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_logo_font_color_mobile",
														"label"       => esc_html__("Font Color",'rt_theme'),
														"description" => esc_html__('Color for text logos and the mobile menu icon','rt_theme'),
														"transport"   => "refresh",
														"default"     => "#fff",
														"type"        => "rt_color",
														"rt_skin"     => true
													),
											),
							),

							array(
								'id'       => 'nav',
								'title'    => esc_html__("Main Navigation",'rt_theme'),
								"description" => '<a class="highlight-section icon-flash" data-section-selector="#navigation,.header-right nav" href="#" title="'.esc_html__('Blink the main mavigation in the current page. ','rt_theme').'"></a>'. esc_html__('Use following settings to customize your main navigation','rt_theme'),
								'controls' => array(


													array(
														"id"          => RT_THEMESLUG."_nav_seperator_1",
														"label"       => "",
														"description" => esc_html__('Top Level Menu Items','rt_theme'),
														"type"        => "rt_seperator"
													),

													array(
														"id"          => RT_THEMESLUG."_nav_item_vertical_padding",
														"label"       => esc_html__("Item Vertical Padding (px)",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => 10,
														"input_attrs" => array("min"=>0,"max"=>100),
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_nav_item_vertical_padding_sticky",
														"label"       => esc_html__("Item Vertical Padding (px) - Sticky Header",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => 10,
														"input_attrs" => array("min"=>0,"max"=>100),
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_nav_item_horizontal_padding",
														"label"       => esc_html__("Item Horizontal Padding (px)",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => 20,
														"input_attrs" => array("min"=>0,"max"=>100),
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_nav_item_background_color",
														"label"       => esc_html__("Menu Item Background Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "rgba(0,0,0,0.9)",
														"type"        => "rt_color",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_nav_item_font_color",
														"label"       => esc_html__("Menu Item Font Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#ffffff",
														"type"        => "rt_color",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_nav_item_border_color",
														"label"       => esc_html__("Menu Item Border Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#2F2F2F",
														"type"        => "rt_color",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_nav_item_background_color_active",
														"label"       => esc_html__("Active Menu Item Background Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#181818",
														"type"        => "rt_color",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_nav_item_font_color_active",
														"label"       => esc_html__("Active Menu Item Font Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#ffffff",
														"type"        => "rt_color",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_nav_item_indicator_color_active",
														"label"       => esc_html__("Active Menu Item Indicator Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#2F2F2F",
														"type"        => "rt_color",
														"rt_skin"   => true
													),


													array(
														"id"          => RT_THEMESLUG."_nav_seperator_2",
														"label"       => "",
														"description" => esc_html__('Sub Level Menu Items','rt_theme'),
														"type"        => "rt_seperator"
													),

													array(
														"id"          => RT_THEMESLUG."_sub_nav_item_vertical_padding",
														"label"       => esc_html__("Sub Item Vertical Padding (px)",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => 10,
														"input_attrs" => array("min"=>0,"max"=>100),
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_sub_nav_item_horizontal_padding",
														"label"       => esc_html__("Sub Item Horizontal Padding (px)",'rt_theme'),
														"type"        => "number",
														"transport"   => "refresh",
														"default"     => 20,
														"input_attrs" => array("min"=>0,"max"=>100),
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_sub_nav_item_background_color",
														"label"       => esc_html__("Sub Menu Item Background Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#2F2F2F",
														"type"        => "rt_color",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_sub_nav_item_font_color",
														"label"       => esc_html__("Sub Menu Item Font",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#aeaeae",
														"type"        => "rt_color",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_sub_nav_item_border_color",
														"label"       => esc_html__("Sub Menu Item Border Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#3a3a3a",
														"type"        => "rt_color",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_sub_nav_item_background_color_active",
														"label"       => esc_html__("Active Sub Menu Item Background Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#2a2a2a",
														"type"        => "rt_color",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_sub_nav_item_font_color_active",
														"label"       => esc_html__("Active Sub Menu Item Font Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#cacaca",
														"type"        => "rt_color",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_sub_nav_item_indicator_color_active",
														"label"       => esc_html__("Active Sub Menu Item Indicator Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#3d3d3d",
														"type"        => "rt_color",
														"rt_skin"   => true
													),

 													array(
														"id"          => RT_THEMESLUG."_nav_seperator_3",
														"label"		  => esc_html__('Mobile Menu','rt_theme'),
														"type"        => "rt_seperator"
													),

													array(
														"id"          => RT_THEMESLUG."_mobile_nav_font_color",
														"label"       => esc_html__("Mobile Menu Font Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#dddddd",
														"type"        => "rt_color",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_mobile_nav_font_color_active",
														"label"       => esc_html__("Mobile Menu Active Font Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#777777",
														"type"        => "rt_color",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_mobile_nav_background_color",
														"label"       => esc_html__("Mobile Menu Background Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#2a2a2a",
														"type"        => "rt_color",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_mobile_nav_border_color",
														"label"       => esc_html__("Mobile Menu Border Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "",
														"type"        => "rt_color",
														"rt_skin"   => true
													),

													array(
														"id"          => RT_THEMESLUG."_mobile_nav_active_border_color",
														"label"       => esc_html__("Mobile Menu Active Border Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "",
														"type"        => "rt_color",
														"rt_skin"   => true
													),
											),
							),

							array(
								'id'       => 'topbar',
								'title'    => esc_html__("Top Bar",'rt_theme'),
								"description" => '<a class="highlight-section icon-flash" data-section-selector=".top-bar href="#" title="'.esc_html__('Blink the top bar in the current page. ','rt_theme').'"></a>'. esc_html__('Use the following settings to customize your top bar.','rt_theme'),
								'controls' => array(

													array(
														"id"          => RT_THEMESLUG."_top_bar_width",
														"label"       => esc_html__("Top Bar Width",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																			"fullwidth" => esc_html__("Full Width",'rt_theme'),
																			"default"   => esc_html__("Default",'rt_theme'),
																		),
														"type"    => "select",
														"default" => "fullwidth",
														"rt_skin" => true
													),

													array(
														"id"          => RT_THEMESLUG."_top_bar_content_width",
														"label"       => esc_html__("Top Bar Content Width",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"choices"     => array(
																			"fullwidth" => esc_html__("Full Width",'rt_theme'),
																			"default"   => esc_html__("Default",'rt_theme'),
																		),
														"type"    => "select",
														"default" => "default",
														"rt_skin" => true
													),

													array(
														"id"          => RT_THEMESLUG."_top_bar_colors",
														"label"       => esc_html__('Color Set for Top Bar','rt_theme'),
														"type"        => "rt_seperator"
													),


	 												array(
														"id"          => RT_THEMESLUG."_topbar_bg_color",
														"label"       => esc_html__("Background Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#151515",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_topbar_font_color",
														"label"       => esc_html__("Font Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#ffffff",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_topbar_link_color",
														"label"       => esc_html__("Link Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#ffffff",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_topbar_link_hover_color",
														"label"       => esc_html__("Link Hover Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#e6aa21",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_topbar_border_color",
														"label"       => esc_html__("Elements Border Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#333333",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_topbar_bottom_border_color",
														"label"       => esc_html__("Bottom Border Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#333333",
														"type"        => "rt_color",
														"rt_skin"     => true
													),


											),
							),


 							array(
								'id'       => 'top_shortcut_buttons',
								'title'    => esc_html__("Shortcut Buttons",'rt_theme'),
								"description" => '<a class="highlight-section icon-flash" data-section-selector="#tools" href="#" title="'.esc_html__('Blink the shortcut buttons in the current page.','rt_theme').'"></a>'. esc_html__('Use following settings to adjust the shortcode buttons and their drop-down menus','rt_theme'),
								'controls' => array(

 													array(
														"id"          => RT_THEMESLUG."_top_shortcut_buttons_seperator_1",
														"label"		  => esc_html__('Visibility','rt_theme'),
														"type"        => "rt_seperator"
													),

													array(
														"id"          => RT_THEMESLUG."_top_shortcut_buttons_user",
														"label"       => esc_html__("Display User Login",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "on",
														"type"        => "checkbox",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_top_shortcut_buttons_cart",
														"label"       => esc_html__("Display Cart",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "on",
														"type"        => "checkbox",
														"rt_skin"     => true
													),


													array(
														"id"          => RT_THEMESLUG."_top_shortcut_buttons_wpml",
														"label"       => esc_html__("Display WPML Languages",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "on",
														"type"        => "checkbox",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_top_shortcut_buttons_serch",
														"label"       => esc_html__("Display Search",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "on",
														"type"        => "checkbox",
														"rt_skin"     => true
													),


													array(
														"id"          => RT_THEMESLUG."_top_shortcut_buttons_seperator_2",
														"label"       => esc_html__('A color set for only icons','rt_theme'),
														"type"        => "rt_seperator"
													),

													array(
														"id"          => RT_THEMESLUG."_top_shortcut_buttons_background_color",
														"label"       => esc_html__("Icons Background Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#151515",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_top_shortcut_buttons_border_color",
														"label"       => esc_html__("Border Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#2F2F2F",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_top_shortcut_buttons_font_color",
														"label"       => esc_html__("Font Color",'rt_theme'),
														"transport"   => "refresh",
														"default"     => "#fff",
														"type"        => "rt_color",
														"rt_skin"     => true
													),


													array(
														"id"          => RT_THEMESLUG."_top_shortcut_buttons_seperator_3",
														"label"       => esc_html__('Color Set for Drop Down Contents','rt_theme'),
														"type"        => "rt_seperator"
													),


	 												array(
														"id"          => RT_THEMESLUG."_top_shortcut_buttons_content_bg_color",
														"label"       => esc_html__("Contents Background Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#151515",
														"type"        => "rt_color",
														"rt_skin"     => true
													),


													array(
														"id"          => RT_THEMESLUG."_top_shortcut_buttons_content_border_color",
														"label"       => esc_html__("Border Color",'rt_theme'),
														"description" => "",
														"transport"   => "refresh",
														"default"     => "#2F2F2F",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

													array(
														"id"          => RT_THEMESLUG."_top_shortcut_buttons_content_font_color",
														"label"       => esc_html__("Font Color",'rt_theme'),
														"transport"   => "refresh",
														"default"     => "#fff",
														"type"        => "rt_color",
														"rt_skin"     => true
													),

											),
							),

			)
	);



if( ! function_exists("rtframework_create_color_set_options") ){
	/**
	 * Add additional controls to the footer colors
	 * @return array
	 */
	function rtframework_create_color_set_options( $options ){

		$color_list = array();

		//Color Schemas
		$color_list[".side-panel-holder"] = array(
			"id" => "side_panel",
			"label" => esc_html__("Side Panel",'rt_theme'),
			"description" => '<a class="highlight-section icon-flash" data-section-selector=".side-panel-holder" href="#" title="'.esc_html__('Blink sections which uses this color set','rt_theme').'"></a>'. esc_html__('A color set that can be applied to any content rows or column.','rt_theme'),
			"colors" => array(

				"primary_color"         => array("color"=> "#e6aa21", "label" => esc_html__("Primary Color",'rt_theme')),
				"bg_color"              => array("color"=> "#222222", "label" => esc_html__("Background Color",'rt_theme')),
				"font_color"            => array("color"=> "#fff", "label" => esc_html__("Text Color",'rt_theme')),
				"secondary_font_color"  => array("color"=> "#888888", "label" => esc_html__("Secondary Text Color",'rt_theme')),
				"light_text_color"      => array("color"=> "#fff", "label" => esc_html__("Opposite Text Color",'rt_theme')),
				"link_color"            => array("color"=> "#fff", "label" => esc_html__("Link Color",'rt_theme')),
				"heading_color"         => array("color"=> "#fff", "label" => esc_html__("Heading Color",'rt_theme')),
				"border_color"          => array("color"=> "#3D3D3D", "label" => esc_html__("Border Color",'rt_theme')),
				"form_button_bg_color"  => array("color"=> "#2f2f2f", "label" => esc_html__("Form Button Background Color",'rt_theme')),
				"social_media_bg_color" => array("color"=> "#2f2f2f","label" => esc_html__("Social Media Icons Background Color",'rt_theme')),

			));

		$color_list[".default-style"] = array(
			"id" => "default",
			"label" => esc_html__("Color Set 1",'rt_theme'),
			"description" => '<a class="highlight-section icon-flash" data-section-selector=".default-style" href="#" title="'.esc_html__('Blink sections which uses this color set','rt_theme').'"></a>'. esc_html__('A color set that can be applied to any content rows or column.','rt_theme'),
			"colors" => array(

				"primary_color"         => array("color"=> "#e6aa21", "label" => esc_html__("Primary Color",'rt_theme')),
				"bg_color"              => array("color"=> "#fff", "label" => esc_html__("Row Background Color",'rt_theme')),
				"font_color"            => array("color"=> "#666", "label" => esc_html__("Text Color",'rt_theme')),
				"secondary_font_color"  => array("color"=> "#999999", "label" => esc_html__("Secondary Text Color",'rt_theme')),
				"light_text_color"      => array("color"=> "#fff", "label" => esc_html__("Opposite Text Color",'rt_theme')),
				"link_color"            => array("color"=> "#e6aa21", "label" => esc_html__("Link Color",'rt_theme')),
				"heading_color"         => array("color"=> "#222", "label" => esc_html__("Heading Color",'rt_theme')),
				"border_color"          => array("color"=> "#E8E8E8", "label" => esc_html__("Border Color",'rt_theme')),
				"form_button_bg_color"  => array("color"=> "#bbb", "label" => esc_html__("Form Button Background Color",'rt_theme')),
				"social_media_bg_color" => array("color"=> "#bbb", "label" => esc_html__("Social Media Icons Background Color",'rt_theme')),
			));

		$color_list[".alt-style-1"] = array(
			"id" => "alt_style_1",
			"label" => esc_html__("Color Set 2",'rt_theme'),
			"description" => '<a class="highlight-section icon-flash" data-section-selector=".alt-style-1" href="#" title="'.esc_html__('Blink sections which uses this color set','rt_theme').'"></a>'. esc_html__('A color set that can be applied to any content rows or column.','rt_theme'),
			"colors" => array(

				"primary_color"         => array("color"=> "#e6aa21", "label" => esc_html__("Primary Color",'rt_theme')),
				"bg_color"              => array("color"=> "#f4f4f4", "label" => esc_html__("Row Background Color",'rt_theme')),
				"font_color"            => array("color"=> "#666", "label" => esc_html__("Text Color",'rt_theme')),
				"secondary_font_color"  => array("color"=> "#999999", "label" => esc_html__("Secondary Text Color",'rt_theme')),
				"light_text_color"      => array("color"=> "#fff", "label" => esc_html__("Opposite Text Color",'rt_theme')),
				"link_color"            => array("color"=> "#e6aa21", "label" => esc_html__("Link Color",'rt_theme')),
				"heading_color"         => array("color"=> "#222", "label" => esc_html__("Heading Color",'rt_theme')),
				"border_color"          => array("color"=> "#e1e1e1", "label" => esc_html__("Border Color",'rt_theme')),
				"form_button_bg_color"  => array("color"=> "#bbb", "label" => esc_html__("Form Button Background Color",'rt_theme')),
				"social_media_bg_color" => array("color"=> "#bbb", "label" => esc_html__("Social Media Icons Background Color",'rt_theme')),
			));

		$color_list[".alt-style-2"] = array(
			"id" => "alt_style_2",
			"label" => esc_html__("Color Set 3",'rt_theme'),
			"description" => '<a class="highlight-section icon-flash" data-section-selector=".alt-style-2" href="#" title="'.esc_html__('Blink sections which uses this color set','rt_theme').'"></a>'. esc_html__('A color set that can be applied to any content rows or column.','rt_theme'),
			"colors" => array(

				"primary_color"         => array("color"=> "#C59600", "label" => esc_html__("Primary Color",'rt_theme')),
				"bg_color"              => array("color"=> "#e1af00", "label" => esc_html__("Row Background Color",'rt_theme')),
				"font_color"            => array("color"=> "#fff", "label" => esc_html__("Text Color",'rt_theme')),
				"secondary_font_color"  => array("color"=> "#FFEAA9", "label" => esc_html__("Secondary Text Color",'rt_theme')),
				"light_text_color"      => array("color"=> "#fff", "label" => esc_html__("Opposite Text Color",'rt_theme')),
				"link_color"            => array("color"=> "#fff", "label" => esc_html__("Link Color",'rt_theme')),
				"heading_color"         => array("color"=> "#fff", "label" => esc_html__("Heading Color",'rt_theme')),
				"border_color"          => array("color"=> "#FED861", "label" => esc_html__("Border Color",'rt_theme')),
				"form_button_bg_color"  => array("color"=> "#FFEFBA", "label" => esc_html__("Form Button Background Color",'rt_theme')),
				"social_media_bg_color" => array("color"=> "#bbb","label" => esc_html__("Social Media Icons Background Color",'rt_theme')),
			));

		$color_list[".light-style"] = array(
			"id" => "light_style",
			"label" => esc_html__("Color Set 4",'rt_theme'),
			"description" => '<a class="highlight-section icon-flash" data-section-selector=".light-style" href="#" title="'.esc_html__('Blink sections which uses this color set','rt_theme').'"></a>'. esc_html__('A color set that can be applied to any content rows or column.','rt_theme'),
			"colors" => array(

				"primary_color"         => array("color"=> "rgba(255,255,255,0.2)", "label" => esc_html__("Primary Color",'rt_theme')),
				"bg_color"              => array("color"=> "#1e1e1e", "label" => esc_html__("Row Background Color",'rt_theme')),
				"font_color"            => array("color"=> "#fff", "label" => esc_html__("Text Color",'rt_theme')),
				"secondary_font_color"  => array("color"=> "#fff", "label" => esc_html__("Secondary Text Color",'rt_theme')),
				"light_text_color"      => array("color"=> "#fff", "label" => esc_html__("Opposite Text Color",'rt_theme')),
				"link_color"            => array("color"=> "#fff", "label" => esc_html__("Link Color",'rt_theme')),
				"heading_color"         => array("color"=> "#fff", "label" => esc_html__("Heading Color",'rt_theme')),
				"border_color"          => array("color"=> "rgba(255, 255, 255, 0.17)", "label" => esc_html__("Border Color",'rt_theme')),
				"form_button_bg_color"  => array("color"=> "rgba(55, 55, 55, 0.78)", "label" => esc_html__("Form Button Background Color",'rt_theme')),
				"social_media_bg_color" => array("color"=> "#bbb", "label" => esc_html__("Social Media Icons Background Color",'rt_theme')),
			));

		$color_list[".sidebar-widgets"] = array(
			"id" => "widgets",
			"label" => esc_html__("Sidebar Elements",'rt_theme'),
			"description" => '<a class="highlight-section icon-flash" data-section-selector=".sidebar-widgets" href="#" title="'.esc_html__('Blink sidebar elements','rt_theme').'"></a>'. esc_html__('Use following settings to customize the elements in the left sidebar except the navigation','rt_theme'),
			"colors" => array(

				"primary_color"         => array("color"=> "#e6aa21", "label" => esc_html__("Primary Color",'rt_theme')),
				"bg_color"              => array("color"=> "rgba(0,0,0,0.8)", "label" => esc_html__("Background Color",'rt_theme')),
				"font_color"            => array("color"=> "#fff", "label" => esc_html__("Text Color",'rt_theme')),
				"secondary_font_color"  => array("color"=> "#888888", "label" => esc_html__("Secondary Text Color",'rt_theme')),
				"light_text_color"      => array("color"=> "#fff", "label" => esc_html__("Opposite Text Color",'rt_theme')),
				"link_color"            => array("color"=> "#fff", "label" => esc_html__("Link Color",'rt_theme')),
				"heading_color"         => array("color"=> "#fff", "label" => esc_html__("Heading Color",'rt_theme')),
				"border_color"          => array("color"=> "#3D3D3D", "label" => esc_html__("Border Color",'rt_theme')),
				"form_button_bg_color"  => array("color"=> "#2f2f2f", "label" => esc_html__("Form Button Background Color",'rt_theme')),
				"social_media_bg_color" => array("color"=> "#2f2f2f","label" => esc_html__("Social Media Icons Background Color",'rt_theme')),

			));

		$color_list[".footer"] = array(
			"id" => "footer",
			"label" => esc_html__("Footer",'rt_theme'),
			"description" => esc_html__('Use following settings to customize the footer section of your website.','rt_theme'),
			"colors" => array(

				"primary_color"         => array("color"=> "rgba(255,255,255,0.2)", "label" => esc_html__("Primary Color",'rt_theme')),
				"bg_color"              => array("color"=> "#2a2a2a", "label" => esc_html__("Row Background Color",'rt_theme')),
				"font_color"            => array("color"=> "#707070", "label" => esc_html__("Text Color",'rt_theme')),
				"secondary_font_color"  => array("color"=> "#eaeaea", "label" => esc_html__("Secondary Text Color",'rt_theme')),
				"light_text_color"      => array("color"=> "#ffffff", "label" => esc_html__("Opposite Text Color",'rt_theme')),
				"link_color"            => array("color"=> "#aeaeae", "label" => esc_html__("Link Color",'rt_theme')),
				"heading_color"         => array("color"=> "#cccccc", "label" => esc_html__("Heading Color",'rt_theme')),
				"border_color"          => array("color"=> "#3c3c3c", "label" => esc_html__("Border Color",'rt_theme')),
				"form_button_bg_color"  => array("color"=> "#444444", "label" => esc_html__("Form Button Background Color",'rt_theme')),
				"social_media_bg_color" => array("color"=> "#393939", "label" => esc_html__("Social Media Icons Background Color",'rt_theme')),
			));

		//Create Color Sets
		foreach ($color_list as $seletor => $schema ) {

			$controls  =array();

			foreach ($schema["colors"] as $color_id => $color_values  ) {


				//transport exteptions
				$transport = "postMessage";

				if( $schema["id"] == "side_panel" ){
					$transport = "refresh";
				}

				array_push($controls, array(
						'id'        => RT_THEMESLUG.'_'.$schema["id"]."_".$color_id,
						'label'     => $color_values["label"],
						"transport" => $transport,
						"default"   => $color_values["color"],
						"type"      => "rt_color",
						"rt_skin"   => true
					)
				);

			}

			array_push($options["rt_color_schemas"]["sections"], array(
					'id'          => $schema["id"],
					'title'       => $schema["label"],
					'description' => $schema["description"],
					'controls'    => apply_filters("rtframework_color_controls_".$schema["id"], $controls )
				)
			);

		}

		return $options;
	}
}

add_filter( 'rtframework_customizer_options', 'rtframework_create_color_set_options', 10 );

if( ! function_exists("rtframework_add_new_footer_options") ){
	/**
	 * Add additional controls to the footer colors
	 * @return array
	 */
	function rtframework_add_new_footer_options( $controls ){

		array_unshift($controls,

				array(
					"id"          => RT_THEMESLUG."_footer_widget_layout",
					"label"       => esc_html__("Footer Widgets Layout",'rt_theme'),
					"description" => esc_html__("Select and set the column layout of the footer widget area.",'rt_theme'),
					"choices"     =>  array(
												"1" => "1/1",
												"2" => "1/2 - 1/2",
												"3" => "1/3 - 1/3 - 1/3",
												"4" => "1/4 - 1/4 - 1/4 - 1/4",
												"5" => "2/6 - 1/6 - 1/6",
												"6" => "1/2 - 1/4 - 1/4",
												"7" => "1/4 - 1/2 - 1/4",
												"8" => "1/4 - 1/4 - 1/2",
												"9" => "4/6 - 1/6 - 1/6",
												"10" => "2/3 - 1/3",
												"11" => "1/3 - 2/3"
							  				),
					"default"   => "3",
					"transport" => "refresh",
					"type"      => "select",
					"rt_skin"   => true
				),

				array(
					"id"          => RT_THEMESLUG."_footer_background_width",
					"label"       => esc_html__("Footer Background Width",'rt_theme'),
					"description" => esc_html__('Select a pre-defined width for the footer background','rt_theme'),
					"transport"   => "refresh",
					"choices"     => array(
										"default" => esc_html__("Default Width", "rt_theme"),
										"fullwidth" => esc_html__("Full Width", "rt_theme"),
									),
					"default" => "default",
					"type"    => "select",
					"rt_skin"   => true
				),

				array(
					"id"          => RT_THEMESLUG."_footer_content_width",
					"label"       => esc_html__("Footer Content Width",'rt_theme'),
					"description" => esc_html__('Select a pre-defined width for the footer content','rt_theme'),
					"transport"   => "refresh",
					"choices"     => array(
										"default" => esc_html__("Default Width", "rt_theme"),
										"fullwidth" => esc_html__("Full Width", "rt_theme"),
									),
					"default" => "default",
					"type"    => "select",
					"rt_skin"   => true
				),

				array(
					"id"          => RT_THEMESLUG."_footer_sticky",
					"label"       => esc_html__("Covered Footer",'rt_theme'),
					"description" => esc_html__('Enable/Disable the sticky (covered) footer effect','rt_theme'),
					"transport"   => "refresh",
					"choices"     => array(
										"fixed_footer" => esc_html__("Covered",'rt_theme'),
										"" => esc_html__("Classic",'rt_theme'),
									),
					"default" => "fixed_footer",
					"type"    => "select",
					"rt_skin"   => true
				),

				array(
					"id"          => RT_THEMESLUG."_footer_row_seperator",
					"label"       => "",
					"description" => esc_html__('A color set that used only for footer elements.','rt_theme'),
					"type"        => "rt_seperator"
				)

		);

		return $controls;
	}
}
add_filter( 'rtframework_color_controls_footer', 'rtframework_add_new_footer_options', 20 );

if( ! function_exists("rtframework_add_new_side_panel_options") ){
	/**
	 * Add additional controls to the side panel colors
	 * @return array
	 */
	function rtframework_add_new_side_panel_options( $controls ){

		array_unshift($controls,


			array(
				"id"          => RT_THEMESLUG."_show_side_panel",
				"label"       => esc_html__("Display the Side Panel",'rt_theme'),
				"description" => "",
				"transport"   => "refresh",
				"default"     => "on",
				"type"        => "checkbox",
				"rt_skin"     => true
			),

			array(
				"id"          => RT_THEMESLUG."_hide_side_panel_mobile",
				"label"       => esc_html__("Don't Display the Side Panel on Mobile Screens",'rt_theme'),
				"description" => "",
				"transport"   => "refresh",
				"default"     => "",
				"type"        => "checkbox",
				"rt_skin"     => true
			),

			array(
				"id"          => RT_THEMESLUG."_hide_side_panel_desktop",
				"label"       => esc_html__("Don't Display the Side Panel on Desktop Screens",'rt_theme'),
				"description" => "",
				"transport"   => "refresh",
				"default"     => "",
				"type"        => "checkbox",
				"rt_skin"     => true
			)						

		);

		return $controls;
	}
}
add_filter( 'rtframework_color_controls_side_panel', 'rtframework_add_new_side_panel_options', 20 );


if( ! function_exists("rtframework_add_new_sidebar_widget_options") ){
	/**
	 * Add additional controls to the sidebar widgets
	 * @return array
	 */
	function rtframework_add_new_sidebar_widget_options( $controls ){

		array_unshift($controls,


					array(
						"id"          => RT_THEMESLUG."_shortcut_buttons",
						"label"       => esc_html__("Shortcut Bar",'rt_theme'),
						"description" => __('Select the location of the shortcut icon buttons buttons bar that includes; Search, WPML Languages, WooCommerce Login & Cart buttons. Some of these buttons will only be visible if the related plugins are installed. If WPML and WooCommerce are not installed, only a search field will be displayed','rt_theme'),
						"transport"   => "refresh",
						"choices"     => array(
											"after_logo" => esc_html__("Append it after the logo",'rt_theme'),
											"after_nav" => esc_html__("Append it after the navigation",'rt_theme'),
											"no" => esc_html__("Do not display",'rt_theme'),
										),
						"default" => "after_nav",
						"type"    => "select"
					),


					array(
						"id"          => RT_THEMESLUG."_sidebar_elements_seperator_2",
						"label"       => "",
						"description" => esc_html__('A color set that used for sidebar elements only.','rt_theme'),
						"type"        => "rt_seperator"
					)


		);

		return $controls;
	}
}
add_filter( 'rtframework_color_controls_widgets', 'rtframework_add_new_sidebar_widget_options', 20 );
