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
            <div class="col-10 order-1">
        


<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>


                <h1><?php the_title(); ?></h1>
                <h2><?php echo get_the_title(56); ?></h2>
                <div class="row">

                    <!-- Выводим карточки товаров по 4 шт. в строку (не карусель) -->
                    <div class="gallery-certs">

                        <?php
                        $mypages = get_pages( array( 'child_of' => 56, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
                        foreach( $mypages as $page ) {      
                            $content = $page->post_content;
                            if ( ! $content ) continue; // пропустим страницу без контента
                            $content = apply_filters( 'the_content', $content );
                            ?>
                            
                            <div class="entry mscwhei_lst"><?php echo $content; ?></div>

                            <?php
                        } ?>

                    </div><!-- .gallery-certs -->
                    <!-- /Выводим карточки товаров по 4 шт. в строку (не карусель) -->
                </div><!-- .row  (inner)-->
                    
                <h2><?php echo get_the_title(74); ?></h2>
                <div class="row">
                    <!-- Выводим карточки товаров по 4 шт. в строку (карусель) -->
                    <div class="owl-carousel owl-theme gallery-certs">

                        <?php
                        $mypages = get_pages( array( 'child_of' => 74, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
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
                    <!-- /Выводим карточки товаров по 4 шт. в строку -->
                </div><!-- .row (inner) -->

            </div><!-- .col-10 -->

            <?php get_sidebar('catalogue'); ?> 

        </div><!-- .row --> 
    </div><!-- .container -->
</div><!-- .gallery .container-fluid -->

<!-- <div id="primary" class="content-area page-catalogue">
    <main id="main" class="site-main">

    </main> --><!-- #main -->
<!-- </div> --><!-- #primary -->

<?php
get_footer();
