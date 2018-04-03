<?php

/* АТТЕСТАТЫ ШКОЛЫ 11 КЛАСС */

/**
 * Аттестат школы 11 класс 2014 - 2018гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [attst201418 price="<цена-число>"][/attst201418]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[attst201418 price="<цена-число>"][/attst201418]'); ?>
 */
add_shortcode( 'attst201418', 'show_attst201418');
function show_attst201418( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '18 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/attst/attestat11-201418-640x451.jpg"  data-fancybox data-caption="Аттестат школы за 11 класс с 2014 по 2018 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/attst/attestat11-201418-640x451.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Аттестат школы за 11 класс</span><br /> с 2014 по 2018 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-attestat/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Аттестат школы 11 класс 2010 - 2013гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [attst201013 price="<цена-число>"][/attst201013]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[attst201013 price="<цена-число>"][/attst201013]'); ?>
 */
add_shortcode( 'attst201013', 'show_attst201013');
function show_attst201013( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '17 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/attst/attestat-201013-640x466.jpg"  data-fancybox data-caption="Аттестат школы за 11 класс с 2010 по 2013 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/attst/attestat-201013-640x466.jpg" alt="Card image cap"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Аттестат школы за 11 класс</span><br /> с 2010 по 2013 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-attestat/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}


/**
 * Аттестат школы 11 класс 1994 - 2009гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [attst199409 price="<цена-число>"][/attst199409]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[attst199409 price="<цена-число>"][/attst199409]'); ?>
 */
add_shortcode( 'attst199409', 'show_attst199409');
function show_attst199409( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '16 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/attst/attestat-199409-640x454.jpg"  data-fancybox data-caption="Аттестат школы за 11 класс с 1994 по 2009 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/attst/attestat-199409-640x454.jpg" alt="Card image cap"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Аттестат школы за 11 класс</span><br /> с 1994 по 2009 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-attestat/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Аттестат школы 11 класс до 1994г. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [attstdo1994 price="<цена-число>"][/attstdo1994]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[attstdo1994 price="<цена-число>"][/attstdo1994]'); ?>
 */
add_shortcode( 'attstdo1994', 'show_attstdo1994');
function show_attstdo1994( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '16 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/attst/attestat-do-1994-640x451.jpg"  data-fancybox data-caption="Аттестат школы за 11 класс до 1994 года">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/attst/attestat-do-1994-640x451.jpg" alt="Card image cap"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Аттестат школы за 11 класс</span><br />до 1994 года<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-attestat/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/* АТТЕСТАТЫ ШКОЛЫ 9 КЛАСС */

/**
 * Аттестат школы 9 класс 2014 - 2018гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [attst201418_9 price="<цена-число>"][/attst201418_9]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[attst201418_9 price="<цена-число>"][/attst201418_9]'); ?>
 */
add_shortcode( 'attst201418_9', 'show_attst201418_9');
function show_attst201418_9( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '18 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/attst/attestat9-201418-640x450.jpg"  data-fancybox data-caption="Аттестат школы за 9 класс с 2014 по 2018 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/attst/attestat9-201418-640x450.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Аттестат школы за 9 класс</span><br /> с 2014 по 2018 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-attestat/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Аттестат школы 9 класс 2010 - 2013гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [attst201013_9 price="<цена-число>"][/attst201013_9]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[attst201013_9 price="<цена-число>"][/attst201013_9]'); ?>
 */
add_shortcode( 'attst201013_9', 'show_attst201013_9');
function show_attst201013_9( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '17 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/attst/attestat9-201013-640x450.jpg"  data-fancybox data-caption="Аттестат школы за 9 класс с 2010 по 2013 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/attst/attestat9-201013-640x450.jpg" alt="Card image cap"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Аттестат школы за 9 класс</span><br /> с 2010 по 2013 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-attestat/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Аттестат школы 9 класс 2007 - 2009гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [attst200709_9 price="<цена-число>"][/attst200709_9]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[attst200709_9 price="<цена-число>"][/attst200709_9]'); ?>
 */
add_shortcode( 'attst200709_9', 'show_attst200709_9');
function show_attst200709_9( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '16 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/attst/attestat9-200709-640x450.jpg"  data-fancybox data-caption="Аттестат школы за 9 класс с 2007 по 2009 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/attst/attestat9-200709-640x450.jpg" alt="Card image cap"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Аттестат школы за 9 класс</span><br /> с 2007 по 2009 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-attestat/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Аттестат школы 9 класс 1994 - 2006гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [attst199406_9 price="<цена-число>"][/attst199406_9]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[attst199406_9 price="<цена-число>"][/attst199406_9]'); ?>
 */
add_shortcode( 'attst199406_9', 'show_attst199406_9');
function show_attst199406_9( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '16 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/attst/attestat9-199406-640x450.jpg"  data-fancybox data-caption="Аттестат школы за 9 класс с 1994 по 1996 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/attst/attestat9-199406-640x450.jpg" alt="Card image cap"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Аттестат школы за 9 класс</span><br />с 1994 по 1996 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-attestat/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Аттестат средней школы. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [attsrshkoly price="<цена-число>"][/attsrshkoly]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[attsrshkoly price="<цена-число>"][/attsrshkoly]'); ?>
 */
add_shortcode( 'attsrshkoly', 'show_attsrshkoly');
function show_attsrshkoly( $atts, $content, $tag ) {
	//$dipl_price = empty($atts['price']) ? '18 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/attst/attestat11-201418-640x451.jpg"  data-fancybox data-caption="Аттестат средней школы">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/attst/attestat11-201418-640x451.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Аттестат<br />средней школы</span><br /><span class="lcaseb">Настоящий Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-attestat/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Карусель "Аттестат 9 класс" (левый сайдбар страницы "Аттестаты школы")
 */
add_shortcode( 'carouselatt9class', 'show_carouselatt9class');
function show_carouselatt9class( $atts, $content, $tag ) {
    /*$dipl_price = empty($atts['price']) ? '22 000' : esc_html($atts['price']);
*/
    ob_start();
    ?>

<div class="container-fluid">
    <div class="container">

        <?php $child_pages = array( "501" ); ?>

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

/**
 * Карусель "Аттестат 11 класс" (левый сайдбар страницы "Аттестаты школы")
 */
add_shortcode( 'carouselatt11class', 'show_carouselatt11class');
function show_carouselatt11class( $atts, $content, $tag ) {
    /*$dipl_price = empty($atts['price']) ? '22 000' : esc_html($atts['price']);
*/
    ob_start();
    ?>

<div class="container-fluid">
    <div class="container">

        <?php $child_pages = array( "485" ); ?>

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