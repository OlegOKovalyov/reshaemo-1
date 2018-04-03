<?php
/**
 * Template Name: Contacts Page Template page-contacts.php 
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

	<div id="primary" class="content-area page-delivery page-contacts">
		<main id="main" class="site-main">
			<div class="blank-block"></div>

            <?php echo do_shortcode('[sfbtnsgroup]'); ?>

            <!-- <h1><?php /*the_title();*/ ?></h1> -->
            <h1>Как с нами связаться?</h1>

            <div class="container three-colms">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-4 dlv-1col">
                        <div class="in-dlv-1col">
                            <h4>Адрес в Москве</h4>
                            <p><span class="bld_ltr">Компания: "Dip-for"</span></p>
                            <p><span class="bld_ltr">Адрес: г.Москва,Проспект Вернадского 11, офис 234 </span></p>
                            <p class="pb-3"><span class="bld_ltr">Почтовый индекс: 145689</span></p>
                            <img src="<?php bloginfo('template_url'); ?>/images/map_moskwa.png" alt="Карта Москвы">
                        </div><!-- .in-dlv-1col -->
                    </div><!-- .col .dlv-1col -->
                    <div class="col-xs-12 col-md-6 col-lg-4 dlv-1col">
                        <div class="in-dlv-1col">
                            <h4>Адрес в Санкт-Петербурге</h4>
                            <p><span class="bld_ltr">Компания: "Dip-for"</span></p>
                            <p><span class="bld_ltr">Адрес: г.Санкт-Петербург, Проспект Вернадского 11, офис 234</span></p>
                            <p class="pb-3"><span class="bld_ltr">Почтовый индекс: 145689</span></p>
                            <img src="<?php bloginfo('template_url'); ?>/images/map_piter.png" alt="Карта Санкт-Петербурга">
                        </div><!-- .in-dlv-1col -->
                    </div><!-- .col .dlv-1col -->
                    <div class="col-xs-12 col-md-12 col-lg-4 dlv-1col">
                        <div class="in-dlv-1col">
                            <h4>Другие способы связи</h4>
                            <p><span class="bld_ltr">Телефон: +7(495) 542-84-44</span></p>
                            <p><span class="bld_ltr">Телефон: 8(800) 200-69-81 (Бесплатный звонок по всей России)</span></p>
                            <p><span class="bld_ltr">Электронная почта:<br /> dip-for.com@gmail.com</span></p>
                            <p><span class="bld_ltr">Также для связи используйте форму</span></p>
                            <!-- <a href="#">Заказать обратный звонок</a> -->
                            <a data-fancybox data-src="#modal-callback-2" href="javascript:;">Заказать обратный звонок</a>
                            <p class="pb-4"><span class="bld_ltr">Или же заполните форму ниже, и наш менеджер свяжется с Вами в ближайшее время</span></p>

                            <div class="cntcspf">
                                <?php echo do_shortcode( '[contact-form-7 id="835" title="Как с нами связаться?"]' )  ?>
                            </div>

                        </div><!-- .in-dlv-1col -->
                    </div><!-- .col .dlv-1col -->
                </div><!-- .row -->
            </div><!-- .container .three-colms -->

		</main><!-- #main .site-main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
