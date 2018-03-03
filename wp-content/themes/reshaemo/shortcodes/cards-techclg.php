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
			<a href="<?php echo bloginfo('template_url'); ?>/images/techclg/tehnikum-201417-640x449.jpg"  data-fancybox data-caption="Диплом техникума-колледжа с 2014 по 2018 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/techclg/tehnikum-201417-640x449.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом техникума-колледжа</span><br /> с 2014 по 2018 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
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
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/techclg/tehnikum-201113-640x449.jpg" alt="Card image cap"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом техникума-колледжа</span><br /> с 2011 по 2013 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
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
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/techclg/tehnikum-200710-640x449.jpg" alt="Card image cap"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом техникума-колледжа</span><br /> с 2007 по 2010 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
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
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/techclg/tehnikum-199706-640x449.jpg" alt="Card image cap"></a>	    	
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом техникума-колледжа</span><br /> с 1997 по 2006 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}