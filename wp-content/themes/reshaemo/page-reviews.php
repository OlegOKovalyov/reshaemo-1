<?php
/**
 * Template Name: Reviews Page Template page-reviews.php 
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP-Reshaemo
 */

get_header(); ?>

	<div id="primary" class="content-area page-delivery page-contacts page-reviews">
		<main id="main" class="site-main">
			<div class="blank-block"></div>

            <?php echo do_shortcode('[sfbtnsgroup]'); ?>

            <!-- <h1><?php /*the_title();*/ ?></h1> -->
            <h2 class='my-3'>Оставить отзыв</h2>
            <div class="container three-colms reviews-items">
                <div class="row">
                    <div class="col">
                        <?php while (have_posts()): the_post();?>
                            <?php the_content();?>
                            <?php
                                if ( comments_open() || get_comments_number() ) {
                                    comments_template();
                                }
                            ?>
                        <?php endwhile; ?>                        
                    </div>
                </div><!-- .row -->
            </div><!-- .container .three-colms -->

		</main><!-- #main .site-main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
