<?php
/**
 * Template Name: Warranties Page Template page-warranties.php 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP-Reshaemo
 */

get_header(); ?>

	<div id="primary" class="content-area page-warranties">
		<main id="main" class="container site-main">

			<!-- <h2>Диплом специалиста</h2> -->
			<h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>



<nav class="nav nav-tabs" id="myTab" role="tablist">
  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

<div class="container-fluid">
    <div class="container">

        <div class="row">
            <div class="col-12">


                <!--<h1><?php /*the_title();*/ ?></h1>-->
                <h2><?php echo get_the_title(56); ?></h2>
                <div class="row">

                    <!-- Выводим карточки товаров по 4 шт. в строку (не карусель) -->
                    <div class="gallery-certs">

                        <?php
                        $mypages = get_pages( array( 'child_of' => 56, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
                        foreach( $mypages as $page ) {      
                            $content = $page->post_content;
                            if ( ! $content ) continue; // пропустим страницу без контента
                            $content = apply_filters( 'the_content', $content );
                            ?>
                            
                            <div class="entry mscwhei_lst"><?php echo $content; ?></div>

                            <?php
                        } ?>

                    </div><!-- .gallery-certs -->
                    <!-- /Выводим карточки товаров по 4 шт. в строку (не карусель) -->
                </div><!-- .row  (inner)-->
                    
                <h2><?php echo get_the_title(74); ?></h2>
                <div class="row">
                    <!-- Выводим карточки товаров по 4 шт. в строку (карусель) -->
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
                    <!-- /Выводим карточки товаров по 4 шт. в строку -->
                </div><!-- .row (inner) -->

            </div><!-- .col-12 -->

        </div><!-- .row --> 
    </div><!-- .container -->
</div><!-- .gallery .container-fluid -->


  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">	This is Profile page.
	  <?php echo 'Вкладка2'; echo do_shortcode('[shortcode id="89"]'); ?>
  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">	This is Contact page.
  	  <?php echo 'Вкладка3'; echo do_shortcode('[shortcode id="143"]'); ?>
  </div>
</div>





		</main><!-- #main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
