<?php /* based on twentyten comment template*/ ?>
<div id="comments" class="rt_comments rt_form">
<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php echo esc_html_x( 'This post is password protected. Enter the password to view any comments.','Frontend Text','rt_theme' ); ?></p>
		</div><!-- #comments -->
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
	endif;
?>

<?php
	// You can start editing here -- including this comment!
?>

<?php if ( have_comments() ) : ?>
 

			<h6 id="comments-title"><?php echo (get_comments_number() == 1) ? esc_html_x('One Comment' ,'Frontend Text','rt_theme') : sprintf( esc_html_x('%s Comments' ,'Frontend Text','rt_theme') , get_comments_number() ); ?></h6>								

			<ol class="commentlist">
				<?php
					/* Loop through and list the comments. Tell wp_list_comments()
					 * to use twentyten_comment() to format the comments.
					 * If you want to overload this in a child theme then you can
					 * define twentyten_comment() and that will be used instead.
					 * See twentyten_comment() in twentyten/functions.php for more.
					 */
					wp_list_comments(  					
                                array(
                                'walker'            => null,
                                'max_depth'         => 7,
                                'style'             => 'ul',
                                'callback'          => "rt_comments", 
                                'type'              => 'all',  
                                'avatar_size'       => 48,
                                )
					); 
				?>
			</ol>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation clearfix">
				<?php if( get_previous_comments_link() ):?>
					<div class="nav-previous button_border"><span class="meta-nav">&larr; </span><?php echo get_previous_comments_link( esc_html_x( 'Older Comments','Frontend Text','rt_theme' ) ); ?></div>
				<?php endif;?>


				<?php if( get_next_comments_link() ):?>
					<div class="nav-next button_border"><?php next_comments_link( esc_html_x( 'Newer Comments ','Frontend Text','rt_theme' ) ); ?><span class="meta-nav"> &rarr;</span></div>
				<?php endif;?>
			</div><!-- .navigation -->
<?php endif; // check for comment navigation ?>


		<?php if ( ! comments_open() ) :?>
		<p class="nocomments"><?php echo esc_html_x( 'Comments are closed.','Frontend Text','rt_theme' ); ?></p>
		<?php endif; // end ! comments_open() ?>

<?php else : // or, if we don't have comments:

	/* If there are no comments and comments are closed,
	 * let's leave a little note, shall we?
	 */
?> 
			
<?php endif; // end have_comments() ?>


<?php  
//text fields
$commnet_author = ( $commenter['comment_author'] ) ?  esc_attr( $commenter['comment_author'] )  : "";
$commnet_author_email = ( $commenter['comment_author_email'] ) ?  esc_attr( $commenter['comment_author_email'] )  : "";
$comment_author_url = ( $commenter['comment_author_url'] ) ?  esc_attr( $commenter['comment_author_url'] )  : "";
$consent  = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';

$aria_req = "";

$fields =  array(
	'author' => '<li class="comment-form-author">'.
	            '<input id="author" name="author" type="text" placeholder="' . esc_html_x('Name','Frontend Text','rt_theme') . ( $req ? ' *' : '' ) . '" value="' . $commnet_author . '" size="30"' . $aria_req . ' />'.
	            '</li>',

	'email' => '<li class="comment-form-email">'.
	            '<input id="email" name="email" type="text" placeholder="' . esc_html_x('Email','Frontend Text','rt_theme') . ( $req ? ' *' : '' ) . '" value="' . $commnet_author_email . '" size="30"' . $aria_req . ' />'.
	            '</li>',


	'url' => '<li class="comment-form-url ">'.
	            '<input id="url" name="url" type="text" placeholder="' . esc_html_x('Website','Frontend Text','rt_theme') . '" value="' . $comment_author_url . '" size="30" />'.
	            '</li>',

	'cookies' => '<li class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
				 '<label for="wp-comment-cookies-consent">' . esc_html_x( 'Save my name, email, and website in this browser for the next time I comment.','Frontend Text','rt_theme' ) . '</label></li>',
);
 
//comment form args

$comments_args = array( 	
	'comment_field'        => '<div class="text-boxes"><ul><li><textarea tabindex="4" class="comment_textarea" rows="10" id="comment" name="comment" placeholder="'. esc_html_x('Comment','Frontend Text','rt_theme') .' *"></textarea></li></ul></div>',
	'id_form'              => 'commentform', 
	'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
	'id_submit'            => 'submit',
	'title_reply'          => esc_html_x( 'Leave a Reply' ,'Frontend Text','rt_theme'),
	'title_reply_to'       => esc_html_x( 'Leave a Reply to %s' ,'Frontend Text','rt_theme'),
	'cancel_reply_link'    => esc_html_x( 'Cancel reply' ,'Frontend Text','rt_theme'),
	'label_submit'         => esc_html_x( 'Post Comment','Frontend Text','rt_theme' ),
	'comment_notes_after' => ""
);
comment_form( $comments_args, $post->ID );

?> 

</div><!-- #comments -->