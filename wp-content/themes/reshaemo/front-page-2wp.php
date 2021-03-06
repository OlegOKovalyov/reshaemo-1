<?php
/**
 * The front page template file
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
                <div class="col-12 col-sm-12 col-md-7 col-lg-8">
                    <h2 class="display-3">Дипломы и аттестаты в Москве</h2>
                    <p class="lead">Оригинальный бланк ГОЗНАК!<br />Бесплатная доставка<br />по всей России!</p>
                </div><!-- .col-md-8 -->
                <div class="col-12 col-sm-12 col-md-5 col-lg-4">
                    <form class="mainpf">
                        <?php echo do_shortcode('[contact-form-7 id="569" title="Срочный заказ диплома"]'); ?>
                        <!--<fieldset>
                            <legend>Срочный<br />заказ диплома</legend>
                            <div class="form-group">-->
                                <!-- <label for="exampleFormControlInput1">Email address</label> -->
                                <!--<input type="text" class="form-control" id="fio" placeholder="Ф.И.О.">
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
                            </div>--><!-- .form-group -->
                            <!--<p class="safety">Ваши контактные данные целиком и полностью в безопасности и не могут быть переданы третьим лицам.</p>
                            <button type="submit" class="btn btn-outline-order">Заказать</button>
                            <p>После отправки информации с вами свяжется менеджер для уточнения технических деталей</p>
                        </fieldset>-->
                    </form>
                </div><!-- .col-md-4 -->
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
    <?php
        $id = 496; // Обязательно передавать переменную
        $post = get_page($id); 
        $content = $post->post_content;
        echo do_shortcode($content);
    ?>
</div><!-- .col -->

<div class="col">
    <?php
        $id = 505; // Обязательно передавать переменную
        $post = get_page($id); 
        $content = $post->post_content;
        echo do_shortcode($content);
    ?>
</div><!-- .col -->

                <!-- <div class="col">
                    <div class="card card-vo">
                        <img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/Diplom-2014-specialist.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><span class="upcase">Диплом о высшем  оразовании</span><br /> с 2014 по 2017 годы<br /><span class="lcaseb">Бланк Гознак</span></p>
                            <h4 class="card-title">20 000 руб.</h4>
                            <a href="#" class="btn btn-order">Заказать</a>
                        </div> --><!-- .card-body -->
                    <!-- </div> --><!-- .card -->                
                <!-- </div> -->
                <!-- <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/Diplom-2014-specialist.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><span class="upcase">Диплом о среднем специальном оразовании</span><br /> с 2014 по 2017 годы</p>
                            <h4 class="card-title">18 000 руб.</h4>
                            <a href="#" class="btn btn-order">Заказать</a>
                        </div> --><!-- .card-body -->
                    <!-- </div> --><!-- .card -->                
                <!-- </div> -->
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
    <?php
        $id = 327; // Обязательно передавать переменную
        $post = get_page($id); 
        $content = $post->post_content;
        echo do_shortcode($content);
    ?>
</div><!-- .col -->

<div class="col">
    <?php
        $id = 295; // Обязательно передавать переменную
        $post = get_page($id); 
        $content = $post->post_content;
        echo do_shortcode($content);
    ?>
</div><!-- .col -->

                <!-- <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/Diplom-2014-specialist.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><span class="upcase">Диплом о среднем специальном оразовании</span><br /> с 2014 по 2017 годы</p>
                            <h4 class="card-title">18 000 руб.</h4>
                            <a href="#" class="btn btn-order">Заказать</a>
                        </div> --><!-- .card-body -->
                    <!-- </div> --><!-- .card -->                
                <!-- </div> -->
                <!-- <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/images/Diplom-2014-specialist.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><span class="upcase">Диплом о среднем специальном оразовании</span><br /> с 2014 по 2017 годы</p>
                            <h4 class="card-title">18 000 руб.</h4>
                            <a href="#" class="btn btn-order">Заказать</a>
                        </div> --><!-- .card-body -->
                    <!-- </div> --><!-- .card -->                
                <!-- </div> -->
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
			<div class="blank-block"></div>

			<div class="video-block container">
				<div class="row">
					<h2>Видеопрезентация компании</h2>					
					<div class="col-7 video-links">
						<nav class="nav flex-column">
							<a class="nav-link" href="#">Диплом о высшем обрзовании с 2014 по 2017 год</a>
							<a class="nav-link" href="#">Диплом о высшем обрзовании с 2014 по 2017 год</a>
							<a class="nav-link" href="#">Диплом о высшем обрзовании с 2014 по 2017 год</a>
							<a class="nav-link" href="#">Диплом о высшем обрзовании с 2014 по 2017 год</a>
							<a class="nav-link" href="#">Диплом о высшем обрзовании с 2014 по 2017 год</a>
						</nav>
                        <div class="dipl_contains">
    						<h4>Диплом, который вы решите приобрести у нас, содержит:</h4>
    						<p>твердую обложку;</p>
    						<p>сведения об определенной специальности и уровне квалификации;</p>
    						<p>специальный вкладыш, где представлены изученные дисциплины и полученные отметки по ним.</p>
                        </div><!-- .dipl_contains -->
					</div>
					<div class="col-5 monitor"><img src="<?php bloginfo('template_url'); ?>/images/mntr-play.png" alt="Монтитор компьютера"></div>
				</div>
			</div>

		</main><!-- #main .site-main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
