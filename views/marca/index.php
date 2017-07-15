<?php
$helper = new Helper();
$marcas = $this->marcas;
?>
<section class="page-title-bar bg-img-2" data-background="parallax" data-transparent="secondary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-bar-wrapper">
                    <p class="title">Marcas</p>
                    <div class="breadcrumbs">
                        <a href="<?= URL; ?>">Inicio</a>
                        <span class="divider"><i class="glyphicon glyphicon-triangle-right"></i></span>
                        <span class="last">Marcas</span>
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
                <div class="shop-listing">
                    <div class="row">
                        <?php foreach ($marcas as $item): ?>
                            <?php
                            $id = $item['id'];
                            $enlace = $helper->cleanUrl(strtolower(utf8_encode($item['descripcion'])));
                            $href = URL . 'marca/categorias/' . $id . '/' . $enlace;
                            $img = $item['img'];
                            ?>
                            <div class="col-lg-4">
                                <!-- Shop item start //-->
                                <div class="shop-item">
                                    <figure>
                                        <a href="<?= $href; ?>"><img src="<?= IMG; ?>marcas/<?= $img; ?>" alt=""></a>
                                        <div class="buttons">
                                            <a href="<?= IMG; ?>marcas/<?= $img; ?>" class="m-btn link fancybox" data-size="normal" data-color="primary" data-border><i class="glyphicon glyphicon-fullscreen"></i></a>
                                            <a href="<?= $href; ?>" class="m-btn" data-size="normal" data-color="primary" data-border><i class="glyphicon glyphicon-link"></i></a>
                                        </div>
                                    </figure>
                                    <div class="details">
                                        <p><a href="<?= $href; ?>"><?= utf8_encode($item['descripcion']); ?></a></p>
                                        <p>
                                            <a href="<?= $href; ?>" class="m-btn" data-size="small" data-color="secondary">ver productos</a>
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
                <!-- Widget search start //-->
                <aside class="widget widget-search no-title">
                    <div class="widget-content">
                        <form>
                            <i class="glyphicon glyphicon-search"></i>
                            <input type="search" placeholder="buscar...">
                        </form>
                    </div>
                </aside>
                <!-- Widget search end //-->
                <!-- Widget categories start //-->
                <aside class="widget widget-categories">
                    <h3 class="widget-title">Categorías</h3>
                    <div class="widget-content">
                        <ul>
                            <?php foreach ($marcas as $item): ?>
                                <?php
                                $id = $item['id'];
                                $enlace = $helper->cleanUrl(strtolower(utf8_encode($item['descripcion'])));
                                $href = URL . 'marca/' . $id . '/' . $enlace;
                                ?>
                                <li><a href="<?= $href; ?>"><?= utf8_encode($item['descripcion']); ?></a></li>
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