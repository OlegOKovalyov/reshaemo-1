<?php

/**
 * Диплом техникума-колледжа 2014 - 2018гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [dipltechclg201418 price="<цена-число>"][/dipltechclg201418]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[dipltechclg201418 price="<цена-число>"][/dipltechclg201418]'); ?>
 */
add_shortcode( 'dipltechclg201418', 'show_dipltechclg201418');
function show_dipltechclg201418( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '18 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/techclg/tehnikum-201418-640x449.jpg"  data-fancybox data-caption="Диплом техникума-колледжа с 2014 по 2018 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/techclg/tehnikum-201418-104x73.jpg" alt="Card image cap" width="104" height="73"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом техникума-колледжа</span><br /> с 2014 по 2018 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Диплом техникума-колледжа 2011 - 2013гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [dipltechclg201113 price="<цена-число>"][/dipltechclg201113]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[dipltechclg201113 price="<цена-число>"][/dipltechclg201113]'); ?>
 */
add_shortcode( 'dipltechclg201113', 'show_dipltechclg201113');
function show_dipltechclg201113( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '18 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/techclg/tehnikum-201113-640x449.jpg"  data-fancybox data-caption="Диплом техникума-колледжа с 2011 по 2013 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/techclg/tehnikum-201113-104x73.jpg" alt="Card image cap" width="104" height="73"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом техникума-колледжа</span><br /> с 2011 по 2013 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}


/**
 * Диплом техникума-колледжа 2007 - 2010гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [dipltechclg200710 price="<цена-число>"][/dipltechclg200710]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[dipltechclg200710 price="<цена-число>"][/dipltechclg200710]'); ?>
 */
add_shortcode( 'dipltechclg200710', 'show_dipltechclg200710');
function show_dipltechclg200710( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '18 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/techclg/tehnikum-200710-640x449.jpg"  data-fancybox data-caption="Диплом техникума-колледжа с 2007 по 2010 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/techclg/tehnikum-200710-104x73.jpg" alt="Card image cap" width="104" height="73"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом техникума-колледжа</span><br /> с 2007 по 2010 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Диплом техникума-колледжа 1997 - 2006гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [dipltechclg199706 price="<цена-число>"][/dipltechclg199706]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[dipltechclg199706 price="<цена-число>"][/dipltechclg199706]'); ?>
 */
add_shortcode( 'dipltechclg199706', 'show_dipltechclg199706');
function show_dipltechclg199706( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '17 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/techclg/tehnikum-199706-640x449.jpg"  data-fancybox data-caption="Диплом техникума-колледжа с 1997 по 2006 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/techclg/tehnikum-199706-104x73.jpg" alt="Card image cap" width="104" height="73"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом техникума-колледжа</span><br /> с 1997 по 2006 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Диплом ССУЗа. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [diplssuza price="<цена-число>"][/diplssuza]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplssuza price="<цена-число>"][/diplssuza]'); ?>
 */
add_shortcode( 'diplssuza', 'show_diplssuza');
function show_diplssuza( $atts, $content, $tag ) {
	//$dipl_price = empty($atts['price']) ? '18 000' : esc_html($atts['price']);

	ob_start();
	?>
	<div class="card-vuz-ssuz d-flex justify-content-center">
	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/techclg/tehnikum-201417-640x449.jpg"  data-fancybox data-caption="Диплом техникума-колледжа с 2014 по 2018 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/techclg/tehnikum-201417-640x449.jpg" alt="Card image cap" width="104" height="73"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом ССУЗа</span><br /><span class="lcaseb">Настоящий Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      
	</div>
	<?php 
	return ob_get_clean();
}

/**
 * Диплом техникума СССР. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [dipltechsssr price="<цена-число>"][/dipltechsssr]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[dipltechsssr price="<цена-число>"][/dipltechsssr]'); ?>
 */
add_shortcode( 'dipltechsssr', 'show_dipltechsssr');
function show_dipltechsssr( $atts, $content, $tag ) {
	//$dipl_price = empty($atts['price']) ? '18 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/techclg/tehnikum-do-1996-640x214.jpg"  data-fancybox data-caption="Диплом техникума до 1996 года СССР">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/techclg/tehnikum-do-1996-640x214.jpg" alt="Card image cap" width="104" height="73"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом техникума</span><br />до 1996 года СССР<br /><span class="lcaseb">Настоящий Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Карусель "Диплом техникума-колледжа" (левый сайдбар страницы "Средне-специальное образование")
 */
add_shortcode( 'carouseltechclg', 'show_carouseltechclg');
function show_carouseltechclg( $atts, $content, $tag ) {
    /*$dipl_price = empty($atts['price']) ? '22 000' : esc_html($atts['price']);
*/
    ob_start();
    ?>

<div class="container-fluid">
    <div class="container">

        <?php $child_pages = array( "470" ); ?>

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