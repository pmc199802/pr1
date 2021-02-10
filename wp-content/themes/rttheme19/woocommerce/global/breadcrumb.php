<?php
/**
 * Shop breadcrumb
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 * @see         woocommerce_breadcrumb()
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $breadcrumb ) {

	echo wp_kses_post($wrap_before);

	foreach ( $breadcrumb as $key => $crumb ) {

		echo wp_kses_post($before);

		if ( ! empty( $crumb[1] ) && sizeof( $breadcrumb ) !== $key + 1 ) {
			echo '<a href="' . esc_url( $crumb[1] ) . '" property="item" typeof="WebPage"><span property="name">' . esc_html( $crumb[0] ) . '</span></a>';
		} else {
			echo '<span property="name">'. esc_html( $crumb[0] ).'</span>';
		}

		echo '<meta property="position" content="'. ( $key + 2 ) .'">' ;

		if ( sizeof( $breadcrumb ) !== $key + 1 ) {
			echo wp_kses_post($delimiter);
		}

		echo wp_kses_post($after);
		
	}

	echo wp_kses_post($wrap_after);

}