// Файл single-products.php:
<!-- <div id="primary" class="content-media">
    <main id="main" class="site-main" role="main">
        <?php
            /*while( have_posts() ) : the_post(); ?>
            	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php get_template_part( 'template-parts/content', 'type' );
            endwhile;*/
        ?>
    </main>
</div> -->

<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			/*the_post_navigation();*/

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
