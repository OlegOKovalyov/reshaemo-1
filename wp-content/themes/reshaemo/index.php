<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP-Reshaemo
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="blank-block"></div>

			<div class="video-block container">
				<div class="row">
					<h2>Видеопрезентация компании</h2>					
					<div class="col-7 video-links">
						<nav class="nav flex-column">
							<a class="nav-link" href="#">Диплом о высшем обрзовании с 2014 по 2017 год</a>
							<a class="nav-link" href="#">Диплом о высшем обрзовании с 2014 по 2017 год</a>
							<a class="nav-link" href="#">Диплом о высшем обрзовании с 2014 по 2017 год</a>
							<a class="nav-link" href="#">Диплом о высшем обрзовании с 2014 по 2017 год</a>
							<a class="nav-link" href="#">Диплом о высшем обрзовании с 2014 по 2017 год</a>
						</nav>
						<h4>Диплом, который вы решите приобрести у нас, содержит:</h4>
						<p>твердую обложку;</p>
						<p>сведения об определенной специальности и уровне квалификации;</p>
						<p>специальный вкладыш, где представлены изученные дисциплины и полученные отметки по ним.</p>
					</div>
					<div class="col-5 monitor"></div>
				</div>
			</div>












		</main><!-- #main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
