<!-- Sidebar for page-catalogue.php -->
<div class="col-2 aside-catalogue">

	<div class="blank-block-top"></div>

	<!-- Меню сайдбара -->
    <?php
        if ( function_exists('dynamic_sidebar') && is_active_sidebar('sb-cat') )
	        dynamic_sidebar('sb-cat');
    ?>
    <div class="blank-block-btm"></div>

</div><!-- .col-2 .aside-catalogue -->
<!-- /Sidebar for page-catalogue.php -->
