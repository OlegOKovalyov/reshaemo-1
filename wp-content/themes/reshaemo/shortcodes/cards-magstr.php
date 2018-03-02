<?php

/**
 * Диплом магистра 2014 - 2018гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [diplmagstr201418 price="<цена-число>"][/diplmagstr201418]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplmagstr201418 price="<цена-число>"][/diplmagstr201418]'); ?>
 */
add_shortcode( 'diplmagstr201418', 'show_diplmagstr201418');
function show_diplmagstr201418( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '20 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/magstr/magistr-201418-640x449.jpg"  data-fancybox data-caption="Диплом магистра с 2014 по 2018 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/magstr/magistr-201418-640x449.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом магистра</span><br /> с 2014 по 2018 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Диплом магистра 2010 - 2013гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [diplmagstr201013 price="<цена-число>"][/diplmagstr201013]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplmagstr201013 price="<цена-число>"][/diplmagstr201013]'); ?>
 */
add_shortcode( 'diplmagstr201013', 'show_diplmagstr201013');
function show_diplmagstr201013( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '18 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/magstr/magistr-201013-640x449.jpg"  data-fancybox data-caption="Диплом магистра с 2010 по 2013 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/magstr/magistr-201013-640x449.jpg" alt="Card image cap"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом магистра</span><br /> с 2010 по 2013 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}


/**
 * Диплом магистра 2004 - 2009гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [diplmagstr200409 price="<цена-число>"][/diplmagstr200409]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplmagstr200409 price="<цена-число>"][/diplmagstr200409]'); ?>
 */
add_shortcode( 'diplmagstr200409', 'show_diplmagstr200409');
function show_diplmagstr200409( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '17 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/magstr/magistr-200409-640x449.jpg"  data-fancybox data-caption="Диплом магистра с 2004 по 2009 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/magstr/magistr-200409-640x449.jpg" alt="Card image cap"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом магистра</span><br /> с 2004 по 2009 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Диплом магистра 1997 - 2003гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [diplmagstr199703 price="<цена-число>"][/diplmagstr199703]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplmagstr199703 price="<цена-число>"][/diplmagstr199703]'); ?>
 */
add_shortcode( 'diplmagstr199703', 'show_diplmagstr199703');
function show_diplmagstr199703( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '16 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/magstr/magistr-199703-640x449.jpg"  data-fancybox data-caption="Диплом магистра с 1997 по 2003 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/magstr/magistr-199703-640x449.jpg" alt="Card image cap"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом магистра</span><br /> с 1997 по 2003 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}