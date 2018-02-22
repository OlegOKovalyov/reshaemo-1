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
            <?php get_sidebar('catalogue'); ?>
            <div class="col-7">
                <section>
                    <h1><?php the_title(); ?></h1>
                    <?php while (have_posts()): the_post();?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </section>
            </div><!-- .col-8 -->

            <div class="col-3">
                <!-- <form class="mainpf"> -->
                    <?php echo do_shortcode('[contact-form-7 id="578" title="Срочный заказ диплома"]'); ?>
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
                <!-- </form> -->

                <div class="video-block container">
                    <div class="row">
                        <h2>Видеопрезентация компании</h2> 
                        <div class="monitor"></div>  
                        <img src="<?php bloginfo('template_url'); ?>/images/monitor.png" alt="Монтитор компьютера"> 
                        <img src="<?php bloginfo('template_url'); ?>/images/i_playscreensm.png" alt="">      

                        <div class="video-links list" id="list_1">
                            <span id="up-marker" data-scroll="0"></span>

                                    <?php
                                      $postid = '514';                                    
                                      $children = wp_list_pages('title_li=&child_of='.$postid.'&echo=0'.'&depth=1');
                                      if ($children) { ?>
                                      <ul class="nav">
                                      <?php echo $children; ?>
                                      </ul>
                                    <?php } ?>

                            <span id="down-marker" data-scroll="1"></span>
                            <a class="see-video" href="#">смотреть все видео о документах</a>
                        </div><!-- .video-links -->                        
                      
                    </div><!-- .row -->
                </div><!-- .video-block .container --> 
                <!-- <?php /*echo do_shortcode('[contact-form-7 id="569" title="Срочный заказ диплома"]');*/ ?> --> 

            </div><!-- .col-4 -->

        </div><!-- .row --> 
        
    </div><!-- .container -->
</div><!-- .gallery .container-fluid -->

<?php echo do_shortcode('[recentcomm]'); ?>

<?php
get_footer();
