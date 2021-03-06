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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic" rel="stylesheet">

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
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                                                <a href="#" class="nav-link">Дипломы<br /> ПТУ <span class="sr-only">(current)</span></a>
                                            </div><!-- .nav-card-body -->
                                        </div><!-- .nav-card -->
                                    </li>
                                    <li class="nav-item">
                                        <div class="nav-card">
                                            <img class="nav-card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/i_topmenu4.png" alt="Card image cap">
                                            <div class="nav-card-body">
                                                <a href="#" class="nav-link">Аттестаты <span class="sr-only">(current)</span></a>
                                            </div><!-- .nav-card-body -->
                                        </div><!-- .nav-card -->
                                    </li>
                                    <li class="nav-item">
                                        <div class="nav-card">
                                            <img class="nav-card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/i_topmenu5.png" alt="Card image cap">
                                            <div class="nav-card-body">
                                                <a href="#" class="nav-link">Другие справки<br /> и документы <span class="sr-only">(current)</span></a>
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
        </div><!-- .container -->
    </header><!-- #masthead .site-header -->
		
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



<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>

		

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
        <?php echo do_shortcode('[phone]'); ?>
        <?php echo do_shortcode('[phone]'); ?>

