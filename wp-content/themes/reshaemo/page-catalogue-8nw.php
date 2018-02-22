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
                  /*wp_nav_menu( array(
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
                  ) );*/
                ?>


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
                  //'container_id'    => 'myTab',
                  'menu_class'=>'nav nav-tabs',
                  'menu_id' => 'myTab',
                  //'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'after'=>'',
                  'container'=>''
                  ) );
                ?>


<!-- <nav class="nav nav-tabs" id="myTab" role="tablist">
  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
</nav> -->

<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><?php echo 'Вкладка1'; echo do_shortcode('[shortcode id="143"]'); ?></div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>



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




<h2>Delivery Options</h2>
<div class="tabs">
    <ul class="tabs__items">
        <li class="tabs__item"><a href="#usps">USPS</a></li>
        <li class="tabs__item"><a href="#ups">UPS</a></li>
        <li class="tabs__item"><a href="#fedex">FedEx</a></li>
    </ul>
    <div class="tabs__content">
        <div class="tabs__panel" id="usps" tabindex="-1">
            <h3 class="tabs__title">USPS</h3>
            <p>The <a href="http://en.wikipedia.org/wiki/United_States_Postal_Service">United States Postal Service</a> (originally called the U.S. Post Office Department, when it was completely managed by the U.S. government before 1971) also known as the Post Office, U.S. Mail, or Postal Service, often abbreviated as USPS is an independent agency of the United States federal government responsible for providing postal service in the United States. It is one of the few government agencies explicitly authorized by the United States Constitution.</p>
            <p>The USPS traces its roots to 1775 during the Second Continental Congress, where Benjamin Franklin was appointed the first postmaster general. The cabinet-level Post Office Department was created in 1792 from Franklin's operation and transformed into its current form in 1971 under the Postal Reorganization Act.</p>
        </div>
        <div class="tabs__panel" id="ups" tabindex="-1">
            <h3 class="tabs__title">UPS</h3>
            <p><a href="http://en.wikipedia.org/wiki/United_Parcel_Service">United Parcel Service</a> of North America, Inc., typically referred to and branded as UPS (stylized as ups), is one of the largest shipment and logistics companies in the world. The American global package delivery company is headquartered in Sandy Springs, Georgia, which is part of the Greater Atlanta metropolitan area. UPS delivers more than 15 million packages a day to more than 6.1 million customers in more than 220 countries and territories around the world.[4][5][6]. UPS is known for its brown delivery trucks and uniforms, hence the company nickname "Brown". UPS also operates its own airline and air cargo delivery service (IATA: 5X, ICAO: UPS, Call sign: UPS) based in Louisville, Kentucky.</p>
            </div>
        <div class="tabs__panel" id="fedex" tabindex="-1">
            <h3 class="tabs__title">FedEx</h3>
            <p><a href="http://en.wikipedia.org/wiki/FedEx_Ground">FedEx Ground</a> is a shipping company that is a subsidiary of the FedEx Corporation. It is headquartered in Moon Township, Pennsylvania, a suburb of Pittsburgh. Originally conceived as a lower cost competitor to UPS, Roadway Package System (RPS) was created to take advantage of new barcode, material handling and computer technologies.After beginning service on March 11, 1985, the company grew, expanding service from its initial coverage of the Mid-Atlantic states, so much so that it eventually became the largest subsidiary of its parent company, Akron-based Roadway Services. By 1996, RPS had achieved 100% coverage of the United States and Canada. In addition, Roadway Services had been reformed as a new holding company called Caliber System, Inc.</p>
        </div>
    </div>
</div>

<script> $j('.tabs').tabs();</script>

