<?php

/**
 * Диплом специалиста 2014 - 2018гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [diplspec201417 price="<цена-число>"][/diplspec201417]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplspec201417 price="<цена-число>"][/diplspec201417]'); ?>
 */
add_shortcode( 'diplspec201417', 'show_diplspec201417');
function show_diplspec201417( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '20 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/specs/diplom-2014-spec-640x449.jpg"  data-fancybox data-caption="Диплом специалиста с 2014 по 2018 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/specs/diplom-2014-spec-640x449.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом специалиста</span><br /> с 2014 по 2018 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Диплом специалиста 2011 - 2013гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [diplspec201113 price="<цена-число>"][/diplspec201113]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplspec201113 price="<цена-число>"][/diplspec201113]'); ?>
 */
add_shortcode( 'diplspec201113', 'show_diplspec201113');
function show_diplspec201113( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '18 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/specs/diplom-201113-spec-640x449.jpg"  data-fancybox data-caption="Диплом специалиста с 2011 по 2013 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/specs/diplom-201113-spec-640x449.jpg" alt="Card image cap"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом специалиста</span><br /> с 2011 по 2013 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Диплом специалиста 2009 - 2011гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [diplspec200911 price="<цена-число>"][/diplspec200911]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplspec200911 price="<цена-число>"][/diplspec200911]'); ?>
 */
add_shortcode( 'diplspec200911', 'show_diplspec200911');
function show_diplspec200911( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '18 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/specs/diplom-200911-spec-640x449.jpg"  data-fancybox data-caption="Диплом специалиста с 2009 по 2011 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/specs/diplom-200911-spec-640x449.jpg" alt="Card image cap"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом специалиста</span><br /> с 2009 по 2011 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Диплом специалиста 2004 - 2008гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [diplspec200408 price="<цена-число>"][/diplspec200408]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplspec200408 price="<цена-число>"][/diplspec200408]'); ?>
 */
add_shortcode( 'diplspec200408', 'show_diplspec200408');
function show_diplspec200408( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '17 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/specs/diplom-20048-spec-640x449.jpg"  data-fancybox data-caption="Диплом специалиста с 2004 по 2008 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/specs/diplom-20048-spec-640x449.jpg" alt="Card image cap"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом специалиста</span><br /> с 2004 по 2008 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Диплом специалиста 1997 - 2003гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [diplspec199703 price="<цена-число>"][/diplspec199703]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplspec199703 price="<цена-число>"][/diplspec199703]'); ?>
 */
add_shortcode( 'diplspec199703', 'show_diplspec199703');
function show_diplspec199703( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '16 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/specs/diplom-199703-spec-640x449.jpg"  data-fancybox data-caption="Диплом специалиста с 1997 по 2003 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/specs/diplom-199703-spec-640x449.jpg" alt="Card image cap"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом специалиста</span><br /> с 1997 по 2004 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Диплом специалиста до 1996 года - СССР. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [diplspecdo1996 price="<цена-число>"][/diplspecdo1996]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplspecdo1996 price="<цена-число>"][/diplspecdo1996]'); ?>
 */
add_shortcode( 'diplspecdo1996', 'show_diplspecdo1996');
function show_diplspecdo1996( $atts, $content, $tag ) {
    $dipl_price = empty($atts['price']) ? '16 000' : esc_html($atts['price']);

    ob_start();
    ?>

        <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/specs/diplom-vuza-do-1996-640x449.jpg"  data-fancybox data-caption="Диплом специалиста до 1996 года СССР">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/specs/diplom-vuza-do-1996-640x449.jpg" alt="Card image cap"></a>	            
            <div class="card-body">
                <p class="card-text"><span class="upcase">Диплом специалиста</span><br /> до 1996 года - СССР<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
                <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
                <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
            </div><!-- .card-body -->
        </div><!-- .card -->      

    <?php 
    return ob_get_clean();
}

/**
 * Диплом специалиста с отличием 2014 - 2018 года. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [diplspecred201418 price="<цена-число>"][/diplspecred201418]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplspecred201418 price="<цена-число>"][/diplspecred201418]'); ?>
 */
add_shortcode( 'diplspecred201418', 'show_diplspecred201418');
function show_diplspecred201418( $atts, $content, $tag ) {
    $dipl_price = empty($atts['price']) ? '22 000' : esc_html($atts['price']);

    ob_start();
    ?>

        <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/specs/spec-red-640x450.jpg"  data-fancybox data-caption="Диплом специалиста с отличием 2014 - 2018 года">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/specs/spec-red-640x450.jpg" alt="Card image cap"></a>	            
            <div class="card-body">
                <p class="card-text"><span class="upcase">Диплом специалиста</span><br />с отличием<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
                <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
                <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
            </div><!-- .card-body -->
        </div><!-- .card -->      

    <?php 
    return ob_get_clean();
}

/**
 * Диплом специалиста нового образца 2014 - 2018гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [diplspecnew201417 price="<цена-число>"][/diplspecnew201417]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplspecnew201417 price="<цена-число>"][/diplspecnew201417]'); ?>
 */
add_shortcode( 'diplspecnew201417', 'show_diplspecnew201417');
function show_diplspecnew201417( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '20 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/specs/diplom-2014-spec-640x449.jpg"  data-fancybox data-caption="Диплом специалиста с 2014 по 2018 год нового образца">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/specs/diplom-2014-spec-640x449.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом специалиста</span><br />нового образца<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Диплом ВУЗа. Настоящий Бланк Гознак. (Для страницы "Высшее образование")
 * Использование:
 * - в админке WordPress:
 * [diplvuza price="<цена-число>"][/diplvuza]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplvuza price="<цена-число>"][/diplvuza]'); ?>
 */
add_shortcode( 'diplvuza', 'show_diplvuza');
function show_diplvuza( $atts, $content, $tag ) {
	//$dipl_price = empty($atts['price']) ? '20 000' : esc_html($atts['price']);

	ob_start();
	?>
	<div class="card-vuz-ssuz d-flex justify-content-center">
	    <div class="card card-vo" style="width: 250px">
			<a href="<?php echo bloginfo('template_url'); ?>/images/specs/diplom-2014-spec-640x449.jpg"  data-fancybox data-caption="Диплом специалиста с 2014 по 2018 год">
				<img class="card-img-top w-100" src="<?php echo bloginfo('template_url'); ?>/images/specs/diplom-2014-spec-640x449.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом ВУЗа</span><br /><span class="lcaseb">Настоящий Бланк Гознак</span><br /></p>
	            <!-- <h4 class="card-title"><?php //echo esc_html( $atts['price'] ); ?></h4> -->
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      
	</div><!-- .card-vuz-ssuz -->
	<?php 
	return ob_get_clean();
}

/**
 * Карусель "Диплом специалиста" для страницы "Купить диплом специалиста" (левый сайдбар страницы "Высшее образование")
 */
add_shortcode( 'carouselspec', 'show_carouselspec');
function show_carouselspec( $atts, $content, $tag ) {
    /*$dipl_price = empty($atts['price']) ? '22 000' : esc_html($atts['price']);
*/
    ob_start();
    ?>

<div class="container-fluid">
    <div class="container">

        <?php $child_pages = array( "317" ); ?>

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