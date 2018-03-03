<?php

/**
 * Академическая справка. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [akademspvk price="<цена-число>"][/akademspvk]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[akademspvk price="<цена-число>"][/akademspvk]'); ?>
 */
add_shortcode( 'akademspvk', 'show_akademspvk');
function show_akademspvk( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '11 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/sprvk/akademspavka-357x517.jpg"  data-fancybox data-caption="Академическая справка">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/sprvk/akademspavka-357x517.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Академическая справка</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Архивная справка. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [archspvk price="<цена-число>"][/archspvk]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[archspvk price="<цена-число>"][/archspvk]'); ?>
 */
add_shortcode( 'archspvk', 'show_archspvk');
function show_archspvk( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '6 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/sprvk/archive_spavka_357x517.jpg"  data-fancybox data-caption="Архивная справка">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/sprvk/archive_spavka_357x517.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Архивная<br /> справка</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Справка-вызов на сессию. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [svyzovspvk price="<цена-число>"][/svyzovspvk]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[svyzovspvk price="<цена-число>"][/svyzovspvk]'); ?>
 */
add_shortcode( 'svyzovspvk', 'show_svyzovspvk');
function show_svyzovspvk( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '7 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/sprvk/spravka_vyzov_ses_357x517.jpg"  data-fancybox data-caption="Справка-вызов на сессию">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/sprvk/spravka_vyzov_ses_357x517.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Справка-вызов<br /> на сессию</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Справка об обучении. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [obuchspvk price="<цена-число>"][/obuchspvk]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[obuchspvk price="<цена-число>"][/obuchspvk]'); ?>
 */
add_shortcode( 'obuchspvk', 'show_obuchspvk');
function show_obuchspvk( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '4 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/sprvk/obuchenii_spravka_357x517.jpg"  data-fancybox data-caption="Справка об обучении">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/sprvk/obuchenii_spravka_357x517.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Справка об обучении</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Справка в военкомат. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [voenkomspvk price="<цена-число>"][/voenkomspvk]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[voenkomspvk price="<цена-число>"][/voenkomspvk]'); ?>
 */
add_shortcode( 'voenkomspvk', 'show_voenkomspvk');
function show_voenkomspvk( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '7 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/sprvk/voenkomat_spravka_357x517.jpg"  data-fancybox data-caption="Справка в военкомат">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/sprvk/voenkomat_spravka_357x517.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Справка в военкомат</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Приложение к диплому ВУЗа. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [vuzdiplpr price="<цена-число>"][/vuzdiplpr]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[vuzdiplpr price="<цена-число>"][/vuzdiplpr]'); ?>
 */
add_shortcode( 'vuzdiplpr', 'show_vuzdiplpr');
function show_vuzdiplpr( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '7 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/sprvk/prilozhenie-diplomu-vuz-357x517.jpg"  data-fancybox data-caption="Приложение к диплому ВУЗа">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/sprvk/prilozhenie-diplomu-vuz-357x517.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Приложение к диплому ВУЗа</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Приложение к диплому ССУЗа. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [ssuzdiplpr price="<цена-число>"][/ssuzdiplpr]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[ssuzdiplpr price="<цена-число>"][/ssuzdiplpr]'); ?>
 */
add_shortcode( 'ssuzdiplpr', 'show_ssuzdiplpr');
function show_ssuzdiplpr( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '7 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/sprvk/prilozhenie_ssuza_357x517.jpg"  data-fancybox data-caption="Приложение к диплому ССУЗа">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/sprvk/prilozhenie_ssuza_357x517.jpg" alt="Card image cap"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Приложение к диплому ССУЗа</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}