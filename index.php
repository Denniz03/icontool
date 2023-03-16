<?php 
    // variables
    $site_logo = "icons";
    $site_title = "IconTool";
    $site_subtitle = "Tool om iconen te maken";
    // icon files
    $icons_array = preg_grep('~\.(svg)$~', scandir('../fontawesome/svgs/solid'));
    $icons = '';
    foreach ($icons_array as $icon) {
        $icon = substr($icon, 0 , (strrpos($icon, ".")));
        $icons .= '<button value="'.$icon.'"><i class="fa-solid fa-fw fa-'.$icon.'"></i><p>'.$icon.'</p></button>';
    }
    // styles
    $styles = '
        <button><i class="fa-solid fa-fw fa-square"></i><p>solid</p></button>
        <button><i class="fa-regular fa-fw fa-square"></i><p>regular</p></button>
        <button><i class="fa-light fa-fw fa-square"></i><p>light</p></button>
        <button><i class="fa-thin fa-fw fa-square"></i><p>thin</p></button>
        <button><i class="fa-duotone fa-fw fa-square"></i><p>duotone</p></button>
        <button><i class="fa-solid fa-fw fa-dice-two"></i><p>gradient</p></button>
    ';
    // shapes
    $shapes = '
        <button><i class="fa-solid fa-fw fa-square"></i><p>square</p></button>
        <button><i class="fa-solid fa-fw fa-rectangle"></i><p>rectangle</p></button>
        <button><i class="fa-solid fa-fw fa-octagon"></i><p>octagon</p></button>
        <button><i class="fa-solid fa-fw fa-hexagon"></i><p>hexagon</p></button>
        <button><i class="fa-solid fa-fw fa-circle"></i><p>circle</p></button>
        <button><i class="fa-solid fa-fw fa-cloud"></i><p>cloud</p></button>
        <button><i class="fa-solid fa-fw fa-comment"></i><p>comment</p></button>
        <button><i class="fa-solid fa-fw fa-folder"></i><p>folder</p></button>
        <button><i class="fa-solid fa-fw fa-calendar"></i><p>calendar</p></button>
        <button><i class="fa-solid fa-fw fa-shield"></i><p>shield</p></button>
        <button><i class="fa-solid fa-fw fa-badge"></i><p>badge</p></button>
        <button><i class="fa-solid fa-fw fa-diamond"></i><p>diamond</p></button>
        <button><i class="fa-solid fa-fw fa-certificate"></i><p>certificate</p></button>
    ';
    // colors
    $colors = '
        <button value="#000000"><i class="fa-solid fa-fw fa-square" style="color: #000000"></i></button>
        <button value="#303030"><i class="fa-solid fa-fw fa-square" style="color: #303030"></i></button>
        <button value="#474747"><i class="fa-solid fa-fw fa-square" style="color: #474747"></i></button>
        <button value="#5E5E5E"><i class="fa-solid fa-fw fa-square" style="color: #5E5E5E"></i></button>
        <button value="#757575"><i class="fa-solid fa-fw fa-square" style="color: #757575"></i></button>
        <button value="#8C8C8C"><i class="fa-solid fa-fw fa-square" style="color: #8C8C8C"></i></button>
        <button value="#A3A3A3"><i class="fa-solid fa-fw fa-square" style="color: #A3A3A3"></i></button>
        <button value="#BABABA"><i class="fa-solid fa-fw fa-square" style="color: #BABABA"></i></button>
        <button value="#D1D1D1"><i class="fa-solid fa-fw fa-square" style="color: #D1D1D1"></i></button>
        <button value="#E8E8E8"><i class="fa-solid fa-fw fa-square" style="color: #E8E8E8"></i></button>
        <button value="#FFFFFF"><i class="fa-solid fa-fw fa-square" style="color: #FFFFFF"></i></button>

        <button value="#F34336"><i class="fa-solid fa-fw fa-square" style="color: #F34336"></i></button>
        <button value="#FF9700"><i class="fa-solid fa-fw fa-square" style="color: #FF9700"></i></button>
        <button value="#FFEA3B"><i class="fa-solid fa-fw fa-square" style="color: #FFEA3B"></i></button>
        <button value="#4CB050"><i class="fa-solid fa-fw fa-square" style="color: #4CB050"></i></button>
        <button value="#009788"><i class="fa-solid fa-fw fa-square" style="color: #009788"></i></button>
        <button value="#00BCD4"><i class="fa-solid fa-fw fa-square" style="color: #00BCD4"></i></button>
        <button value="#2196F3"><i class="fa-solid fa-fw fa-square" style="color: #2196F3"></i></button>
        <button value="#3F51B5"><i class="fa-solid fa-fw fa-square" style="color: #3F51B5"></i></button>
        <button value="#673BB7"><i class="fa-solid fa-fw fa-square" style="color: #673BB7"></i></button>
        <button value="#9C28B1"><i class="fa-solid fa-fw fa-square" style="color: #9C28B1"></i></button>
        <button value="#EA1E63"><i class="fa-solid fa-fw fa-square" style="color: #EA1E63"></i></button>
    ';
