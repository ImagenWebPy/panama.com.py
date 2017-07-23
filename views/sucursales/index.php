<?php
$sucursales = $this->sucursales;
?>
<section class="page-title-bar bg-img-2" data-background="parallax" data-transparent="secondary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-bar-wrapper">
                    <p class="title">Sucursales</p>
                    <div class="breadcrumbs">
                        <a href="<?= URL; ?>">Inicio</a>
                        <span class="divider"><i class="glyphicon glyphicon-triangle-right"></i></span>
                        <span class="last">Sucursales</span>
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
<!-- Pricing tables #3 start //-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Listado de Sucursales</h2>
                <table class="pricing-3">
                    <thead>
                        <tr>
                            <th>Sucursal</th>
                            <th>Ciudad</th>
                            <th>Direccion</th>
                            <th>Teléfono</th>
                            <th>Mapa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($sucursales as $item): ?>
                            <tr>
                                <td><?= utf8_encode($item['nombre']); ?></td>
                                <td><?= utf8_encode($item['ciudad']); ?></td>
                                <td><?= utf8_encode($item['direccion']); ?></td>
                                <td><?= utf8_encode($item['telefono']); ?></td>
                                <td><div id="map-<?= $item['id']; ?>" class="map" data-latitud="<?= $item['latitud']; ?>" data-longitud="<?= $item['longitud']; ?>"></div></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    var maps = [];
    var markers = [];
    function initMap() {
        var $maps = $('.map');
        $.each($maps, function (i, value) {
            var uluru = {lat: parseFloat($(value).attr('data-latitud')), lng: parseFloat($(value).attr('data-longitud'))};
            var mapDivId = $(value).attr('id');

            maps[mapDivId] = new google.maps.Map(document.getElementById(mapDivId), {
                zoom: 17,
                center: uluru
            });

            markers[mapDivId] = new google.maps.Marker({
                position: uluru,
                map: maps[mapDivId]
            });
        })
    }
</script>