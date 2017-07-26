<?php
$helper = new Helper();
$datosSelect = $helper->getFormularioContacto();
?>
<div class="col-lg-6 col-md-6" style="padding: 15px;" id="displayErrorsContact">
    <ul class="no-style" id="listErrorsContact">

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
            <button type="submit" name="submit" id="btn_frmContacto"><i class="glyphicon glyphicon-envelope"></i> Enviar</button>
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
                var seccion = $("input[name=subject]");
                var mensaje = $("input[name=message]");
                var validacion = $("#listErrorsContact");
                var error = $("#displayErrorsContact");
                if (nombre.val().trim().length == 0) {
                    error.focus();
                    validacion.append('<li id="liErrorNombre"><i class="glyphicon glyphicon-ok-sign color-primary"></i> Por favor complete su nombre</li>');
                } else {
                    $("#liErrorNombre").remove();
                }
                if (email.val().trim().length == 0) {
                    error.focus();
                    validacion.append('<li id="liErrorEmail"><i class="glyphicon glyphicon-ok-sign color-primary"></i> Por favor complete su Email</li>');
                } else {
                    $("#liErrorEmail").remove();
                }
                if (seccion.val().trim().length == 0) {

                } else {
                    seccion.css("border", "1px solid #ededed;");
                }
                if (mensaje.val().trim().length == 0) {
                    mensaje.css("border", "3px solid red;");
                    mensaje.focus();
                } else {
                    mensaje.css("border", "1px solid #ededed;");
                }
            }
            e.handled = true;
        });
    });
</script>