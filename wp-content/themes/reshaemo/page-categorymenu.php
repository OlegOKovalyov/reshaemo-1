<?php
/**
 * Template Name: Category Top Large Menu Page Template page-categorymenu.php 
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

<div class="container-fluid page-categorymenu">
    <div class="container">

        <?php echo do_shortcode('[sfbtnsgroup]'); ?>

        <div class="row">
            <div class="col-xs-12 col-md-2 aside-catalogue">

                <?php
                    $cur_postid = get_the_ID();
                    global $post;     // Если за пределами цикла
                    if ( is_page(390) || '390' == $post->post_parent ) get_sidebar('catmenu-vyshobrz');
                    elseif ( is_page(393) || '393' == $post->post_parent ) get_sidebar('catmenu-pdobrz');
                    elseif ( is_page(396) || '396' == $post->post_parent ) get_sidebar('catmenu-srspobrz');
                    elseif ( is_page(401) || '401' == $post->post_parent ) get_sidebar('catmenu-attschool');
                    elseif ( is_page(404) || '404' == $post->post_parent ) get_sidebar('catmenu-sprsva');

                    get_sidebar('catalogue');

                ?>

            </div><!-- .col-2 .aside-catalogue -->

            <div class="col-xs-12 col-md-10 page-content">
                <section>
                    <h1><?php the_title(); ?></h1>
                    <?php while (have_posts()): the_post();?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </section>
            </div><!-- .col-10 -->

        </div><!-- .row --> 
        
    </div><!-- .container -->
</div><!-- .gallery .container-fluid -->

<?php echo do_shortcode('[recentcomm]'); ?>

<?php
get_footer();
