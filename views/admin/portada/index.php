<?php
$laEmpresa = $this->getLaEmpresa;
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            La Empresa
            <small>Editar Contenido</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= URL_ADMIN; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">La Empresa</li>
        </ol>
    </section>

    <!-- Main content -->
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
        CKEDITOR.replace('contenido');
    });
</script>