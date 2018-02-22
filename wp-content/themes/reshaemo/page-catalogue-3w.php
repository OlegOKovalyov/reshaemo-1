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
        </div><!-- .row -->
            
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
        </div><!-- .row -->    
    </div><!-- .container -->
</div><!-- .gallery .container-fluid -->

<div id="primary" class="content-area page-catalogue">
    <main id="main" class="site-main">

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
