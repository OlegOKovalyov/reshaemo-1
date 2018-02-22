<?php
/**
 * Template Name: Delivery Page Template page-delivery.php 
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


	<div id="primary" class="content-area page-delivery">
		<main id="main" class="site-main">
			<div class="blank-block"></div>

            <?php echo do_shortcode('[sfbtnsgroup]'); ?>            



            <!-- <h1><?php /*the_title();*/ ?></h1> -->
            <h1>Доставка и оплата документов</h1>

            <div class="container three-colms">
                <div class="row">
                    <div class="col dlv-1col">
                        <div class="in-dlv-1col">
                            <h4>Доставка по Москве</h4>
                            <p><span class="bld_ltr">Доставка: </span>курьером лично Вам в руки</p>
                            <p><span class="bld_ltr">Оплата: </span>курьеру в руки после осмотра документа</p>
                            <p><span class="bld_ltr">Место: </span>по договоренности</p>
                            <p><span class="bld_ltr">Время: </span>на следующей день после заказа. Доставка ежедневно с пн. по пт., возможна суббота по предварительной договоренности</p>
                            <p><span class="bld_ltr">Стоимость доставки: </span>бесплатно</p>
                            <p class="lchd"><span class="bld_ltr">Предоплата: </span>не требуется</p>
                            <img src="<?php bloginfo('template_url'); ?>/images/map_moskwa.png" alt="Карта Москвы">
                        </div><!-- .in-dlv-1col -->
                    </div><!-- .col .dlv-1col -->
                    <div class="col dlv-1col">
                        <div class="in-dlv-1col">
                            <h4>Доставка<br /> по Санкт-Петербургу</h4>
                            <p><span class="bld_ltr">Доставка: </span>курьером лично Вам в руки</p>
                            <p><span class="bld_ltr">Оплата: </span>курьеру в руки после осмотра документа</p>
                            <p><span class="bld_ltr">Место: </span>по договоренности</p>
                            <p><span class="bld_ltr">Время: </span>на следующей день после заказа. Доставка ежедневно с пн. по пт., возможна суббота по предварительной договоренности</p>
                            <p><span class="bld_ltr">Стоимость доставки: </span>бесплатно</p>
                            <p class="lchd"><span class="bld_ltr">Предоплата: </span>не требуется</p>
                            <img src="<?php bloginfo('template_url'); ?>/images/map_piter.png" alt="Карта Санкт-Петербурга">
                        </div><!-- .in-dlv-1col -->
                    </div><!-- .col .dlv-1col -->
                    <div class="col dlv-1col">
                        <div class="in-dlv-1col">
                            <h4>Доставка в<br /> другие регионы</h4>
                            <p><span class="bld_ltr">Доставка: </span>курьером лично Вам в руки</p>
                            <p><span class="bld_ltr">Оплата: </span>курьеру в руки после осмотра документа</p>
                            <p><span class="bld_ltr">Место: </span>по договоренности</p>
                            <p><span class="bld_ltr">Время: </span>на следующей день после заказа. Доставка ежедневно с пн. по пт., возможна суббота по предварительной договоренности</p>
                            <p><span class="bld_ltr">Стоимость доставки: </span>бесплатно</p>
                            <p class="lchd"><span class="bld_ltr">Предоплата: </span>не требуется</p>
                            <img src="<?php bloginfo('template_url'); ?>/images/map_regions.png" alt="Карта России">
                        </div><!-- .in-dlv-1col -->
                    </div><!-- .col .dlv-1col -->
                </div><!-- .row -->
            </div><!-- .container .three-colms -->

		</main><!-- #main .site-main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
