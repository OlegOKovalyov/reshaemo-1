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
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/sprvk/akademspavka-90x130.jpg" alt="Card image cap" width="90" height="130"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Академическая справка</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-spravku/' ?>" class="btn btn-order">Заказать</a>
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
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/sprvk/archive_spavka_90x130.jpg" alt="Card image cap" width="90" height="130"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Архивная<br /> справка</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-spravku/' ?>" class="btn btn-order">Заказать</a>
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
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/sprvk/spravka_vyzov_ses_90x130.jpg" alt="Card image cap" width="90" height="130"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Справка-вызов<br /> на сессию</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-spravku/' ?>" class="btn btn-order">Заказать</a>
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
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/sprvk/obuchenii_spravka_90x130.jpg" alt="Card image cap" width="90" height="130"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Справка об обучении</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-spravku/' ?>" class="btn btn-order">Заказать</a>
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
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/sprvk/voenkomat_spravka_90x130.jpg" alt="Card image cap" width="90" height="130"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Справка в военкомат</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-spravku/' ?>" class="btn btn-order">Заказать</a>
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
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/sprvk/prilozhenie-diplomu-vuz-90x130.jpg" alt="Card image cap" width="90" height="130"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Приложение к диплому ВУЗа</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-spravku/' ?>" class="btn btn-order">Заказать</a>
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
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/sprvk/prilozhenie_ssuza_90x130.jpg" alt="Card image cap" width="90" height="130"></a>
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Приложение к диплому ССУЗа</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="<?php echo home_url() . '/zakazat-spravku/' ?>" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}

/**
 * Диплом о неполном высшем образовании. Бланк Гознак. Использование:
 * - в админке WordPress:
 * [diplnepolnvysh price="<цена-число>"][/diplnepolnvysh]
 * - в шаблоне WordPress:
 * <?php echo do_shortcode('[diplnepolnvysh price="<цена-число>"][/diplnepolnvysh]'); ?>
 */
add_shortcode( 'diplnepolnvysh', 'show_diplnepolnvysh');
function show_diplnepolnvysh( $atts, $content, $tag ) {
    $dipl_price = empty($atts['price']) ? '16 000' : esc_html($atts['price']);

    ob_start();
    ?>

        <div class="card card-vo">
			<a href="<?php echo bloginfo('template_url'); ?>/images/sprvk/dipl-neplnvysh-357x517.jpg"  data-fancybox data-caption="Диплом о неполном высшем образовании">
				<img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/sprvk/dipl-neplnvysh-90x130.jpg" alt="Card image cap" width="90" height="130"></a>	            
            <div class="card-body">
                <p class="card-text"><span class="upcase">О неполном<br />высшем</span><br /><span class="lcaseb">Бланк Гознак</span><br /></p>
                <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
                <a href="<?php echo home_url() . '/zakazat-diplom/' ?>" class="btn btn-order">Заказать</a>
            </div><!-- .card-body -->
        </div><!-- .card -->      

    <?php 
    return ob_get_clean();
}

/**
 * Карусель "Справки" (левый сайдбар страницы "Справки и свидетельства")
 */
add_shortcode( 'carouselspravki', 'show_carouselspravki');
function show_carouselspravki( $atts, $content, $tag ) {
    /*$dipl_price = empty($atts['price']) ? '22 000' : esc_html($atts['price']);
*/
    ob_start();
    ?>

<div class="container-fluid">
    <div class="container">

        <?php $child_pages = array( "511" ); ?>

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
 * Карусель "Свидетельства" (левый сайдбар страницы "Справки и свидетельства")
 */
add_shortcode( 'carouselsvva', 'show_carouselsvva');
function show_carouselsvva( $atts, $content, $tag ) {
    /*$dipl_price = empty($atts['price']) ? '22 000' : esc_html($atts['price']);
*/
    ob_start();
    ?>

<div class="container-fluid">
    <div class="container">

        <?php $child_pages = array( "812" ); // loc:812 web:1845 ?>

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