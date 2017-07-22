<?php
$helper = new Helper();
$detalle = $this->detalle;
$ultimasPublicaciones = $this->ultimasPublicaciones;
?>
<section class="page-title-bar bg-img-2" data-background="parallax" data-transparent="secondary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-bar-wrapper">
                    <p class="title">Blog - <?= utf8_encode($detalle['titulo']); ?></p>
                    <div class="breadcrumbs">
                        <a href="<?= URL; ?>">Incicio</a>
                        <span class="divider"><i class="glyphicon glyphicon-triangle-right"></i></span>
                        <a href="<?= URL; ?>blog/listado">Blog</a>
                        <span class="divider"><i class="glyphicon glyphicon-triangle-right"></i></span>
                        <span class="last"><?= utf8_encode($detalle['titulo']); ?></span>
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
            <!-- Article start //-->
            <section class="padding-bottom-0 blog-article">
                <!-- Post item start //-->
                <article class="post" data-style="full">
                    <figure>
                        <a href="#"><img src="<?= IMG; ?>posts/<?= $detalle['imagen']; ?>" alt=""></a>
                    </figure>
                    <div class="date">
                        <span class="day"><?= date('d', strtotime($detalle['fecha'])); ?></span>
                        <span class="month"><?= $helper->getMonth(date('F', strtotime($detalle['fecha'])), 'short'); ?></span>
                    </div>
                    <div class="type">
                        <i class="glyphicon glyphicon-picture"></i>
                    </div>
                    <header>
                        <p><a href="#"><?= utf8_encode($detalle['titulo']); ?></a></p>
                    </header>
                    <div class="content">
                        <?= utf8_encode($detalle['contenido']); ?>
                    </div>
                    <footer>
                        <?php
                        $tag = explode(',', $detalle['tags']);
                        $tags = array();
                        foreach ($tag as $value) {
                            array_push($tags, ' <a href="#">' . $value . '</a>');
                        }
                        $text_tags = implode(',', $tags);
                        ?>
                        <p>
                            <span><i class="glyphicon glyphicon-tags"></i> <?= $text_tags; ?></span>
                        </p>
                    </footer>
                </article>
                <!-- Post item end //-->
            </section>
            <!-- Article end //-->
            <!-- Related start //-->
            <section class="padding-bottom-0">
                <div class="plugin-container" id="posts">
                    <h3><span class="float-left">últimas entradas del blog</span> <div class="riva-insert-menu-here"></div></h3>
                    <?php foreach ($ultimasPublicaciones as $item): ?>
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
                        <article class="post no-figure" data-style="preview">
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
            </section>
            <!-- Related end //-->
            <!-- Page content end //-->
        </div>
    </div>
</div>