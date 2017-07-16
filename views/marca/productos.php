<?php
$helper = new Helper();
$categoriaHeader = $this->categoriaHeader;
$marcas = $this->marcas;
$productosCategoria = $this->productosCategoria;
?>
<section class="page-title-bar bg-img-2" data-background="parallax" data-transparent="secondary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-bar-wrapper">
                    <p class="title"><?= utf8_encode($categoriaHeader['categoria']); ?></p>
                    <div class="breadcrumbs">
                        <a href="<?= URL; ?>">Inicio</a>
                        <span class="divider"><i class="glyphicon glyphicon-triangle-right"></i></span>
                        <a href="<?= URL; ?>marca">Marcas</a>
                        <span class="divider"><i class="glyphicon glyphicon-triangle-right"></i></span>
                        <a href="<?= URL; ?>marca/categorias/">Categorias</a>
                        <span class="divider"><i class="glyphicon glyphicon-triangle-right"></i></span>
                        <span class="last">Productos - <?= utf8_encode($categoriaHeader['categoria']); ?></span>
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
            <section>
                <?php if (!empty($categoriaHeader['imagen'])): ?>
                    <p><img class="img-responsive" src="<?= IMG; ?>marcas/productos/<?= utf8_encode($categoriaHeader['imagen']); ?>"</p>
                <?php endif; ?>
                <?php
                if (!empty($categoriaHeader['contenido'])) {
                    echo utf8_encode($categoriaHeader['contenido']);
                }
                ?>
                <div class="shop-listing">
                    <div class="row">
                        <div class="row">
                            <?php foreach ($productosCategoria as $item): ?>
                                <?php
                                $id = $item['id_producto'];
                                $enlace = $helper->cleanUrl(strtolower(utf8_encode($item['nombre'])));
                                $href = URL . 'marca/producto/' . $id . '/' . $enlace;
                                $img = $item['imagen'];
                                ?>
                                <div class="col-lg-4">
                                    <!-- Shop item start //-->
                                    <div class="shop-item">
                                        <figure class="listadoImagenes">
                                            <a href="<?= $href; ?>"><img class="img-responsive" src="<?= IMG; ?>marcas/productos/<?= $img; ?>" alt=""></a>
                                            <div class="buttons">
                                                <a href="<?= IMG; ?>marcas/productos/<?= $img; ?>" class="m-btn link fancybox" data-size="normal" data-color="primary" data-border><i class="glyphicon glyphicon-fullscreen"></i></a>
                                                <a href="<?= $href; ?>" class="m-btn" data-size="normal" data-color="primary" data-border><i class="glyphicon glyphicon-link"></i></a>
                                            </div>
                                        </figure>
                                        <div class="details">
                                            <p><a href="<?= $href; ?>"><?= $item['nombre']; ?></a></p>
                                            <p>
                                                <a href="<?= $href; ?>" class="m-btn" data-size="small" data-color="primary">ver producto</a>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Shop item end //-->
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </section>
            <!-- Page content end //-->
        </div>
        <div class="col-lg-3 col-md-4">
            <!-- Sidebar start //-->
            <section class="sidebar">
                <!-- Widget categories start //-->
                <aside class="widget widget-categories">
                    <h3 class="widget-title">Productos</h3>
                    <div class="widget-content">
                        <ul>
                            <?php foreach ($productosCategoria as $item): ?>
                                <?php
                                $id = $item['id_producto'];
                                $enlace = $helper->cleanUrl(strtolower($item['nombre']));
                                $href = URL . 'marca/producto/' . $id . '/' . $enlace;
                                ?>
                                <li><a href="<?= $href; ?>"><?= $item['nombre']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </aside>
                <!-- Widget categories end //-->
            </section>
            <!-- Sidebar end //-->
        </div>
    </div>
</div>
