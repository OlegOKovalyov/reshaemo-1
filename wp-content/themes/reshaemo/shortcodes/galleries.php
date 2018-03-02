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
        $child_pages = array( "317", "291", "331" ); ?>

        <?php foreach( $child_pages as $child_page ) { ?>

            <h2><?php echo get_the_title($child_page); ?></h2>
            <div class="gallery-row">

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

            </div><!-- .row (inner) -->

        <?php }
	return ob_get_clean();
}

/**
 * Галерея документов После-дипломное образование для страницы Цены. Использование:
 * - в админке WordPress:
 * [galposdipobrz]
 * - в файле-шаблоне:
 * <?php echo do_shortcode('[galposdipobrz]'); ?>
 */
add_shortcode( 'galposdipobrz', 'show_galposdipobrz');
function show_galposdipobrz( $atts, $content, $tag ) {

    ob_start();
        $child_pages = array( "451" ); ?>

        <?php foreach( $child_pages as $child_page ) { ?>

            <h2><?php echo get_the_title($child_page); ?></h2>
            <div class="gallery-row">

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

            </div><!-- .row (inner) -->

        <?php }
    return ob_get_clean();
}

/**
 * Галерея документов Средне-специальное образование для страницы Цены. Использование:
 * - в админке WordPress:
 * [galsrspecobrz]
 * - в файле-шаблоне:
 * <?php echo do_shortcode('[galsrspecobrz]'); ?>
 */
add_shortcode( 'galsrspecobrz', 'show_galsrspecobrz');
function show_galsrspecobrz( $atts, $content, $tag ) {

    ob_start();
        $child_pages = array( "470" ); ?>

        <?php foreach( $child_pages as $child_page ) { ?>

            <h2><?php echo get_the_title($child_page); ?></h2>
            <div class="gallery-row">

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

            </div><!-- .row (inner) -->

        <?php }
    return ob_get_clean();
}

/**
 * Галерея документов Аттестаты школы для страницы Цены. Использование:
 * - в админке WordPress:
 * [galattschool]
 * - в файле-шаблоне:
 * <?php echo do_shortcode('[galattschool]'); ?>
 */
add_shortcode( 'galattschool', 'show_galattschool');
function show_galattschool( $atts, $content, $tag ) {

    ob_start();
        $child_pages = array( "485", "501" ); ?>

        <?php foreach( $child_pages as $child_page ) { ?>

            <h2><?php echo get_the_title($child_page); ?></h2>
            <div class="gallery-row">

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

            </div><!-- .row (inner) -->

        <?php }
    return ob_get_clean();
}

/**
 * Галерея документов Аттестаты школы для страницы Цены. Использование:
 * - в админке WordPress:
 * [galsprsva]
 * - в файле-шаблоне:
 * <?php echo do_shortcode('[galsprsva]'); ?>
 */
add_shortcode( 'galsprsva', 'show_galsprsva');
function show_galsprsva( $atts, $content, $tag ) {

    ob_start();
        $child_pages = array( "511" ); ?>

        <?php foreach( $child_pages as $child_page ) { ?>

            <h2><?php echo get_the_title($child_page); ?></h2>
            <div class="gallery-row">

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

            </div><!-- .row (inner) -->

        <?php }
    return ob_get_clean();
}