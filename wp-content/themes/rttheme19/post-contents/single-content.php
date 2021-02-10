<?php
# 
# rt-theme
# single post content for standart post types
# 
global $rt_post_values, $rt_global_variables;
extract($rt_post_values);
?> 

<article <?php post_class("single")?> id="post-<?php the_ID(); ?>">
	
	<?php if( ( $featured_image_single_page && ! empty( $thumbnail_image_output ) ) || ( ! empty( $thumbnail_image_output ) && empty( get_post_meta( $post->ID, RT_COMMON_THEMESLUG.'rttheme19_hidden', true ) ) ) ): ?>			
	<section class="featured_image featured_media">
		<?php if( get_theme_mod( RT_THEMESLUG.'_use_lightbox') ):?>
			<?php 
				//create lightbox link
				do_action("create_lightbox_link",
					array(
						'class'          => 'imgeffect zoom lightbox_ featured_image',
						'href'           => $featured_image_url,
						'title'          => esc_html_x('Enlarge Image','Frontend Text','rt_theme'),
						'data_group'     => 'image_'.$featured_image_id,
						'data_title'     => $title,
						'data_thumbnail' => $lightbox_thumbnail,
						'inner_content'  => $thumbnail_image_output
					)
				);
			?>
			<span class="format-icon icon-pencil"></span>

		<?php else:?>

			<?php echo wp_kses_post($thumbnail_image_output);?>

		<?php endif;?>		
	</section> 	
	<?php endif;?>

	<section class="post-title-holder row">


			<?php if($show_share_buttons):?>
				<div class="col col-sm-7 col-xs-12">
			<?php else:?>
				<div class="col col-sm-12 col-xs-12">
			<?php endif;?>

				<?php if( $show_date !== "false" ):?><section class="date"><?php the_date(); ?></section><?php endif;?>
				<!-- blog headline--> 
				<?php printf('<%2$s class="entry-title">%1$s</%2$s>', get_the_title(), $rt_global_variables["heading_tag"] ) ?>
			
			<?php if($show_share_buttons):?>
				</div> 
				<div class="col col-sm-5 col-xs-12">
				<?php 
					//Social Share buttons
					echo do_shortcode( apply_filters("rt_social_share_shortcode","[rt_social_media_share]") );
				?>
			<?php endif;?>		
			</div><!-- / .col --> 

	</section>

	<div class="text entry-content">		
		<!-- content--> 
		<?php the_content(); ?>

		<!-- pagination--> 
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:','rt_theme' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>

		<!-- updated--> 
		<span class="updated hidden"><?php echo the_modified_date();?></span>
	</div> 


	<?php 
		//post meta bar
		do_action( "post_meta_bar", array( "show_author"=> $show_author, "show_categories" => $show_categories, "show_comment_numbers" => $show_comment_numbers, "show_date" => $show_date, "show_tags" => $show_tags) ); 
	?>

</article>