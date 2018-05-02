<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP-Reshaemo
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic" rel="stylesheet"> -->

    <!--[if lt IE 9]>
        <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
    <![endif]-->

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<header id="masthead" class="site-header">
	    <div class="container">

            <?php echo do_shortcode('[topbtmlargemenu email="dipgood.com@gmail.com" tel1="+7(800)200-69-81" tel2="+7(800)200-69-81"][/topbtmlargemenu]'); ?>

        </div><!-- .container -->
    </header><!-- #masthead .site-header -->
		
	<nav class="navbar navbar-expand-lg navbar-light bg-light topnarrow-menu"  style="background-color: #88E769;">
        <div class="container">

            <?php if ( is_front_page() ): ?>
            <?php else: ?>
                <div class="col-lg-6 col-md-11 col-sm-10 brdcrmb-wrap">

                    <img src="<?php echo bloginfo('template_url'); ?>/images/i_homem.png" alt="Home-icon" width="30" height="27">

            <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>

                </div><!-- .col-lg-6 .col-md-11 .col-sm-10 .brdcrmb-wrap -->

            <?php endif; ?>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <?php 
                  wp_nav_menu( array(
                  'theme_location'=>'main-menu', // (string) Расположение меню в шаблоне.
                                                // (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                  'main-menu' => 'Верхнее главное меню', // (string) Название выводимого меню (указывается в 
                                // админке   при создании меню, приоритетнее 
                                // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                  //'container'       => 'div', // (string) Контейнер меню. Обворачиватель ul. 
                                              // Указывается тег контейнера (по умолчанию в тег div)
                  //'container_class' => 'collapse navbar-collapse',
                  //'container_class' => 'collapse navbar-collapse',
                  //'container_id'    => 'myNavbar',
                  'menu_class'=>'navbar-nav', 
                  
                  'after'=>'',
                  'container'=>''
                  ) );
                ?>

            </div>
        </div><!-- .container -->  
    </nav>

    <!-- <div class="container-fluid main-block">
        <div id="content" class="site-content container"> -->

