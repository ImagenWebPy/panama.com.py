<?php
$helper = new Helper();
$paginaActual = $helper->getPage();
$marcas = $helper->getMarcas();
$redes = $helper->getRedes();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?= SITE_TITLE . $this->title; ?></title>
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
        <link href="<?= URL; ?>public/fancybox/source/jquery.fancybox8cbb.css" type="text/css" media="screen" rel="stylesheet"/>
        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link href="<?= URL; ?>public/fancybox/source/helpers/jquery.fancybox-buttons3447.css" type="text/css" media="screen" rel="stylesheet"/>
        <link href="<?= URL; ?>public/fancybox/source/helpers/jquery.fancybox-thumbsf2ad.css" type="text/css" media="screen" rel="stylesheet"/>
        <!-- Font Awesome v4.3.0 -->
        <link href="<?= CSS; ?>font-awesome.min.css" type="text/css" rel="stylesheet"/>
        <!--Jquery UI -->
        <link rel="stylesheet" href="<?= CSS; ?>jquery-ui.css" media="screen" />
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
        <!-- Custom CSS //-->
        <link href="<?= CSS; ?>custom.css" type="text/css" rel="stylesheet" id="site-skin"/>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="<?= JS; ?>html5shiv.min.js"></script>
          <script src="<?= JS; ?>respond.min.js"></script>
        <![endif]-->
        <?php
        #cargamos los css de las vistas
        if (isset($this->css)) {
            foreach ($this->css as $css) {
                echo '<link rel="stylesheet" href="' . URL . 'views/' . $css . '" type="text/css">';
            }
        }
        if (isset($this->public_css)) {
            foreach ($this->public_css as $public_css) {
                echo '<link rel="stylesheet" href="' . URL . 'public/' . $public_css . '" type="text/css">';
            }
        }
        ?>
        <script src="<?= JS; ?>jquery-1.11.2.min.js" type="text/javascript"></script>
        <?php
        if (isset($this->publicHeader_js)) {
            foreach ($this->publicHeader_js as $public_js) {
                echo '<script type="text/javascript" src="' . URL . 'public/' . $public_js . '"></script>';
            }
        }
        ?>

    </head>
    <body>
        <div id="page" data-background="image">
            <!-- Page preloader start //-->
            <div id="riva-preload"></div>
            <!-- Page preloader end //-->
            <div id="riva-site-wrapper" class="page-wrap">
                <!-- PUT YOUR CONTENT HERE BELOW //-->
                <!-- Site header start //-->
                <header class="site-header panamaBorderTop" data-version="1" role="banner" id="site-head">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="site-header-left">
                                    <!-- Site logo start //-->
                                    <div class="site-logo">
                                        <a href="<?= URL; ?>" title="Panamá Representaciones"><img src="<?= IMG; ?>logo.png" alt="Panamá Representaciones Logo"></a>
                                    </div>
                                    <!-- Site logo end //-->
                                    <!-- Site slogan start //-->
                                    <div class="site-slogan to-slide">
                                        <!--<p>Slogan del sitio si lo tiene</p>-->
                                    </div>
                                    <!-- Site slogan end //-->
                                </div>
                                <div class="site-header-right">
                                    <a href="#mobile-menu" class="mobile-menu-btn hidden-lg hidden-md"><i class="glyphicon glyphicon-align-justify"></i></a>
                                    <!-- Social icons start //-->
                                    <ul class="header-soc-btns to-slide">
                                        <?php foreach ($redes as $item): ?>
                                            <li><a href="<?= utf8_encode($item['enlace']); ?>" title="<?= utf8_encode($item['descripcion']); ?>"><i class="<?= utf8_encode($item['imagen_fav']); ?>"></i></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <!-- Social icons end //-->
                                    <div class="clearfix hidden-lg hidden-md"></div>
                                    <!-- Contacts start //-->
                                    <ul class="header-contacts to-slide">
                                        <li><i class="glyphicon glyphicon-envelope"></i> <span class="hidden-xs">Email: </span>ventas@panama.com.py</li>
                                        <div class="clearfix visible-xs"></div>
                                        <li><i class="glyphicon glyphicon-phone"></i> <span class="hidden-xs">Teléfono: </span>+595 336 274239</li>
                                    </ul>
                                    <!-- Contacts end //-->
                                    <div class="clearfix"></div>
                                    <!-- Navigation start //-->
                                    <nav role="navigation" class="header-nav visible-lg visible-md">
                                        <ul id="main-nav">
                                            <li class="active"><a href="<?= URL; ?>">Inicio</a></li>
                                            <li>
                                                <a href="<?= URL; ?>empresa/">La Empresa</a>
                                                <ul>
                                                    <li><a href="<?= URL; ?>empresa/mision">Misión</a></li>
                                                    <li><a href="<?= URL; ?>empresa/comprimiso_social">Compromiso Social</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="<?= URL; ?>marca">Productos</a>
                                                <ul>
                                                    <?php foreach ($marcas as $item): ?>
                                                        <?php
                                                        $id = $item['id'];
                                                        $enlace = $helper->cleanUrl(strtolower(utf8_encode($item['descripcion'])));
                                                        ?>
                                                        <li><a href="<?= URL; ?>marca/categorias/<?= $id; ?>/<?= $enlace; ?>"><?= utf8_encode($item['descripcion']); ?></a></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </li>
                                            <li><a href="<?= URL; ?>sucursales">Sucursales</a></li>
                                            <li><a href="<?= URL; ?>blog/listado">blog</a></li>
                                            <li><a href="<?= URL; ?>trabaja_con_nosotros">Trabaja con Nosotros</a></li>
                                            <li><a href="<?= URL; ?>contacto">Contacto</a></li>
                                        </ul>
                                    </nav>
                                    <!-- Navigation end //-->
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Site header end //-->