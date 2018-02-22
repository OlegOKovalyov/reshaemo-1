// Файл taxonomy-products.php:
<div id="primary" class="content-media">
    <main id="main" class="site-main" role="main">
        <h2><?php /*single_term_title();*/ ?></h2>
        <?php
            $args = array( 'post_type' => 'products' );
            $query = new WP_Query( $args );
            while( $query->have_posts() ) {
                $query->the_post();
                get_template_part( 'template-parts/content', 'products' );
            } wp_reset_postdata();
        ?>
    </main>
</div>