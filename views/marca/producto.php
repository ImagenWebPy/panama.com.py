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

                            <a href="img/shop/single/1.jpg" class="project-img fancybox"><img src="img/shop/single/1.jpg"></a>

                            <a href="img/shop/single/2.jpg" class="project-img fancybox"><img src="img/shop/single/2.jpg"></a>

                            <a href="img/shop/single/3.jpg" class="project-img fancybox"><img src="img/shop/single/3.jpg"></a>

                            <a href="img/shop/single/4.jpg" class="project-img fancybox"><img src="img/shop/single/4.jpg"></a>

                            <a href="img/shop/single/5.jpg" class="project-img fancybox"><img src="img/shop/single/5.jpg"></a>

                            <a href="img/shop/single/6.jpg" class="project-img fancybox"><img src="img/shop/single/6.jpg"></a>

                            <div class="riva-insert-menu-here"></div>

                        </div>

                    </div>

                    <div class="col-lg-7 col-lmd-6">

                        <p class="product-title">Cloudy Minimum Space</p>

                        <p class="stf">#11342</p>

                        <p class="price">

                            <span class="old">$99.00</span>

                            <span id="price_id" data-price="79.00">$79.00</span>

                        </p>

                        <p>

                            <input type="number" id="qty_id" value="1" min="1" max="99">

                        </p>

                        <p>Donec varius, turpis vitae commodo fringilla, tellus sem facilisis felis, lobortis scelerisque lectus quam ut felis. Curabitur at tellus in turpis interdum lacinia. Mauris odio quam, suscipit nec risus at, posuere laoreet quam. Vestibulum velit velit, consequat vel bibendum vel, ultricies quis nulla.</p>

                        <p>

                            <a href="#" class="m-btn" data-size="normal" data-color="primary"><i class="glyphicon glyphicon-plus"></i> add to the cart</a>

                            <a href="#" class="m-btn" data-size="normal" data-color="primary" data-border><i class="glyphicon glyphicon-shopping-cart"></i> buy now!</a>

                        </p>

                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-12">

                        <div class="m-tabs" data-active="2">

                            <header>

                                <span><i class="glyphicon glyphicon-globe"></i> Flaming Logbook</span>

                                <span><i class="glyphicon glyphicon-tower"></i> Rough Scarecrow</span>

                                <span><i class="glyphicon glyphicon-warning-sign"></i> Bitter Waterbird</span>

                            </header>

                            <section>

                                <p>Aenean vitae lorem tempor enim pretium gravida a id eros. Integer vitae magna eget libero rhoncus ultricies at vel nunc. </p>

                            </section>

                            <section>

                                <p>Curabitur mi arcu, euismod tempus purus et, sagittis porta elit. Quisque ut augue et mi molestie posuere. Duis eget tincidunt odio.</p>

                                <p>Donec et leo hendrerit, venenatis massa eu, commodo ligula. Maecenas quis quam porttitor, accumsan nunc in, ornare felis. Quisque mauris nibh, molestie eu leo in, vestibulum faucibus diam. Sed vitae metus augue. Aliquam quis tellus ut tortor consequat dictum sit amet at lacus.</p>

                            </section>

                            <section>

                                <p>Duis finibus iaculis mi, in vestibulum nisl euismod sit amet. Maecenas at nisl posuere augue pulvinar consequat quis sed ipsum. Fusce vestibulum purus in fringilla tincidunt. Nam interdum vel enim eu blandit. Morbi at nulla orci.</p>

                            </section>

                        </div>

                        </diiv>

                    </div>

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