<?php
/**
 * Template Name: FAQ Page Template page-faq.php
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

	<div id="primary" class="content-area page-delivery page-faq">
		<main id="main" class="site-main">
			<div class="blank-block"></div>

                <?php echo do_shortcode('[sfbtnsgroup]'); ?>            

            <h1><?php /*the_title();*/ ?></h1>

            <div class="container three-colms">
                <div class="row">    	
                	<!-- <div class="col"> -->
                        <div class="row">
                            <div class="col-12"><h2 class="pt-3">Задать вопрос</h2></div>
                            <div class="for-form col-xs-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">

                                <?php echo do_shortcode( '[contact-form-7 id="837" title="Задать вопрос"]' ) ?>

                            </div><!-- .for-form -->                             
                            <h1 class="py-4 mt-4"><?php the_title(); ?></h1>

                            <?php while (have_posts()): the_post();?>
                                <?php the_content();?>
                                <?php
                                if ( comments_open() || get_comments_number() ) {
                                    comments_template();
                                }
                                ?>
                            <?php endwhile; ?>

                            <?php 
                            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                            $custom_args = array(
                              'post_type'       => 'post',
                              'posts_per_page'  => 5,
                              'category_name'   => 'faq-posts',
                              'paged'           => $paged
                              );

                              $custom_query = new WP_Query( $custom_args ); ?>

                            <?php if ( $custom_query->have_posts() ) : ?>

                            <!-- begin of the loop -->
                            <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                                <article class="loop w-100">

                                    <div class="contentpost">
                                        <h5><?php  the_time('j F Y'); ?></h5>

                                        <?php the_content(); ?>

                                    </div>
                                </article>
                            <?php endwhile; ?>
                            <!-- end of the loop -->

                            <!-- pagination here -->
                            <?php
                                if (function_exists(custom_pagination)) {
                                  custom_pagination($custom_query->max_num_pages,"",$paged);
                                }
                            ?>

                            <?php wp_reset_postdata(); ?>

                            <?php else:  ?>
                              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                            <?php endif; ?>

                        </div><!-- .row -->
                    <!-- </div> --><!-- .col -->

                </div><!-- .row -->
            </div><!-- .container .three-colms -->

		</main><!-- #main .site-main -->
	</div><!-- #primary -->
<!-- /FAQ Page Template -->

<?php get_footer(); ?>