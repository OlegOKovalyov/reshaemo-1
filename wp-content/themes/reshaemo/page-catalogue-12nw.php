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

        <div class="sfbtns-group container py-3">
            <div class="row">
                <div class="col-5">
                    <form class="form-inline my-2 my-lg-0">
                        <!-- <div class="col-3"> -->
                            <input class="form-control mr-sm-2" type="search" placeholder="введите слова поиска" aria-label="Search">
                        <!-- </div> --><!-- .col-3 -->
                        <!-- <div class="col-2"> -->
                        <button class="btn btn-outline-order btn-outline-findoc my-2 my-sm-0" type="submit">Найти документы</button>
                        <!-- </div> --><!-- .col-2 -->
                    </form>
                </div><!-- .col-5 -->
                <div class="col-2 extnd-srch">
                    <a href="#">расширенный поиск</a>
                </div><!-- .col-2 .extnd-srch -->
                <!-- <div class="col1"></div> -->
                <div class="ml-auto col-2 callbk-btn">
                    <a class="btn btn-outline-callback" href="#">Видео о дипломах</a>
                </div><!-- .col-2 .callbk-btn -->
                <div class="col-2 callbk-btn">
                    <a class="btn btn-outline-callback" href="#">Обратный звонок</a>
                </div><!-- .col-2 .callbk-btn -->
            </div><!-- .row -->
        </div><!-- .sfbtns-group -->   

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
        <section>


<?php
$args = array(
    'post_type'   => 'products',
    'tax_query'   => array (
        array (
            'taxonomy'  => 'type',
            'field'     => 'slug',
            'terms'     => 'srednobrz'        )
      )
);
$products = new WP_Query( $args );
if( $products->have_posts() ) { ?>
    <h2><?php the_title() ?></h2>   
    <?php $terms = get_terms( 'type' );
    foreach ($terms as $term ) {
        echo '<h3>' . $term->name . '</h3>';
    } ?>
    <?php while( $products->have_posts() ) {
              $products->the_post();
              ?>
              <div class="col-12">
                  <div class="row">
                      <div class='content owl-carousel owl-theme'>
                          <?php the_content(); ?>
                      </div>
                  </div>
              </div>            
              <?php
          }
    }
    else {
        echo 'О нет, продукты не обнаружены!';
    }
wp_reset_postdata();
?>    


            <?php while (have_posts()): the_post();?>
                <?php /*the_content();*/ ?>
            <?php endwhile; ?>

        </section>

            </div><!-- .col-10 -->

            <?php get_sidebar('catalogue'); ?> 

        </div><!-- .row --> 
    </div><!-- .container -->
</div><!-- .gallery .container-fluid .page-catalogue -->

<!-- <div id="primary" class="content-area page-catalogue">
    <main id="main" class="site-main">

    </main> --><!-- #main -->
<!-- </div> --><!-- #primary -->

<?php
get_footer();
