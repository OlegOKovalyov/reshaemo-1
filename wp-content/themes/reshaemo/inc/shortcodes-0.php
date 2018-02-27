<?php

/**
 * Галерея документов Высшее образование для страницы Цены. Использование:
 * - в админке WordPress:
 * [galvyshobrz]
 * - в файле-шаблоне:
 * <?php echo do_shortcode('[galvyshobrz]'); ?>
 */
add_shortcode( 'galvyshobrz', 'show_galvyshobrz');
function show_galvyshobrz( $atts, $content, $tag ) {

	ob_start();
        $child_pages = array( "291", "317", "331" ); ?>

        <?php foreach( $child_pages as $child_page ) { ?>

            <h2><?php echo get_the_title($child_page); ?></h2>
            <div class="gallery-row">
                <!-- Выводим карточки товаров по 4 шт. в строку (карусель) -->
                <!-- <div class="owl-carousel owl-theme gallery-certs"> -->

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

                <!-- </div> --><!-- .gallery-certs -->
                <!-- /Выводим карточки товаров по 4 шт. в строку (карусель) -->
            </div><!-- .row (inner) -->

        <?php }
	return ob_get_clean();
}