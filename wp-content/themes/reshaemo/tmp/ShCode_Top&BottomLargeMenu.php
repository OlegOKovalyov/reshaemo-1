            <div class="top-wrap">
                <div class="row">
                    <div class="col-2">     
                        <div class="site-branding">
                            <div class="brand-card">
                                <div class="brand-card-body">
                                    <p class="brand-card-text">dipgood.com@gmail.com</p>
                                    <p class="brand-card-tel1">+7 (800) 200-69-81</p>
                                    <p class="brand-card-tel2">+7 (800) 200-69-81</p>
                                    <h4 class="brand-card-title"><a href="#" class="brand-card-link">Дипломы</a></h4>
                                    <h6 class="brand-card-subtitle mb-2">Гознаки, Аттестаты, Справки, Документы</h6>
                                </div><!-- .brand-card-body -->
                            </div><!-- .brand-card -->
                        </div><!-- .site-branding -->
                    </div><!-- .col-2 -->
                    <div class="triangle-left"></div>                      
                    <div class="col toplarge-menu">
                        <!-- <nav class="navbar navbar-expand-lg navbar-topmenu bg-topmenu"> -->
                        <nav class="navbar navbar-expand-lg navbar-light bg-topmenu">
                        <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> -->
                        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #BFE0F1;"> -->
                            <!--<a class="navbar-brand" href="#">Navbar</a>-->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavTop" aria-controls="navbarNavTop" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavTop">
                                <ul class="navbar-nav">
                                    <?php 
                                      wp_nav_menu( array(
                                      'theme_location'=>'top-large-menu', // (string) Расположение меню в шаблоне.
                                                                    // (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                                      'top-large-menu' => 'Верхнее широкое меню', // (string) Название выводимого меню (указывается в 
                                                    // админке   при создании меню, приоритетнее 
                                                    // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                                      //'container'       => 'nav', // (string) Контейнер меню. Обворачиватель ul. 
                                                                  // Указывается тег контейнера (по умолчанию в тег div)
                                      //'container_class' => 'navbar navbar-expand-lg navbar-light bg-topmenu',
                                      //'container_id'    => 'navbarNavTop',
                                      //'menu_class'=>'navbar navbar-expand-lg navbar-light bg-topmenu', 
                                      'menu_class' => 'navbar-nav',
                                      'before' => '',
                                      'after'=>'',
                                      'container'=>''
                                      ) );
                                    ?>
                        
                                </ul>
                            </div>
                        </nav>
                        <div class="triangle-right"></div> 
                    </div><!-- .col -->
                </div><!-- .row -->                    
            </div><!-- .top-wrap --> 
