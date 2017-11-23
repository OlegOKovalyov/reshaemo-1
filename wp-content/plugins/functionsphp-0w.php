<?php
/* ====================================
 * Plugin Name: Functions.PHP
 * Description: My New functions.php
 * Version: 1.0.0
 * ==================================== */

/*Настройка плагина - проверка, что он работает*/
function functionsphp_head_info(){
 echo "\n<!-- Плагин Functions.PHP активен -->\n";
}
add_action('wp_head', 'functionsphp_head_info');

/*Самый простой шорткод*/
add_shortcode( 'phone', 'show_phone');
function show_phone () {
	return '+380 50 322-7611' ;
}

/*Шорткод, который грузится из файла - не выполняется php-код.
Будет работать, если в файле будет находиться чистый HTML*/
add_shortcode( 'topmenu', 'show_topmenu');
function show_topmenu( $atts, $content, $tag ) {
	$output = '';
    $output .= file_get_contents('wp-content/themes/reshaemo/shortcodes/ftopmenu.php');
    return $output;
}

/*Шорткод, который грузится из файла - не выполняется php-код.
Будет работать, если в файле будет находиться чистый HTML*/
add_shortcode( 'topmenuftr', 'show_topmenuftr');
function show_topmenuftr( $atts, $content, $tag ) {
	$output = '';	
	$atts = shortcode_atts ( [
		'email' => 'dipgood.com@gmail.com',
		'tel1'  => '+7 (800) 200-69-81',
		'tel2'  => '+7 (800) 200-69-81',
	], $atts, 'topmenuftr' );	
    $output .= file_get_contents('wp-content/themes/reshaemo/shortcodes/ftopmenu.php');
    return $output;
}

/*Полностью рабочий шорткод. Грузится из буфера обмена, что ускоряет его  работу.
Может конфликтовать с другими плагинами, которые также используют буфер обмена,
если объема памяти буфера станет недостаточно.*/
add_shortcode( 'topmenubtm', 'show_topmenubtm');
function show_topmenubtm( $atts, $content, $tag ) {
	$brand_email = empty($atts['email']) ? 'dipgood.com@gmail.com' : esc_html($atts['email']);
	$brand_tel1 = empty($atts['tel1']) ? '+7 (800) 200-69-81' : esc_html($atts['tel1']);
	$brand_tel2 = empty($atts['tel2']) ? '+7 (800) 200-69-81' : esc_html($atts['tel2']);

	ob_start();
	?>
            <div class="top-wrap">
                <div class="row">
                    <div class="col-2">     
                        <div class="site-branding">
                            <div class="brand-card">
                                <div class="brand-card-body">
                                    <p class="brand-card-text">dipgood.com@gmail.com</p>
                                    <p class="brand-card-tel1">+7 (800) 200-69-81</p>
                                    <p class="brand-card-tel2">+7 (800) 200-69-81</p>
                                    <h4 class="brand-card-title"><a href="#" class="brand-card-link">Дипломы</a></h4>
                                    <h6 class="brand-card-subtitle mb-2">Гознаки, Аттестаты, Справки, Документы</h6>
                                </div><!-- .brand-card-body -->
                            </div><!-- .brand-card -->
                        </div><!-- .site-branding -->
                    </div><!-- .col-2 -->
                    <div class="triangle-left"></div>                      
                    <div class="col toplarge-menu">
                        <nav class="navbar navbar-expand-lg navbar-topmenu bg-topmenu">
                            <!--<a class="navbar-brand" href="#">Navbar</a>-->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavTop" aria-controls="navbarNavTop" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavTop">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <div class="nav-card">
                                            <img class="nav-card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/i_topmenu1.png" alt="Card image cap">
                                            <div class="nav-card-body">
                                                <a href="#" class="nav-link">Дипломы<br /> о высшем образовании <span class="sr-only">(current)</span></a>
                                            </div><!-- .nav-card-body -->
                                        </div><!-- .nav-card -->
                                    </li>
                                    <li class="nav-item">                                
                                        <div class="nav-card">
                                            <img class="nav-card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/i_topmenu2.png" alt="Card image cap">
                                            <div class="nav-card-body">
                                                <a href="#" class="nav-link">Дипломы<br /> о среднем образовании <span class="sr-only">(current)</span></a>
                                            </div><!-- .nav-card-body -->
                                        </div><!-- .nav-card -->        
                                    </li>
                                    <li class="nav-item">
                                        <div class="nav-card">
                                            <img class="nav-card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/i_topmenu3.png" alt="Card image cap">
                                            <div class="nav-card-body">
                                                <a href="#" class="nav-link">Дипломы<br /> ПТУ<br /><br /><span class="sr-only">(current)</span></a>
                                            </div><!-- .nav-card-body -->
                                        </div><!-- .nav-card -->
                                    </li>
                                    <li class="nav-item">
                                        <div class="nav-card">
                                            <img class="nav-card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/i_topmenu4.png" alt="Card image cap">
                                            <div class="nav-card-body">
                                                <a href="#" class="nav-link">Аттестаты<br /><br /><br /><span class="sr-only">(current)</span></a>
                                            </div><!-- .nav-card-body -->
                                        </div><!-- .nav-card -->
                                    </li>
                                    <li class="nav-item">
                                        <div class="nav-card">
                                            <img class="nav-card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/i_topmenu5.png" alt="Card image cap">
                                            <div class="nav-card-body">
                                                <a href="#" class="nav-link">Другие справки<br /> и документы<br /><br /><span class="sr-only">(current)</span></a>
                                            </div><!-- .nav-card-body -->
                                        </div><!-- .nav-card -->
                                    </li>                            
                                </ul>
                            </div>
                        </nav>
                    </div><!-- .col -->
                    <div class="triangle-right"></div>                         
                </div><!-- .row -->                    
            </div><!-- .top-wrap --> 
	<?php 
	return ob_get_clean();
}	

