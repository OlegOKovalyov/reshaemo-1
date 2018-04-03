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
            <a data-fancybox data-src="#modal-conslt" href="javascript:;" class="btn btn-outline-order mb-4">Заказать консультацию</a>
        </div>
    </div>

	<footer id="colophon" class="site-footer">

		<div class="container">

			<?php echo do_shortcode('[topbtmlargemenu2 email="dipgood.com@gmail.com" tel1="+7(800)200-69-81" tel2="+7(800)200-69-81"][/topbtmlargemenu2]'); ?>

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

<!-- jQuery Fancybox 3 -->
<div style="display: none;" id="modal-callback">
	<?php echo do_shortcode('[contact-form-7 id="857" title="Заказать звонок"]'); ?>
</div>
<div style="display: none;" id="modal-callback-2">
	<?php echo do_shortcode('[contact-form-7 id="857" title="Заказать звонок"]'); ?>
</div>
<div style="display: none;" id="modal-conslt">
	<?php echo do_shortcode('[contact-form-7 id="858" title="Заказать консультацию"]'); ?>
</div>

<script>
	/**
	 * Прокрутка списка подстраниц страницы Видеопрезентация компании.
	 *
	 */	
	let list = (e) => {
	  let list = e.children[1], step = list.clientHeight;
	  [...list_1.querySelectorAll("[data-scroll]")].forEach(e => e.addEventListener("click", () => list.scrollTop += Number(e.dataset.scroll) ? step : -step));
	}
	list(list_1);
</script>
<script>
	if(jQuery.browser.mozilla)
	{
	  // действия для браузера Mozilla Firefox (обеспечение кроссбраузерности)
	  jQuery('form.mainpf legend legend').css('paddingTop', '1rem');
	  jQuery('form.wpcf7-form legend').css('paddingTop', '1rem');	  
	  jQuery('form.mainpf input.form-control').css('marginBottom', '11px');
	  jQuery('form.wpcf7-form input.wpcf7-form-control').css('marginBottom', '11px');
	  jQuery('.aside-catalogue').css('marginTop', '47px');
	}
</script>

<?php wp_footer(); ?>

</body>
</html>
