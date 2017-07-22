<?php
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
                        <!-- Post item start //-->
                        <article class="post" data-style="preview">
                            <figure>
                                <a href="#"><img src="<?= IMG; ?>posts/1.jpg" alt=""></a>
                            </figure>
                            <div class="date">
                                <span class="day">07</span>
                                <span class="month">jun</span>
                            </div>
                            <div class="type">
                                <i class="glyphicon glyphicon-picture"></i>
                            </div>
                            <header>
                                <p><a href="#">Scarecrow Western</a></p>
                            </header>
                            <div class="content">
                                <p>Nunc sit amet convallis felis. Mauris venenatis et odio scelerisque sollicitudin. Quisque et hendrerit purus...</p>
                            </div>
                            <footer>
                                <p>
                                    <i class="glyphicon glyphicon-tags"></i> <a href="#">web</a>, <a href="#">html</a>, <a href="#">css</a>
                                    <a href="#" class="read-more"><i class="glyphicon glyphicon-plus"></i> read more</a>
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