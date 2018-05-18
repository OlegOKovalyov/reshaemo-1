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
        <div class="video-block row mt-5 row">
            <div class="col-md-7">
                <nav class="nav flex-column">
                    <a class="nav-link" href="/videoobzor-diplomov-o-vysshem/">Видеообзор дипломов о высшем образовании</a>
                    <a class="nav-link" href="/videoobzor-diplomov-o-srednem-obrazovanii/">Видеообзор дипломов о среднем образовании</a>
                    <a class="nav-link" href="/videoobzor-diplomov-o-sredne-specialnom-obrazovanii/">Видеообзор дипломов средне-специальном образовании</a>
                    <a class="nav-link" href="/videoobzor-spravok-svidetelstv/">Видеообзор справок и свидетельств</a>
                </nav>

            </div>
            <div class="col-md-5 blk-montr">
                <a href="/videoobzor-diplomov/">
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

    <div class="video-card-deck">
      
      <div class="card col-12">
        <div class="card-body">
          <h2 class="card-title text-center"><?php echo esc_html( $atts['doc1'] ); ?></h2>
          <img class="card-img-top" src="/wp-content/uploads/2018/04/videoimage-300x168.jpg" alt="Card image cap">
          <a href="<?php echo esc_html( $atts['link1'] ); ?>" class="btn btn-outline-order mb-4">Смотреть</a>      
        </div>
      </div>

      <div class="card col-12">
        <div class="card-body">
          <h2 class="card-title text-center"><?php echo esc_html( $atts['doc2'] ); ?></h2>
          <img class="card-img-top" src="/wp-content/uploads/2018/04/videoimage-300x168.jpg" alt="Card image cap">
          <a href="<?php echo esc_html( $atts['link2'] ); ?>" class="btn btn-outline-order mb-4">Смотреть</a>
        </div>
      </div>

    </div>

    <?php 
    return ob_get_clean();
}

/** 
 * Блок из двух видео на подстраницах подстраниц страницы Видеообзор дипломов. Использование:
 * - в админке WordPress:
 * [videoiframe src1="Источник видео 1" src2="Источник видео 2" name1="Заголовок 1" name1="Заголовок 2"][/videoiframe]
 * - в файле-шаблоне:
 * <?php echo do_shortcode('[videoiframe src1="Источник видео 1" src2="Источник видео 2" name1="Заголовок 1" name1="Заголовок 2"][/videoiframe]'); ?>
 */
add_shortcode( 'videoiframe', 'show_videoiframe');
function show_videoiframe( $atts, $content, $tag ) {
    $src_1 = empty($atts['src1']) ? 'Видео дипломов' : esc_html($atts['src1']);
    $src_2 = empty($atts['src2']) ? 'Видео дипломов' : esc_html($atts['src2']);
    $name_1 = empty($atts['name1']) ? '#' : esc_html($atts['name1']);
    $name_2 = empty($atts['name2']) ? '#' : esc_html($atts['name2']);

    ob_start();
    ?>

    <div class="video-card-deck">
      
      <div class="card card-iframe">
        <div class="card-body">
            <h2 class="card-title text-center"><?php echo esc_html( $atts['name1'] ); ?></h2>
            <div class="video-container">
              <iframe width="100%" height="220" src="<?php echo esc_html( $atts['src1'] ); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>         
          </div>
        </div>
      </div>

      <div class="card card-iframe">
        <div class="card-body">
            <h2 class="card-title text-center"><?php echo esc_html( $atts['name2'] ); ?></h2>
            <div class="video-container">
              <iframe width="100%" height="220" src="<?php echo esc_html( $atts['src2'] ); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>             
          </div>
        </div>
      </div>

    </div>

    <?php 
    return ob_get_clean();
}