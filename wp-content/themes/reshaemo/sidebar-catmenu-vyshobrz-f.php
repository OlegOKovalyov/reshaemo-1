<!-- Sidebar for page-catmenu-vyshobrz.php Высшее образование статьи -->
<div class="col-12 col-sm-2 aside-catalogue">

	<div class="blank-block-top"></div>

	<!-- Меню сайдбара -->
    <?php
        if ( function_exists('dynamic_sidebar') && is_active_sidebar('catmenu_vyshobrz_sb') )
	        dynamic_sidebar('catmenu_vyshobrz_sb');
    ?>
    <div class="blank-block-btm"></div>

</div><!-- .col-2 .aside-catalogue -->
<!-- /Sidebar for page-catmenu-vyshobrz.php Высшее образование статьи -->