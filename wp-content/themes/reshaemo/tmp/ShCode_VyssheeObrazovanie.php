<div class="container-fluid">
    <div class="container">

        <?php /*$child_pages = array( "56", "74", "196" );*/ ?>

        
        <?php /*$my_wp_query = new WP_Query();
            $all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));*/
        ?>
        <?php/* $cur_page = $post->ID;*/ ?>
        <?php /*$child_pages = get_page_children( $post_id, $all_wp_pages );*/ ?>

        <?php /*echo '<pre>' . print_r( $child_pages, true ) . '</pre>';*/ ?>



<?php
  /*$child_pages = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');*/
 /* $child_pages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_title', 'sort_order' => 'asc' ) );*/
 ?>

<?php $parent_page = new WP_Query(array(
  'post_type' => 'page',
  'post_parent' => get_the_ID()
  )
); ?>

        <?php /*$child_pages = get_page_children( $parent_page, array( 
                                'post_parent' => 0,
                                'post_type'   => 'page', 
                                'numberposts' => -1,
                                'post_status' => 'publish'
                ) );*/
        ?>


        <?php $child_pages = get_posts( array( 
                                'post_parent' => null,
                                'post_type'   => 'page', 
                                'numberposts' => -1,
                                'post_status' => 'publish',
                                'orderby'     => 'title',
                                'order'       => 'asc'
                ) );
        ?>        
<?php echo ($children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0&depth=2')); ?>

<?php /*echo '<pre>' . print_r( $child_pages, true ) . '</pre>';*/ ?>

        <div class="row">
            <div class="col-12">

                <?php foreach( $child_pages as $child_page["ID"] ) { ?>

                    <h2><?php echo get_the_title($child_page["ID"]); ?></h2>
                    <div class="row">
                        <!-- Выводим карточки товаров по 4 шт. в строку (карусель) -->
                        <div class="owl-carousel owl-theme gallery-certs">

                            <?php
                            $mypages = get_pages( array( 'child_of' => $child_page, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );
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
                        <!-- /Выводим карточки товаров по 4 шт. в строку (карусель) -->
                    </div><!-- .row (inner) -->

                <?php } wp_reset_postdata(); // сброс ?>

            </div><!-- .col-12 -->
        </div><!-- .row --> 
    </div><!-- .container -->
</div><!-- .gallery .container-fluid -->
