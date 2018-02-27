<div class="container-fluid">
    <div class="container">

        <?php $child_pages = array( "291", "317", "331" ); ?>

        <div class="row">
            <div class="col-12">

                <?php foreach( $child_pages as $child_page ) { ?>

                    <h2><?php echo get_the_title($child_page); ?></h2>
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

                <?php } ?>

            </div><!-- .col-12 -->
        </div><!-- .row --> 
    </div><!-- .container -->
</div><!-- .gallery .container-fluid -->
