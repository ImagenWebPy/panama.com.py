<?php
$helper = new Helper();
$datosProducto = $this->datosProducto;
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
                        <a href="<?= URL; ?>marcas">Marcas</a>
                        <span class="divider"><i class="glyphicon glyphicon-triangle-right"></i></span>
                        <a href="<?= URL; ?>marca/categorias/<?= $datosProducto['datos'][0]['id_marca'] ?>/<?= $datosProducto['datos'][0]['marca'] ?>">Categorías</a>
                        <span class="divider"><i class="glyphicon glyphicon-triangle-right"></i></span>
                        <a href="<?= URL; ?>marca/productos/<?= $datosProducto['datos'][0]['id_categoria'] ?>/<?= $datosProducto['datos'][0]['categoria'] ?>">Productos</a>
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

                    <h3 class="widget-title">categories</h3>

                    <div class="widget-content">

                        <ul>

                            <li><a href="#">Dancing Intense Jupiter</a> ( 43 )</i>

                            <li><a href="#">Flag Nocturnal</a> ( 11 )</i>

                            <li><a href="#">Flying Tuna</a> ( 37 )</i>

                            <li><a href="#">Subtle Lion</a> ( 23 )</i>

                            <li><a href="#">Scattered Monkey</a> ( 16 )</i>

                            <li><a href="#">Rapid Screwdriver</a> ( 42 )</i>

                            <li><a href="#">Lost Sleepy Warehouse</a> ( 8 )</i>

                        </ul>

                    </div>

                </aside>

                <!-- Widget categories end //-->

                <!-- Widget text start //-->

                <aside class="widget widget-shopping-cart">

                    <h3 class="widget-title">your shopping cart</h3>

                    <div class="widget-content">

                        <ul>

                            <li><a href="#">Lone Clown</a> <span>$89.00</span></li>

                            <li><a href="#">Itchy Crystal</a> <span>$45.00</span></li>

                            <li><a href="#">Eternal Epsilon</a> <span>$14.00</span></li>

                            <li><a href="#">Forgotten Sound</a> <span>$36.00</span></li>

                            <li><a href="#">Frozen Tungsten</a> <span>$73.00</span></li>

                        </ul>

                        <p>

                            <a href="#" class="m-btn" data-size="small" data-color="primary"><i class="glyphicon glyphicon-shopping-cart"></i> shopping cart</a>

                            <a href="#" class="m-btn" data-size="small" data-color="secondary" data-border><i class="glyphicon glyphicon-check"></i> checkout</a>

                        </p>

                    </div>

                </aside>

                <!-- Widget text end //-->

                <!-- Widget tabs start //-->

                <aside class="widget widget-tabs">

                    <div class="widget-content">

                        <header>

                            <span>recent</span>

                            <span>popular</span>

                            <span>comments</span>

                        </header>

                        <section>

                            <!-- Post item start //-->

                            <article class="post" data-style="preview">

                                <figure>

                                    <a href="#"><img src="img/posts/1.jpg" alt=""></a>

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

                                <footer>

                                    <p>Comments: <a href="#">23</a></p>

                                </footer>

                            </article>

                            <!-- Post item end //-->

                            <!-- Post item start //-->

                            <article class="post" data-style="preview">

                                <figure>

                                    <a href="#"><img src="img/posts/2.jpg" alt=""></a>

                                </figure>

                                <div class="date">

                                    <span class="day">09</span>

                                    <span class="month">jun</span>

                                </div>

                                <div class="type">

                                    <i class="glyphicon glyphicon-pencil"></i>

                                </div>

                                <header>

                                    <p><a href="#">Cheerful Essential Jupiter</a></p>

                                </header>

                                <footer>

                                    <p>Comments: <a href="#">12</a></p>

                                </footer>

                            </article>

                            <!-- Post item end //-->

                            <!-- Post item start //-->

                            <article class="post" data-style="preview">

                                <figure>

                                    <a href="#"><img src="img/posts/3.jpg" alt=""></a>

                                </figure>

                                <div class="date">

                                    <span class="day">12</span>

                                    <span class="month">jun</span>

                                </div>

                                <div class="type">

                                    <i class="glyphicon glyphicon-picture"></i>

                                </div>

                                <header>

                                    <p><a href="#">Abandoned Mountain</a></p>

                                </header>

                                <footer>

                                    <p>Comments: <a href="#">3</a></p>

                                </footer>

                            </article>

                            <!-- Post item end //-->

                            <!-- Post item start //-->

                            <article class="post" data-style="preview">

                                <figure>

                                    <a href="#"><img src="img/posts/4.jpg" alt=""></a>

                                </figure>

                                <div class="date">

                                    <span class="day">15</span>

                                    <span class="month">jun</span>

                                </div>

                                <div class="type">

                                    <i class="glyphicon glyphicon-film"></i>

                                </div>

                                <header>

                                    <p><a href="#">Forsaken Butter</a></p>

                                </header>

                                <footer>

                                    <p>Comments: <a href="#">8</a></p>

                                </footer>

                            </article>

                            <!-- Post item end //-->

                            <!-- Post item start //-->

                            <article class="post" data-style="preview">

                                <figure>

                                    <a href="#"><img src="img/posts/7.jpg" alt=""></a>

                                </figure>

                                <div class="date">

                                    <span class="day">22</span>

                                    <span class="month">jun</span>

                                </div>

                                <div class="type">

                                    <i class="glyphicon glyphicon-pencil"></i>

                                </div>

                                <header>

                                    <p><a href="#">Lonesome Plastic</a></p>

                                </header>

                                <footer>

                                    <p>Comments: <a href="#">0</a></p>

                                </footer>

                            </article>

                            <!-- Post item end //-->

                        </section>

                        <section>

                            <!-- Post item start //-->

                            <article class="post" data-style="preview">

                                <figure>

                                    <a href="#"><img src="img/posts/2.jpg" alt=""></a>

                                </figure>

                                <div class="date">

                                    <span class="day">09</span>

                                    <span class="month">jun</span>

                                </div>

                                <div class="type">

                                    <i class="glyphicon glyphicon-pencil"></i>

                                </div>

                                <header>

                                    <p><a href="#">Cheerful Essential Jupiter</a></p>

                                </header>

                                <footer>

                                    <p>Comments: <a href="#">12</a></p>

                                </footer>

                            </article>

                            <!-- Post item end //-->

                            <!-- Post item start //-->

                            <article class="post" data-style="preview">

                                <figure>

                                    <a href="#"><img src="img/posts/7.jpg" alt=""></a>

                                </figure>

                                <div class="date">

                                    <span class="day">22</span>

                                    <span class="month">jun</span>

                                </div>

                                <div class="type">

                                    <i class="glyphicon glyphicon-pencil"></i>

                                </div>

                                <header>

                                    <p><a href="#">Lonesome Plastic</a></p>

                                </header>

                                <footer>

                                    <p>Comments: <a href="#">0</a></p>

                                </footer>

                            </article>

                            <!-- Post item end //-->

                            <!-- Post item start //-->

                            <article class="post" data-style="preview">

                                <figure>

                                    <a href="#"><img src="img/posts/3.jpg" alt=""></a>

                                </figure>

                                <div class="date">

                                    <span class="day">12</span>

                                    <span class="month">jun</span>

                                </div>

                                <div class="type">

                                    <i class="glyphicon glyphicon-picture"></i>

                                </div>

                                <header>

                                    <p><a href="#">Abandoned Mountain</a></p>

                                </header>

                                <footer>

                                    <p>Comments: <a href="#">3</a></p>

                                </footer>

                            </article>

                            <!-- Post item end //-->

                            <!-- Post item start //-->

                            <article class="post" data-style="preview">

                                <figure>

                                    <a href="#"><img src="img/posts/1.jpg" alt=""></a>

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

                                <footer>

                                    <p>Comments: <a href="#">23</a></p>

                                </footer>

                            </article>

                            <!-- Post item end //-->


                            <!-- Post item start //-->

                            <article class="post" data-style="preview">

                                <figure>

                                    <a href="#"><img src="img/posts/4.jpg" alt=""></a>

                                </figure>

                                <div class="date">

                                    <span class="day">15</span>

                                    <span class="month">jun</span>

                                </div>

                                <div class="type">

                                    <i class="glyphicon glyphicon-film"></i>

                                </div>

                                <header>

                                    <p><a href="#">Forsaken Butter</a></p>

                                </header>

                                <footer>

                                    <p>Comments: <a href="#">8</a></p>

                                </footer>

                            </article>

                            <!-- Post item end //-->

                        </section>

                        <section>

                            <!-- Post item start //-->

                            <article class="post comment" data-style="preview">

                                <div class="date">

                                    <span class="day">15</span>

                                    <span class="month">jun</span>

                                </div>

                                <div class="type">

                                    <i class="glyphicon glyphicon-film"></i>

                                </div>

                                <div class="content">

                                    " Nam ut nibh porttitor, fringilla mi quis, placerat ex. Etiam in suscipit massa... ""

                                </div>

                                <footer>

                                    <p>Author: <a href="#">Carmen J. Mantz</a></p>

                                </footer>

                            </article>

                            <!-- Post item end //-->

                            <!-- Post item start //-->

                            <article class="post comment" data-style="preview">

                                <div class="date">

                                    <span class="day">18</span>

                                    <span class="month">jun</span>

                                </div>

                                <div class="type">

                                    <i class="glyphicon glyphicon-film"></i>

                                </div>

                                <div class="content">

                                    " Duis eu velit et dolor auctor sodales nec sed lacus... ""

                                </div>

                                <footer>

                                    <p>Author: <a href="#">John T. Francois</a></p>

                                </footer>

                            </article>

                            <!-- Post item end //-->

                            <!-- Post item start //-->

                            <article class="post comment" data-style="preview">

                                <div class="date">

                                    <span class="day">24</span>

                                    <span class="month">jun</span>

                                </div>

                                <div class="type">

                                    <i class="glyphicon glyphicon-film"></i>

                                </div>

                                <div class="content">

                                    " Sed ac risus lectus. Duis ac magna vitae nibh tristique ullamcorper dapibus id sapien... ""

                                </div>

                                <footer>

                                    <p>Author: <a href="#">Shawn B. Higgins</a></p>

                                </footer>

                            </article>

                            <!-- Post item end //-->

                        </section>

                    </div>

                </aside>

                <!-- Widget tabs end //-->

            </section>

            <!-- Sidebar end //-->

        </div>

    </div>

</div>

<!-- Site content end //-->