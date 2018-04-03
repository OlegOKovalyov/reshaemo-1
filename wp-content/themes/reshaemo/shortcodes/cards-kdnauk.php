<?php

/**
 * Диплом кандидата наук 1997 - 2018гг. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [diplkdnauk199718 price="<цена-число>"][/diplkdnauk199718]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplkdnauk199718 price="<цена-число>"][/diplkdnauk199718]'); ?>
 */
add_shortcode( 'diplkdnauk199718', 'show_diplkdnauk199718');
function show_diplkdnauk199718( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '23 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/kdnauk/kandidat-nauk-199718-640x225.jpg"  data-fancybox data-caption="Диплом кандидата наук с 1997 по 2018 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/kdnauk/kandidat-nauk-199718-640x225.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом кандидата наук</span><br />с 1997 по 2018 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Диплом кандидата наук до 1996г. - СССР Бланк Гознак. Использование:
 * - в админке WordPress:
 * [diplkdnaukdo1996 price="<цена-число>"][/diplkdnaukdo1996]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplkdnaukdo1996 price="<цена-число>"][/diplkdnaukdo1996]'); ?>
 */
add_shortcode( 'diplkdnaukdo1996', 'show_diplkdnaukdo1996');
function show_diplkdnaukdo1996( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '21 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/kdnauk/kandidat-nauk-do-1996-640x225.jpg"  data-fancybox data-caption="Диплом кандидата наук до 1996 года">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/kdnauk/kandidat-nauk-do-1996-640x225.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом кандидата наук</span><br />до 1996 года<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Диплом доктора наук 1997 - 2018гг. Бланк Гознак. Использование:
 * - в админке WordPress:dipldknauk199718
 * [dipldknauk199718 price="<цена-число>"][/dipldknauk199718]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[dipldknauk199718 price="<цена-число>"][/dipldknauk199718]'); ?>
 */
add_shortcode( 'dipldknauk199718', 'show_dipldknauk199718');
function show_dipldknauk199718( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '23 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/kdnauk/doctor-nauk-199718-640x226.jpg"  data-fancybox data-caption="Диплом доктора наук с 1997 по 2018 год">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/kdnauk/doctor-nauk-199718-640x226.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом доктора наук</span><br />с 1997 по 2018 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Диплом доктора наук до 1996г. - СССР Бланк Гознак. Использование:
 * - в админке WordPress:
 * [dipldnnaukdo1996 price="<цена-число>"][/dipldnnaukdo1996]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[dipldnnaukdo1996 price="<цена-число>"][/dipldnnaukdo1996]'); ?>
 */
add_shortcode( 'dipldnnaukdo1996', 'show_dipldnnaukdo1996');
function show_dipldnnaukdo1996( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '21 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/kdnauk/doctor-nauk-do-1996-640x226.jpg"  data-fancybox data-caption="Диплом доктора наук наук до 1996 года">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/kdnauk/doctor-nauk-do-1996-640x226.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом доктора наук</span><br />до 1996 года<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Аттестат доцента. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [attdotsenta price="<цена-число>"][/attdotsenta]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[attdotsenta price="<цена-число>"][/attdotsenta]'); ?>
 */
add_shortcode( 'attdotsenta', 'show_attdotsenta');
function show_attdotsenta( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '23 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/kdnauk/attdotsenta-640x225.jpg"  data-fancybox data-caption="Аттестат доцента (Киржач)">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/kdnauk/attdotsenta-640x225.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Аттестат доцента</span><br />(Киржач)<br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}