<!--     <div class="tabs__content">
    <div class="tabs__panel" id="usps" tabindex="-1">
        <h3 class="tabs__title">USPS</h3>
        <p>The <a href="http://en.wikipedia.org/wiki/United_States_Postal_Service">United States Postal Service</a> (originally called the U.S. Post Office Department, when it was completely managed by the U.S. government before 1971) also known as the Post Office, U.S. Mail, or Postal Service, often abbreviated as USPS is an independent agency of the United States federal government responsible for providing postal service in the United States. It is one of the few government agencies explicitly authorized by the United States Constitution.</p>
        <p>The USPS traces its roots to 1775 during the Second Continental Congress, where Benjamin Franklin was appointed the first postmaster general. The cabinet-level Post Office Department was created in 1792 from Franklin's operation and transformed into its current form in 1971 under the Postal Reorganization Act.</p>
    </div>
    <div class="tabs__panel" id="ups" tabindex="-1">
        <h3 class="tabs__title">UPS</h3>
        <p><a href="http://en.wikipedia.org/wiki/United_Parcel_Service">United Parcel Service</a> of North America, Inc., typically referred to and branded as UPS (stylized as ups), is one of the largest shipment and logistics companies in the world. The American global package delivery company is headquartered in Sandy Springs, Georgia, which is part of the Greater Atlanta metropolitan area. UPS delivers more than 15 million packages a day to more than 6.1 million customers in more than 220 countries and territories around the world.[4][5][6]. UPS is known for its brown delivery trucks and uniforms, hence the company nickname "Brown". UPS also operates its own airline and air cargo delivery service (IATA: 5X, ICAO: UPS, Call sign: UPS) based in Louisville, Kentucky.</p>
        </div>
    <div class="tabs__panel" id="fedex" tabindex="-1">
        <h3 class="tabs__title">FedEx</h3>
        <p><a href="http://en.wikipedia.org/wiki/FedEx_Ground">FedEx Ground</a> is a shipping company that is a subsidiary of the FedEx Corporation. It is headquartered in Moon Township, Pennsylvania, a suburb of Pittsburgh. Originally conceived as a lower cost competitor to UPS, Roadway Package System (RPS) was created to take advantage of new barcode, material handling and computer technologies.After beginning service on March 11, 1985, the company grew, expanding service from its initial coverage of the Mid-Atlantic states, so much so that it eventually became the largest subsidiary of its parent company, Akron-based Roadway Services. By 1996, RPS had achieved 100% coverage of the United States and Canada. In addition, Roadway Services had been reformed as a new holding company called Caliber System, Inc.</p>
    </div>
</div> -->

<div class="tabs tabs--js">
    <ul class="tabs__items" role="tablist">
        <li aria-controls="panel1" aria-selected="true" class="tabs__item" role="tab" tabindex="0" id="tab1">
            <a role="presentation">Tab 1</a>
        </li>
        <li aria-controls="panel2" aria-selected="false" class="tabs__item" role="tab" tabindex="-1" id="tab2">
            <a role="presentation">Tab 2</a>
        </li>
        <li aria-controls="panel3" aria-selected="false" class="tabs__item" role="tab" tabindex="-1" id="tab3">
            <a role="presentation">Tab 3</a>
        </li>
    </ul>
    <div class="tabs__content">
        <div class="tabs__panel" id="panel1" role="tabpanel" aria-hidden="false" aria-labelledby="tab1">
            panel3 heading & content
        </div>
        <div class="tabs__panel" id="panel2" role="tabpanel" aria-hidden="true" aria-labelledby="tab2">
            panel3 heading & content
        </div>
        <div class="tabs__panel" id="panel3" role="tabpanel" aria-hidden="true" aria-labelledby="tab3">
            panel3 heading & content
        </div>
    </div>
</div>




<div id="tab-container" class="tab-container">
  <ul class='etabs'>
    <li class='tab'><a href="#tabs1-html">HTML Markup</a></li>
    <li class='tab'><a href="#tabs1-js">Required JS</a></li>
    <li class='tab'><a href="#tabs1-css">Example CSS</a></li>
  </ul>
  <div id="tabs1-html">
    <h2>HTML Markup for these tabs</h2>
    <!-- content -->
  </div>
  <div id="tabs1-js">
    <h2>JS for these tabs</h2>
    <!-- content -->
  </div>
  <div id="tabs1-css">
    <h2>CSS Styles for these tabs</h2>
    <!-- content -->
  </div>
</div>

<script>$j('#tab-container').easytabs();</script>






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
