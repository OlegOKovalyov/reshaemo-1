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
                <?php
                    /*$cur_postid = get_the_ID();
                    global $post;     // Если за пределами цикла
                    if ( is_page(390) || '390' == $post->post_parent ) get_sidebar('catmenu-vyshobrz');
                    elseif ( is_page(393) || '393' == $post->post_parent ) get_sidebar('catmenu-pdobrz');
                    elseif ( is_page(396) || '396' == $post->post_parent ) get_sidebar('catmenu-srspobrz');
                    elseif ( is_page(401) || '401' == $post->post_parent ) get_sidebar('catmenu-attschool');
                    elseif ( is_page(404) || '404' == $post->post_parent ) get_sidebar('catmenu-sprsva');*/

                    get_sidebar('catalogue');

                ?>

            </div><!-- .col-2 .aside-catalogue -->

            <?php /*get_sidebar('catmenu-vyshobrz');*/ ?>
            <div class="col-xs-12 col-md-7 page-content">
                <section>
                    <h1><?php the_title(); ?></h1>
                    <?php while (have_posts()): the_post();?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </section>
            </div><!-- .col-8 -->

            <div class="col-xs-12 col-md-3 order-sm-1 right-sb">
                <!-- <form class="mainpf"> -->
                    <?php echo do_shortcode('[contact-form-7 id="578" title="Срочный заказ диплома"]'); ?>
                <div class="video-block container">
                    <div class="row">
                        <h2>Видеопрезентация компании</h2> 
                        <div class="monitor"></div>  
                        <img src="<?php bloginfo('template_url'); ?>/images/mntr-play.png" alt="Монтитор компьютера"> 
                        <!-- <img src="<?php bloginfo('template_url'); ?>/images/i_playscreensm.png" alt=""> -->      

                        <div class="video-links list" id="list_1">
                            <span id="up-marker" data-scroll="0"></span>

                                    <?php
                                      $postid = '514';                                    
                                      $children = wp_list_pages('title_li=&child_of='.$postid.'&echo=0'.'&depth=1');
                                      if ($children) { ?>
                                      <ul class="nav">
                                      <?php echo $children; ?>
                                      </ul>
                                    <?php } ?>

                            <span id="down-marker" data-scroll="1"></span>
                            <a class="see-video" href="<?php echo home_url() . '/videoprezentacija-kompanii/' ?>">смотреть все видео о документах</a>
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
