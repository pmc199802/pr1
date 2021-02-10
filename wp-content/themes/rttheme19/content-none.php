<?php
/* 
* rt-theme content-none.php 
* nothing found
*/ 
?>

<?php if ( is_search() ) : ?>

<p><?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.','Frontend Text','rt_theme' ); ?></p>
<?php get_search_form(); ?>

<?php else : ?>

<p><?php echo esc_html_x( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.','Frontend Text','rt_theme' ); ?></p>
<?php get_search_form(); ?>

<?php endif; ?>