<?php
$helper = new Helper();
$datosProducto = $this->datosProducto;
$productos = $this->getProductos;
?>
<section class="page-title-bar bg-img-2" data-background="parallax" data-transparent="secondary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-bar-wrapper">
                    <p class="title"><?= $datosProducto['datos'][0]['categoria'] ?></p>
                    <div class="breadcrumbs">
                        <a href="<?= URL; ?>">Inicio</a>
                        <span class="divider"><i class="glyphicon glyphicon-triangle-right"></i></span>
                        <a href="<?= URL; ?>marca">Marcas</a>
                        <span class="divider"><i class="glyphicon glyphicon-triangle-right"></i></span>
                        <a href="<?= URL; ?>marca/categorias/<?= $datosProducto['datos'][0]['id_marca'] ?>/<?= $datosProducto['datos'][0]['marca'] ?>">Categorías</a>
                        <span class="divider"><i class="glyphicon glyphicon-triangle-right"></i></span>
                        <a href="<?= URL; ?>marca/productos/<?= $datosProducto['datos'][0]['id_categoria'] ?>/<?= $helper->cleanUrl($datosProducto['datos'][0]['categoria']) ?>">Productos</a>
                        <span class="divider"><i class="glyphicon glyphicon-triangle-right"></i></span>
                        <span class="last"><?= $datosProducto['datos'][0]['categoria'] ?></span>
                    </div>
                    <div class="search">
                        <form>
                            <input type="search" placeholder="Buscar aquí...">
                            <button type="submit" class="m-btn" data-size="normal" data-color="primary"><i class="glyphicon glyphicon-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page title end //-->
<!-- Site content start //-->
<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-8">
            <!-- Page content start //-->
            <section class="single-product padding-bottom-0">
                <div class="row">
                    <div class="col-lg-5 col-lmd-6">
                        <div class="plugin-container margin-top-leading single-product-images" id="images">
                            <?php foreach ($datosProducto['imagenes'] as $item): ?>
                                <a href="<?= IMG; ?>marcas/productos/<?= $item['imagen']; ?>" class="project-img fancybox"><img src="<?= IMG; ?>marcas/productos/<?= $item['imagen']; ?>"></a>
                            <?php endforeach; ?>
                            <div class="riva-insert-menu-here"></div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-lmd-6">
                        <p class="product-title"><?= $datosProducto['datos'][0]['nombre']; ?></p>
                        <?php if (!empty($datosProducto['datos'][0]['codigo'])): ?>
                            <p class="stf"><?= $datosProducto['datos'][0]['codigo']; ?></p>
                        <?php endif; ?>
                        <?php
                        if (!empty($datosProducto['datos'][0]['contenido'])) {
                            echo $datosProducto['datos'][0]['contenido'];
                        }
                        ?>
                    </div>
                </div>
                <?php if (!empty($datosProducto['datos'][0]['contenido_largo'])): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="m-tabs" data-active="1">
                                <header>
                                    <span><i class="glyphicon glyphicon-globe"></i> Contenido</span>
                                </header>
                                <section>
                                    <?= $datosProducto['datos'][0]['contenido_largo']; ?>
                                </section>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </section>
        </div>
        <div class="col-lg-3 col-md-4">
            <!-- Sidebar start //-->
            <section class="sidebar">
                <!-- Widget search start //-->
                <aside class="widget widget-search no-title">
                    <div class="widget-content">
                        <form>
                            <i class="glyphicon glyphicon-search"></i>
                            <input type="search" placeholder="type to search...">
                        </form>
                    </div>
                </aside>
                <!-- Widget search end //-->
                <!-- Widget categories start //-->
                <aside class="widget widget-categories">
                    <h3 class="widget-title">Productos</h3>
                    <div class="widget-content">
                        <ul>
                            <?php foreach ($productos as $item): ?>
                                <?php
                                $id = $item['id'];
                                $enlace = $helper->cleanUrl(strtolower(utf8_encode($item['nombre'])));
                                $href = URL . 'marca/' . $id . '/' . $enlace;
                                ?>
                                <li><a href="<?= $href; ?>"><?= utf8_encode($item['nombre']); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </aside>
                <!-- Widget tabs end //-->
            </section>
            <!-- Sidebar end //-->
        </div>
    </div>
</div>
<!-- Site content end //-->