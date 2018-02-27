	<nav id="site-navigation" class="main-navigation">
    <div class="container">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'reshaemo' ); ?></button>
        <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
            ) );
        ?>
    </div><!-- .container -->
	</nav><!-- #site-navigation -->



        <?php
            wp_nav_menu( array(
                'theme_location' => 'main-menu',
                'menu_id'        => 'primary-menu',
            ) );
        ?>