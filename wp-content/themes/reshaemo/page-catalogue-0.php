<?php
/**
 * Template Name: Catalogue Page Template page-catalogue.php 
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
                <div class="col-8">
                    <h2 class="display-3">Дипломы и аттестаты в Москве</h2>
                    <p class="lead">Оригинальный бланк ГОЗНАК!<br />Бесплатная доставка<br />по всей России!</p>
                </div><!-- .col-8 -->
                <div class="col-4">
                    <form class="mainpf">
                        <fieldset>
                            <legend>Срочный<br />заказ диплома</legend>
                            <div class="form-group">
                                <!-- <label for="exampleFormControlInput1">Email address</label> -->
                                <input type="text" class="form-control" id="fio" placeholder="Ф.И.О.">
                                <input type="text" class="form-control" id="telnum" placeholder="номер телефона">
                                <input type="email" class="form-control" id="email" placeholder="E-mail">
                                <select class="form-control" id="typedoc">
                                    <option value="Выбрать тип документа">Выбрать тип документа</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div><!-- .form-group -->
                            <p class="safety">Ваши контактные данные целиком и полностью в безопасности и не могут быть переданы третьим лицам.</p>
                            <button type="submit" class="btn btn-outline-order">Заказать</button>
                            <p>После отправки информации с вами свяжется менеджер для уточнения технических деталей</p>
                        </fieldset>
                    </form>
                </div><!-- .col-4 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .jumbotron .jumbotron-fluid -->
    <div class="jumb_grad"></div>


    <div class="gallery container-fluid">
        <div class="container">
            <h1>Cамые популярные дипломы, аттестаты и другие документы</h1>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/Diplom-2014-specialist.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><span class="upcase">Диплом о среднем специальном оразовании</span><br /> с 2014 по 2017 годы</p>
                            <h4 class="card-title">18 000 руб.</h4>
                            <a href="#" class="btn btn-order">Заказать</a>
                        </div><!-- .card-body -->
                    </div><!-- .card -->
                </div><!-- .col -->
                <div class="col">
                    <div class="card card-vo">
                        <img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/Diplom-2014-specialist.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><span class="upcase">Диплом о высшем  оразовании</span><br /> с 2014 по 2017 годы<br /><span class="lcaseb">Бланк Гознак</span></p>
                            <h4 class="card-title">20 000 руб.</h4>
                            <a href="#" class="btn btn-order">Заказать</a>
                        </div><!-- .card-body -->
                    </div><!-- .card -->                
                </div>
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/Diplom-2014-specialist.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><span class="upcase">Диплом о среднем специальном оразовании</span><br /> с 2014 по 2017 годы</p>
                            <h4 class="card-title">18 000 руб.</h4>
                            <a href="#" class="btn btn-order">Заказать</a>
                        </div><!-- .card-body -->
                    </div><!-- .card -->                
                </div>
                <div class="col">
                    <div class="card card-vo">
                        <img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/Diplom-2014-specialist.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><span class="upcase">Диплом о высшем  оразовании</span><br /> до 1996 года<br /><span class="lcaseb">Бланк Гознак</span></p>
                            <h4 class="card-title">22 000 руб.</h4>
                            <a href="#" class="btn btn-order">Заказать</a>
                        </div><!-- .card-body -->
                    </div><!-- .card -->                
                </div>
            </div><!-- .row -->

            <div class="row">
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/Diplom-2014-specialist.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><span class="upcase">Диплом о среднем специальном оразовании</span><br /> с 2014 по 2017 годы</p>
                            <h4 class="card-title">18 000 руб.</h4>
                            <a href="#" class="btn btn-order">Заказать</a>
                        </div><!-- .card-body -->
                    </div><!-- .card -->
                </div><!-- .col -->
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/Diplom-2014-specialist.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><span class="upcase">Диплом о среднем специальном оразовании</span><br /> с 2014 по 2017 годы</p>
                            <h4 class="card-title">18 000 руб.</h4>
                            <a href="#" class="btn btn-order">Заказать</a>
                        </div><!-- .card-body -->
                    </div><!-- .card -->                
                </div>
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/Diplom-2014-specialist.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><span class="upcase">Диплом о среднем специальном оразовании</span><br /> с 2014 по 2017 годы</p>
                            <h4 class="card-title">18 000 руб.</h4>
                            <a href="#" class="btn btn-order">Заказать</a>
                        </div><!-- .card-body -->
                    </div><!-- .card -->                
                </div>
                <div class="col"><?php echo do_shortcode('[diplspec201417 price="35 000"][/diplspec201417]'); ?>
    <!--                 <div class="card">
                  <img class="card-img-top" src="<?php /*echo bloginfo('template_url');*/ ?>/images/Diplom-2014-specialist.png" alt="Card image cap">
                  <div class="card-body">
                      <p class="card-text"><span class="upcase">Диплом о среднем специальном оразовании</span><br /> с 2014 по 2017 годы</p>
                      <h4 class="card-title">18 000 руб.</h4>
                      <a href="#" class="btn btn-order">Заказать</a>
                  </div>.card-body
              </div>.card       -->          
                </div>
            </div><!-- .row -->
            
        </div><!-- .container -->
    </div><!-- .gallery .container-fluid -->

    <div id="primary" class="content-area">
        <main id="main" class="site-main">



<div class="wrap_regions">
<?php
  $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
  if ($children) { ?>
  <ul class="nav nav-pills nav-stacked">
  <?php echo $children; ?>
  </ul>
<?php } ?>
</div>


        <?php
        if ( have_posts() ) :

            if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>

            <?php
            endif;

            /* Start the Loop */
            while ( have_posts() ) : the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part( 'template-parts/content', get_post_format() );

            endwhile;

            the_posts_navigation();

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->


<?php
/*get_sidebar();*/
get_footer();
