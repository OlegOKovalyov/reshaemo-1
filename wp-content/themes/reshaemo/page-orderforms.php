<?php
/**
 * Template Name: Order Form Page Template page-orderforms.php 
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

<div class="container-fluid page-categorymenu page-orderforms">
    <div class="container">

        <?php echo do_shortcode('[sfbtnsgroup]'); ?>

        <div class="row">
            <div class="col-xs-12 col-md-2 aside-catalogue">
            <div class="blank-block-top"></div>

                <?php get_sidebar('catalogue') ?>

            </div><!-- .col-2 .aside-catalogue -->

            <div class="col-xs-12 col-md-7 page-content">
                <section>
                    <h1><?php the_title(); ?></h1>
                    <?php while (have_posts()): the_post();?>
                        <?php if( is_page('zakazat-attestat') ) : ?>
                            <div id="atts-form">
                                <?php the_content(); ?>
                            </div>
                        <?php elseif( is_page('zakazat-spravku') ) : ?>
                            <div id="sprvk-form">
                                <?php the_content(); ?>
                            </div>
                        <?php elseif( is_page('zakazat-svidetelstvo') ) : ?>
                            <div id="svvo-form">
                                <?php the_content(); ?>
                            </div>                                                     
                        <?php else : ?>
                            <?php the_content(); ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </section>
            </div><!-- .col-8 -->

            <div class="col-xs-12 col-md-3 order-sm-1 right-sb">

                    <?php echo do_shortcode('[contact-form-7 id="578" title="Срочный заказ диплома"]'); ?>

                <div class="video-block container">
                    <div class="row">
                        <h2>Видеопрезентация компании</h2> 
                        <div class="monitor"></div>  
                        <img src="<?php bloginfo('template_url'); ?>/images/mntr-play.png" alt="Монтитор компьютера"> 

                        <div class="video-links list" id="list_1">
                            <span id="up-marker" data-scroll="0"></span>
                              <ul class="nav">
                                <li class="page-item">                                      
                                    <a class="" href="/videoobzor-diplomov-o-vysshem/">Видеообзор дипломов о высшем образовании</a>
                                </li>
                                <li class="page-item">
                                    <a class="" href="/videoobzor-diplomov-o-srednem-obrazovanii/">Видеообзор дипломов о среднем образовании</a>
                                </li>
                                <li class="page-item">    
                                    <a class="" href="/videoobzor-diplomov-o-sredne-specialnom-obrazovanii/">Видеообзор дипломов средне-специальном образовании</a>
                                </li>
                                <li class="page-item">    
                                    <a class="" href="/videoobzor-spravok-svidetelstv/">Видеообзор справок и свидетельств</a>
                                </li>                                          
                              </ul>
                            <span id="down-marker" data-scroll="1"></span>
                            <a class="see-video" href="<?php echo home_url() . '/videoobzor-diplomov/' ?>">смотреть все видео о документах</a>
                        </div><!-- .video-links -->                        
                      
                    </div><!-- .row -->
                </div><!-- .video-block .container --> 

            </div><!-- .col-12 .col-lg-3 .right-sb -->

        </div><!-- .row --> 
        
    </div><!-- .container -->
</div><!-- .gallery .container-fluid -->

<?php echo do_shortcode('[recentcomm]'); ?>

<?php
get_footer();
