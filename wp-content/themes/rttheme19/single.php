<?php
/**
 * 
 * The template for displaying all single posts
 *
 */
get_header(); ?>
 

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
		<?php  
			//get global post values
			$rt_post_values = rt_get_single_post_values( $post );

			get_template_part( '/post-contents/single-content', get_post_format() ); 
		?>
	<?php endwhile; else : ?>
		<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>			 


	<?php if( $rt_post_values["show_author_info"] && ! empty( get_the_content() ) ):?>
		<?php get_template_part("author","bio"); ?>
	<?php endif;?>

	<?php if( ( get_comments_number() > 0 || comments_open() ) && ! is_attachment() ):?>
		<div class='entry commententry'>
			<?php comments_template(); ?>
		</div>
	<?php endif;?>


<?php get_footer(); ?>