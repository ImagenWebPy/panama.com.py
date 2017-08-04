<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sucursales
            <small>Editar Contenido</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= URL_ADMIN; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Sucursales</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listado de Sucursales</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="tblSucursales" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sucursal</th>
                                    <th>Teléfono</th>
                                    <th>Ciudad</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sucursal</th>
                                    <th>Teléfono</th>
                                    <th>Ciudad</th>
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
        $("#tblSucursales").DataTable({
            //"aaSorting": [[0, "asc"]],
            "paging": true,
            "orderCellsTop": true,
            //"scrollX": true,
            //"scrollCollapse": true,
            "fixedColumns": true,
            //"iDisplayLength": 50,
            "ajax": {
                "url": "<?= URL ?>admin/cargarDTSucursales/",
                "type": "post"
            },
            "columns": [
                {"data": "sucursal"},
                {"data": "telefono"},
                {"data": "ciudad"},
                {"data": "estado"},
                {"data": "accion"}
            ],
            "language": {
                "url": "<?= URL ?>public/language/Spanish.json"
            }
        });
    });
</script>