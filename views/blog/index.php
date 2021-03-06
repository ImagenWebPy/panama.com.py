<?php
$helper = new Helper();
$listado = $this->listado;
?>
<section class="page-title-bar bg-img-2" data-background="parallax" data-transparent="secondary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-bar-wrapper">
                    <p class="title">Blog</p>
                    <div class="breadcrumbs">
                        <a href="<?= URL; ?>">Inicio</a>
                        <span class="divider"><i class="glyphicon glyphicon-triangle-right"></i></span>
                        <span class="last">Blog</span>
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
            <section class="blog-list">
                <h3>Publicaciones</h3>
                <div class="listing">
                    <?php foreach ($listado['listado'] as $item): ?>
                        <?php
                        $tag = explode(',', $item['tags']);
                        $tags = array();
                        foreach ($tag as $value) {
                            array_push($tags, ' <a href="#">' . $value . '</a>');
                        }
                        $text_tags = implode(',', $tags);
                        $enlace = $helper->cleanUrl(utf8_encode($item['titulo']));
                        ?>
                        <!-- Post item start //-->
                        <article class="post" data-style="preview">
                            <figure>
                                <a href="<?= URL; ?>blog/detalle/<?= $item['id']; ?>/<?= $enlace; ?>"><img src="<?= IMG; ?>posts/<?= $item['imagen']; ?>" alt=""></a>
                            </figure>
                            <div class="date">
                                <span class="day"><?= date('d', strtotime($item['fecha'])); ?></span>
                                <span class="month"><?= $helper->getMonth(date('F', strtotime($item['fecha'])), 'short'); ?></span>
                            </div>
                            <div class="type">
                                <i class="glyphicon glyphicon-picture"></i>
                            </div>
                            <header>
                                <p><a href="<?= URL; ?>blog/detalle/<?= $item['id']; ?>/<?= $enlace; ?>"><?= utf8_encode($item['titulo']) ?></a></p>
                            </header>
                            <div class="content">
                                <p><?= strip_tags(substr(utf8_encode($item['contenido']), 0, 250)) ?>...</p>
                            </div>
                            <footer>

                                <p>
                                    <i class="glyphicon glyphicon-tags"></i> <?= $text_tags; ?>
                                    <a href="<?= URL; ?>blog/detalle/<?= $item['id']; ?>/<?= $enlace; ?>" class="read-more"><i class="glyphicon glyphicon-plus"></i> Leer más</a>
                                </p>
                            </footer>
                        </article>
                        <!-- Post item end //-->
                    <?php endforeach; ?>
                </div>
                <!-- Pagination start //-->
                <?= $listado['paginador']; ?>
                <!-- Pagination end //-->
            </section>
            <!-- Page content end //-->
        </div>
    </div>
</div>