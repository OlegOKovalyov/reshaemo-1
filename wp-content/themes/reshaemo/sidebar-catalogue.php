<!-- Sidebar for page-catalogue.php -->
	<!-- Меню сайдбара -->
    <?php
        if ( function_exists('dynamic_sidebar') && is_active_sidebar('sb-cat') )
	        dynamic_sidebar('sb-cat');
    ?>
    <div class="blank-block-btm"></div>

<!-- /Sidebar for page-catalogue.php -->
