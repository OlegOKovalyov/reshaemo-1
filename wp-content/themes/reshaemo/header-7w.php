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

/*require_once('city.php');
 
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
}*/

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic" rel="stylesheet">

    <script>
    // <![CDATA[
        /*function loadCity(select)
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
        }*/
    // ]]>
    </script>    
    <!--[if lt IE 9]>
        <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
    <![endif]-->

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<header id="masthead" class="site-header">
	    <div class="container">


<!-- <?php /*echo do_shortcode('[topmenubtm email="smartkoa2003@gmail.com" tel1="+380 50 322-7611" tel2="+380 98 222-1122"][/topmenubtm]');*/ ?> -->

<?php echo do_shortcode('[topbtmlargemenu email="dipgood.com@gmail.com" tel1="+7(800)200-69-81" tel2="+7(800)200-69-81"][/topbtmlargemenu]'); ?>



        </div><!-- .container -->
    </header><!-- #masthead .site-header -->
		
	<nav class="navbar navbar-expand-lg navbar-light bg-light topnarrow-menu"  style="background-color: #88E769;">
        <div class="container">


            <?php if ( is_front_page() ): ?>
                <!-- <div class="col-lg-5 col-sm-11 choose-city">
                    <a class="navbar-brand" href="#">Выберите ваш город:</a>
                    <select name="region" onchange="loadCity(this)">
                        <option>Выберите область</option>
                     
                        <?php // заполняем список областей
                            //foreach ($city as $region => $cityList)
                            {
                                //echo '<option value="' . $region . '">' . $region . '</option>' . "\n";
                            }
                        ?>
                     
                    </select>
                    <select name="city" disabled="disabled">
                        <option>Выберите город</option>
                    </select>
                </div> --><!-- .col-5 .choose-city -->
            <?php else: ?>
                <div class="col-lg-6 col-md-11 col-sm-10 brdcrmb-wrap">

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
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li> -->
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

