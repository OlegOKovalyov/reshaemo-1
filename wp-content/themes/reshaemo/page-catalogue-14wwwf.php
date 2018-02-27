<?php
/**
 * Template Name: Catalogue Page Template page-catalogue.php 
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
            <div class="col-10 order-1 main-catlg">

                <?php 
                  wp_nav_menu( array(
                  'theme_location'=>'cat-top-menu', // (string) Расположение меню в шаблоне.
                                                // (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                  'cat-top-menu' => 'Верхнее меню страницы Каталог', // (string) Название выводимого меню (указывается в 
                                // админке   при создании меню, приоритетнее 
                                // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                  //'container'       => 'div', // (string) Контейнер меню. Обворачиватель ul. 
                                              // Указывается тег контейнера (по умолчанию в тег div)
                  'container_class' => 'main-catlg',
                  //'container_id'    => '',
                  'menu_class'=>'nav nav-tabs',
                  'menu_id' => 'myTab',
                  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'after'=>'',
                  'container'=>''
                  ) );
                ?>                

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-one" role="tabpanel"> <!-- был еще один атрибут: aria-labelledby="nav-one-tab" -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                     
                                        <?php /*echo do_shortcode('[shortcode id="304"]');*/ ?>
                                        <?php echo do_shortcode('[tabvyshobrz]'); ?>
                                        
                                    </div><!-- .col-12 -->

                                </div><!-- .row --> 
                            </div><!-- .container -->
                    </div><!-- .tab-pane -->
                </div>

                <div>
                    <?php while (have_posts()): the_post();?>
                        <?php the_content();?>
                    <?php endwhile; ?>
                </div>

            </div><!-- .col-10 -->
            <div class="col-12 col-sm-2 aside-catalogue">
              <div class="blank-block-top"></div>

              <?php get_sidebar('catalogue'); ?> 

            </div><!-- .col-2 .aside-catalogue -->

        </div><!-- .row --> 
        
    </div><!-- .container -->
</div><!-- .gallery .container-fluid -->

<?php echo do_shortcode('[recentcomm]'); ?>

<?php get_footer();