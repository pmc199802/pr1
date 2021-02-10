<?php
# 
# rt-theme
# loop item for testimonial custom posts
# image post format
# 
global $client_images;

$testimonial = get_post_meta( $post->ID, RT_COMMON_THEMESLUG.'_testimonial', true); 		
$name = get_post_meta( $post->ID, RT_COMMON_THEMESLUG.'_name', true); 		
$title = get_post_meta( $post->ID, RT_COMMON_THEMESLUG.'_title', true); 
$link = get_post_meta( $post->ID, RT_COMMON_THEMESLUG.'_link', true); 
$link_text = get_post_meta( $post->ID, RT_COMMON_THEMESLUG.'_link_text', true); 
$add_class = has_post_thumbnail() && $client_images !== "false" ? "with_image" : "";
?>

<?php if( $client_images !== "false" && has_post_thumbnail() ) : ?>
<div class="client_image gradient">
	<?php
	// Create thumbnail image
	$thumbnail_image_output = get_resized_image_output( array( "image_url" => "", "image_id" => get_post_thumbnail_id(), "w" => 400, "h" => 400, "crop" => true ) ); 	
	echo wp_kses_post( $thumbnail_image_output );
	?>
</div>
<?php endif;?>


<div class="text <?php echo esc_attr($add_class);?>">
	<p>
		<span class="icon-quote-left"></span>
			<?php echo wp_kses_post($testimonial); ?>
		<span class="icon-quote-right"></span>
	</p>
	<div class="client_info">

	<?php if(is_rtl()): ?>	
		<?php echo ! empty( $link ) && empty( $link_text ) ? '<a href="'. esc_url($link). '" target="_blank" class="client_link">'. str_replace( "http://","",$link ). '</a>' : "" ; ?>	
		<?php echo ! empty( $link ) && ! empty( $link_text ) ? '<a href="'. esc_url($link). '" target="_blank" title="'.esc_attr($link_text).'" class="client_link">'. str_replace( "http://","",$link_text ). '</a>' : "" ; ?>
		<?php echo ! empty( $title ) ? '<span>'. wp_kses_post( $title ). '</span> -' : "" ; ?>		
		<?php echo wp_kses_post($name); ?> 
	<?php else:?>
		<?php echo wp_kses_post($name); ?> 
		<?php echo ! empty( $title ) ? '- <span>'. wp_kses_post( $title ). '</span>' : "" ; ?>		
		<?php echo ! empty( $link ) && ! empty( $link_text ) ? '<a href="'. esc_url($link). '" target="_blank" title="'.esc_attr($link_text).'" class="client_link">'. str_replace( "http://","",$link_text ). '</a>' : "" ; ?>
		<?php echo ! empty( $link ) && empty( $link_text ) ? '<a href="'. esc_url($link). '" target="_blank" class="client_link">'. str_replace( "http://","",$link ). '</a>' : "" ; ?>	
	<?php endif; ?>	

	</div>
</div>