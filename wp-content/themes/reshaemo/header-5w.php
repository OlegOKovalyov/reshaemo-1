<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP-Reshaemo
 */

require_once('city.php');
 
if (isset($_GET['action']) && $_GET['action'] == 'getCity')
{
    if (isset($city[$_GET['region']]))
    {
        echo json_encode($city[$_GET['region']]); // возвращаем данные в JSON формате;
    }
    else
    {
        echo json_encode(array('Выберите область'));
    }
 
    exit;
}

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic" rel="stylesheet">

    <script type="text/javascript">
    // <![CDATA[
        function loadCity(select)
        {
            var citySelect = $('select[name="city"]');
            citySelect.attr('disabled', 'disabled'); // делаем список городов не активным
            
            // послыаем AJAX запрос, который вернёт список городов для выбранной области
            $.getJSON('index.php', {action:'getCity', region:select.value}, function(cityList){
                
                citySelect.html(''); // очищаем список городов
                
                // заполняем список городов новыми пришедшими данными
                $.each(cityList, function(i){
                    citySelect.append('<option value="' + i + '">' + this + '</option>');
                });
                
                citySelect.removeAttr('disabled'); // делаем список городов активным
                
            });
        }
    // ]]>
    </script>    

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<header id="masthead" class="site-header">
	    <div class="container">
            <div class="top-wrap">
                <div class="row">
                    <div class="col-2">     
                        <div class="site-branding">
                            <div class="brand-card">
                                <div class="brand-card-body">
                                    <p class="brand-card-text">dipgood.com@gmail.com</p>
                                    <p class="brand-card-tel1">+7 (800) 200-69-81</p>
                                    <p class="brand-card-tel2">+7 (800) 200-69-81</p>
                                    <h4 class="brand-card-title"><a href="#" class="brand-card-link">Дипломы</a></h4>
                                    <h6 class="brand-card-subtitle mb-2">Гознаки, Аттестаты, Справки, Документы</h6>
                                </div><!-- .brand-card-body -->
                            </div><!-- .brand-card -->
                        </div><!-- .site-branding -->
                    </div><!-- .col-2 -->
                    <div class="triangle-left"></div>                      
                    <div class="col toplarge-menu">
                        <!-- <nav class="navbar navbar-expand-lg navbar-topmenu bg-topmenu"> -->
                        <nav class="navbar navbar-expand-lg navbar-light bg-topmenu">
                        <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> -->
                        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #BFE0F1;"> -->
                            <!--<a class="navbar-brand" href="#">Navbar</a>-->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavTop" aria-controls="navbarNavTop" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavTop">
                                <ul class="navbar-nav">
                                    <?php 
                                      wp_nav_menu( array(
                                      'theme_location'=>'top-large-menu', // (string) Расположение меню в шаблоне.
                                                                    // (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                                      'top-large-menu' => 'Верхнее широкое меню', // (string) Название выводимого меню (указывается в 
                                                    // админке   при создании меню, приоритетнее 
                                                    // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                                      //'container'       => 'nav', // (string) Контейнер меню. Обворачиватель ul. 
                                                                  // Указывается тег контейнера (по умолчанию в тег div)
                                      //'container_class' => 'navbar navbar-expand-lg navbar-light bg-topmenu',
                                      //'container_id'    => 'navbarNavTop',
                                      //'menu_class'=>'navbar navbar-expand-lg navbar-light bg-topmenu', 
                                      'menu_class' => 'navbar-nav',
                                      'before' => '',
                                      'after'=>'',
                                      'container'=>''
                                      ) );
                                    ?>

                                    <!-- <li class="nav-item active">
                                        <div class="nav-card">
                                            <img class="nav-card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/i_topmenu1.png" alt="Card image cap">
                                            <div class="nav-card-body">
                                                <a href="#" class="nav-link"><br />Высшее<br /> образование<span class="sr-only">(current)</span></a>
                                            </div> --><!-- .nav-card-body -->
                                        <!-- </div> --><!-- .nav-card -->
                                    <!-- </li> -->
                                    <!-- <li class="nav-item">                                
                                        <div class="nav-card">
                                            <img class="nav-card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/i_topmenu2.png" alt="Card image cap">
                                            <div class="nav-card-body">
                                                <a href="#" class="nav-link">После-дипломное<br />образование<span class="sr-only">(current)</span></a>
                                            </div> --><!-- .nav-card-body -->
                                        <!-- </div> --><!-- .nav-card -->        
                                    <!-- </li> -->
                                    <!-- <li class="nav-item">
                                        <div class="nav-card">
                                            <img class="nav-card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/i_topmenu3.png" alt="Card image cap">
                                            <div class="nav-card-body">
                                                <a href="#" class="nav-link">Средне-специальное<br /> образование<br /><br /><span class="sr-only">(current)</span></a>
                                            </div> --><!-- .nav-card-body -->
                                        <!-- </div> --><!-- .nav-card -->
                                    <!-- </li> -->
                                    <!-- <li class="nav-item">
                                        <div class="nav-card">
                                            <img class="nav-card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/i_topmenu4.png" alt="Card image cap">
                                            <div class="nav-card-body">
                                                <a href="#" class="nav-link"><br />Аттестаты<br />школы<br /><span class="sr-only">(current)</span></a>
                                            </div> --><!-- .nav-card-body -->
                                        <!-- </div> --><!-- .nav-card -->
                                    <!-- </li> -->
                                    <!-- <li class="nav-item">
                                        <div class="nav-card">
                                            <img class="nav-card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/i_topmenu5.png" alt="Card image cap">
                                            <div class="nav-card-body">
                                                <a href="#" class="nav-link"><br />Справки и<br />свидетельства<br /><span class="sr-only">(current)</span></a>
                                            </div> --><!-- .nav-card-body -->
                                        <!-- </div> --><!-- .nav-card -->
                                    <!-- </li> -->                            
                                </ul>
                            </div>
                        </nav>
                        <div class="triangle-right"></div> 
                    </div><!-- .col -->

                    <!-- <div class="triangle-right"></div> -->                         
                        
                </div><!-- .row -->                    
            </div><!-- .top-wrap --> 
        </div><!-- .container -->
    </header><!-- #masthead .site-header -->
		
    <!-- <nav class="navbar navbar-expand-lg navbar-mainmenu bg-mainmenu topnarrow-menu"> -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light topnarrow-menu"  style="background-color: #88E769;">
        <div class="container">


