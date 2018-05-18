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



// ЭКСПЕРИМЕНТЫ ЭКСПЕРИМЕНТЫ ЭКСПЕРИМЕНТЫ 
/*Самый простой шорткод - тестовый вариант */
add_shortcode( 'phone', 'show_phone');
function show_phone () {
	return '+380 50 322-7611' ;
}

/*Шорткод, который грузится из файла - не выполняется php-код.
Будет работать, если в файле будет находиться чистый HTML - тестовый вариант */
add_shortcode( 'topmenu', 'show_topmenu');
function show_topmenu( $atts, $content, $tag ) {
	$output = '';
    $output .= file_get_contents('wp-content/themes/reshaemo/shortcodes/ftopmenu.php');
    return $output;
}

/*Шорткод, который грузится из файла - не выполняется php-код.
Будет работать, если в файле будет находиться чистый HTML - тестовый вариант */
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
// /ЭКСПЕРИМЕНТЫ ЭКСПЕРИМЕНТЫ ЭКСПЕРИМЕНТЫ 



// ВЕРХНЕЕ И НИЖНЕЕ ШИРОКОЕ МЕНЮ ВЕРХНЕЕ И НИЖНЕЕ ШИРОКОЕ МЕНЮ ВЕРХНЕЕ И НИЖНЕЕ ШИРОКОЕ МЕНЮ  
/**
 * Нижнее широкое меню - первый рабочий вариант.
 * Полностью рабочий шорткод. Грузится из буфера обмена, что ускоряет его  работу.
 * Может конфликтовать с другими плагинами, которые также используют буфер обмена,
 * если объема памяти буфера станет недостаточно.*/
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
                                                <a href="#" class="nav-link"><br />Высшее<br /> образование<span class="sr-only">(current)</span></a>
                                            </div><!-- .nav-card-body -->
                                        </div><!-- .nav-card -->
                                    </li>
                                    <li class="nav-item">                                
                                        <div class="nav-card">
                                            <img class="nav-card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/i_topmenu2.png" alt="Card image cap">
                                            <div class="nav-card-body">
                                                <a href="#" class="nav-link">После-дипломное<br />образование<span class="sr-only">(current)</span></a>
                                            </div><!-- .nav-card-body -->
                                        </div><!-- .nav-card -->        
                                    </li>
                                    <li class="nav-item">
                                        <div class="nav-card">
                                            <img class="nav-card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/i_topmenu3.png" alt="Card image cap">
                                            <div class="nav-card-body">
                                                <a href="#" class="nav-link">Средне-специальное<br /> образование<br /><br /><span class="sr-only">(current)</span></a>
                                            </div><!-- .nav-card-body -->
                                        </div><!-- .nav-card -->
                                    </li>
                                    <li class="nav-item">
                                        <div class="nav-card">
                                            <img class="nav-card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/i_topmenu4.png" alt="Card image cap">
                                            <div class="nav-card-body">
                                                <a href="#" class="nav-link"><br />Аттестаты<br />школы<br /><span class="sr-only">(current)</span></a>
                                            </div><!-- .nav-card-body -->
                                        </div><!-- .nav-card -->
                                    </li>
                                    <li class="nav-item">
                                        <div class="nav-card">
                                            <img class="nav-card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/i_topmenu5.png" alt="Card image cap">
                                            <div class="nav-card-body">
                                                <a href="#" class="nav-link"><br />Справки и<br />свидетельства<br /><span class="sr-only">(current)</span></a>
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


/**
 * Верхнее широкое меню - второй рабочий улучшенный вариант.
 * Полностью рабочий шорткод. Грузится из буфера обмена, что ускоряет его  работу.
 * Может конфликтовать с другими плагинами, которые также используют буфер обмена,
 * если объема памяти буфера станет недостаточно.*/
