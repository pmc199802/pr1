<?php
# 
# rt-theme
# post content for standart post types in listing pages
# 
global $rt_post_values, $rt_blog_list_atts;
extract($rt_post_values);
extract($rt_blog_list_atts);
?> 

<!-- blog box-->
<article <?php post_class("loop")?> id="post-<?php the_ID(); ?>">
		
	
	<?php if( ! empty( $thumbnail_image_output )  ):?>

	<figure class="featured_image featured_media">

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

				<a href="<?php echo get_the_permalink(); ?>" title="<?php the_title(); ?>" class="featured_image imgeffect link"><?php echo wp_kses_post($thumbnail_image_output);?></a>

			<?php endif;?>

	</figure> 
	<?php endif;?>


	<?php if($show_date !== "false"):?><div class="date"><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo get_the_date(); ?></a></div><?php endif;?> 
	<div class="text entry-content">

		<!-- blog headline-->
		<h2 class="entry-title"><a href="<?php echo esc_url($permalink) ?>" rel="bookmark"><?php the_title(); ?></a></h2> 
			

		<?php 
			if( $use_excerpts !== "false" ){
				the_excerpt();
			}else{
				the_content( esc_html_x( 'Continue reading','Frontend Text','rt_theme' ) );
				wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . esc_html_x( 'Pages:','Frontend Text','rt_theme' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
			}
		?>

		<?php 
			//post meta bar
			do_action( "post_meta_bar", array( "show_author"=> $show_author, "show_categories" => $show_categories, "show_comment_numbers" => $show_comment_numbers, "show_date" => $show_date) ); 
		?>

	</div> 

</article> 
<!-- / blog box-->