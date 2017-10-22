<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP-Reshaemo
 */

?>

	</div><!-- #content -->
    </div><!-- .container -->
	<footer id="colophon" class="site-footer">
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
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavBtm" aria-controls="navbarNavBtm" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavBtm">
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
		<div class="container">
        	<?php echo do_shortcode('[topmenubtm email="smartkoa2003@gmail.com" tel1="+380 50 322-7611" tel2="+380 98 222-1122"][/topmenubtm]'); ?>
        </div><!-- .container -->         		
	</footer><!-- #colophon -->

	<div class="site-info">
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'reshaemo' ) ); ?>"><?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'reshaemo' ), 'WordPress' );
		?></a>
		<span class="sep"> | </span>
		<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( 'Theme: %1$s by %2$s.', 'reshaemo' ), 'reshaemo', '<a href="http://www.smartinet.com.ua/">Oleg Kovalyov</a>' );
		?>
	</div><!-- .site-info -->  

</div><!-- #page -->

<!-- JS -->
<!-- <script src="js/app.min.js"></script> -->

<?php wp_footer(); ?>

</body>
</html>