add_shortcode( 'topbtmlargemenu', 'show_topbtmlargemenu');
function show_topbtmlargemenu( $atts, $content, $tag ) {
    $brand_email = empty($atts['email']) ? 'dipgood.com@gmail.com' : esc_html($atts['email']);
    $brand_tel1 = empty($atts['tel1']) ? '+7(800)200-69-81' : esc_html($atts['tel1']);
    $brand_tel2 = empty($atts['tel2']) ? '+7(800)200-69-81' : esc_html($atts['tel2']);

    ob_start();
    ?>
        <div class="top-wrap">
            <div class="row">
                <div class="col-lg-2">     
                    <div class="site-branding">
                        <div class="brand-card">
                            <div class="brand-card-body">
                                <p class="brand-card-text"><a href="mailto:<?php echo esc_html( $atts['email'] ); ?>"><?php echo esc_html( $atts['email'] ); ?></a></p>
                                <p class="brand-card-tel1"><a href="tel:<?php echo esc_html( $atts['tel1'] ); ?>"><?php echo esc_html( $atts['tel1'] ); ?></a></p>
                                <p class="brand-card-tel2"><a href="tel:<?php echo esc_html( $atts['tel2'] ); ?>"><?php echo esc_html( $atts['tel2'] ); ?></a></p>
                                <h4 class="brand-card-title"><a href="<?php echo bloginfo('home'); ?>" class="brand-card-link">Дипломы</a></h4>
                                <h6 class="brand-card-subtitle mb-2">Гознаки, Аттестаты, Справки, Документы</h6>
                            </div><!-- .brand-card-body -->
                        </div><!-- .brand-card -->
                    </div><!-- .site-branding -->
                </div><!-- .col-2 -->
                <div class="triangle-left"></div>                      
                <div class="col-lg-10 col-md-12 toplarge-menu">
                    <!-- <span>Дипломы: </span><span> гознаки, аттестаты. справки. документы</span> -->
                    <h6 class="brand-card-subtitle mb-2"> Гознаки, Аттестаты, Справки, Документы</h6>
                    <h4 class="brand-card-title"><a href="<?php echo bloginfo('home'); ?>" class="brand-card-link">Дипломы</a></h4>
                    <!-- <nav class="navbar navbar-expand-lg navbar-topmenu bg-topmenu"> -->
                    <nav class="navbar navbar-expand-lg navbar-light bg-topmenu">
                    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> -->
                    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #BFE0F1;"> -->
                        <!--<a class="navbar-brand" href="#">Navbar</a>-->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavTop" aria-controls="navbarNavTop" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavTop">
                            <div class="navbar-nav">
                                <?php 
                                  wp_nav_menu( array(
                                  'theme_location'=>'top-large-menu', // (string) Расположение меню в шаблоне.
                                                                // (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                                  'top-large-menu' => 'Верхнее широкое меню', // (string) Название выводимого меню (указывается в 
                                                // админке   при создании меню, приоритетнее 
                                                // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                                  //'container'       => 'nav', // (string) Контейнер меню. Обворачиватель ul. 
                                                              // Указывается тег контейнера (по умолчанию в тег div)
                                  //'container_class' => 'navbar navbar-expand-lg navbar-light bg-topmenu',
                                  //'container_id'    => 'navbarNavTop',
                                  //'menu_class'=>'navbar navbar-expand-lg navbar-light bg-topmenu', 
                                  'menu_class' => 'navbar-nav',
                                  'before' => '',
                                  'after'=>'',
                                  'container'=>''
                                  ) );
                                ?>
                    
                            </div>
                        </div>
                    </nav>
                    <div class="triangle-right"></div> 
                </div><!-- .col -->
            </div><!-- .row -->                    
        </div><!-- .top-wrap --> 
    <?php 
    return ob_get_clean();
}  

/**
 * Нижнее широкое меню (чтобы не было конфликта id=navbarNavTop и id=navbarNavBtm.
 * Полностью рабочий шорткод. Грузится из буфера обмена, что ускоряет его  работу.
 * Может конфликтовать с другими плагинами, которые также используют буфер обмена,
 * если объема памяти буфера станет недостаточно.*/
add_shortcode( 'topbtmlargemenu2', 'show_topbtmlargemenu2');
function show_topbtmlargemenu2( $atts, $content, $tag ) {
    $brand_email = empty($atts['email']) ? 'dipgood.com@gmail.com' : esc_html($atts['email']);
    $brand_tel1 = empty($atts['tel1']) ? '+7(800)200-69-81' : esc_html($atts['tel1']);
    $brand_tel2 = empty($atts['tel2']) ? '+7(800)200-69-81' : esc_html($atts['tel2']);

    ob_start();
    ?>
        <div class="top-wrap">
            <div class="row">
                <div class="col-lg-2">     
                    <div class="site-branding">
                        <div class="brand-card">
                            <div class="brand-card-body">
                                <p class="brand-card-text"><a href="mailto:<?php echo esc_html( $atts['email'] ); ?>"><?php echo esc_html( $atts['email'] ); ?></a></p>
                                <p class="brand-card-tel1"><a href="tel:<?php echo esc_html( $atts['tel1'] ); ?>"><?php echo esc_html( $atts['tel1'] ); ?></a></p>
                                <p class="brand-card-tel2"><a href="tel:<?php echo esc_html( $atts['tel2'] ); ?>"><?php echo esc_html( $atts['tel2'] ); ?></a></p>
                                <h4 class="brand-card-title"><a href="<?php echo bloginfo('home'); ?>" class="brand-card-link">Дипломы</a></h4>
                                <h6 class="brand-card-subtitle mb-2">Гознаки, Аттестаты, Справки, Документы</h6>
                            </div><!-- .brand-card-body -->
                        </div><!-- .brand-card -->
                    </div><!-- .site-branding -->
                </div><!-- .col-2 -->
                <div class="triangle-left"></div>                      
                <div class="col toplarge-menu">
                    <!-- <nav class="navbar navbar-expand-lg navbar-topmenu bg-topmenu"> -->
                    <nav class="navbar navbar-expand-lg navbar-light bg-topmenu">
                    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> -->
                    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #BFE0F1;"> -->
                        <!--<a class="navbar-brand" href="#">Navbar</a>-->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavBtm" aria-controls="navbarNavBtm" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavBtm">
                            <div class="navbar-nav">
                                <?php 
                                  wp_nav_menu( array(
                                  'theme_location'=>'top-large-menu', // (string) Расположение меню в шаблоне.
                                                                // (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                                  'top-large-menu' => 'Верхнее широкое меню', // (string) Название выводимого меню (указывается в 
                                                // админке   при создании меню, приоритетнее 
                                                // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                                  //'container'       => 'nav', // (string) Контейнер меню. Обворачиватель ul. 
                                                              // Указывается тег контейнера (по умолчанию в тег div)
                                  //'container_class' => 'navbar navbar-expand-lg navbar-light bg-topmenu',
                                  //'container_id'    => 'navbarNavBtm',
                                  //'menu_class'=>'navbar navbar-expand-lg navbar-light bg-topmenu', 
                                  'menu_class' => 'navbar-nav',
                                  'before' => '',
                                  'after'=>'',
                                  'container'=>''
                                  ) );
                                ?>
                    
                            </div>
                        </div>
                    </nav>
                    <div class="triangle-right"></div> 
                </div><!-- .col -->
            </div><!-- .row -->                    
        </div><!-- .top-wrap --> 
    <?php 
    return ob_get_clean();
}  