<?php if ( is_front_page() ): ?>
    <div class="col-5 choose-city">
        <a class="navbar-brand" href="#">Выберите ваш город:</a>
        <select name="region" onchange="loadCity(this)">
            <option>Выберите область</option>
         
            <?php // заполняем список областей
                foreach ($city as $region => $cityList)
                {
                    echo '<option value="' . $region . '">' . $region . '</option>' . "\n";
                }
            ?>
         
        </select>
        <select name="city" disabled="disabled">
            <option>Выберите город</option>
        </select>
    </div><!-- .col-5 .choose-city -->
<?php else: ?>
    <div class="col-5 brdcrmb-wrap">

        <img src="<?php echo bloginfo('template_url'); ?>/images/i_homem.png" alt="">

<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>

    </div><!-- .col-5 .brdcrmb-wrap -->

<?php endif; ?>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <?php 
                  wp_nav_menu( array(
                  'theme_location'=>'main-menu', // (string) Расположение меню в шаблоне.
                                                // (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                  'main-menu' => 'Верхнее главное меню', // (string) Название выводимого меню (указывается в 
                                // админке   при создании меню, приоритетнее 
                                // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                  //'container'       => 'div', // (string) Контейнер меню. Обворачиватель ul. 
                                              // Указывается тег контейнера (по умолчанию в тег div)
                  //'container_class' => 'collapse navbar-collapse',
                  //'container_class' => 'collapse navbar-collapse',
                  //'container_id'    => 'myNavbar',
                  'menu_class'=>'navbar-nav', 
                  
                  'after'=>'',
                  'container'=>''
                  ) );
                ?>

            <ul class="navbar-nav">


                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Каталог</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Доставка</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Гарантии</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Отзывы</a>
                </li> -->                    
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Контакты</a>
                </li> -->
            </ul>
            </div>
        </div><!-- .container -->  
    </nav>


    <!-- <div class="container-fluid main-block">
        <div id="content" class="site-content container"> -->

