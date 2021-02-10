<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head> 
<meta charset="<?php bloginfo( 'charset' ); ?>" />  
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?> 
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action("rt_after_body"); ?>

<!-- background wrapper -->
<div id="container">   
<?php do_action("rt_after_container"); ?> 
<?php get_template_part("header", $GLOBALS['rt_layout'] ); ?> 