/* Шорткод для карточки товара Диплом специалиста 2014 - 2017гг. Бланк Гознак */
add_shortcode( 'diplspec201417', 'show_diplspec201417');
function show_diplspec201417( $atts, $content, $tag ) {
	$dipl_price = empty($atts['price']) ? '22 000' : esc_html($atts['price']);

	ob_start();
	?>

	    <div class="card card-vo">
	        <img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/diplom-2014-spec-300x210.jpg" alt="Card image cap">
	        <div class="card-body">
	            <p class="card-text"><span class="upcase">Диплом специалиста</span><br /> с 2014 по 2017 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p></p>
	            <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
	            <a href="#" class="btn btn-order">Заказать</a>
	        </div><!-- .card-body -->
	    </div><!-- .card -->      

	<?php 
	return ob_get_clean();
}	


/* Шорткод для карточки товара Диплом специалиста до 1996 года - СССР Бланк Гознак */
add_shortcode( 'diplspecdo1996', 'show_diplspecdo1996');
function show_diplspecdo1996( $atts, $content, $tag ) {
    $dipl_price = empty($atts['price']) ? '18 888' : esc_html($atts['price']);

    ob_start();
    ?>

        <div class="card card-vo">
            <img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/diplom-vuza-do-1996-640x449-210x147.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text"><span class="upcase">Диплом специалиста</span><br /> до 1996 года - СССР<br /><span class="lcaseb">Бланк Гознак</span><br /></p></p>
                <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
                <a href="#" class="btn btn-order">Заказать</a>
            </div><!-- .card-body -->
        </div><!-- .card -->      

    <?php 
    return ob_get_clean();
}   



/* Шорткод для карточки товара Диплом о среднем специальном образовании 2014 - 2017гг. */
add_shortcode( 'diplsrsobr201417', 'show_diplsrsobr201417');
function show_diplsrsobr201417( $atts, $content, $tag ) {
    $dipl_price = empty($atts['price']) ? '19 999' : esc_html($atts['price']);

    ob_start();
    ?>

        <div class="card">
            <img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/Diplom-2014-specialist.png" alt="Card image cap">
            <div class="card-body">
                <p class="card-text"><span class="upcase">Диплом о среднем специальном оразовании</span><br /> с 2014 по 2017 годы</p>
                <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
                <a href="#" class="btn btn-order">Заказать</a>
            </div><!-- .card-body -->
        </div><!-- .card -->

    <?php 
    return ob_get_clean();
}   

