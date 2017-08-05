<?php
$helper = new Helper();
$pagina = $helper->getPage();
$activeDashboard = '';
$activePortada = '';
$activeEmpresa = '';
$activeMision = '';
$activeCompromiso = '';
$activeLaEmpresa = '';
$activeMarcas = '';
$activeCategorias = '';
$activeProductos = '';
$activeProducto = '';
$activeSucursales = '';
$activeBlog = '';
$activeTrabaja = '';
$activeContacto = '';
$activeContactoDatos = '';
$activeContactoSeccion = '';
$activeUsuario = '';
$activeNewsletter = '';
$seccionActual = (!empty($pagina[1])) ? $pagina[1] : '';
switch ($seccionActual) {
    case 'portada':
        $activePortada = 'active';
        break;
    case 'laempresa':
        $activeEmpresa = 'active';
        break;
    case 'mision':
        $activeEmpresa = 'active';
        $activeMision = 'active';
        break;
    case 'comprimiso_social':
        $activeLaEmpresa = 'active';
        $activeCompromiso = 'active';
        break;
    case 'marcas':
        $activeMarcas = 'active';
        $activeProductos = 'active';
        break;
    case 'categorias':
        $activeCategorias = 'active';
        $activeProductos = 'active';
        break;
    case 'productos':
        $activeProducto = 'active';
        $activeProductos = 'active';
        break;
    case 'sucursales':
        $activeSucursales = 'active';
        break;
    case 'blog':
        $activeBlog = 'active';
        break;
    case 'trabaja':
        $activeTrabaja = 'active';
        break;
    case 'contacto':
        $activeContacto = 'active';
        break;
    case 'usuario':
        $activeUsuario = 'active';
        break;
    case 'newsletter':
        $activeNewsletter = 'active';
        break;
    default :
        $activeDashboard = 'active';
        break;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= SITE_TITLE . $this->title; ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?= ADMIN; ?>bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= ADMIN; ?>plugins/font-awesome/css/font-awesome.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= ADMIN; ?>dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?= ADMIN; ?>dist/css/skins/skin-blue.min.css">
        <link rel="stylesheet" href="<?= ADMIN; ?>dist/css/custom.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php
        #cargamos los css de las vistas
        if (isset($this->css)) {
            foreach ($this->css as $css) {
                echo '<link rel="stylesheet" href="' . URL . 'views/admin/' . $css . '" type="text/css">';
            }
        }
        if (isset($this->public_css)) {
            foreach ($this->public_css as $public_css) {
                echo '<link rel="stylesheet" href="' . URL . 'public/admin/' . $public_css . '" type="text/css">';
            }
        }
        ?>
        <!-- jQuery 2.2.3 -->
        <script src="<?= ADMIN; ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
        <?php
        if (isset($this->publicHeader_js)) {
            foreach ($this->publicHeader_js as $public_js) {
                echo '<script type="text/javascript" src="' . URL . 'public/admin/' . $public_js . '"></script>';
            }
        }
        ?>

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="<?= URL_ADMIN ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>Admin</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b>istrador</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="col-xs-2">
                        <span><img src="<?= IMG; ?>logo.png" class="logoHeader"></span>
                    </div>  
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <?php
                                    $user_img = (!empty($_SESSION['usuario']['imagen'])) ? $_SESSION['usuario']['imagen'] : 'profile-icon.jpg';
                                    ?>
                                    <img src="<?= IMG . $user_img; ?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?= $_SESSION['usuario']['nombre']; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?= IMG . $user_img; ?>" class="img-circle" alt="User Image">
                                        <p><?= $_SESSION['usuario']['nombre'] . ' - ' . $_SESSION['usuario']['permiso'] ?></p>
                                    </li>
                                    <!-- Menu Body -->
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?= URL; ?>login/salir" class="btn btn-danger btn-flat"><i class="fa fa-sign-out" aria-hidden="true"></i> Salir</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">NAVEGACION PRINCIPAL</li>
                        <li class="<?= $activeDashboard; ?>"><a href="<?= URL_ADMIN; ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                        <li><a href="<?= URL_ADMIN; ?>portada"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
                        <li class="treeview <?= $activeEmpresa; ?>">
                            <a href="#"><i class="fa fa-building" aria-hidden="true"></i></i><span>Empresa</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                            <ul class="treeview-menu">
                                <li class="<?= $activeLaEmpresa; ?>"><a href="<?= URL_ADMIN ?>laempresa"><i class="fa fa-circle-o"></i> La Empresa</a></li>
                                <li class="<?= $activeMision; ?>"><a href="<?= URL_ADMIN ?>mision"><i class="fa fa-circle-o"></i> Misión</a></li>
                                <li class="<?= $activeCompromiso; ?>"><a href="<?= URL_ADMIN ?>comprimiso_social"><i class="fa fa-circle-o"></i> Compromiso Social</a></li>
                            </ul>
                        </li>
                        <li class="treeview <?= $activeProductos; ?>">
                            <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></i><span>Productos</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                            <ul class="treeview-menu">
                                <li class="<?= $activeMarcas; ?>"><a href="<?= URL_ADMIN ?>marcas"><i class="fa fa-circle-o"></i> Marcas</a></li>
                                <li class="<?= $activeCategorias; ?>"><a href="<?= URL_ADMIN ?>categorias"><i class="fa fa-circle-o"></i> Categorías</a></li>
                                <li class="<?= $activeProducto; ?>"><a href="<?= URL_ADMIN ?>productos"><i class="fa fa-circle-o"></i> Productos</a></li>
                            </ul>
                        </li>
                        <li class="<?= $activeSucursales; ?>"><a href="<?= URL_ADMIN ?>sucursales"><i class="fa fa-map-marker"></i> <span>Sucursales</span></a></li>
                        <li class="<?= $activeBlog; ?>"><a href="<?= URL_ADMIN ?>blog"><i class="fa fa-rss"></i> <span>Blog</span></a></li>
                        <li class="<?= $activeTrabaja; ?>"><a href="<?= URL_ADMIN ?>trabaja"><i class="fa fa-users"></i> <span>Trabaja con Nosotros</span></a></li>
                        <li class="treeview <?= $activeContacto; ?>">
                            <a href="#"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></i><span>Contacto</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                            <ul class="treeview-menu">
                                <li class="<?= $activeContactoDatos; ?>"><a href="<?= URL_ADMIN ?>contacto"><i class="fa fa-circle-o"></i> <span>Datos de Contacto</span></a></li>
                                <li class="<?= $activeContactoSeccion; ?>"><a href="<?= URL_ADMIN ?>contacto_seccion"><i class="fa fa-circle-o"></i> <span>Secciones</span></a></li>
                            </ul>
                        </li>
                        <li class="<?= $activeNewsletter; ?>"><a href="<?= URL_ADMIN ?>newsletter"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Newsletter</span></a></li>
                        <li class="<?= $activeUsuario; ?>"><a href="<?= URL_ADMIN ?>usuario"><i class="fa fa-user"></i> <span>Usuarios</span></a></li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
