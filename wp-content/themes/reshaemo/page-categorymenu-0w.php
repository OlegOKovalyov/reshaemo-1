<?php
/**
 * Template Name: Category Top Large Menu Page Template page-categorymenu.php 
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

<div class="container-fluid page-categorymenu">
    <div class="container">

        <?php echo do_shortcode('[sfbtnsgroup]'); ?>

        <div class="row">
            <div class="col-8">
                <h1><?php the_title(); ?></h1>

                <section>
                    <?php while (have_posts()): the_post();?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </section>

                <div class="dipl_contains">
                    <h4>Диплом, который вы решите приобрести у нас, содержит:</h4>
                    <p>твердую обложку;</p>
                    <p>сведения об определенной специальности и уровне квалификации;</p>
                    <p>специальный вкладыш, где представлены изученные дисциплины и полученные отметки по ним.</p>
                </div><!-- .dipl_contains -->
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                     
                                        <?php /*echo do_shortcode('[shortcode id="304"]');*/ ?>
                                        
                                    </div><!-- .col-12 -->
                                </div><!-- .row --> 
                            </div><!-- .container -->
                    </div><!-- .tab-pane -->
                </div>
            </div><!-- .col-8 -->

            <?php /*get_sidebar('catalogue');*/ ?> 

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

      <div class="video-block container">
          <div class="row">
              <!-- <img src="<?php /*bloginfo('template_url');*/ ?>/images/monitor.png" alt="Монтитор компьютера">  --> 
              <h2>Видеопрезентация компании</h2> 
              <div class="monitor"></div>  
              <img src="<?php bloginfo('template_url'); ?>/images/monitor.png" alt="Монтитор компьютера">       
              <div class="video-links">
                  <!-- <div class="row"> -->
                      <nav class="nav flex-column">
                          <a class="nav-link" href="#">Диплом о высшем обрзовании с 2014 по 2017 год</a>
                          <a class="nav-link" href="#">Диплом о высшем обрзовании с 2014 по 2017 год</a>
                          <a class="nav-link" href="#">Диплом о высшем обрзовании с 2014 по 2017 год</a>
                          <a class="nav-link" href="#">Диплом о высшем обрзовании с 2014 по 2017 год</a>
                          <a class="nav-link" href="#">Диплом о высшем обрзовании с 2014 по 2017 год</a>
                      </nav><!-- .nav .flex-column -->
                  <!-- </div> --><!-- .row -->
              </div><!-- .video-links -->
            
          </div><!-- .row -->
      </div><!-- .video-block .container -->  

        <!-- Выводим последние ОТЗЫВЫ -->
        <div class="comment-respond">
            <h4 class="py-4">Отзывы</h4>
                <?php recent_comments_remak (); ?>
                <p class="with_btn"><a href="<?php echo bloginfo('home'); ?>/otzyvy/" class="btn btn-default" role="button">смотреть все отзывы о документах</a></p>
        </div><!-- .comment-respond -->

            </div><!-- .col-4 -->

        </div><!-- .row --> 
        
    </div><!-- .container -->
</div><!-- .gallery .container-fluid -->

<!-- <div id="primary" class="content-area page-catalogue">
    <main id="main" class="site-main">

    </main> --><!-- #main -->
<!-- </div> --><!-- #primary -->

<?php
get_footer();
