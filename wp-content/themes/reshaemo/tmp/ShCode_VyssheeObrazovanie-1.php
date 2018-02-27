<div class="container-fluid">
    <div class="container">

        <div class="row">
            <div class="col-12">


                <?php $child_pages = array( "56", "74", "196" ); ?>
                <h2><?php echo get_the_title($child_pages[0]); ?></h2>
                <div class="row">

                    <!-- Выводим карточки товаров по 4 шт. в строку (не карусель) -->
                    <div class="gallery-certs">

                        <?php
                        $mypages = get_pages( array( 'child_of' => $child_pages[0], 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
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


<?php foreach( $child_pages as $child_page ) { ?>

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

<?php } ?>
        

                <h2><?php echo get_the_title(196); ?></h2>
                <div class="row">

                    <!-- Выводим карточки товаров по 4 шт. в строку (не карусель) -->
                    <div class="gallery-certs">

                        <?php
                        $mypages = get_pages( array( 'child_of' => 196, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );
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


            </div><!-- .col-12 -->

        </div><!-- .row --> 
    </div><!-- .container -->
</div><!-- .gallery .container-fluid -->
