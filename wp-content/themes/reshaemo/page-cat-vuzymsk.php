<?php
/**
 * Template Name: Cat Vuzy Moskvy Page Template page-cat-vuzymsk.php 
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


<!-- Алфавитный указатель -->
<?php // возьмем только 1 буквы из get запроса в кодировке utf-8

$letter = mb_substr($_GET['letter'], 0, 1, 'utf-8');

// Сделаем данную букву заглавной
$letter_upp = mb_strtoupper($letter, 'UTF-8'); ?>
<!-- /Алфавитный указатель -->


<div class="gallery container-fluid page-catalogue">
    <div class="container">

        <?php echo do_shortcode('[sfbtnsgroup]'); ?>

        <div class="row">
            <div class="col-sm-12 col-md-10 order-1 main-catlg sb-catlg">

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

                <section>
                    <h1><?php the_title(); ?></h1>
                    <div class="alpha-index">
                        <?php
                            $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0'.'&depth=1');
                            $ancestors = get_post_ancestors( $post->ID ); // получаем ID всех родительских страниц текущей страницы
                            if ($children && count($ancestors) == 1 ) { ?>
                                <ul class="nav nav-pills nav-stacked">
                                    <?php echo $children; ?>
                                </ul>
                        <?php } ?>         
                    </div><!-- .alpha-index -->
                    <div class="container">
                        <?php
                            $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
                            if ($children) { ?>
                                <ul class="nav nav-pills nav-stacked fletter">
                                    <?php echo $children; ?>
                                </ul>
                        <?php } ?>            
                    </div><!-- .container -->

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

<!-- <div id="primary" class="content-area page-catalogue">
    <main id="main" class="site-main">

    </main> --><!-- #main -->
<!-- </div> --><!-- #primary -->

<?php
get_footer();
