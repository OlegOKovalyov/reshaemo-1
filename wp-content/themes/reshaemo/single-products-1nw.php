// Файл single-products == файлу content-products.php:
<!-- <div class="irem" style="margin-top: 55px;">
    <h2><a href="<?php /*the_permalink();*/ ?>"><?php /*the_title();*/ ?></a></h2>
    <div><?php /*the_content();*/ ?></div> -->

<div class="gallery container-fluid page-catalogue">
    <div class="container">
		<div class="blank-block"></div>
        <div class="sfbtns-group container py-3">
            <div class="row">
                <div class="col-5">
                    <form class="form-inline my-2 my-lg-0">
                        <!-- <div class="col-3"> -->
                            <input class="form-control mr-sm-2" type="search" placeholder="введите слова поиска" aria-label="Search">
                        <!-- </div> --><!-- .col-3 -->
                        <!-- <div class="col-2"> -->
                        <button class="btn btn-outline-order btn-outline-findoc my-2 my-sm-0" type="submit">Найти документы</button>
                        <!-- </div> --><!-- .col-2 -->
                    </form>
                </div><!-- .col-5 -->
                <div class="col-2 extnd-srch">
                    <a href="#">расширенный поиск</a>
                </div><!-- .col-2 .extnd-srch -->
                <!-- <div class="col1"></div> -->
                <div class="ml-auto col-2 callbk-btn">
                    <a class="btn btn-outline-callback" href="#">Видео о дипломах</a>
                </div><!-- .col-2 .callbk-btn -->
                <div class="col-2 callbk-btn">
                    <a class="btn btn-outline-callback" href="#">Обратный звонок</a>
                </div><!-- .col-2 .callbk-btn -->
            </div><!-- .row -->
        </div><!-- .sfbtns-group -->   

        <div class="row">
            <div class="col-10 order-1 main-catlg">





                <?php 
                  wp_nav_menu( array(
                  'theme_location'=>'cat-top-menu', // (string) Расположение меню в шаблоне.
                                                // (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                  'cat-top-menu' => 'Верхнее меню страницы Каталог', // (string) Название выводимого меню (указывается в 
                                // админке   при создании меню, приоритетнее 
                                // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                  //'container'       => 'div', // (string) Контейнер меню. Обворачиватель ul. 
                                              // Указывается тег контейнера (по умолчанию в тег div)
                  'container_class' => 'main-catlg',
                  //'container_id'    => '',
                  'menu_class'=>'nav nav-tabs',
                  'menu_id' => 'myTab',
                  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'after'=>'',
                  'container'=>''
                  ) );
                ?>
        <section>


              <div class="col-12">
                  <div class="row">
                      	<h2><?php the_title(); ?></h2>
                        <div class='owl-carousel owl-theme gallery-certs'>
                            <?php the_content(); ?>
                      </div><!-- .content .owl-carousel .owl-theme -->
                  </div><!-- .row -->
              </div><!-- .col-12 -->            

        </section>

            </div><!-- .col-10 -->

            <?php get_sidebar('catalogue'); ?> 

        </div><!-- .row --> 
    </div><!-- .container -->
</div><!-- .gallery .container-fluid .page-catalogue -->

<!-- <div id="primary" class="content-area page-catalogue">
    <main id="main" class="site-main">

    </main> --><!-- #main -->
<!-- </div> --><!-- #primary -->



<!-- </div> --><!-- .irem -->