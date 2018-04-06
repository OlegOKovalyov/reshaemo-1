<?php
/**
 * The front page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP-Reshaemo
 */

get_header(); ?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-md-7 col-lg-8">
                    <h2 class="display-3">Дипломы и аттестаты в Москве</h2>
                    <p class="lead">Оригинальный бланк ГОЗНАК!<br />Бесплатная доставка<br />по всей России!</p>
                </div><!-- .col-md-8 -->
                <div class="col-xs-12 col-md-5 col-lg-4">
                    <div class="mainpf">
                        <?php echo do_shortcode('[contact-form-7 id="578" title="Срочный заказ диплома"]'); ?>
                    </div>
                </div><!-- .col-md-4 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .jumbotron .jumbotron-fluid -->
    <div class="jumb_grad"></div>

    <div class="gallery container-fluid">
        <div class="container">
            <h1>Cамые популярные дипломы, аттестаты и другие документы</h1>
                <div class="wrapper">
                    <?php
                    $mypages = get_pages( array( 'include' => array( "319", "321", "323", "325", "327", "329", "488", "490" ), 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );
                    foreach( $mypages as $page ) {      
                        $content = $page->post_content;
                        // пропустим страницу без контента
                        if ( ! $content ) continue;
                        $content = apply_filters( 'the_content', $content );
                        ?>
                        
                        <div class="gitem"><?php echo $content; ?></div>

                        <?php
                    } ?>
            </div><!-- .wrapper -->         
        </div><!-- .container -->
    </div><!-- .gallery .container-fluid -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="blank-block"></div>

			<div class="video-block container">
				<div class="row">
					<h2>Видеопрезентация компании</h2>					
					<div class="col-12 col-md-7 video-links">
						<nav class="nav flex-column">
							<a class="nav-link" href="#">Диплом о высшем обрзовании с 2014 по 2017 год</a>
							<a class="nav-link" href="#">Диплом о высшем обрзовании с 2014 по 2017 год</a>
							<a class="nav-link" href="#">Диплом о высшем обрзовании с 2014 по 2017 год</a>
							<a class="nav-link" href="#">Диплом о высшем обрзовании с 2014 по 2017 год</a>
							<a class="nav-link" href="#">Диплом о высшем обрзовании с 2014 по 2017 год</a>
						</nav>
                        <div class="dipl_contains">
    						<h4>Диплом, который вы решите приобрести у нас, содержит:</h4>
    						<p>твердую обложку;</p>
    						<p>сведения об определенной специальности и уровне квалификации;</p>
    						<p>специальный вкладыш, где представлены изученные дисциплины и полученные отметки по ним.</p>
                        </div><!-- .dipl_contains -->
					</div>
					<div class="col-5 monitor">
                        <a href="/videoobzor-diplomov/">
                            <img src="<?php bloginfo('template_url'); ?>/images/mntr-play.png" alt="Монтитор компьютера">
                        </a>
                    </div>
				</div>
			</div>

		</main><!-- #main .site-main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
