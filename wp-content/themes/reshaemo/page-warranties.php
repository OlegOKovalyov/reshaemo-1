<?php
/**
 * Template Name: Warranties Page Template page-warranties.php 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP-Reshaemo
 */

get_header(); ?>


    <div id="primary" class="content-area page-delivery warranties">
        <main id="main" class="site-main">
            <div class="blank-block"></div>

            <?php echo do_shortcode('[sfbtnsgroup]'); ?>            

            <h1><?php the_title(); ?></h1>
            <!-- <h1>Доставка и оплата документов</h1> -->

            <div class="container three-colms">
                <div class="row">

                <?php while (have_posts()): the_post();?>
                    <?php the_content();?>
                <?php endwhile; ?>  

                </div><!-- .row -->
            </div><!-- .container .three-colms -->

        </main><!-- #main .site-main -->
    </div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
