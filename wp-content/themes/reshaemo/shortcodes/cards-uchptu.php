<?php

/**
 * Диплом училища-ПТУ 2011 - 2018гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [dipluchptu201118 price="<цена-число>"][/dipluchptu201118]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[dipluchptu201118 price="<цена-число>"][/dipluchptu201118]'); ?>
 */
add_shortcode( 'dipluchptu201118', 'show_dipluchptu201118');
function show_dipluchptu201118( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '20 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/uchptu/uchptu-201118-640x449.jpg"  data-fancybox data-caption="Диплом училища-ПТУ с 2011 по 2018 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/uchptu/uchptu-201118-640x449.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом училища-ПТУ</span><br /> с 2011 по 2018 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Диплом училища-ПТУ 2007 - 2010гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [dipluchptu200710 price="<цена-число>"][/dipluchptu200710]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[dipluchptu200710 price="<цена-число>"][/dipluchptu200710]'); ?>
 */
add_shortcode( 'dipluchptu200710', 'show_dipluchptu200710');
function show_dipluchptu200710( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '20 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/uchptu/uchptu-200710-640x449.jpg"  data-fancybox data-caption="Диплом училища-ПТУ с 2007 по 2010 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/uchptu/uchptu-200710-640x449.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом училища-ПТУ</span><br /> с 2007 по 2010 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Диплом училища-ПТУ 1994 - 2006гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [dipluchptu199406 price="<цена-число>"][/dipluchptu199406]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[dipluchptu199406 price="<цена-число>"][/dipluchptu199406]'); ?>
 */
add_shortcode( 'dipluchptu199406', 'show_dipluchptu199406');
function show_dipluchptu199406( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '20 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/uchptu/uchptu-199406-640x449.jpg"  data-fancybox data-caption="Диплом училища-ПТУ с 1994 по 2006 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/uchptu/uchptu-199406-640x449.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом училища-ПТУ</span><br /> с 1994 по 2006 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Диплом училища-ПТУ до 1994 года Бланк Гознак. Использование:
 * - в админке WordPress:
 * [dipluchptudo1994 price="<цена-число>"][/dipluchptudo1994]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[dipluchptudo1994 price="<цена-число>"][/dipluchptudo1994]'); ?>
 */
add_shortcode( 'dipluchptudo1994', 'show_dipluchptudo1994');
function show_dipluchptudo1994( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '13 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/uchptu/uchptu-do-1994-640x449.jpg"  data-fancybox data-caption="Диплом училища-ПТУ до 1994 года">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/uchptu/uchptu-do-1994-640x449.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом училища-ПТУ</span><br />до 1994 года<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Карусель "Диплом училища-ПТУ" (левый сайдбар страницы "Средне-специальное образование")
 */
add_shortcode( 'carouseluchptu', 'show_carouseluchptu');
function show_carouseluchptu( $atts, $content, $tag ) {
    /*$dipl_price = empty($atts['price']) ? '22 000' : esc_html($atts['price']);
*/
    ob_start();
    ?>

<div class="container-fluid">
    <div class="container">

        <?php $child_pages = array( "875" ); ?>

        <div class="row">
            <div class="col-12">

                <?php foreach( $child_pages as $child_page ) { ?>

                    <h2 class="text-center"><?php echo get_the_title($child_page); ?></h2>
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

                <?php } ?>

            </div><!-- .col-12 -->
        </div><!-- .row --> 
    </div><!-- .container -->
</div><!-- .gallery .container-fluid -->

    <?php 
    return ob_get_clean();
}