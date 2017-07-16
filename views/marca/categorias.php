<?php
$helper = new Helper();
$categorias = $this->categorias;
$marcaHeader = $this->marcaHeader;
$marcas = $this->marcas;
?>
<section class="page-title-bar bg-img-2" data-background="parallax" data-transparent="secondary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-bar-wrapper">
                    <p class="title"><?= utf8_encode($marcaHeader['marca']); ?></p>
                    <div class="breadcrumbs">
                        <a href="<?= URL; ?>">Inicio</a>
                        <span class="divider"><i class="glyphicon glyphicon-triangle-right"></i></span>
                        <a href="<?= URL; ?>marca">Marcas</a>
                        <span class="divider"><i class="glyphicon glyphicon-triangle-right"></i></span>
                        <span class="last">Categorías - <?= utf8_encode($marcaHeader['marca']); ?></span>
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
                <?php if (!empty($marcaHeader['imagen'])): ?>
                    <p><img src="<?= IMG; ?>marcas/header/<?= utf8_encode($marcaHeader['imagen']); ?>"</p>
                <?php endif; ?>
                <?php
                if (!empty($marcaHeader['contenido'])) {
                    echo utf8_encode($marcaHeader['contenido']);
                }
                ?>
                <div class="shop-listing">
                    <div class="row">
                        <?php foreach ($categorias as $item): ?>
                            <?php
                            $id = $item['id'];
                            $enlace = $helper->cleanUrl(strtolower(utf8_encode($item['categoria'])));
                            $href = URL . 'marca/productos/' . $id . '/' . $enlace;
                            $img = $item['imagen_categoria'];
                            ?>
                            <div class="col-lg-4">
                                <!-- Shop item start //-->
                                <div class="shop-item">
                                    <figure class="listadoImagenes">
                                        <a href="<?= $href; ?>"><img class="img-responsive" src="<?= IMG; ?>marcas/categorias/<?= $img; ?>" alt=""></a>
                                        <div class="buttons">
                                            <a href="<?= IMG; ?>marcas/categorias/<?= $img; ?>" class="m-btn link fancybox" data-size="normal" data-color="primary" data-border><i class="glyphicon glyphicon-fullscreen"></i></a>
                                            <a href="<?= $href; ?>" class="m-btn" data-size="normal" data-color="primary" data-border><i class="glyphicon glyphicon-link"></i></a>
                                        </div>
                                    </figure>
                                    <div class="details">
                                        <p><a href="<?= $href; ?>"><?= utf8_encode($item['categoria']); ?></a></p>
                                        <p>
                                            <a href="<?= $href; ?>" class="m-btn" data-size="small" data-color="primary">ver productos</a>
                                        </p>
                                    </div>
                                </div>
                                <!-- Shop item end //-->
                            </div>
                        <?php endforeach; ?>
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
                    <h3 class="widget-title">Categorías</h3>
                    <div class="widget-content">
                        <ul>
                            <?php foreach ($categorias as $item): ?>
                                <?php
                                $id = $item['id'];
                                $enlace = $helper->cleanUrl(strtolower(utf8_encode($item['categoria'])));
                                $href = URL . 'marca/productos/' . $id . '/' . $enlace;
                                ?>
                                <li><a href="<?= $href; ?>"><?= utf8_encode($item['categoria']); ?></a></li>
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