?>
<html>
    <head>
        <meta name="theme-color" content="#ffffff">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $site_title ?></title>
        <link href="style.css" rel="stylesheet">
        <script src="../fontawesome/js/all.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="java.js"></script>
    </script>
    </head>
    <body>
        <!-- overlay -->
        <div class="overlay"></div>
        <!-- header -->
        <header>
            <section>
                <article id="header-logo">
                    <span class="fa-stack fa-2x">
                        <i class="fa-solid fa-circle fa-stack-2x"></i>
                        <i class="fa-solid fa-<?php echo $site_logo ?> fa-stack-1x fa-inverse"></i>
                    </span>
                </article>
                <article id="header-title">
                    <header><?php echo $site_title ?></header>
                    <footer><?php echo $site_subtitle ?></footer>
                </article>
            </section>
        </header>
        <!-- nav -->
        <nav>
            <section id="nav-menu">
                <button class="active">
                    <i class="fa-regular fa-fw fa-home"></i>
                    <p>Home</p>
                </button>
                <button>
                    <i class="fa-regular fa-fw fa-cog"></i>
                    <p>Settings</p>
                </button>
                <button>
                    <i class="fa-regular fa-fw fa-user"></i>
                    <p>User</p>
                </button>
            </section>
            <section id="nav-search">
                <button class="hr">
                    <i class="fa-regular fa-fw fa-pipe"></i>
                </button>
                <input></input>
                <button>
                    <i class="fa-regular fa-fw fa-search"></i>
                    <p>Search</p>
                </button>
            </section>
        </nav>
        <!-- main -->
        <main>
            <section class="canvas">
            <svg class="svg-settings">
                <defs>
                    <linearGradient id="linear">
                        <stop id="linear-stop-1" style="stop-color: #ffa94d" offset="0%"></stop>
                        <stop id="linear-stop-2" style="stop-color: #e8590c" offset="100%"></stop>
                    </linearGradient>
                    
                    <radialGradient id="radial">
                        <stop class="radial-stop1" offset="0%"></stop>
                        <stop class="radial-stop2" offset="100%"></stop>
                    </radialGradient>
                </defs>
                </svg>
                <article class="fa-8x">
                    <span class="fa-layers fa-fw">
                        <i id="icon-background" class="fa-solid fa-square" style="color: #E8E8E8"></i>
                        <i id="icon-icon" class="fa-inverse fa-solid fa-heart" data-fa-transform="shrink-7 rotate-0 up-2" style="color: #F34336; --fa-secondary-color: #FFEA3B"></i>
                        <span id="icon-text" class="fa-layers-text fa-inverse" data-fa-transform="shrink-13 rotate-0 up--4" style="color: #FFFFFF">label</span>
                    </span>
                </article>
            </section>
            <!-- aside -->
            <aside>
                <!-- tab buttons -->
                <section class="tab-buttons">
                    <button class="active" id="tab-btn-1">
                        <i class="fa-regular fa-fw fa-send-back"></i>
                        <p>Background</p>
                    </button>
                    <button id="tab-btn-2">
                        <i class="fa-regular fa-fw fa-bring-front"></i>
                        <p>Icon</p>
                    </button>
                    <button id="tab-btn-3">
                        <i class="fa-regular fa-fw fa-text"></i>
                        <p>Text</p>
                    </button>
                </section>
                <!-- tab pages -->
                <section class="tab-pages">
                    <!-- background -->
                    <article id="tab-page-1" class="active">
                        <header>Background</header>
                        <div>
                            <label>Style</label>
                            <div class="submenu option">
                                <?php echo $styles ?>
                            </div>
                        </div>
                        <div id="background-shape">
                            <label>Shape</label>
                            <div class="submenu option" id="icons">
                                <?php echo $icons ?>
                            </div>
                        </div>
                        <div>
                            <label>Color</label>
                            <div class="submenu" id="color-picker">
                                <?php echo $colors ?>
                            </div>
                        </div>
                        <div id="background-color-2">
                            <label>Secondary color</label>
                            <div class="submenu" id="color-picker">
                                <?php echo $colors ?>
                            </div>
                        </div>
                    </article>
                    <!-- icon -->
                    <article id="tab-page-2">
                    <header>Icon</header>
                        <div>
                            <label>Style</label>
                            <div class="submenu option">
                                <?php echo $styles ?>
                            </div>
                        </div>
                        <div id="icon-shape">
                            <label>Shape</label>
                            <div class="submenu option" id="icons">
                                <?php echo $icons ?>
                            </div>
                        </div>
                        <div>
                            <label>Size</label>
                            <div class="submenu option">
                                <input type="range" min="3" max="15" value="7" class="slider" id="icon-size" style="direction: rtl">
                            </div>
                        </div>
                        <div>
                            <label>Position</label>
                            <div class="submenu option">
                                <input type="range" min="-5" max="5" step="1" value="0" class="slider" id="icon-pos-x" style="direction: rtl">
                            </div>
                            <br>
                            <div class="submenu option">
                                <input type="range" min="-5" max="5" step="1" value="2" class="slider" id="icon-pos-y" style="direction: rtl">
                            </div>
                        </div>
                        <div>
                            <label>rotate</label>
                            <div class="submenu option">
                                <input type="range" min="-180" max="180" step="15" value="0" class="slider" id="icon-rotate">
                            </div>
                        </div>
                        <div>
                            <label>Color</label>
                            <div class="submenu" id="color-picker">
                                <?php echo $colors ?>
                            </div>
                        </div>
                        <div>
                            <label>Secondary color</label>
                            <div class="submenu" id="color-picker">
                                <?php echo $colors ?>
                            </div>
                        </div>
                    </article>
                    <!-- text -->
                    <article id="tab-page-3">
                    <header>Text</header>
                        <div>
                            <label>Style</label>
                            <div class="submenu option font">
                                <button id="font-bold"><i class="fa-solid fa-fw fa-bold"></i><p>bold</p></button>
                                <button id="font-italic"><i class="fa-solid fa-fw fa-italic"></i><p>italic</p></button>
                                <button id="font-underline"><i class="fa-solid fa-fw fa-underline"></i><p>underline</p></button>
                                <button id="font-strikethrough"><i class="fa-solid fa-fw fa-strikethrough"></i><p>strikethrough</p></button>
                            </div>
                        </div>
                        <div id="text-shape">
                            <label>Text</label>
                            <input class="submenu option" id="text-text" value="label"></input>
                        </div>
                        <div>
                            <label>Size</label>
                            <div class="submenu option">
                                <input type="range" min="0" max="1" step="0.1" value="0.2" class="slider" id="text-size">
                            </div>
                        </div>
                        <div>
                            <label>Position</label>
                            <div class="submenu option">
                                <input type="range" min="-0.4" max="0.4" step="0.05" value="0" class="slider" id="text-pos-x">
                            </div>
                            <br>
                            <div class="submenu option">
                                <input type="range" min="-0.4" max="0.4" step="0.05" value="0.25" class="slider" id="text-pos-y">
                            </div>
                        </div>
                        <div>
                            <label>rotate</label>
                            <div class="submenu option">
                                <input type="range" min="-180" max="180" step="15" value="0" class="slider" id="text-rotate">
                            </div>
                        </div>
                        <div>
                            <label>Color</label>
                            <div class="submenu" id="color-picker">
                                <?php echo $colors ?>
                            </div>
                    </article>
                </section>
            </aside>
        </main>
        <!-- footer -->
        <footer>
            <section id="footer-socials">
                <article>
                    <button>
                        <span class="fa-stack fa-1x">
                            <i class="fa-solid fa-circle fa-stack-2x"></i>
                            <i class="fa-brands fa-facebook-f fa-stack-1x fa-inverse"></i>
                        </span>
                    </button>
                    <button>
                        <span class="fa-stack fa-1x">
                            <i class="fa-solid fa-circle fa-stack-2x"></i>
                            <i class="fa-brands fa-instagram fa-stack-1x fa-inverse"></i>
                        </span>
                    </button>
                    <button>
                        <span class="fa-stack fa-1x">
                            <i class="fa-solid fa-circle fa-stack-2x"></i>
                            <i class="fa-brands fa-twitter fa-stack-1x fa-inverse"></i>
                        </span>
                    </button>
                </article>
            </section>
            <section id="footer-copyright">
                <article>&copy; 2023 <a href="https://www.denniz03.nl" target="blank">Denniz03.nl</a></article>
            </section>
        </footer>
    </body>
</html>