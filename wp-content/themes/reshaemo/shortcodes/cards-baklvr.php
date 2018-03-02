<?php

/**
 * Диплом бакалавра 2014 - 2018гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [diplbaklvr201417 price="<цена-число>"][/diplbaklvr201417]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplbaklvr201417 price="<цена-число>"][/diplbaklvr201417]'); ?>
 */
add_shortcode( 'diplbaklvr201417', 'show_diplbaklvr201417');
function show_diplbaklvr201417( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '20 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/baklvr/bakalavr-201418-640x449.jpg"  data-fancybox data-caption="Диплом бакалавра с 2014 по 2018 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/baklvr/bakalavr-201418-640x449.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом бакалавра</span><br /> с 2014 по 2018 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Диплом бакалавра 2010 - 2013гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [diplbaklvr201013 price="<цена-число>"][/diplbaklvr201013]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplbaklvr201013 price="<цена-число>"][/diplbaklvr201013]'); ?>
 */
add_shortcode( 'diplbaklvr201013', 'show_diplbaklvr201013');
function show_diplbaklvr201013( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '18 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/baklvr/bakalavr-201013-640x449.jpg"  data-fancybox data-caption="Диплом бакалавра с 2010 по 2013 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/baklvr/bakalavr-201013-640x449.jpg" alt="Card image cap"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом бакалавра</span><br /> с 2010 по 2013 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}


/**
 * Диплом бакалавра 2004 - 2009гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [diplbaklvr200409 price="<цена-число>"][/diplbaklvr200409]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplbaklvr200409 price="<цена-число>"][/diplbaklvr200409]'); ?>
 */
add_shortcode( 'diplbaklvr200409', 'show_diplbaklvr200409');
function show_diplbaklvr200409( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '17 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/baklvr/bakalavr-200409-640x449.jpg"  data-fancybox data-caption="Диплом бакалавра с 2004 по 2009 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/baklvr/bakalavr-200409-640x449.jpg" alt="Card image cap"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом бакалавра</span><br /> с 2004 по 2009 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Диплом бакалавра 1997 - 2003гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [diplbaklvr199703 price="<цена-число>"][/diplbaklvr199703]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplbaklvr199703 price="<цена-число>"][/diplbaklvr199703]'); ?>
 */
add_shortcode( 'diplbaklvr199703', 'show_diplbaklvr199703');
function show_diplbaklvr199703( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '16 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/baklvr/bakalavr-199703-640x449.jpg"  data-fancybox data-caption="Диплом бакалавра с 1997 по 2003 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/baklvr/bakalavr-199703-640x449.jpg" alt="Card image cap"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом бакалавра</span><br /> с 1997 по 2003 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}