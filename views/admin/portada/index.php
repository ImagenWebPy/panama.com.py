<?php
$laEmpresa = $this->getLaEmpresa;
$slider = $this->getSlider;
$helper = new Helper();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Inicio
            <small>Página de Inicio</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= URL_ADMIN; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Portada</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <?php
        if (isset($_SESSION['message'])) {
            echo $helper->messageAlert($_SESSION['message']['type'], $_SESSION['message']['mensaje']);
        }
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Slider
                            <small>Slider Principal</small>
                        </h3>
                        <div class="col-xs-6 pull-right">
                            <button type="button" class="btn btn-block btn-primary btnAgregarSlider">Agregar Nuevo Slide</button>
                        </div>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <div class="box-body pad">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Imagen</th>
                                    <th>Enlace</th>
                                    <th>Texto Enlace</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($slider as $item): ?>
                                    <tr id="slider_<?= $item['id']; ?>">
                                        <td><?= $item['orden']; ?></td>
                                        <td><img src="<?= IMG; ?>layersliderimgs/<?= $item['descripcion']; ?>" style="width: 200px;"></td>
                                        <td><?= $item['url']; ?></td>
                                        <td><?= utf8_encode($item['texto_enlace']); ?></td>
                                        <td><a class="btn btn-app pointer btnEditarSlider" data-id="<?= $item['id']; ?>"><i class="fa fa-edit"></i> Editar</a> <a class="btn btn-app pointer btnEliminarSlider" data-id="<?= $item['id']; ?>"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Contenido Resumido
                            <small>Pagina de Inicio</small>
                        </h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                        <div class="col-md-6">
                            <form>
                                <textarea id="editor1" name="resumido" rows="10" cols="80">
                                    <?= utf8_encode($laEmpresa['contenido_portada']) ?>          
                                </textarea>
                            </form>
                        </div>
                        <div class="cold-md-6">
                            <form method="POST" action="">
                                <div class="fields-group-1 groups ">
                                    <div class="group-title">Sube el archivo</div>
                                    <div class="form-group">
                                        <div class="html5fileupload demo_form uploadFileInput" data-url="<?= URL; ?>admin/upload_image" data-max-filesize="2048000" data-valid-extensions="jpg,jpeg,JPG,JPEG,png,PNG" style="width: 100%;">
                                            <input type="file" name="resumido" required="required" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <script>
                                $('.html5fileupload.demo_form').html5fileupload();
                            </script>
                            <p>&nbsp;</p>
                            <h3>Imagen Actual</h3>
                            <img src="<?= IMG . $laEmpresa['img_portada']; ?>"style="width: 20% !important;" id="imgPortada">
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col-->
        </div>
    </section>
    <!-- /.content -->
</div>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('resumido');
        $(document).on("click", ".btnAgregarSlider", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                $.ajax({
                    url: "<?= URL; ?>admin/modalAgregarSlider",
                    type: "POST",
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data['titulo']);
                    $(".genericModal .modal-body").html(data['contenido']);
                    $(".genericModal").modal("toggle");
                });
            }
            e.handled = true;
        });
        $(document).on("click", ".btnEditarSlider ", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr("data-id");
                $.ajax({
                    url: "<?= URL; ?>admin/modalEditarSlider",
                    type: "POST",
                    data: {id: id},
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data['titulo']);
                    $(".genericModal .modal-body").html(data['contenido']);
                    $(".genericModal").modal("toggle");
                });
            }
            e.handled = true;
        });
        $(document).on("submit", "#frmEditarSlider", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var url = "<?= URL ?>admin/editSlider"; // the script where you handle the form input.
                $.ajax({
                    type: "POST",
                    url: url,
                    data: $("#frmEditarSlider").serialize(), // serializes the form's elements.
                    success: function (data)
                    {
                        if (data['type'] == 'success') {
                            $("#slider_" + data['id']).html(data['row']);
                            $(".genericModal").modal("toggle");
                        }
                    }
                });
                e.preventDefault(); // avoid to execute the actual submit of the form.
            }
            e.handled = true;
        });
        $(document).on("click", ".btnEliminarSlider", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr("data-id");
                $.ajax({
                    url: "<?= URL; ?>admin/modalEliminarSlider",
                    type: "POST",
                    data: {id: id},
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-danger");
                    $(".genericModal .modal-title").html(data['titulo']);
                    $(".genericModal .modal-body").html(data['contenido']);
                    $(".genericModal").modal("toggle");
                });
            }
            e.handled = true;
        });
        $(document).on("submit", "#frmEliminarSlider", function (e) {
            var url = "<?= URL ?>admin/deleteSlider"; // the script where you handle the form input.
            var id = $("#btnDeleteSlider").attr("data-id");
            $.ajax({
                type: "POST",
                url: url,
                data: {id: id}, // serializes the form's elements.
                success: function (data)
                {
                    if (data['type'] == 'success') {
                        $("#slider_" + data['id']).remove();
                        $(".genericModal").modal("toggle");
                    }
                }
            });
            e.preventDefault(); // avoid to execute the actual submit of the form.
        });
    });
</script>