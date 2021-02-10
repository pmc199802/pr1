<?php
/**
 * The template for displaying product content within loops.
 *
 * @author 		RT-Themes
 * 
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $rt_product_post_values, $rt_product_list_atts;
extract($rt_product_post_values);
extract($rt_product_list_atts);

?>

<div class="product_item_holder">

	<?php if( ! empty( $featured_image_url ) ):?>
		<div class="featured_image"> 
			<!-- product image -->
			<div class="featured_image"> 
				<a href="<?php echo esc_url($permalink);?>" title="<?php echo esc_attr($title); ?>" rel="bookmark" class="imgeffect link"><?php echo wp_kses_post( $thumbnail_image_output ); ?></a> 
			</div> 
		</div> 
	<?php endif;?>


	<?php do_action( "rt_before_product_info" ); ?>

	<?php if ( ( $display_titles !== "false" && $title !== "false" ) || ( ! empty( $short_desc ) && $display_descriptions !== "false" ) || ( $display_price !== "false" ) ): ?>					
		<div class="product_info">

				<?php if ( $display_titles !== "false" ): ?>
				<!-- title-->
				<h5 class="clean_heading"><a href="<?php echo esc_url($permalink); ?>" title="<?php echo esc_attr($title); ?>" rel="bookmark"><?php echo wp_kses_post( $title ); ?></a></h5>
				<?php endif;?>

				<!-- text-->
				<?php
			 		echo ! empty( $short_desc ) && $display_descriptions !== "false" ? sprintf( '<p>%s</p>', do_shortcode($short_desc) ) : "" ; 
			 	?>

				<?php
				echo '<div class="product_info_footer clearfix">';
					if ( $display_price !== "false" ){
						// call product price - hooked in /rt-framework/functions/theme_functions.php
						do_action( "rt_product_price", array( "regular_price" => $regular_price, "sale_price" => $sale_price ) );			
					}

					//details button
					echo '<div class="action_buttons"><a href="'.esc_url($permalink).'" title="'.esc_attr($title).'" class="details icon-angle-right">'.esc_html_x("Details",'Frontend Text',"rt_theme").'</a></div>';
				echo '</div>';
				?> 		

		</div>
	<?php endif;?>	

	<?php do_action( "rt_after_product_info" ); ?>

</div>