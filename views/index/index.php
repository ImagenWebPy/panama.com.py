<?php
$helper = new Helper();
?>
<div class="clearfix"></div>
<!-- Site content start //-->
<section class="homepage-banner">
    <div id="layerslider" class="layerslider1">
        <?php foreach ($helper->getSlider() as $item): ?>
            <div class="ls-slide" data-ls="slidedelay: 4500; transition2d: 16;">
                <!-- slide contents goes here -->
                <img src="<?= IMG; ?>layersliderimgs/<?= utf8_encode($item['descripcion']); ?>" class="ls-bg" alt="Slide background">
                <?php if (!empty($item['url'])): ?>
                    <p class="slide-desc-2 ls-l" style="top: 400px; left: 50px;" data-ls="delayin: 400; delayout: 400;  durationin: 2000;"><a href="<?= utf8_encode($item['url']); ?>" class="m-btn margin-left-30" data-size="normal" data-color="primary"><?= (!empty($item['texto_enlace'])) ? utf8_encode($item['texto_enlace']) : 'Descubre más' ?></a></p>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!-- Site content end //-->
<div class="clearfix"></div>
<!-- Call to action #1 start //-->
<section class="cta1" data-style="dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <h3>Conoce todas nuestras sucursales y ubica la más cercana</h3>
            </div>
            <div class="col-lg-3 col-md-4">
                <a href="#" class="m-btn" data-size="normal" data-color="white">visitanos</a>
            </div>
        </div>
    </div>
</section>
<!-- Call to action #1 end //-->
<!-- Intro start //-->
<section>

    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-md-8">
                <h2>Somos <span class="color-primary">Panamá</span></h2>
                <?= utf8_encode($helper->getNosotrosIndex()[0]['contenido_portada']); ?>
            </div>
            <div class="col-lg-4 col-md-4">
                <figure>
                    <img src="<?= IMG . utf8_encode($helper->getNosotrosIndex()[0]['img_portada']); ?>" alt="La empresa">
                </figure>
            </div>
        </div>
    </div>
</section>
<!-- Intro end //-->
<!-- Projects start //-->
<section class="padding-top-0 padding-bottom-0">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <div class="project-block-1" id="projects">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="projects-desc">
                                <h4>Marcas Representadas</h4>
                                <p>Conozca nuestras Marcas</p>
                                <div class="riva-insert-menu-here"></div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="w-100 float-left bg-secondary">
                                <?php foreach($helper->getListadoMarcas() as $item): ?>
                                <!-- Project item start //-->
                                <div class="project-item">
                                    <figure>
                                        <img src="<?= IMG; ?>marcas/<?= utf8_encode($item['img']) ?>" alt="">
                                    </figure>
                                    <div class="buttons">
                                        <a href="#" class="m-btn" data-size="normal" data-color="primary" data-border><i class="glyphicon glyphicon-link"></i></a>
                                    </div>
                                </div>
                                <!-- Project item end //-->
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Projects end //-->
<!-- Blog posts nd testimonials start //-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="plugin-container" id="posts">
                    <h3><span class="float-left">últimas publicaciones del blog</span> <div class="riva-insert-menu-here"></div></h3>
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

                    <!-- Post item start //-->

                    <article class="post" data-style="preview">

                        <figure>

                            <a href="#"><img src="<?= IMG; ?>posts/2.jpg" alt=""></a>

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

                        <div class="content">

                            <p>Maecenas facilisis vel justo sit amet imperdiet. Nullam dictum nisl quis metus tincidunt rhoncus...</p>

                        </div>

                        <footer>

                            <p>

                                <i class="glyphicon glyphicon-tags"></i> <a href="#">web</a>, <a href="#">html</a>, <a href="#">css</a>

                                <a href="#" class="read-more"><i class="glyphicon glyphicon-plus"></i> read more</a>
                            </p>

                        </footer>

                    </article>

                    <!-- Post item end //-->

                    <!-- Post item start //-->

                    <article class="post" data-style="preview">

                        <figure>

                            <a href="#"><img src="<?= IMG; ?>posts/3.jpg" alt=""></a>

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

                        <div class="content">

                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia...</p>

                        </div>

                        <footer>

                            <p>

                                <i class="glyphicon glyphicon-tags"></i> <a href="#">web</a>, <a href="#">html</a>, <a href="#">css</a>

                                <a href="#" class="read-more"><i class="glyphicon glyphicon-plus"></i> read more</a>
                            </p>

                        </footer>

                    </article>

                    <!-- Post item end //-->

                    <!-- Post item start //-->

                    <article class="post" data-style="preview">

                        <figure>

                            <a href="#"><img src="<?= IMG; ?>posts/4.jpg" alt=""></a>

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

                        <div class="content">

                            <p>Donec efficitur, augue feugiat vestibulum fringilla, enim massa imperdiet ipsum...</p>

                        </div>

                        <footer>

                            <p>

                                <i class="glyphicon glyphicon-tags"></i> <a href="#">web</a>, <a href="#">html</a>, <a href="#">css</a>

                                <a href="#" class="read-more"><i class="glyphicon glyphicon-plus"></i> read more</a>
                            </p>

                        </footer>

                    </article>

                    <!-- Post item end //-->

                    <!-- Post item start //-->

                    <article class="post" data-style="preview">

                        <figure>

                            <a href="#"><img src="<?= IMG; ?>posts/7.jpg" alt=""></a>

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

                        <div class="content">

                            <p>Pellentesque hendrerit ipsum consequat lobortis placerat. Curabitur efficitur, erat ac dapibus aliquet...</p>

                        </div>

                        <footer>

                            <p>

                                <i class="glyphicon glyphicon-tags"></i> <a href="#">web</a>, <a href="#">html</a>, <a href="#">css</a>

                                <a href="#" class="read-more"><i class="glyphicon glyphicon-plus"></i> read more</a>
                            </p>

                        </footer>

                    </article>

                    <!-- Post item end //-->

                </div>

            </div>
            <div class="content-divider clearfix hidden-lg hidden-md"></div>
        </div>

    </div>

</section>

<!-- Blog posts nd testimonials start //-->

<!-- Newsletters start //-->
<section class="newsletters-1">
    <div class="container">
        <div class="row">
            <form action="#" method="post">   
                <input type="hidden" name="last_name" value="default">
                <div class="col-lg-4 col-md-3">
                    <h3>Suscríbete a nuestro Newsletter </h3>
                    <p class="hidden-md">Y manténgase informado sobre nuestras noticias y eventos</p>
                </div>
                <div class="clearfix visible-sm visible-xs margin-top-leading"></div>
                <div class="col-lg-3 col-md-3">
                    <input type="text" name="email" value="" placeholder="Ingresa tu E-mail...">
                </div>
                <div class="clearfix visible-sm visible-xs margin-top-leading"></div>
                <div class="col-lg-3 col-md-3">
                    <input type="text" name="first_name" value="" placeholder="Tu nombre...">
                </div>
                <div class="clearfix visible-sm visible-xs margin-top-leading"></div>
                <div class="col-lg-2 col-md-3">
                    <button type="submit" name="submit" class="m-btn" data-size="normal" data-color="white"><i class="glyphicon glyphicon-ok-sign"></i> Suscribirme</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Newsletters end //-->