<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * RT-Theme Social Media Options
 */

$this->options["rt_social_media_options"] = array(

		'title' => esc_html__("Social Media Options",'rt_theme'), 
		'description' => "", 
		'priority' => 8,
		'sections' => array(									

								/*
								array(
									'id'       => 'visibility',
									'title'    => esc_html__("Visibility",'rt_theme'), 
									'controls' => array( 
														array(
															"id"        => RT_THEMESLUG."_social_media",															
															"label"     => esc_html__("Display the icons in the website",'rt_theme'),
															"default"   => "on",
															"transport" => "refresh", 
															"type"      => "checkbox"
														),												
												),
								),	

								*/
					)

		);


$rt_social_media_icons = $this->rt_social_media_icons;
ksort( $rt_social_media_icons );

//add all icons within a seperate section
foreach ($rt_social_media_icons as $key => $value) {

	switch ($key) {
		case 'Email':
			$msgdesc=esc_html__("Enter a URL to your contact page or your email address.",'rt_theme');
			break;
		
		case 'Skype':
			$msgdesc=esc_html__("Enter a skype address. <strong>Syntax</strong> : 'skype:skypeid?call' or 'skype:phonenumber?call'.",'rt_theme');	
			break;

		case 'RSS':
			$msgdesc= esc_html__("Enter a valid URL (http or https) to the RSS-feed. <strong>For example</strong>  http://yourwebsite.com/feed/ ",'rt_theme');
			break;

		default:
			$msgdesc= esc_html__("Enter the URL that you want to link the icon <strong>For example</strong>  http://social-media-site.com/your-name/ ",'rt_theme');
			break;
	}

	array_push($this->options["rt_social_media_options"]["sections"], array(
			'id'       => $value,
			'title'    => $key." ".esc_html__("Options",'rt_theme'), 
			'controls' => array( 
								array(
									"id"          => RT_THEMESLUG."_".$value,										
									"label"       => esc_html__("Link (URL)",'rt_theme'),
									"default"     => "",
									"description" => $msgdesc,
									"type"        => "text"
								),															
								array(
									"id"      => RT_THEMESLUG."_".$value."_text",											
									"label"   => esc_html__("Hover Text",'rt_theme'),
									"default" => "",
									"type"    => "text"
								),										
								array(
									'id'      => RT_THEMESLUG."_".$value."_target",						
									'label'   => esc_html__("Link Target",'rt_theme'),
									'type'    => 'select',
									"default" => "",
									'choices' =>  array('_blank'=>'New Window','_self'=>'Same Window'),
								),													
						),
		)
	);

}