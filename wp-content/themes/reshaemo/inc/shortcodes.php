<?php

/** 
 * Блок ссылок на странице Видеообзор дипломов. Использование:
 * - в админке WordPress:
 * [videodipls]
 * - в файле-шаблоне:
 * <?php echo do_shortcode('[videodipls]'); ?>
 */
add_shortcode( 'videodipls', 'show_videodipls');
function show_videodipls( $atts, $content, $tag ) {

	ob_start(); ?>
        <div class="col video-block row mt-5">
            <div class="col-md-7">
                <nav class="nav flex-column">
                    <a class="nav-link" href="/videoobzor-diplomov-o-vysshem/">Видеообзор дипломов о высшем образовании</a>
                    <a class="nav-link" href="/videoobzor-diplomov-o-srednem-obrazovanii/">Видеообзор дипломов о среднем образовании</a>
                    <a class="nav-link" href="/videoobzor-diplomov-o-sredne-specialnom-obrazovanii/">Видеообзор дипломов средне-специальном образовании</a>
                    <a class="nav-link" href="/videoobzor-spravok-svidetelstv/">Видеообзор справок и свидетельств</a>
                </nav>

            </div>
            <div class="col-md-5">
                <a href="#">
                    <img src="/wp-content/themes/reshaemo/images/mntr-play.png" alt="Монтитор компьютера">
                </a>
            </div>
        </div>
<?php 
    return ob_get_clean();
}

/** 
 * Блок из двух карточек на подстраницах страницы Видеообзор дипломов. Использование:
 * - в админке WordPress:
 * [videomiscdipls doc1="Название1" doc2="Название2" link1="/Slug страницы 1/" link2="/Slug страницы 2/"][/videomiscdipls]
 * - в файле-шаблоне:
 * <?php echo do_shortcode('[videomiscdipls doc1="Название1" doc2="Название2" link1="/Slug страницы 1/" link2="/Slug страницы 2/"][/videomiscdipls][/videomiscdipls]'); ?>
 */
add_shortcode( 'videomiscdipls', 'show_videomiscdipls');
function show_videomiscdipls( $atts, $content, $tag ) {
    $doc_1 = empty($atts['doc1']) ? 'Видео дипломов' : esc_html($atts['doc1']);
    $doc_2 = empty($atts['doc2']) ? 'Видео дипломов' : esc_html($atts['doc2']);
    $link_1 = empty($atts['link1']) ? '#' : esc_html($atts['link1']);
    $link_2 = empty($atts['link2']) ? '#' : esc_html($atts['link2']);
    ob_start();
    ?>

    <div class="card-deck video-card-deck">
      
      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?php echo esc_html( $atts['doc1'] ); ?></h3>
          <img class="card-img-top" src="/wp-content/uploads/2018/04/videoimage-300x168.jpg" alt="Card image cap">
          <a href="<?php echo esc_html( $atts['link1'] ); ?>" class="btn btn-outline-order mb-4">Смотреть</a>      
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?php echo esc_html( $atts['doc2'] ); ?></h3>
          <img class="card-img-top" src="/wp-content/uploads/2018/04/videoimage-300x168.jpg" alt="Card image cap">
          <a href="<?php echo esc_html( $atts['link2'] ); ?>" class="btn btn-outline-order mb-4">Смотреть</a>
        </div>
      </div>

    </div>

    <?php 
    return ob_get_clean();
}