<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?= $this->title; ?></title>
        <!-- Google Fonts //-->
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700,700italic,300,300italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Euphoria+Script' rel='stylesheet' type='text/css'>
        <!-- Bootstrap v3.3.4 -->
        <link href="<?= CSS; ?>bootstrap.min.css" type="text/css" rel="stylesheet"/>
        <!-- Animate.css -->
        <link href="<?= CSS; ?>animate.min.css" type="text/css" rel="stylesheet"/>
        <!-- M Menu -->
        <link href="<?= CSS; ?>jquery.mmenu.all.css" type="text/css" rel="stylesheet"/>
        <!-- Add fancyBox -->
        <link href="<?= URL; ?>public/fancybox/source/jquery.fancybox8cbb.css?v=2.1.5" type="text/css" media="screen" rel="stylesheet"/>
        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link href="<?= URL; ?>public/fancybox/source/helpers/jquery.fancybox-buttons3447.css?v=1.0.5" type="text/css" media="screen" rel="stylesheet"/>
        <link href="<?= URL; ?>public/fancybox/source/helpers/jquery.fancybox-thumbsf2ad.css?v=1.0.7" type="text/css" media="screen" rel="stylesheet"/>
        <!-- Font Awesome v4.3.0 -->
        <link href="<?= URL; ?>font-awesome.min.css" type="text/css" rel="stylesheet"/>
        <!--Jquery UI -->
        <link rel="stylesheet" href="<?= URL; ?>jquery-ui.css" media="screen" />
        <!-- Simplex Form -->
        <link rel="stylesheet" href="<?= URL; ?>public/assets/css/simplex.css" media="screen" />
        <link rel="stylesheet" href="<?= URL; ?>public/assets/css/form.elegant.css" media="screen" />
        <!-- Brandico -->
        <link href="<?= URL; ?>public/fonts/brandico/css/fontello.css" type="text/css" rel="stylesheet"/>
        <!-- Elusive -->
        <link href="<?= URL; ?>public/fonts/elusive/css/fontello.css" type="text/css" rel="stylesheet"/>
        <!-- Entypo -->
        <link href="<?= URL; ?>public/fonts/entypo/css/fontello.css" type="text/css" rel="stylesheet"/>
        <!-- Fontelico -->
        <link href="<?= URL; ?>public/fonts/fontelico/css/fontello.css" type="text/css" rel="stylesheet"/>
        <!-- Iconic -->
        <link href="<?= URL; ?>public/fonts/iconic/css/fontello.css" type="text/css" rel="stylesheet"/>
        <!-- Linecons -->
        <link href="<?= URL; ?>public/fonts/linecons/css/fontello.css" type="text/css" rel="stylesheet"/>
        <!-- MAKI -->
        <link href="<?= URL; ?>public/fonts/maki/css/fontello.css" type="text/css" rel="stylesheet"/>
        <!-- Meteocons -->
        <link href="<?= URL; ?>public/fonts/meteocons/css/fontello.css" type="text/css" rel="stylesheet"/>
        <!-- MFG Labs -->
        <link href="<?= URL; ?>public/fonts/mfg-labs/css/fontello.css" type="text/css" rel="stylesheet"/>
        <!-- Modern Pictograms -->
        <link href="<?= URL; ?>public/fonts/modern-pictograms/css/fontello.css" type="text/css" rel="stylesheet"/>
        <!-- Typicons -->
        <link href="<?= URL; ?>public/fonts/typicons/css/fontello.css" type="text/css" rel="stylesheet"/>
        <!-- Web Simbols -->
        <link href="<?= URL; ?>public/fonts/web-simbols/css/fontello.css" type="text/css" rel="stylesheet"/>
        <!-- Zocial -->
        <link href="<?= URL; ?>public/fonts/zocial/css/fontello.css" type="text/css" rel="stylesheet"/>
        <!-- LayerSlider v5.3.0 -->
        <link href="<?= URL; ?>public/layerslider/css/layerslider.css" type="text/css" rel="stylesheet"/>
        <!-- Helpers styles -->
        <link href="<?= CSS; ?>helpers.css" type="text/css" rel="stylesheet"/>
        <!-- Magnis skin //-->
        <link href="<?= CSS; ?>skins/default.css" type="text/css" rel="stylesheet" id="site-skin"/>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="<?= JS; ?>html5shiv.min.js"></script>
          <script src="<?= JS; ?>respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Settings start //-->
        <div class="m-settings-btn" id="m-settings-btn-show"><i class="glyphicon glyphicon-cog"></i></div>
        <div class="m-settings" id="m-settings-block">
            <i class="glyphicon glyphicon-remove" id="m-settings-btn-hide"></i>
            <h4>layout</h4>
            <p>
                <a href="#" data-layout="wide" class="active">wide</a>
                <a href="#" data-layout="boxed">boxed</a>
            </p>
            <h4>direction</h4>
            <p>
                <a href="#" data-dir="ltr" class="active">ltr</a>
                <a href="#" data-dir="rtl">rtl</a>
            </p>
            <h4>style</h4>
            <p>
                <a href="#" data-style="light" class="active">light</a>

                <a href="#" data-style="dark">dark</a>

            </p>

            <h4>skins</h4>

            <p>

                <a href="#" data-skin="default" class="active">default</a>

                <a href="#" data-skin="alimbalmarina">alimbalmarina</a>

                <a href="#" data-skin="somnambula">somnambula</a>

                <a href="#" data-skin="juicy">juicy</a>

                <a href="#" data-skin="spoonflower_goats">spoonflower goats</a>

                <a href="#" data-skin="nutricap_keratin_vit">nutricap keratin vit</a>

                <a href="#" data-skin="courtly_attire">courtly attire</a>

                <a href="#" data-skin="mondrian">mondrian</a>

                <a href="#" data-skin="sage">sage</a>

                <a href="#" data-skin="walking_by">walking by</a>

            </p>

            <h4>bg pattern</h4>

            <p>

                <a href="#" data-pattern="swirl_pattern">1</a>

                <a href="#" data-pattern="sativa">2</a>

                <a href="#" data-pattern="dimension">3</a>

                <a href="#" data-pattern="symphony">4</a>

                <a href="#" data-pattern="black_lozenge">5</a>

                <a href="#" data-pattern="congruent_outline">6</a>

                <a href="#" data-pattern="dark_exa">7</a>

                <a href="#" data-pattern="office_pattern">8</a>

            </p>

            <h4>bg image</h4>

            <p>

                <a href="#" data-bg="1">1</a>

                <a href="#" data-bg="2">2</a>

                <a href="#" data-bg="3">3</a>

                <a href="#" data-bg="4">4</a>

                <a href="#" data-bg="5">5</a>

                <a href="#" data-bg="6">6</a>

                <a href="#" data-bg="7">7</a>

                <a href="#" data-bg="8">8</a>

            </p>

        </div>
        <!-- Settings end //-->
        <div id="page" data-background="image">
            <!-- Page preloader start //-->
            <div id="riva-preload"></div>
            <!-- Page preloader end //-->
            <div id="riva-site-wrapper" class="page-wrap">
                <!-- PUT YOUR CONTENT HERE BELOW //-->
                <!-- Site header start //-->
                <header class="site-header" data-version="1" role="banner" id="site-head">
                    <div class="container">

                        <div class="row">

                            <div class="col-lg-12">

                                <div class="site-header-left">

                                    <!-- Site logo start //-->

                                    <div class="site-logo">

                                        <a href="#" title="Magnis - Multipurpose HTML Template"><img src="img/site-logo-normal.png" alt="Magnis - Multipurpose HTML Template"></a>

                                    </div>

                                    <!-- Site logo end //-->

                                    <!-- Site slogan start //-->

                                    <div class="site-slogan to-slide">

                                        <p>Magnis is a HTML5/CSS3 template for corporate and portfolio sites.</p>

                                    </div>

                                    <!-- Site slogan end //-->

                                </div>

                                <div class="site-header-right">

                                    <a href="#mobile-menu" class="mobile-menu-btn hidden-lg hidden-md"><i class="glyphicon glyphicon-align-justify"></i></a>

                                    <!-- Social icons start //-->

                                    <ul class="header-soc-btns to-slide">

                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>

                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>

                                    </ul>

                                    <!-- Social icons end //-->

                                    <div class="clearfix hidden-lg hidden-md"></div>

                                    <!-- Contacts start //-->

                                    <ul class="header-contacts to-slide">

                                        <li><i class="glyphicon glyphicon-envelope"></i> <span class="hidden-xs">Email: </span>support@magnis.com</li>

                                        <div class="clearfix visible-xs"></div>

                                        <li><i class="glyphicon glyphicon-phone"></i> <span class="hidden-xs">Phone: </span>+1 720 254 8917</li>

                                    </ul>

                                    <!-- Contacts end //-->

                                    <div class="clearfix"></div>

                                    <!-- Navigation start //-->

                                    <nav role="navigation" class="header-nav visible-lg visible-md">

                                        <ul id="main-nav">

                                            <li class="active">

                                                <a href="index.html">home</a>

                                                <ul>

                                                    <li><a href="index.html">homepage #1</a></li>

                                                    <li><a href="index-2.html">homepage #2</a></li>

                                                    <li><a href="index-3.html">homepage #3</a></li>

                                                </ul>

                                            </li>

                                            <li>

                                                <a href="#">pages</a>

                                                <ul>

                                                    <li><a href="pages-404.html">404</a></li>

                                                    <li><a href="pages-about.html">about</a></li>

                                                    <li><a href="pages-backgrounds.html">backgrounds</a></li>

                                                    <li><a href="pages-coming-soon.html">coming soon</a></li>

                                                    <li><a href="pages-contacts.html">contacts</a></li>

                                                    <li><a href="pages-faq.html">FAQ</a></li>

                                                    <li><a href="pages-full-width.html">full width</a></li>

                                                    <li><a href="pages-left-sidebar.html">left sidebar</a></li>

                                                    <li><a href="pages-pricing.html">pricing</a></li>

                                                    <li><a href="pages-right-sidebar.html">right sidebar</a></li>

                                                    <li><a href="pages-services.html">services</a></li>

                                                    <li><a href="pages-typography.html">typography</a></li>

                                                </ul>

                                            </li>

                                            <li>

                                                <a href="shop-catalog.html">shop</a>

                                                <ul>

                                                    <li><a href="shop-cart.html">shopping cart</a></li>

                                                    <li><a href="shop-catalog.html">catalog</a></li>

                                                    <li><a href="shop-checkout.html">checkout</a></li>

                                                    <li><a href="shop-single.html">product</a></li>

                                                </ul>

                                            </li>

                                            <li>

                                                <a href="portfolio-2.html">portfolio</a>

                                                <ul>

                                                    <li><a href="portfolio-2.html">2 cols</a></li>

                                                    <li><a href="portfolio-3.html">3 cols</a></li>

                                                    <li><a href="portfolio-4.html">4 cols</a></li>

                                                    <li><a href="portfolio-project.html">single project</a></li>

                                                </ul>

                                            </li>

                                            <li>

                                                <a href="blog-list-1.html">blog</a>

                                                <ul>

                                                    <li><a href="blog-list-1.html">listing #1</a></li>

                                                    <li><a href="blog-list-2.html">listing #2</a></li>

                                                    <li><a href="blog-article.html">single article</a></li>

                                                </ul>

                                            </li>

                                            <li><a href="pages-contacts.html">contacts</a></li>

                                        </ul>

                                    </nav>

                                    <!-- Navigation end //-->

                                </div>

                            </div>

                        </div>

                    </div>

                </header>

                <!-- Site header end //-->