<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP-Reshaemo
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

<div id="comments" class="comments-area">


    <?php if ( $user_ID ) : ?>
            <!--<p>Вы вошли как <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Выйти из этого аккаунта">Выйти &raquo;</a></p>-->
        <!--Форма для авторизованных пользователей-->
        <?php $args = array(
            'title_reply'       => '',
            'comment_field' => '<p class="comment-form-comment"><label for="comment"></label><br /><textarea id="comment" class="form-control" name="comment" aria-required="true" placeholder="Текст отзыва" cols="26" rows="2"></textarea></p>',
            //'logged_in_as'      => '',
            //'comment_notes_before' => '',
            //'comment_field'     => '',
            'label_submit'      => __( 'Post Comment' ), 
            'class_submit'        	=> 'submit btn btn-outline-order my-3',    
            'fields' => array(
                'author' => '',
                'email' => '',
                'url' => '',
                //'comment_field' => '<p class="comment-form-comment"><label for="comment"></label><br /><textarea id="comment" name="comment" aria-required="true" placeholder="Текст отзыва" cols="30" rows="4"></textarea></p>',
            )
            
        ); ?> 
    <?php else : ?>
        <!--Форма для неавторизованных пользователей-->
        <?php $args = array(
        	'title_reply_before'    => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'     => '</h2>',
            'title_reply'       	=> '',
            'comment_notes_before'  => '',
            'comment_field'     	=> '',
            'label_submit'       	=> __( 'Post Comment' ), 
            'class_submit'        	=> 'submit btn btn-outline-order my-3',    
            'fields' => array(
                'author' => '<p class="comment-form-author"><label for="author"></label> <input id="author" class="form-control" name="author" type="text" value="" placeholder="Ваше имя" /></p>',
                'email' => '<p class="comment-form-email"><label for="email"></label> <input id="email" class="form-control" name="email" type="text" value="" placeholder="Телефон или e-mail" /></p>',
                'url' => '',
                'comment_field' => '<p class="comment-form-comment"><label for="comment"></label><br /><textarea id="comment" class="form-control" name="comment" aria-required="true" placeholder="Текст отзыва" rows="2"></textarea></p>',
            )
            
        ); ?>    
    <?php endif;?>
 
    <?php comment_form($args); ?>

	<h1 class="py-4"><?php the_title(); ?></h1> 

 
    <?php if ( have_comments() ) : ?>
        
 
        <?php
            $comments = get_comments(array(
                'post_id' => 0,
                'status' 	=> 'approve',
            ));
            wp_list_comments( array(
                'style'             => 'div',
                'reply_text'        => '',
                'short_ping'        => true,
                //'page'              => '&per_page=9999&page=1', // '&per_page=9999&page=1'
                'per_page'          => 5,
                'reverse_top_level' => false,
                'avatar_size'       => 0,
                'echo'              => true,
                'callback'			=> 'reshaemo_comment',
        
            ), $comments );
        ?><!-- .comment-list -->
        
 
		<div class="comment-page-nav py-4">
	        <!-- Чтобы непосредственно отобразить постраничную навигацию в комментариях -->
	        <?php if(function_exists('wp_comments_corenavi')) wp_comments_corenavi(); ?>
	        <!-- /Чтобы непосредственно отобразить постраничную навигацию в комментариях -->
 		</div><!-- .comment-page-nav -->

        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        	<p class="no-comments"><?php _e( 'Comments are closed.' , 'reshaemo' ); ?></p>
        <?php endif; ?>
 
        <?php endif; // have_comments() ?>

</div><!-- #comments -->
