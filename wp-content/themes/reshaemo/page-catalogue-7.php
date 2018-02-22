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

<div class="gallery container-fluid page-catalogue">
    <div class="container">

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
            <div class="col-10 order-1">



                <?php 
                  wp_nav_menu( array(
                  'theme_location'=>'cat-top-menu', // (string) Расположение меню в шаблоне.
                                                // (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                  'cat-top-menu' => 'Верхнее меню страницы Каталог', // (string) Название выводимого меню (указывается в 
                                // админке   при создании меню, приоритетнее 
                                // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                  'container'       => 'div', // (string) Контейнер меню. Обворачиватель ul. 
                                              // Указывается тег контейнера (по умолчанию в тег div)
                  'container_class' => 'col-10 order-1',
                  //'container_id'    => '',
                  'menu_class'=>'nav nav-tabs',
                  'menu_id' => 'myTab',
                  //'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'after'=>'',
                  'container'=>''
                  ) );
                ?>


<script>

   /* $( "#myTab li.menu-item a" ).addClass( "nav-item nav-link" );*/


/*    var selectory = '#myTab li.menu-item a';
   $j(selectory).css({
    'class': 'nav-link',
    'id': 'home-tab', 
    'data-toggle': 'tab', 
    'role': 'tab', 
    'aria-selected': 'true',
  });*/

/*$('#myTab li.menu-item a').each(function(){
    var tabslink = $(this)
*/

/*});
*/

</script>



<script>

    /*myTab.setAttribute('class', 'new'); // (2) атрибут Test установлен

    $('#myTab').attr({
        class: 'nav-link',
        id: 'home-tab', 
        data-toggle: 'tab', 
        role: 'tab', 
        //aria-controls: 'home', 
        aria-selected: 'true',
    });

    // Выводим значение атрибута 'href' элемента #myLink
    alert ( $('#myTab').attr('class') );*/

    /*alert( elem.getAttribute('About') );
    $('a[href^=http://]') .addClass('externalLink');
    alert( document.body.innerHTML );*/

</script>


<!-- <div id="elem" about="Elephant"></div> -->

  <script>
    /*alert( elem.getAttribute('About') ); // (1) 'Elephant', атрибут получен

    elem.setAttribute('Test', 123); // (2) атрибут Test установлен
    alert( document.body.innerHTML ); // (3) в HTML видны все атрибуты!

    var attrs = elem.attributes; // (4) можно получить коллекцию атрибутов
    for (var i = 0; i < attrs.length; i++) {
      alert( attrs[i].name + " = " + attrs[i].value );
    }*/
  </script>



<!-- <nav class="nav nav-tabs" id="myTab" role="tablist">
  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
</nav>

<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>
 -->





<!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li>
</ul> -->



<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <?php
              /* $page_id = 54;
               $page_cont = get_page( $page_id );
               echo $content = $page_cont->post_content;*/ ?>

               <?php echo do_shortcode('[shortcode id="143"]'); ?>

              <?php while (have_posts()): the_post();?>
                  <?php the_content();?>
              <?php endwhile; ?>
    </div><!-- .tab-pane .fade -->

    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">profile content
              <?php while (have_posts()): the_post();?>
                  <?php the_content();?>
              <?php endwhile; ?>
    </div><!-- .tab-pane .fade -->

    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">contanct content
              <?php while (have_posts()): the_post();?>
                  <?php the_content();?>
              <?php endwhile; ?>
    </div><!-- .tab-pane .fade -->
</div><!-- .tab-content -->   


<script>
/*$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  e.target // newly activated tab
  e.relatedTarget // previous active tab
})*/
</script>             



<!-- <nav class="nav nav-tabs" id="myTab" role="tablist">
  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Высшее образование</a>
  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><?php /*echo 'Вкладка1'; echo do_shortcode('[shortcode id="143"]');*/ ?></div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><?php /*echo 'Вкладка2';  echo do_shortcode('[shortcode id="143"]');*/ ?></div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"><?php /*echo 'Вкладка3';*/ ?></div>
</div> -->




            </div><!-- .col-10 -->

            <?php get_sidebar('catalogue'); ?> 

        </div><!-- .row --> 
    </div><!-- .container -->
</div><!-- .gallery .container-fluid -->

<!-- <div id="primary" class="content-area page-catalogue">
    <main id="main" class="site-main">

    </main> --><!-- #main -->
<!-- </div> --><!-- #primary -->

<?php
get_footer();
