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
                <?php
                if (!empty($_SESSION['result'])) {
                    echo $_SESSION['result']['message'];
                }
                ?>
                <h2 id="h2EnviaCV">Envíanos tus datos y adjuntá tu CV</h2>
                <div class="col-lg-7 col-md-7" style="padding: 15px;" id="displayErrorsContact">
                    <ul class="no-style" id="listErrorsContact">
                        <li id="liErrorNombre" style="display: none;"><i class="glyphicon glyphicon-ok-sign color-primary"></i> Por favor ingrese su nombre.</li>
                        <li id="liErrorEmail" style="display: none;"><i class="glyphicon glyphicon-ok-sign color-primary"></i> Por favor ingrese su email.</li>
                        <li id="liErrorEmailCorrect" style="display: none;"><i class="glyphicon glyphicon-ok-sign color-primary"></i> Por favor ingrese una dirección de email válida. </li>
                        <li id="liErrorMensaje" style="display: none;"><i class="glyphicon glyphicon-ok-sign color-primary"></i> Por favor ingrese un Mensaje. </li>
                        <li id="liErrorArchivo" style="display: none;"><i class="glyphicon glyphicon-ok-sign color-primary"></i> Por favor agregue su C.V. </li>
                    </ul>
                </div>
                <!-- Simplex Ajax Contact Form Pro start //-->
                <form id="simplexform" class="simplexform" role="form" action="<?= URL; ?>trabaja_con_nosotros/subir_datos" method="post" enctype="multipart/form-data">
                    <div id="result"></div>
                    <div class="form-elements form-page-contact-form">
                        <div class="fields-group-0 groups">
                            <div class="group-title">Información Personal</div><div class="acm-field"><label for="cname">Tu Nombre</label><div id="cname" class="form-input text "><input class="text short" name="cname" type="text" value="" placeholder="Tu Nombre" /><span class="required"></span></div>
                            </div>
                            <div class="acm-field"><label for="email">Email</label><div id="email" class="form-input text "><input class="text short" name="email" type="text" value="" placeholder="Tu Email" /><span class="required"></span></div>
                            </div>
                            <div class="acm-field"><label for="phone">Teléfono</label><div id="phone" class="form-input text "><input class="text short" name="phone" type="text" value="" placeholder="Número de Teléfono" /></div>
                            </div>
                            <div class="acm-field"><label for="message">Mensaje</label><div id="message" class="form-input textarea "><textarea class="text short" name="message" placeholder="Tu Mensaje"></textarea><span class="required"></span></div>
                            </div>
                        </div>
                        <div class="fields-group-1 groups ">
                            <div class="group-title">Archivo</div>
                            <div class="form-group">
                                <label>File 1:</label>
                                <div class="html5fileupload demo_form" data-url="html5fileupload.php" data-form="true" data-max-filesize="2048000" data-valid-extensions="doc,docx,xlsx,xls,pdf,pptx,jpg,jpeg,DOC,DOCX,PDF,JPG,JPEG,XLS,XLSX,ppt,pptx,PPT,PPTX" style="width: 100%;">
                                    <input type="file" name="file_1" required="required" />
                                </div>
                            </div>
                        </div>
                        <script>
                            $('.html5fileupload.demo_form').html5fileupload();
                        </script> 
                        <br />
                        <div class="acm-field submitbtn">
                            <button type="submit" id="btn-SubmitCV"><i class="glyphicon glyphicon-envelope"></i> Enviar</button>
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
<script type="text/javascript">
    $(document).ready(function () {
        $("#btn-SubmitCV").click(function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.preventDefault();
                var nombre = $("input[name=cname]");
                var email = $("input[name=email]");
                var mensaje = $("textarea[name=message]");
                var archivo = $("input[name=file_1]");
                if (nombre.val().trim().length == 0) {
                    $("#liErrorNombre").css('display', 'block');
                    navigationFn.goToSection('#h2EnviaCV');
                } else {
                    $("#liErrorNombre").css('display', 'none');
                }
                if (email.val().trim().length == 0) {
                    $("#liErrorEmail").css('display', 'block');
                } else {
                    $("#liErrorEmail").css('display', 'none');
                    navigationFn.goToSection('#h2EnviaCV');
                }

                if (archivo.val().trim().length == 0) {
                    $("#liErrorArchivo").css('display', 'block');
                    navigationFn.goToSection('#h2EnviaCV');
                } else {
                    $("#liErrorArchivo").css('display', 'none');
                }
                if (mensaje.val().trim().length == 0) {
                    $("#liErrorMensaje").css('display', 'block');
                    navigationFn.goToSection('#h2EnviaCV');
                } else {
                    $("#liErrorMensaje").css('display', 'none');
                }
                if (nombre.val().trim().length > 0 && email.val().trim().length > 0 && archivo.val().trim().length > 0 && mensaje.val().trim().length > 0) {
                    var existeEmail = isEmail(email.val());
                    if (existeEmail == true) {
                        $('form#simplexform').submit();
                    } else {
                        $("#liErrorEmailCorrect").css('display', 'block');
                    }
                }
            }
            e.handled = true;
        });
    });
</script>