/* Шорткод для карточки товара Диплом бакалвра 2014 - 2017гг. Бланк Гознак */
add_shortcode( 'diplbaklvr201417', 'show_diplbaklvr201417');
function show_diplbaklvr201417( $atts, $content, $tag ) {
    $dipl_price = empty($atts['price']) ? '22 000' : esc_html($atts['price']);

    ob_start();
    ?>

        <div class="card card-vo">
            <img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/diplom-2014-spec-300x210.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text"><span class="upcase">Диплом бакалавра</span><br /> с 2014 по 2017 год<br /><span class="lcaseb">Бланк Гознак</span><br /></p></p>
                <h4 class="card-title"><?php echo esc_html( $atts['price'] ); ?></h4>
                <a href="#" class="btn btn-order">Заказать</a>
            </div><!-- .card-body -->
        </div><!-- .card -->      

    <?php 
    return ob_get_clean();
}

/* Шорткод для страницы Высшее образование, которая выводит карточки товара дочерних страниц */
add_shortcode( 'vyshobrz', 'show_vyshobrz');
function show_vyshobrz( $atts, $content, $tag ) {
    /*$dipl_price = empty($atts['price']) ? '22 000' : esc_html($atts['price']);
*/
    ob_start();
    ?>

<div class="container-fluid">
    <div class="container">

        <div class="row">
            <div class="col-12">


                <!--<h1><?php /*the_title();*/ ?></h1>-->
                <h2><?php echo get_the_title(56); ?></h2>
                <div class="row">

                    <!-- Выводим карточки товаров по 4 шт. в строку (не карусель) -->
                    <div class="gallery-certs">

                        <?php
                        $mypages = get_pages( array( 'child_of' => 56, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
                        foreach( $mypages as $page ) {      
                            $content = $page->post_content;
                            if ( ! $content ) continue; // пропустим страницу без контента
                            $content = apply_filters( 'the_content', $content );
                            ?>
                            
                            <div class="entry mscwhei_lst"><?php echo $content; ?></div>

                            <?php
                        } ?>

                    </div><!-- .gallery-certs -->
                    <!-- /Выводим карточки товаров по 4 шт. в строку (не карусель) -->
                </div><!-- .row  (inner)-->
                    
                <h2><?php echo get_the_title(74); ?></h2>
                <div class="row">
                    <!-- Выводим карточки товаров по 4 шт. в строку (карусель) -->
                    <div class="owl-carousel owl-theme gallery-certs">

                        <?php
                        $mypages = get_pages( array( 'child_of' => 74, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
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
                    <!-- /Выводим карточки товаров по 4 шт. в строку -->
                </div><!-- .row (inner) -->


                <h2><?php echo get_the_title(196); ?></h2>
                <div class="row">

                    <!-- Выводим карточки товаров по 4 шт. в строку (не карусель) -->
                    <div class="gallery-certs">

                        <?php
                        $mypages = get_pages( array( 'child_of' => 196, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );
                        foreach( $mypages as $page ) {      
                            $content = $page->post_content;
                            if ( ! $content ) continue; // пропустим страницу без контента
                            $content = apply_filters( 'the_content', $content );
                            ?>
                            
                            <div class="entry mscwhei_lst"><?php echo $content; ?></div>

                            <?php
                        } ?>

                    </div><!-- .gallery-certs -->
                    <!-- /Выводим карточки товаров по 4 шт. в строку (не карусель) -->
                </div><!-- .row  (inner)-->


            </div><!-- .col-12 -->

        </div><!-- .row --> 
    </div><!-- .container -->
</div><!-- .gallery .container-fluid -->

    <?php 
    return ob_get_clean();
}

/**
 * Регистрация одного или нескольких меню темы на сайте WordPress
 */

 if (function_exists('add_theme_support')) { add_theme_support('menus'); }

register_nav_menus(array(
	'main-menu'         => 'Верхнее главное меню', 
    'sb-cat-menu'       => 'Меню левого сайдбара',
    'cat-top-menu'     => 'Верхнее меню страницы Каталог',              
   
));


