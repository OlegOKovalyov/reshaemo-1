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
                </div><!-- .col -->
                <div class="col"><?php echo do_shortcode('[diplspec201417 price="35 000"][/diplspec201417]'); ?>
    <!--                 <div class="card">
                  <img class="card-img-top" src="<?php /*echo bloginfo('template_url');*/ ?>/images/Diplom-2014-specialist.png" alt="Card image cap">
                  <div class="card-body">
                      <p class="card-text"><span class="upcase">Диплом о среднем специальном оразовании</span><br /> с 2014 по 2017 годы</p>
                      <h4 class="card-title">18 000 руб.</h4>
                      <a href="#" class="btn btn-order">Заказать</a>
                  </div>.card-body
              </div>.card       -->          
                </div><!-- .col -->
            </div><!-- .row -->
            
        </div><!-- .container -->
    </div><!-- .gallery .container-fluid -->




<div class="gallery container-fluid page-catalogue">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <h2><?php echo get_the_title(56); ?></h2>
        <div class="row">

            <!-- Это полностью рабочий код. Выводит карточки товаров по 4 шт. в строку (карусель) -->
            <div class="gallery-certs">
            <?php
            $mypages = get_pages( array( 'child_of' => 56, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

            foreach( $mypages as $page ) {      
                $content = $page->post_content;

                // пропустим страницу без контента
                if ( ! $content ) continue;

                $content = apply_filters( 'the_content', $content );

                ?>
                
                <div class="entry mscwhei_lst"><?php echo $content; ?></div>
                <?php
            } ?>
            </div><!-- .gallery-certs -->
            <!-- /Это полностью рабочий код. Выводит карточки товаров по 4 шт. в строку -->
        </div><!-- .row -->
            
    <!-- </div> --><!-- .container -->
<!-- </div> --><!-- .gallery .container-fluid -->



<!-- <div class="gallery container-fluid">
    <div class="container"> -->
        <h2><?php echo get_the_title(74); ?></h2>
        <div class="row">
        <!-- Это полностью рабочий код. Выводит карточки товаров по 4 шт. в строку (карусель) -->
        <div class="owl-carousel owl-theme gallery-certs">
        <?php
        $mypages = get_pages( array( 'child_of' => 74, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

        foreach( $mypages as $page ) {      
            $content = $page->post_content;

            // пропустим страницу без контента
            if ( ! $content ) continue;

            $content = apply_filters( 'the_content', $content );

            ?>
            
            <div class="entry"><?php echo $content; ?></div>
            <?php
        } ?>
        </div><!-- .gallery-certs -->
        <!-- /Это полностью рабочий код. Выводит карточки товаров по 4 шт. в строку -->
        </div><!-- .row -->    
    </div><!-- .container -->
</div><!-- .gallery .container-fluid -->



    <div id="primary" class="content-area page-catalogue">
        <main id="main" class="site-main">


                            <div class="order_review_txt">
                                <h1><?php /*the_title();*/ ?></h1>
                                <div class="slider_line">&nbsp;</div>

                                <section>
                                    <?php if (have_posts()): while (have_posts()): the_post(); ?>
                                        <?php the_content(); ?>

                                    <?php endwhile; endif; ?>
                                </section>

  <?php global $post;
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;  
  //запрашиваем дочерние страницы
  $args = array(
    'post_parent' => $post->ID,
    'post_type'   => 'page',
    'order'       => 'ASC',
    'posts_per_page' => 15,
    'paged'       => $paged, //get_query_var( 'paged' )
  );
  $subpages = new WP_Query($args);
  
  // создаем выходные данные
  if ($subpages->have_posts()) :
    $output = '';
    while ($subpages->have_posts()) : $subpages->the_post();
      $output .= '<li class="mscwhei_lst"><!--<strong><a href="'.get_permalink().'">'.get_the_title().'</a></strong>-->
            '.get_the_content()/*do_shortcode('[diplspec201417 price="35 000"][/diplspec201417]')*/.'
            <!--<a href="'.get_permalink().'">Читать подробнее ?</a>--></li>';
    endwhile;
    $output .= '';


  else :
    $output = '<p>Дочерних страниц не найдено.</p>';
  endif;
  
  // сбрасываем запрос
  wp_reset_postdata(); 

if (function_exists("pagination")) {
    pagination($subpages->max_num_pages);
};                             

echo '<div class="container"><ul>' . "$output" . '</ul></div>';


if (function_exists("pagination")) {
    pagination($subpages->max_num_pages);
};

//the_posts_pagination();

?>



                            </div><!-- .order_review_txt  -->

<!--<?php
if (function_exists("pagination")) {
    pagination($subpages->max_num_pages);
};
 ?>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
<div class="container">
        <h2><?php the_title(); ?></h2>
</div>

<!-- Это полностью рабочий код. Выводит карточки товаров по 4 шт. в строку (карусель) -->
<div class="container owl-carousel owl-theme gallery-certs">
<?php
$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

foreach( $mypages as $page ) {      
    $content = $page->post_content;

    // пропустим страницу без контента
    if ( ! $content ) continue;

    $content = apply_filters( 'the_content', $content );

    ?>
    
    <div class="entry"><?php echo $content; ?></div>
    <?php
} ?>
</div><!-- .gallery-certs -->
<!-- /Это полностью рабочий код. Выводит карточки товаров по 4 шт. в строку -->




<!-- Диплом ПТУ (3 шт.) Owl-Carousel -->
              <div class="container owl-carousel owl-theme">

                          <div class="thumbnail">
                            <a href="/wp-content/uploads/2017/07/ptu-201417-640x449.jpg" target="_blank">
                              <img src="/wp-content/themes/reshaemo/images/diplom-vuza-do-1996-640x449-210x147.jpg" alt="Диплом ПТУ 2014-2017">
                            </a>
                            <div class="caption1">
                                <p><span class="dipltitle">Диплом<br /> ПТУ</span><br />2014 - 2017гг.<br />БЛАНК ГОЗНАК</p><p><span class="price">15 000 </span><span class="rouble"> &#8399;</span></p>
                              <p><a href="#" class="btn btn-info"><span><img src="/wp-content/themes/wpsite1001diplom/images/video_btn_min.png" alt="">Видеообзор</span></a></p>
                              <p class="buy"><a href="<?php echo bloginfo('home'); ?>/kupit-diplom/" class="btn btn-default callme_order_btn" role="button">Купить</a></p>
                            </div><!-- .caption1 -->
                          </div><!-- .thumbnail -->


                          <div class="thumbnail">
                            <a href="/wp-content/uploads/2017/07/ptu-201013-640x465.jpg" target="_blank">
                              <img src="/wp-content/themes/reshaemo/images/diplom-vuza-do-1996-640x449-210x147.jpg" alt="Диплом ПТУ 2010-2013">
                            </a>
                            <div class="caption1">
                                <p><span class="dipltitle">Диплом<br /> ПТУ</span><br />2010 - 2013гг.<br />БЛАНК ГОЗНАК</p><p><span class="price">15 000 </span><span class="rouble"> &#8399;</span></p>
                              <p><a href="#" class="btn btn-info"><span><img src="/wp-content/themes/wpsite1001diplom/images/video_btn_min.png" alt="">Видеообзор</span></a></p>
                              <p class="buy"><a href="<?php echo bloginfo('home'); ?>/kupit-diplom/" class="btn btn-default callme_order_btn" role="button">Купить</a></p>
                            </div><!-- .caption1 -->
                          </div><!-- .thumbnail -->


                          <div class="thumbnail">
                            <a href="/wp-content/uploads/2017/07/ptu-199609-640x449.jpg" target="_blank">
                              <img src="/wp-content/themes/reshaemo/images/diplom-vuza-do-1996-640x449-210x147.jpg" alt="Диплом ПТУ 1996-2009">
                            </a>
                            <div class="caption1">
                                <p><span class="dipltitle">Диплом<br /> ПТУ</span><br />1996 - 2009гг.<br />БЛАНК ГОЗНАК</p><p><span class="price">15 000 </span><span class="rouble"> &#8399;</span></p>
                              <p><a href="#" class="btn btn-info"><span><img src="/wp-content/themes/wpsite1001diplom/images/video_btn_min.png" alt="">Видеообзор</span></a></p>
                              <p class="buy"><a href="<?php echo bloginfo('home'); ?>/kupit-diplom/" class="btn btn-default callme_order_btn" role="button">Купить</a></p>
                            </div><!-- .caption1 -->
                          </div><!-- .thumbnail -->

              </div><!-- .owl-carousel .owl-theme -->
<!-- /Диплом ПТУ (3 шт.) Owl-Carousel -->





        </main><!-- #main -->
    </div><!-- #primary -->


<?php
/*get_sidebar();*/
get_footer();
