<?php
/**
 * Template Name: Cat Posle Dipl Obraz Page Template page-cat-poslediplobrz.php 
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

<div class="gallery container-fluid page-catalogue">
    <div class="container">

        <?php echo do_shortcode('[sfbtnsgroup]'); ?>

        <div class="row">
            <div class="col-sm-12 col-md-10 order-1 main-catlg">

                <?php 
                  wp_nav_menu( array(
                  'theme_location'=>'cat-top-menu',
                  'cat-top-menu' => 'Верхнее меню страницы Каталог', 
                  'container_class' => 'main-catlg',
                  'menu_class'=>'nav nav-tabs',
                  'menu_id' => 'myTab',
                  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  ) );
                ?>                
                <h1><?php the_title() ?></h1>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                     
                                        <?php echo do_shortcode('[tabposdipobrz]'); ?>
                                        
                                    </div><!-- .col-12 -->

                                </div><!-- .row --> 
                            </div><!-- .container -->
                    </div><!-- .tab-pane -->
                </div>

                <section>
                    <?php while (have_posts()): the_post();?>
                        <?php the_content();?>
                    <?php endwhile; ?>
                </section>

            </div><!-- .col-10 -->
            <div class="col-sm-12 col-md-2 aside-catalogue">
              <div class="blank-block-top"></div>             

              <?php get_sidebar('catalogue'); ?>

            </div><!-- .col-2 .aside-catalogue -->              

        </div><!-- .row --> 
        
    </div><!-- .container -->
</div><!-- .gallery .container-fluid -->

<?php echo do_shortcode('[recentcomm]'); ?>

<?php
get_footer();
