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
	            <a href="#" class="btn btn-order">Заказать</a>
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
	            <a href="#" class="btn btn-order">Заказать</a>
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
	            <a href="#" class="btn btn-order">Заказать</a>
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
	            <a href="#" class="btn btn-order">Заказать</a>
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
	            <a href="#" class="btn btn-order">Заказать</a>
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
	            <a href="#" class="btn btn-order">Заказать</a>
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
	            <a href="#" class="btn btn-order">Заказать</a>
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
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}