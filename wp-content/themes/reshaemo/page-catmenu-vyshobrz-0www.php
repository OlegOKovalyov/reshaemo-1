<?php
/**
 * Template Name: Category Menu Vysh Obraz Articles Page Template page-catmenu-vyshobrz.php 
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
            <div class="col-12 col-sm-2 aside-catalogue">

                <?php
                    if ( is_page( 'vysshee-obrazovanie-menu' ) || '390' == $post->post_ID ) {    
                        get_sidebar('catmenu-vyshobrz');
                    }
                    elseif ( is_page( 'posle-diplomnoe-obrazovanie-menu' ) || '393' == $post->post_ID ) {    
                        get_sidebar('catmenu-pdobrz');

                    }
                    elseif ( is_page( 'admissions' ) || '15' == $post->post_parent ) { 
                        $bannerimg = 'admissions.jpg';

                    }
                ?>

            </div><!-- .col-2 .aside-catalogue -->

            <?php /*get_sidebar('catmenu-vyshobrz');*/ ?>
            <div class="col-12 col-sm-10 col-lg-7 page-content">
                <section>
                    <h1><?php the_title(); ?></h1>
                    <?php while (have_posts()): the_post();?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </section>
            </div><!-- .col-8 -->

            <div class="col-12 col-lg-3 right-sb">
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
                        <img src="<?php bloginfo('template_url'); ?>/images/mntr-play.png" alt="Монтитор компьютера"> 
                        <!-- <img src="<?php bloginfo('template_url'); ?>/images/i_playscreensm.png" alt=""> -->      

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
