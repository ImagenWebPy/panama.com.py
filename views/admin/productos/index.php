<?php
$helper = new Helper();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Productos
            <small>Editar Contenido</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= URL_ADMIN; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Productos</li>
        </ol>
    </section>
    <section class="content">
        <?php
        if (isset($_SESSION['message'])) {
            echo $helper->messageAlert($_SESSION['message']['type'], $_SESSION['message']['mensaje']);
        }
        ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listado de Productos</h3>
                        <div class="col-xs-6 pull-right">
                            <button type="button" class="btn btn-block btn-primary btnAgregarProducto">Agregar Nuevo Producto</button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="tblProductos" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Marca</th>
                                    <th>Categoría</th>
                                    <th>Producto</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Marca</th>
                                    <th>Categoría</th>
                                    <th>Producto</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#tblProductos").DataTable({
            //"aaSorting": [[0, "asc"]],
            "paging": true,
            "orderCellsTop": true,
            //"scrollX": true,
            //"scrollCollapse": true,
            "fixedColumns": true,
            //"iDisplayLength": 50,
            "ajax": {
                "url": "<?= URL ?>admin/cargarDTProductos/",
                "type": "post"
            },
            "columns": [
                {"data": "marca"},
                {"data": "categoria"},
                {"data": "producto"},
                {"data": "estado"},
                {"data": "accion"}
            ],
            "language": {
                "url": "<?= URL ?>public/language/Spanish.json"
            }
        });
        $(document).on("click", ".btnAgregarProducto", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                $.ajax({
                    url: "<?= URL; ?>admin/modalAgregarProducto",
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
        $(document).on("change", ".selectMarcaProducto", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).val();
                $.ajax({
                    url: "<?= URL; ?>admin/selectCategoriaProducto",
                    type: "POST",
                    data: {id: id},
                    dataType: "json"
                }).done(function (data) {
                    $('.selectCategoriaProducto').html(data);
                });
            }
            e.handled = true;
        });
        $(document).on("click", ".btnEditarProducto ", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr("data-id");
                $.ajax({
                    url: "<?= URL; ?>admin/modalEditarProducto",
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
        $(document).on("submit", "#frmEditarProducto", function (e) {
            var url = "<?= URL ?>admin/editProducto"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#frmEditarProducto").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    if (data['type'] == 'success') {
                        $("#producto_" + data['id']).html(data['row']);
                        $(".genericModal").modal("toggle");
                    }
                }
            });
            e.preventDefault(); // avoid to execute the actual submit of the form.
        });
    });
</script>