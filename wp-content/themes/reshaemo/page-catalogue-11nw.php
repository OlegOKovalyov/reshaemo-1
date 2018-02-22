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


<?php $mypages = get_pages( array(
        'child_of' => $post->ID, 
        'parent'        => -1, 
        'sort_column'   => 'menu_order', 
        'sort_order'    => 'asc',
        'hierarchical'  => 0,
        /*'exclude'       => array( 198, 201, 203, 205,  65, 63, 61, 58,  35, 43, 46, 48, 50, 52, 90 ),*/
) );
foreach( $mypages as $page ) {      
  $content = $page->post_content;
  if ( ! $content ) { // Check for empty page
    continue;
  }  
  $content = apply_filters( 'the_content', $content );
  ?>

  <div class="row">
      <div class="col-12">

          <h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php /*echo $page->post_title;*/ ?></a></h2>

              <div class="row">
                  <!-- Выводим карточки товаров по 4 шт. в строку (карусель) -->
                  <div class="owl-carousel owl-theme gallery-certs">

                      <div class="entry"><?php echo $content; ?></div>

                  </div><!-- .gallery-certs -->
                  <!-- /Выводим карточки товаров по 4 шт. в строку (карусель) -->
              </div><!-- .row (inner) -->    

      </div><!-- .col-12 -->
  </div><!-- .row --> 


  <?php
} ?>


    <?php $child_pages = array( "56", "74", "196" ); ?>

        <div class="row">
            <div class="col-12">

                <?php foreach( $child_pages as $child_page["ID"] ) { ?>

                    <h2><?php echo get_the_title($child_page["ID"]); ?></h2>
                    <div class="row">
                        <!-- Выводим карточки товаров по 4 шт. в строку (карусель) -->
                        <div class="owl-carousel owl-theme gallery-certs">

                            <?php
                            $mypages = get_pages( array( 'child_of' => $child_page, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );
                            foreach( $mypages as $page ) {      
                                $content = $page->post_content;
                                // пропустим страницу без контента
                                if ( ! $content ) continue;
                                $content = apply_filters( 'the_content', $content );
                                ?>
                                
                                <div class="entry"><?php echo $content; ?></div>

                                <?php
                            } ?>

                        </div><!-- .gallery-certs -->
                        <!-- /Выводим карточки товаров по 4 шт. в строку (карусель) -->
                    </div><!-- .row (inner) -->

                <?php } wp_reset_postdata(); // сброс ?>

            </div><!-- .col-12 -->
        </div><!-- .row --> 





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
