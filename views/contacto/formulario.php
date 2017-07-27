<?php
$helper = new Helper();
$datosSelect = $helper->getFormularioContacto();
?>
<div class="col-lg-7 col-md-7" style="padding: 15px;" id="displayErrorsContact">
    <input type="hidden" id="topInput" value="focus">
    <ul class="no-style" id="listErrorsContact">
        <li id="liErrorNombre" style="display: none;"><i class="glyphicon glyphicon-ok-sign color-primary"></i> Por favor ingrese su nombre.</li>
        <li id="liErrorEmail" style="display: none;"><i class="glyphicon glyphicon-ok-sign color-primary"></i> Por favor ingrese su email.</li>
        <li id="liErrorEmailCorrect" style="display: none;"><i class="glyphicon glyphicon-ok-sign color-primary"></i> Por favor ingrese una dirección de email válida. </li>
        <li id="liErrorSeccion" style="display: none;"><i class="glyphicon glyphicon-ok-sign color-primary"></i> Por favor seleccione una sección a la cual contactar. </li>
        <li id="liErrorMensaje" style="display: none;"><i class="glyphicon glyphicon-ok-sign color-primary"></i> Por favor ingrese un Mensaje. </li>
    </ul>
</div>
<form name="simplexform" id="simplexform" class="simplexform" action="<?= URL; ?>contacto/enviar" method="post" enctype="multipart/form-data">
    <div id="result"></div>
    <div class="form-elements form-page-contact-form">
        <div class="fields-group-0 groups">
            <div class="group-title">Información Personal</div>
            <div class="acm-field">
                <label for="cname">Tu Nombre</label>
                <div id="cname" class="form-input text ">
                    <input class="text short" name="cname" type="text" value="" placeholder="Tu Nombre" /><span class="required"></span>
                </div>
            </div>
            <div class="acm-field">
                <label for="email">Email</label>
                <div id="email" class="form-input text ">
                    <input class="text short" name="email" type="text" value="" placeholder="Tu Email" /><span class="required"></span>
                </div>
            </div>
            <div class="acm-field">
                <label for="phone">Teléfono</label>
                <div id="phone" class="form-input text ">
                    <input class="text short" name="phone" type="text" value="" placeholder="Número de Teléfono" />
                </div>
            </div>
        </div>
        <div class="fields-group-1 groups ">
            <div class="group-title">mensaje</div>
            <div class="acm-field">
                <label for="subject">Sección a contactar</label>
                <div id="subject" class="form-input select ">
                    <select class="text short" name="subject">
                        <option value="">Seleccionar</option>
                        <?php foreach ($datosSelect as $item): ?>
                            <option class="optcolors" value="<?= utf8_encode($item['id']); ?>"><?= utf8_encode($item['descripcion']); ?></option>
                        <?php endforeach; ?>
                    </select>
                    <span class="required"></span></div>
            </div>
            <div class="acm-field">
                <label for="message">Mensaje</label>
                <div id="message" class="form-input textarea ">
                    <textarea class="text short" name="message" placeholder="Tu Mensaje"></textarea>
                    <span class="required"></span>
                </div>
            </div>
        </div>
        <br />
        <div class="acm-field submitbtn">
            <button type="submit" id="btn_frmContacto"><i class="glyphicon glyphicon-envelope"></i> Enviar</button>
            <div class="loader"></div>
        </div>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function () {
        $("#btn_frmContacto").click(function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.preventDefault();
                var nombre = $("input[name=cname]");
                var email = $("input[name=email]");
                var telefono = $("input[name=phone]");
                var seccion = $("select[name=subject]");
                var mensaje = $("textarea[name=message]");
                if (nombre.val().trim().length == 0) {
                    $("#liErrorNombre").css('display', 'block');
                    navigationFn.goToSection('#h2EnviarMensaje');
                } else {
                    $("#liErrorNombre").css('display', 'none');
                }
                if (email.val().trim().length == 0) {
                    $("#liErrorEmail").css('display', 'block');
                } else {
                    $("#liErrorEmail").css('display', 'none');
                    navigationFn.goToSection('#h2EnviarMensaje');
                }

                if (seccion.val().trim().length == 0) {
                    $("#liErrorSeccion").css('display', 'block');
                    navigationFn.goToSection('#h2EnviarMensaje');
                } else {
                    $("#liErrorSeccion").css('display', 'none');
                }
                if (mensaje.val().trim().length == 0) {
                    $("#liErrorMensaje").css('display', 'block');
                    navigationFn.goToSection('#h2EnviarMensaje');
                } else {
                    $("#liErrorMensaje").css('display', 'none');
                }
                if (nombre.val().trim().length > 0 && email.val().trim().length > 0 && seccion.val().trim().length > 0 && mensaje.val().trim().length > 0) {
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