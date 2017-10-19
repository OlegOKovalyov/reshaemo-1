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
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'reshaemo' ); ?></a>

	<header id="masthead" class="site-header">
	    <div class="container">
	    
	        <div class="top-wrap">
	            <div class="row">
                    <div class="col-2">	    
		                <div class="site-branding">


<div class="card"">
    <div class="card-body">
        <p class="card-text">dipgood.com@gmail.com</p>
        <p class="card-text">+7 (800) 200-69-81</p>
        <p class="card-text">+7 (800) 200-69-81</p>
        <h4 class="card-title"><a href="#" class="card-link">Дипломы</a></h4>
        <h6 class="card-subtitle mb-2">Гознаки, Аттестаты, Справки, Документы</h6>
        <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>-->
    </div>
</div>







		                </div><!-- .site-branding -->
		            </div><!-- .col-2 -->


                    <div id="triangle-left"></div>   		            
		            <div class="col toplarge-menu">
		                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                            <!--<a class="navbar-brand" href="#">Navbar</a>-->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Дипломы о высшем образовании <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Дипломы о среднем образовании</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Дипломы ПТУ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Аттестаты</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Другие справки и документы</a>
                                </li>                            
                            </ul>
                            </div>
                        </nav>
                    </div><!-- .col -->
                    <div id="triangle-right"></div>   	                    
		        </div><!-- .row -->                    
            </div><!-- .top-wrap -->    

        </div><!-- .container -->
    </header><!-- #masthead -->
		
	<nav class="navbar navbar-expand-lg navbar-light bg-light topnarrow-menu">
        <div class="container">
            <a class="navbar-brand" href="#">Выберите ваш город:</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Каталог</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Доставка</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Гарантии</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Отзывы</a>
                </li>                    
                <li class="nav-item">
                    <a class="nav-link" href="#">Контакты</a>
                </li>
            </ul>
            </div>
        </div><!-- .container -->  
    </nav>
		

	<nav id="site-navigation" class="main-navigation">
	<div class="container">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'reshaemo' ); ?></button>
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
		?>
    </div><!-- .container -->
	</nav><!-- #site-navigation -->

    <div class="container">
	<div id="content" class="site-content">
