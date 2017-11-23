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

	<!-- </div> --><!-- #content -->
    <!-- </div> --><!-- .container-fluid -->
    <div class="container-fluid order-consult">
        <div class="container">
            <h3 class="pt-3">У вас трудности с выбором диплома?<br />Закажите индивидуальную консультацию!</h3>
            <a href="#" class="btn btn-outline-order mb-4">Заказать консультацию</a>
        </div>
    </div>

	<footer id="colophon" class="site-footer">

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

</div><!-- #page .site -->

<!-- JS -->
<!-- <script src="js/app.min.js"></script> -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> -->

<!-- <script src="<?php /*bloginfo('template_directory');*/ ?>/owlcarousel/dist/owl.carousel.min.js"></script> -->

<!-- <script type="text/javascript" src="<?php /*bloginfo("template_url");*/ ?>/js/app.min.js"></script> -->

<?php wp_footer(); ?>

</body>
</html>