// /ВЕРХНЕЕ И НИЖНЕЕ ШИРОКОЕ МЕНЮ ВЕРХНЕЕ И НИЖНЕЕ ШИРОКОЕ МЕНЮ ВЕРХНЕЕ И НИЖНЕЕ ШИРОКОЕ МЕНЮ 


// БЛОК ОТЗЫВОВ БЛОК ОТЗЫВОВ БЛОК ОТЗЫВОВ БЛОК ОТЗЫВОВ БЛОК ОТЗЫВОВ БЛОК ОТЗЫВОВ 

/**
 * Нижний блок Отзывы, Диплом содержит на фоне облаков и деревьев - первый вариант.
 * Полностью рабочий шорткод. Грузится из буфера обмена, что ускоряет его  работу.
 * Может конфликтовать с другими плагинами, которые также используют буфер обмена,
 * если объема памяти буфера станет недостаточно.*/
add_shortcode( 'recentcomm', 'show_recentcomm');
function show_recentcomm( $atts, $content, $tag ) {
    /*$dipl_price = empty($atts['price']) ? '22 000' : esc_html($atts['price']);*/

    ob_start();
    ?>

        <div id="primary" class="content-area page-delivery recent_comments">
            <main id="main" class="site-main">
                <!-- <div class="blank-block"></div> -->
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <!-- Выводим последние ОТЗЫВЫ -->
                            <div class="comment-respond">
                                <h4 class="py-4">Отзывы</h4>
                                    <?php recent_comments_remak (3); ?>
                                    <p class="with_btn"><a href="<?php echo bloginfo('home'); ?>/otzyvy/" class="btn btn-default" role="button">смотреть все отзывы о документах</a></p>
                            </div><!-- .comment-respond -->  
                            <div class="dipl_contains">
                                <h4>Диплом, который вы решите приобрести у нас, содержит:</h4>
                                <p>твердую обложку;</p>
                                <p>сведения об определенной специальности и уровне квалификации;</p>
                                <p>специальный вкладыш, где представлены изученные дисциплины и полученные отметки по ним.</p>
                            </div><!-- .dipl_contains -->          
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </main><!-- #main .site-main -->
        </div><!-- #primary --> 

    <?php 
    return ob_get_clean();
}   

// //БЛОК ОТЗЫВОВ БЛОК ОТЗЫВОВ БЛОК ОТЗЫВОВ БЛОК ОТЗЫВОВ БЛОК ОТЗЫВОВ БЛОК ОТЗЫВОВ 


// СТРОКА С ПОИСКОВОЙ ФОРМОЙ И ДВУМЯ КНОПКАМИ СТРОКА С ПОИСКОВОЙ ФОРМОЙ И ДВУМЯ КНОПКАМИ 

/** Шорткод для поисковой формы и кнопок Найти документы, Видео о дипломах, Обратный
 * звонок, а также ссылки Расширенный поиск под главным узким меню сайта
 */
add_shortcode( 'sfbtnsgroup', 'show_sfbtnsgroup');
function show_sfbtnsgroup( $atts, $content, $tag ) {

    ob_start();
    ?>

            <div class="sfbtns-group container mt-5 mb-3">
                <div class="row justify-content-between">
                    <div class="col-12 col-sm-5 col-md-5 col-lg-6">
                        <form class="form-inline my-2 my-lg-0" action="<?php echo bloginfo('home'); ?>">
                                <input class="form-control mr-sm-2" type="search" placeholder="введите слова поиска" aria-label="Search" value="" name="s" id="s">
                            <button class="btn btn-outline-order btn-outline-findoc my-2 my-sm-0" type="submit">Найти документы</button>
                        </form>
                    </div><!-- .col-12 .col-sm-6 -->
                    <div class="ml-auto col-sm-7 col-md-5 col-lg-6 callbk-btn">
                        <a class="btn btn-outline-callback" href="<?php echo home_url() . '/videoobzor-diplomov/' ?>">Видео о дипломах</a>
                        <a data-fancybox data-src="#modal-callback" class="btn btn-outline-callback " href="javascript:;">Обратный звонок</a>
                    </div><!-- .col-sm-6 .callbk-btn -->
                </div><!-- .row -->
            </div><!-- .sfbtns-group -->           

    <?php 
    return ob_get_clean();
}

