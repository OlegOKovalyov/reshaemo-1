<?php

/**
 * Свидетельство о рождении. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [borncertf price="<цена-число>"][/borncertf]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[borncertf price="<цена-число>"][/borncertf]'); ?>
 */
add_shortcode( 'borncertf', 'show_borncertf');
function show_borncertf( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '18 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/svidva/born_cert-373x517.jpg"  data-fancybox data-caption="Свидетельство о рождении">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/svidva/born_cert-373x517.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Свидетельство о рождении</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Свидетельство о смерти. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [deathcertf price="<цена-число>"][/deathcertf]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[deathcertf price="<цена-число>"][/deathcertf]'); ?>
 */
add_shortcode( 'deathcertf', 'show_deathcertf');
function show_deathcertf( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '18 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/svidva/deth_cert-368x517.jpg"  data-fancybox data-caption="Свидетельство о сметри">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/svidva/deth_cert-368x517.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Свидетельство о сметри</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Свидетельство о браке. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [margcertf price="<цена-число>"][/margcertf]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[margcertf price="<цена-число>"][/margcertf]'); ?>
 */
add_shortcode( 'margcertf', 'show_margcertf');
function show_margcertf( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '16 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/svidva/marriage_cert-370x517.jpg"  data-fancybox data-caption="Свидетельство о браке">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/svidva/marriage_cert-370x517.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Свидетельство о браке</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Свидетельство о разводе. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [devrcertf price="<цена-число>"][/devrcertf]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[devrcertf price="<цена-число>"][/devrcertf]'); ?>
 */
add_shortcode( 'devrcertf', 'show_devrcertf');
function show_devrcertf( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '16 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/svidva/devorce_cert-368x517.jpg"  data-fancybox data-caption="Свидетельство о разводе">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/svidva/devorce_cert-368x517.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Свидетельство о разводе</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Свидетельство об усыновлении. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [adoptcertf price="<цена-число>"][/adoptcertf]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[adoptcertf price="<цена-число>"][/adoptcertf]'); ?>
 */
add_shortcode( 'adoptcertf', 'show_adoptcertf');
function show_adoptcertf( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '15 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/svidva/adoption_cert_368x517.jpg"  data-fancybox data-caption="Свидетельство об усыновлении">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/svidva/adoption_cert_368x517.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Свидетельство об усыновлении</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Свидетельство об отцовстве. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [fathrcertf price="<цена-число>"][/fathrcertf]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[fathrcertf price="<цена-число>"][/fathrcertf]'); ?>
 */
add_shortcode( 'fathrcertf', 'show_fathrcertf');
function show_fathrcertf( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '15 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/svidva/father_cert_368x517.jpg"  data-fancybox data-caption="Свидетельство об отцовстве">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/svidva/father_cert_368x517.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Свидетельство об отцовстве</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Свидетельство о перемене имени. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [chngnmcertf price="<цена-число>"][/chngnmcertf]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[chngnmcertf price="<цена-число>"][/chngnmcertf]'); ?>
 */
add_shortcode( 'chngnmcertf', 'show_chngnmcertf');
function show_chngnmcertf( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '18 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/svidva/changename_cert_368x517.jpg"  data-fancybox data-caption="Свидетельство о перемене имени">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/svidva/changename_cert_368x517.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Свидетельство о перемене имени</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}