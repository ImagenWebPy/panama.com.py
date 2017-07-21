<?php
$helper = new Helper;
$generalInfo = $helper->getSiteConfig();
?>
<section class="page-title-bar bg-img-2" data-background="parallax" data-transparent="secondary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-bar-wrapper">
                    <p class="title">Trabaja con Nosotros</p>
                    <div class="breadcrumbs">
                        <a href="<?= URL; ?>">Inicio</a>
                        <span class="divider"><i class="glyphicon glyphicon-triangle-right"></i></span>
                        <span class="last">Trabaja con Nosotros</span>
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
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <!-- Page content start //-->
                <h2>Envíanos tus datos y adjuntá tu CV</h2>
                <!-- Simplex Ajax Contact Form Pro start //-->
                <form name="simplexform" id="simplexform" class="simplexform" action="http://rivathemes.net/html/magnis/v2/inc/inc/config-page-contact-form.php" method="post" enctype="multipart/form-data">
                    <div id="result"></div>
                    <div class="form-elements form-page-contact-form">
                        <div class="fields-group-0 groups">
                            <div class="group-title">Información Personal</div><div class="acm-field"><label for="cname">Tu Nombre</label><div id="cname" class="form-input text "><input class="text short" name="cname" type="text" value="" placeholder="Tu Nombre" /><span class="required"></span></div>
                            </div><div class="acm-field"><label for="email">Email</label><div id="email" class="form-input text "><input class="text short" name="email" type="text" value="" placeholder="Tu Email" /><span class="required"></span></div>
                            </div><div class="acm-field"><label for="phone">Teléfono</label><div id="phone" class="form-input text "><input class="text short" name="phone" type="text" value="" placeholder="Número de Teléfono" /></div>
                            </div></div>
                        <div class="fields-group-1 groups ">
                            <div class="group-title">Archivo</div>
                            				
                        </div>
                        <br />
                        <div class="acm-field submitbtn">
                            <button type="submit" name="submit" id="submit"><i class="glyphicon glyphicon-envelope"></i> Enviar</button>
                            <div class="loader"></div>
                        </div>
                    </div>
                </form>
                <!-- Simplex Ajax Contact Form Pro end //-->
                <!-- Page content end //-->
            </div>
            <div class="col-lg-3 col-md-4">
                <!-- Sidebar start //-->
                <section class="sidebar padding-top-0">
                    <aside class="widget widget-contact-info">
                        <h3 class="widget-title">informacion de contacto</h3>
                        <div class="widget-content">
                            <p>
                                <i class="glyphicon glyphicon-map-marker"></i>
                                <?= utf8_encode($generalInfo['direccion']); ?>
                            </p>
                            <p>
                                <i class="glyphicon glyphicon-earphone"></i>

                                <?= utf8_encode($generalInfo['telefono_footer']); ?>

                            </p>

                            <p>

                                <i class="glyphicon glyphicon-envelope"></i>

                                <?= utf8_encode($generalInfo['email_footer']); ?>

                            </p>
                        </div>
                    </aside>
                    <?php if ($generalInfo['mostrar_horario'] == 1): ?>
                        <aside class="widget widget-contact-info">
                            <h3 class="widget-title">horario de trabajo</h3>
                            <div class="widget-content">
                                <p>
                                    <i class="glyphicon glyphicon-time"></i>
                                    Lunes - Viernes: <?= utf8_encode($generalInfo['lunes_viernes']); ?>
                                </p>
                                <p>
                                    <i class="glyphicon glyphicon-time"></i>
                                    Sabado: <?= utf8_encode($generalInfo['sabado']); ?>
                                </p>
                                <p>
                                    <i class="glyphicon glyphicon-remove-sign"></i>
                                    Domingo: <?= utf8_encode($generalInfo['domingo']); ?>
                                </p>
                            </div>
                        </aside>
                    <?php endif; ?>
                </section>
                <!-- Sidebar end //-->
            </div>
        </div>
    </div>
</section>