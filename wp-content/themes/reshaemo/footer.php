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
    </div><!-- .container-fluid -->
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

</div><!-- #page -->

<!-- JS -->
<!-- <script src="js/app.min.js"></script> -->

<?php wp_footer(); ?>

</body>
</html>