// /СТРОКА С ПОИСКОВОЙ ФОРМОЙ И ДВУМЯ КНОПКАМИ СТРОКА С ПОИСКОВОЙ ФОРМОЙ И ДВУМЯ КНОПКАМИ 



// ТАБЫ СТРАНИЦЫ КАТАЛОГ ТАБЫ СТРАНИЦЫ КАТАЛОГ ТАБЫ СТРАНИЦЫ КАТАЛОГ

/**
 * Шорткод для таба Высшее образование в меню Каталог, который выводит 
 * карточки товара дочерних страниц. - Первый вариант - можно удалить.
 */
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
 * Шорткод для таба Высшее образование в меню Каталог, который выводит 
 * карточки товара дочерних страниц. - Второй вариант - можно удалить.
 */
add_shortcode( 'catalogue', 'show_catalogue');
function show_catalogue( $atts, $content, $tag ) {
    /*$dipl_price = empty($atts['price']) ? '22 000' : esc_html($atts['price']);
*/
    ob_start();
    ?>

<div class="container-fluid">
    <div class="container">

        <?php /*$child_pages = array( "56", "74", "196" );*/ ?>
        <?php /*global $post; $postid = $post->ID;*/
            /*$i = 0;
            while ( $i <= count($post, COUNT_RECURSIVE ) ) {
                $a = $post->menu_order; echo $a;
                /*if ( $a == 1 ) {
                    $child_pages[$a] = $post->ID;
                    $a++;
                }
            }  */  
        ?>

        <?php global $post; $postid = get_post($postid); echo '<br />';  ?> 
        <?php echo 'post_title = ' . $post->post_title;  echo '<br />'; echo 'menu_order = ' . $post->menu_order;  echo '<br />'; ?>

<?php /*echo '<pre>' . print_r( $child_pages, true ) . '</pre>';*/ ?>
<?php echo '$b = get_post($postid) = ' . '<pre>' . print_r( $postid, true ) . '</pre>'; ?>

<?php $args_pages = array (
        'child_of ' => $postid,
        'hierarchical'  => 0,
        'parent'        => -1,
        'depth'         => 1,
    );
?>
<?php $pages = get_pages( $args_pages ); $menuorder = $post->menu_order; ?>
<?php echo '$menuorder = ' . '<pre>' . print_r( $menuorder, true ) . '</pre>'; ?>
<?php if ($pages) {
  $pageids = array();
  if ( $menuorder == 0 ) {
  foreach ($pages as $page)
    $pageids[]= $page->ID;
   } 
  echo '$pageids = ' . '<pre>' . print_r( $pageids, true ) . '</pre>';   
  $args=array(
    'title_li'  => 'Дерево родительской страницы: ' . $parent,
    'child_of'     => 1,
    /*'include'   =>  $parent . ',' . implode(",", $pageids),*/
    'depth'     => 1
  );

  wp_list_pages($args);
} ?>

<?php if( post_type_exists( 'products' ) ) {
echo 'The Products post type exists';
} ?>

        <div class="row">
            <div class="col-12">

                <?php foreach( $child_pages as $child_page ) { ?>

                    <h2><?php echo get_the_title($child_page); ?></h2>
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
                <?php wp_reset_postdata(); ?>
            </div><!-- .col-12 -->
        </div><!-- .row --> 
    </div><!-- .container -->
</div><!-- .gallery .container-fluid -->

    <?php 
    return ob_get_clean();
}


/**
 * Шорткод для таба Высшее образование в меню Каталог, который выводит 
 * карточки товара дочерних страниц (карусель). - Третий рабочий вариант.
 */
add_shortcode( 'tabvyshobrz', 'show_tabvyshobrz');
function show_tabvyshobrz( $atts, $content, $tag ) {
    /*$dipl_price = empty($atts['price']) ? '22 000' : esc_html($atts['price']);
*/
    ob_start();
    ?>

<div class="container-fluid">
    <div class="container">

        <?php $child_pages = array( "317", "291", "331" ); ?>

        <div class="row">
            <div class="col-12">

                <?php foreach( $child_pages as $child_page ) { ?>

                    <h2><?php echo get_the_title($child_page); ?></h2>
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
 * Шорткод для таба После-дипломное образование в меню Каталог, который выводит 
 * карточки товара дочерних страниц. - Первый вариант.
 */
add_shortcode( 'tabposdipobrz', 'show_tabposdipobrz');
function show_tabposdipobrz( $atts, $content, $tag ) {
    /*$dipl_price = empty($atts['price']) ? '22 000' : esc_html($atts['price']);
*/
    ob_start();
    ?>

<div class="container-fluid">
    <div class="container">

        <?php $child_pages = array( "451" ); ?>

        <div class="row">
            <div class="col-12">

                <?php foreach( $child_pages as $child_page ) { ?>

                    <h2><?php echo get_the_title($child_page); ?></h2>
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
 * Шорткод для таба Средне-специальное образование в меню Каталог, который выводит 
 * карточки товара дочерних страниц. - Первый вариант.
 */
add_shortcode( 'tabsrspecobrz', 'show_tabsrspecobrz');
function show_tabsrspecobrz( $atts, $content, $tag ) {
    $dipl_price = empty($atts['price']) ? '22 000' : esc_html($atts['price']);
    ob_start();
    ?>

<div class="container-fluid">
    <div class="container">

        <?php $child_pages = array( "470", "1928" ); ?>

        <div class="row">
            <div class="col-12">

                <?php foreach( $child_pages as $child_page ) { ?>

                    <h2><?php echo get_the_title($child_page); ?></h2>
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
 * Шорткод для таба Аттестаты школ в меню Каталог, который выводит 
 * карточки товара дочерних страниц. - Первый вариант.
 */
add_shortcode( 'attschool', 'show_attschool');
function show_attschool( $atts, $content, $tag ) {
    $dipl_price = empty($atts['price']) ? '22 000' : esc_html($atts['price']);
    ob_start();
    ?>

<div class="container-fluid">
    <div class="container">

        <?php $child_pages = array( "485", "501" ); ?>

        <div class="row">
            <div class="col-12">

                <?php foreach( $child_pages as $child_page ) { ?>

                    <h2><?php echo get_the_title($child_page); ?></h2>
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
 * Шорткод для таба Справки и Свидетельства в меню Каталог, который выводит 
 * карточки товара дочерних страниц. - Первый вариант.
 */
add_shortcode( 'sprsva', 'show_sprsva');
function show_sprsva( $atts, $content, $tag ) {
    $dipl_price = empty($atts['price']) ? '22 000' : esc_html($atts['price']);
    ob_start();
    ?>

<div class="container-fluid">
    <div class="container">

        <?php $child_pages = array( "511", "1845" ); ?>
        <?php //$child_pages = array( "667" ); ?>

        <div class="row">
            <div class="col-12">

                <?php foreach( $child_pages as $child_page ) { ?>

                    <h2><?php echo get_the_title($child_page); ?></h2>
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

// /ТАБЫ СТРАНИЦЫ КАТАЛОГ ТАБЫ СТРАНИЦЫ КАТАЛОГ ТАБЫ СТРАНИЦЫ КАТАЛОГ


// ВСЕ МЕНЮ САЙТА ВСЕ МЕНЮ САЙТА ВСЕ МЕНЮ САЙТА ВСЕ МЕНЮ САЙТА ВСЕ МЕНЮ САЙТА ВСЕ МЕНЮ САЙТА ВСЕ 

/**
 * Регистрация одного или нескольких меню темы на сайте WordPress
 */

 if (function_exists('add_theme_support')) { add_theme_support('menus'); }

register_nav_menus(array(
    'top-large-menu'        => 'Верхнее широкое меню',
    'main-menu'             => 'Верхнее главное меню', 
    'sb-cat-menu'           => 'Меню левого сайдбара',
    'cat-top-menu'          => 'Верхнее меню страницы Каталог', 
    'sb-cat-vyshobrz-menu'  => 'Меню левого сайдбара страницы Высшее образование',
    'sb-cat-pdobrz-menu'    => 'Меню левого сайдбара страницы После-дипломное образование',
    'sb-cat-srspobrz-menu'  => 'Меню левого сайдбара страницы Средне-специальное образование',
    'sb-cat-attschool-menu' => 'Меню левого сайдбара страницы Аттестаты школы',
    'sb-cat-sprsva-menu'    => 'Меню левого сайдбара страницы Справки и свидетельства',            
   
)); 

// /ВСЕ МЕНЮ САЙТА ВСЕ МЕНЮ САЙТА ВСЕ МЕНЮ САЙТА ВСЕ МЕНЮ САЙТА ВСЕ МЕНЮ САЙТА ВСЕ МЕНЮ САЙТА ВСЕ



// ЭКСПЕРИМЕНТЫ ЭКСПЕРИМЕНТЫ ЭКСПЕРИМЕНТЫ 
/**
 * Создание индивидуальных таксономий пользовательского типа записей Products
 */

add_action( 'init', 'reshaemo_create_taxproducts', 0 );
function reshaemo_create_taxproducts() {
    $labels = array(
        'name'          => 'Types',
        'singular_name' => 'Type',
        'search_items'  => 'Search Types',
        'all_items'     => 'All Types',
        'parent_item'   => 'Parent Type',
        'parent_item-colon' => 'Parent Type',
        'edit_item'     => 'Edit Type',
        'update_item'   => 'Update Type',
        'add_new_item'  => 'Add New Type',
        'new_item_name' => 'New Type Name',
        'menu_name'     => 'Type'   
    );
    $args = array(
        'labels'        => $labels,
        'hierarchical'  => true,
        'query_var'     => true,
        'rewrite'       => true
    );
    register_taxonomy( 'type', 'products', $args );
}


/**
 * Регистрация пользовательского типа записей Products
 */
 
add_action( 'init', 'reshaemo_register_my_post_types' );
function reshaemo_register_my_post_types() {
    $labels = array (
        'name'          => 'Products',
        'singular_name' => 'Product',
        'add_new'       => 'Add New Product',
        'edit_item'     => 'Edit Product',
        'new_item'      => 'New Product',
        'all_items'     => 'All Products',
        'view_item'     => 'View Product',
        'search_items'  => 'Search Products',
        'not_found'     => 'No products found',
        'not_found_in_trash'    => 'No products found in Trash',
        'parent_item_colon'     => '',
        'menu_name'     => 'Products'
    );
    $args = array (
        'labels'        => $labels,
        'public'        => true,
        'has_archive'   => true,
        'taxonomies'    => array( 'category' ),
        'rewrite'       => array( 'slug' => 'product'),
        /*'menu_position' => null, - почему-то не работает */
        'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'comments' ),

    );
    register_post_type( 'products',
        array(
            'labels' => array(
                'name' => 'Products'
            ),
            'public' => true,
        )
    );
}    

// /ЭКСПЕРИМЕНТЫ ЭКСПЕРИМЕНТЫ ЭКСПЕРИМЕНТЫ 



// НАСТРОЙКА КОММЕНТАРИЕВ САЙТА НАСТРОЙКА КОММЕНТАРИЕВ САЙТА НАСТРОЙКА КОММЕНТАРИЕВ САЙТА 

/* Настройка комментариев для темы reshaemo */
function mytheme_comment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case '' :
?>
       <li <?php comment_class(); ?> id=&amp;quot;li-comment-<?php comment_ID() ?>&amp;quot;>
            <div id=&amp;quot;comment-<?php comment_ID(); ?>&amp;quot;>
                <div class=&amp;quot;comment-author vcard&amp;quot;>
                    <?php edit_comment_link( __( 'Редактировать' ), ' ' ); ?>
                    <?php echo get_avatar( $comment->comment_author_email, $args['avatar_size']); ?>
                    <?php printf(__('<cite class=&amp;quot;fn&amp;quot;>%s</cite> <span class=&amp;quot;says&amp;quot;>says:</span>'), get_comment_author_link()) ?>
                </div>
 
                <div class=&amp;quot;comment-meta commentmetadata&amp;quot;>
                    <a href=&amp;quot;<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>&amp;quot;><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a>
                </div>
 
<?php if ($comment->comment_approved == '0') : ?>
                <div class=&amp;quot;comment-awaiting-verification&amp;quot;><?php _e('Your comment is awaiting moderation.') ?></div>
             <br />
<?php endif; ?>
                <?php comment_text() ?>
                <div class=&amp;quot;reply&amp;quot;>
                    <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div>
            </div>
 
<?php
        break;
        case 'pingback'  :
        case 'trackback' :
?>
            <li class=&amp;quot;post pingback&amp;quot;>
                <?php comment_author_link(); ?>
                <?php edit_comment_link( __( 'Редактировать' ), ' ' ); ?>
<?php
        break;
    endswitch;
}


/**
 * Displays just comments (no pingbacks or trackbacks) while using a custom callback function to control the look of the comment. You may want to add a max_depth=X parameter, if the reply links are not appearing.
 * Define the custom callback function.
 */
function reshaemo_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
    <div class="author_meta">
    <div class="comment-author vcard">
        <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
        <?php printf( __( '<span class="fn">%s</span> <span class="says">says:</span>' ), get_comment_author_link() ); ?>
    </div>
    <?php if ( $comment->comment_approved == '0' ) : ?>
         <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
          <br />
    <?php endif; ?>

    <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
        <?php
        /* translators: 1: date, 2: time */
       /* printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );*/
        printf( __('%1$s'), get_comment_date() ); ?></a><?php /*edit_comment_link( __( '(Edit)' ), '  ', '' );*/
        ?>
    </div>
    </div><!-- .author_meta -->
    <div class="comment-content">
        <?php comment_text(); ?>
    </div>
    <div class="reply">
        <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
    </div>
    <?php if ( 'div' != $args['style'] ) : ?>
    </div><!-- .comment-body -->
    <?php endif; ?>
    <?php
    }


/**
 * Постраничная навигация для комментариев
 */
function wp_comments_corenavi() {
  $pages = '';
  $max = get_comment_pages_count();
  $page = get_query_var('cpage');
  if (!$page) $page = 1;
  $a['current'] = $page;
  $a['echo'] = false;

  $total = 0; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 1; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '<'; //текст ссылки "Предыдущая страница"
  $a['next_text'] = '>'; //текст ссылки "Следующая страница"

  if ($max > 1) echo '<div class="commentNavigation">';
  if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $page . ' из ' . $max . '</span>'."\r\n";
  echo $pages . paginate_comments_links($a);
 echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
}


/* Advanced Pagination Function - не используется */
function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&lt;'), // '<' текст ссылки "Предыдущая страница" &lsaquo; &lt; было '<<' &laquo;
    'next_text'       => __('&gt;'), // '>' текст ссылки "Следующая страница" &rsaquo; &gt; было '>>' &raquo; 
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
       echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }

}


/*Функция пагинации с сайта kama.ru вместо wp_comments_corenavi() - не используется*/
function my_pagenavi() {
    global $wp_query;

    $big = 999999999; // уникальное число для замены

    $args = array(
        'base'    => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
        'format'  => '',
        'current' => max( 1, get_query_var('paged') ),
        'total'   => $wp_query->max_num_pages,
    );

    $result = paginate_links( $args );

    // удаляем добавку к пагинации для первой страницы
    $result = str_replace( '/page/1/', '', $result );

    echo $result;
}

// Теперь, где нужно вывести пагинацию используем 
// my_pagenavi();

// /НАСТРОЙКА КОММЕНТАРИЕВ САЙТА НАСТРОЙКА КОММЕНТАРИЕВ САЙТА НАСТРОЙКА КОММЕНТАРИЕВ САЙТА 



// ПАГИНАЦИЯ ДОЧЕРНИХ СТРАНИЦ ПАГИНАЦИЯ ДОЧЕРНИХ СТРАНИЦ ПАГИНАЦИЯ ДОЧЕРНИХ СТРАНИЦ 

/* Функция пагинации для дочерних страниц ВУЗы Москвы - не используется */
// numbered pagination
function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"wrap_pagination\"><div class=\"pagination\">";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div></div>\n";
     }
}   

// /ПАГИНАЦИЯ ДОЧЕРНИХ СТРАНИЦ ПАГИНАЦИЯ ДОЧЕРНИХ СТРАНИЦ ПАГИНАЦИЯ ДОЧЕРНИХ СТРАНИЦ                                                                                                                   

// ХЛЕБНЫЕ КРОШКИ САЙТА ХЛЕБНЫЕ КРОШКИ САЙТА ХЛЕБНЫЕ КРОШКИ САЙТА 

/**
 * "Хлебные крошки" для WordPress
 * автор: Dimox
 * версия: 2017.01.21
 * лицензия: MIT
 */
function dimox_breadcrumbs() {

  /* === ОПЦИИ === */
  $text['home'] = 'Главная'; // текст ссылки "Главная"
  $text['category'] = '%s'; // текст для страницы рубрики
  $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
  $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
  $text['author'] = 'Статьи автора %s'; // текст для страницы автора
  $text['404'] = 'Ошибка 404'; // текст для страницы 404
  $text['page'] = 'Страница %s'; // текст 'Страница N'
  $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'

  $wrap_before = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
  $wrap_after = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
  $sep = '/'; // разделитель между "крошками"
  $sep_before = '<span class="sep">'; // тег перед разделителем
  $sep_after = '</span>'; // тег после разделителя
  $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
  $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
  $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
  $before = '<span class="current">'; // тег перед текущей "крошкой"
  $after = '</span>'; // тег после текущей "крошки"
  /* === КОНЕЦ ОПЦИЙ === */

  global $post;
  $home_url = home_url('/');
  $link_before = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
  $link_after = '</span>';
  $link_attr = ' itemprop="item"';
  $link_in_before = '<span itemprop="name">';
  $link_in_after = '</span>';
  $link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
  $frontpage_id = get_option('page_on_front');
  $parent_id = ($post) ? $post->post_parent : '';
  $sep = ' ' . $sep_before . $sep . $sep_after . ' ';
  $home_link = $link_before . '<a href="' . $home_url . '"' . $link_attr . ' class="home">' . $link_in_before . $text['home'] . $link_in_after . '</a>' . $link_after;

  if (is_home() || is_front_page()) {

    if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;

  } else {

    echo $wrap_before;
    if ($show_home_link) echo $home_link;

    if ( is_category() ) {
      $cat = get_category(get_query_var('cat'), false);
      if ($cat->parent != 0) {
        $cats = get_category_parents($cat->parent, TRUE, $sep);
        $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        if ($show_home_link) echo $sep;
        echo $cats;
      }
      if ( get_query_var('paged') ) {
        $cat = $cat->cat_ID;
        echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
      }

    } elseif ( is_search() ) {
      if (have_posts()) {
        if ($show_home_link && $show_current) echo $sep;
        if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
      } else {
        if ($show_home_link) echo $sep;
        echo $before . sprintf($text['search'], get_search_query()) . $after;
      }

    } elseif ( is_day() ) {
      if ($show_home_link) echo $sep;
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
      echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
      if ($show_current) echo $sep . $before . get_the_time('d') . $after;

    } elseif ( is_month() ) {
      if ($show_home_link) echo $sep;
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
      if ($show_current) echo $sep . $before . get_the_time('F') . $after;

    } elseif ( is_year() ) {
      if ($show_home_link && $show_current) echo $sep;
      if ($show_current) echo $before . get_the_time('Y') . $after;

    } elseif ( is_single() && !is_attachment() ) {
      if ($show_home_link) echo $sep;
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        printf($link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
        if ($show_current) echo $sep . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, $sep);
        if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        echo $cats;
        if ( get_query_var('cpage') ) {
          echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
        } else {
          if ($show_current) echo $before . get_the_title() . $after;
        }
      }

    // custom post type
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      if ( get_query_var('paged') ) {
        echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . $post_type->label . $after;
      }

    } elseif ( is_attachment() ) {
      if ($show_home_link) echo $sep;
      $parent = get_post($parent_id);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      if ($cat) {
        $cats = get_category_parents($cat, TRUE, $sep);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        echo $cats;
      }
      printf($link, get_permalink($parent), $parent->post_title);
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_page() && !$parent_id ) {
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_page() && $parent_id ) {
      if ($show_home_link) echo $sep;
      if ($parent_id != $frontpage_id) {
        $breadcrumbs = array();
        while ($parent_id) {
          $page = get_page($parent_id);
          if ($parent_id != $frontpage_id) {
            $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
          }
          $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        for ($i = 0; $i < count($breadcrumbs); $i++) {
          echo $breadcrumbs[$i];
          if ($i != count($breadcrumbs)-1) echo $sep;
        }
      }
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_tag() ) {
      if ( get_query_var('paged') ) {
        $tag_id = get_queried_object_id();
        $tag = get_tag($tag_id);
        echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
      }

    } elseif ( is_author() ) {
      global $author;
      $author = get_userdata($author);
      if ( get_query_var('paged') ) {
        if ($show_home_link) echo $sep;
        echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_home_link && $show_current) echo $sep;
        if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
      }

    } elseif ( is_404() ) {
      if ($show_home_link && $show_current) echo $sep;
      if ($show_current) echo $before . $text['404'] . $after;

    } elseif ( has_post_format() && !is_singular() ) {
      if ($show_home_link) echo $sep;
      echo get_post_format_string( get_post_format() );
    }

    echo $wrap_after;

  }
} // end of dimox_breadcrumbs()

// /ХЛЕБНЫЕ КРОШКИ САЙТА ХЛЕБНЫЕ КРОШКИ САЙТА ХЛЕБНЫЕ КРОШКИ САЙТА 



// ВЫВОД СПИСКА ДОЧЕРНИХ СТРАНИЦ С РОДИТЕЛЬСКОЙ СТРАНИЦЫ

/**
 * Выводим список дочерних страниц WordPress для их родительской. 
 * В файле шаблона вашей темы потребуется добавить следующую строку кода в то место, где нужно 
 * отобразить дочерние страницы:
 * <?php devise_list_child_pages(); ?>
 */
function devise_list_child_pages() {

global $post;

if ( is_page() && $post->post_parent )

    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
else
    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );

if ( $childpages ) {

    $string = '<ul>' . $childpages . '</ul>';
}

return $string;

}

add_shortcode('devise_childpages', 'devise_list_child_pages');

// /ВЫВОД СПИСКА ДОЧЕРНИХ СТРАНИЦ С РОДИТЕЛЬСКОЙ СТРАНИЦЫ



// ВЫВОД СПИСКА ПОСЛЕДНИХ КОММЕНТАРИЕВ ВЫВОД СПИСКА ПОСЛЕДНИХ КОММЕНТАРИЕВ 

/**
* Вывод списка последних комментариев
* $number - количество выводимых комментариев,
* $length - количество символов для обрезки текста комментариев
*/
function recent_comments_remak_sample ($number=3, $length=280) { // Исходная функция
    $args = array (
        'number' => $number,
        'status' => 'approve',
    );
    $comments = get_comments($args);
    echo '<div class="sb_reviews">' . '<ul>';
    foreach($comments as $comment) :
        $comment_content_short = strip_tags($comment->comment_content);
        $comment_content_short = substr($comment_content_short, 0, $length);
        //echo '<p class="author">' . $comment->comment_author . '</p>';
        //echo '<p class="date">' . comment_date('j.m.Y в H:i', $comment) . '</p>';
        echo '<li class="recentcomments">' 
                    . '<a href="' . get_comment_link($comment->comment_ID) .  '">' 
                    //. $comment->comment_author . ' | ' . $comment->comment_date 
                    . $comment->comment_author . ' | ' . $comment->comment_date
                    . /*comment_date('j.m.Y в H:i', $comment) .*/ '</a>' 
                    . '<p>' . substr($comment_content_short, 0, $length /*strrpos($comment_content_short, ' ') исходный вариант */) . '.<span>"</span>' 
                    .'</p>' 
                . '</li>';
        //echo '<li class="anglerev"></li>';
        //echo comment_date('j.m.Y в H:i', $comment);
    endforeach;
    echo '</ul>' . '</div>';
}

function recent_comments_remak ($number=3, $length=250) {
    $args = array (
        'number' => $number,
        'status' => 'approve',
    );
    $comments = get_comments($args);
    echo '<div class="sb_reviews">' . '<ul>';
    foreach($comments as $comment) :
        $comment_content_short = strip_tags($comment->comment_content);
        $comment_content_short = substr($comment_content_short, 0, $length);
        echo '<li class="recentcomments"><span class="author">' . $comment->comment_author . '</span><pre> | </pre>';
        echo '<span class="date">' . comment_date('j.m.Y', $comment) . '</span>';
        echo '<p>' . $comment_content_short . '...</p>' . '</li>';
    endforeach;
    echo '</ul>' . '</div>';
}

// /ВЫВОД СПИСКА ПОСЛЕДНИХ КОММЕНТАРИЕВ ВЫВОД СПИСКА ПОСЛЕДНИХ КОММЕНТАРИЕВ 

