<?php
$helper = new Helper;
$paginaActual = $helper->getPage();
$siteInfo = $helper->getSiteConfig();
?>
<!-- Site footer start //-->
<footer role="contentinfo" class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- Widget start //-->
                <aside class="widget widget-flickr">
                    <h4 class="widget-title">marcas</h4>
                    <div class="widget-content">
                        <ul>
                            <?php foreach ($helper->getListadoMarcas() as $item): ?>
                                <li><a href="#"><?= utf8_encode($item['descripcion']) ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </aside>
                <!-- Widget end //-->
            </div>
            <div class="clearfix mobile-typo-fix hidden-lg"></div>
            <div class="col-lg-6">
                <!-- Widget start //-->
                <aside class="widget widget-contacts">
                    <h4 class="widget-title">Encuéntranos en</h4>
                    <div class="widget-content">
                        <ul>
                            <li>dirección</li>
                            <li><?= utf8_encode($siteInfo['direccion']); ?></li>
                        </ul>
                        <ul>
                            <li>teléfono</li>
                            <li><?= $siteInfo['telefono_footer']; ?></li>
                        </ul>
                        <ul>
                            <li>email</li>
                            <li><?= $siteInfo['email_footer']; ?>.</li>
                        </ul>
                    </div>
                </aside>
                <!-- Widget end //-->
            </div>
        </div>
    </div>
    <!-- Copyrights start //-->

    <div class="copyrights">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-6 left">

                    <p>Powered by <a href="https://imagenwebhq.com"><img src="<?= IMG; ?>logo-iweb-white.png" ></a></p>

                </div>

                <div class="col-lg-6 col-md-6 right">

                    <p>

                        <a href="#">Politica de Privacidad</a>

                        <span class="divider">/</span>

                        <a href="#">Contacto</a>

                    </p>

                </div>

            </div>

        </div>

    </div>

    <!-- Copyrights end //-->

</footer>

<!-- Site footer end //-->

</div>  

<!-- To the top start //-->

<div class="move-to-the-top"><i class="glyphicon glyphicon-triangle-top"></i></div>

<!-- to the top end //-->

<!-- Mobile menu start //-->

<nav id="mobile-menu"></nav>

<!-- Mobile menu end //-->

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= JS; ?>jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="<?= JS; ?>jquery-ui.min.js" type="text/javascript"></script>
<script src="<?= JS; ?>modernizr-2.6.2-respond-1.1.0.min.js" type="text/javascript"></script>
<!-- Less.js -->
<script src="<?= JS; ?>less.min.js" type="text/javascript"></script>
<!-- External libraries: GreenSock -->
<script src="<?= URL; ?>public/layerslider/js/greensock.js" type="text/javascript"></script>     
<!-- LayerSlider script files -->
<script src="<?= URL; ?>public/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="<?= URL; ?>public/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<!-- Add mousewheel plugin (this is optional) -->
<script src="<?= URL; ?>public/fancybox/lib/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
<!-- Add fancyBox -->
<script src="<?= URL; ?>public/fancybox/source/jquery.fancybox.pack8cbb.js" type="text/javascript"></script>
<!-- Optionally add helpers - button, thumbnail and/or media -->
<script src="<?= URL; ?>public/fancybox/source/helpers/jquery.fancybox-buttons3447.js" type="text/javascript"></script>
<script src="<?= URL; ?>public/fancybox/source/helpers/jquery.fancybox-mediac924.js" type="text/javascript"></script>
<script src="<?= URL; ?>public/fancybox/source/helpers/jquery.fancybox-thumbsf2ad.js" type="text/javascript"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= JS; ?>bootstrap.min.js" type="text/javascript"></script>
<script src="<?= JS; ?>imagesloaded.pkgd.min.js" type="text/javascript"></script>
<script src="<?= JS; ?>masonry.pkgd.min.js" type="text/javascript"></script>
<script src="<?= JS; ?>jquery.easing.1.3.js" type="text/javascript"></script>
<script src="<?= JS; ?>jquery.rivathemes.js" type="text/javascript"></script>
<!-- MMenu-->
<script src="<?= JS; ?>jquery.mmenu.min.all.js" type="text/javascript"></script>
<!-- Scrollfix JS -->
<script src="<?= JS; ?>scrollfix.js" type="text/javascript"></script>
<!-- Tipso JS-->
<script src="<?= JS; ?>tipso.min.js" type="text/javascript"></script>
<script src="<?= JS; ?>magnis.js" type="text/javascript"></script>
<?php
switch ($paginaActual[0]):
    case 'empresa':
        ?>
        <script>
            (function ($) {
                "use strict";
                /* Preload Images */
                $('document').ready(function () {
                    var $container = $('body'),
                            $preload = $('#riva-preload');
                    $container.imagesLoaded(function () {
                        $preload.hide();
                    });
                });
            })(jQuery);
        </script>
        <?php break; ?>
    <?php case 'producto': ?>
        <script>
            (function ($) {
                "use strict";
                /* Preload Images */
                $('document').ready(function () {
                    var $container = $('body'),
                            tweetsTimer,
                            $preload = $('#riva-preload');
                    $container.imagesLoaded(function () {
                        /* PLACE YOUR JAVASCRIPT CODE HERE */
                        $('#images').rivaCarousel({
                            style: 'horizontal',
                            navigation: 'bullets',
                            navigation_class: 'bullets-nav-1 center',
                            visible: 1,
                            selector: 'project-img',
                            gutter: 0,
                            interval: 1200,
                            autostart: 0,
                            speed: 350,
                            ease: 'easeInBack'
                        });
                        $('#projects').rivaCarousel({
                            style: 'horizontal',
                            navigation: 'buttons',
                            navigation_class: 'section-header-nav margin-top-5',
                            button_left_text: '<i class="glyphicon glyphicon-menu-left"></i>',
                            button_right_text: '<i class="glyphicon glyphicon-menu-right"></i>',
                            visible: 3,
                            selector: 'shop-item',
                            gutter: 30,
                            infinite: 0,
                            interval: 2000,
                            autostart: 0,
                            speed: 350,
                            ease: 'easeInBack'
                        });
                        $('#qty_id').on('change', function () {
                            $('#price_id').html('$' + $('#price_id').attr('data-price') * $(this).val());
                        });
                        $('#tweets').twittie({
                            dateFormat: '%b. %d, %Y',
                            template: '<div class="tweet"><span class="content">{{tweet}}</span><span class="date">{{date}}</span></div>',
                            count: 5,
                            loadingText: 'Loading tweets...'
                        }, function () {
                            $('<div class="riva-insert-menu-here"></div>').appendTo($('#tweets'));
                            $('#tweets').find('.tweet').each(function () {
                                $(this).unwrap('li');
                                $('<i class="fa fa-twitter"></i>').appendTo($(this));
                            }).unwrap('ul');
                            $('#tweets').rivaCarousel({
                                style: 'horizontal',
                                navigation: 'bullets',
                                navigation_class: 'bullets-nav-1 light',
                                visible: 1,
                                selector: 'tweet',
                                gutter: 0,
                                interval: 1200,
                                autostart: 0,
                                speed: 350,
                                ease: 'easeInBack'
                            });
                        });
                        $preload.hide();
                    });
                    clearTimeout(tweetsTimer);
                });
            })(jQuery);
        </script>
        <?php break; ?>
    <?php case 'marca': ?>
        <script>
            (function ($) {
                "use strict";
                /* Preload Images */
                $('document').ready(function () {
                    var $container = $('body'),
                            $preload = $('#riva-preload');
                    $container.imagesLoaded(function () {
                        $preload.hide();
                    });
                });
            })(jQuery);
        </script>
        <?php break; ?>
    <?php case 'contacto': ?>
        <!-- Google Maps -->
        <script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
        <!-- Mapster JS -->
        <script src="<?= JS; ?>mapster.js" type="text/javascript"></script>
        <script src="<?= JS; ?>map-options.js" type="text/javascript"></script>
        <script>
            (function (window, mapster) {
                // map options
                var options = mapster.MAP_OPTIONS,
                        element = document.getElementById('map-canvas'),
                        // map
                        map = new mapster.create(element, options);
                var marker = map.addMarker({
                    lat: 37.791350,
                    lng: -122.435883,
                    content: 'Magnis Office',
                    icon: 'img/office-building.png'
                });
            }(window, window.Mapster || (window.Mapster = {})));
            (function ($) {
                "use strict";
                /* Preload Images */
                $('document').ready(function () {
                    var $container = $('body'),
                            $preload = $('#riva-preload');
                    $container.imagesLoaded(function () {
                        /* PLACE YOUR JAVASCRIPT CODE HERE */
                        $('#pages-contact-form').load("<?= URL; ?>contacto/formulario");
                        $preload.hide();
                    });
                });
            })(jQuery);
        </script>
        <?php break; ?>
    <?php default: ?>
        <script>
            (function ($) {
                "use strict";
                /* Preload Images */
                $('document').ready(function () {
                    var $container = $('body'),
                            tweetsTimer,
                            $preload = $('#riva-preload');
                    $container.imagesLoaded(function () {
                        /* PLACE YOUR JAVASCRIPT CODE HERE */

                        $('#projects').rivaCarousel({
                            style: 'horizontal',
                            navigation: 'buttons',
                            navigation_class: 'project-block-1-nav',
                            button_left_text: '<i class="glyphicon glyphicon-menu-left"></i>',
                            button_right_text: '<i class="glyphicon glyphicon-menu-right"></i>',
                            visible: 3,
                            selector: 'project-item',
                            gutter: 0,
                            infinite: 0,
                            interval: 2000,
                            autostart: 0,
                            speed: 350,
                            ease: 'easeInBack'
                        });

                        $('#posts').rivaCarousel({
                            style: 'horizontal',
                            navigation: 'buttons',
                            navigation_class: 'section-header-nav',
                            button_left_text: '<i class="glyphicon glyphicon-menu-left"></i>',
                            button_right_text: '<i class="glyphicon glyphicon-menu-right"></i>',
                            visible: 1,
                            selector: 'post',
                            gutter: 0,
                            infinite: 0,
                            interval: 2000,
                            autostart: 0,
                            speed: 700,
                            ease: 'easeInBack'
                        });
                        $("#open-project-gallery").click(function (e) {
                            e.preventDefault();
                            $.fancybox.open([
                                {
                                    href: '<?= IMG; ?>projects/gallery/1.jpg',
                                    title: '#1 Picture'
                                }, {
                                    href: '<?= IMG; ?>projects/gallery/2.jpg',
                                    title: '#2 Picture'
                                }, {
                                    href: '<?= IMG; ?>projects/gallery/3.jpg',
                                    title: '#3 Picture'
                                }, {
                                    href: '<?= IMG; ?>projects/gallery/4.jpg',
                                    title: '#4 Picture'
                                }
                            ], {
                                helpers: {
                                    thumbs: {
                                        width: 75,
                                        height: 50
                                    }
                                }
                            });
                        });
                        $('#layerslider').layerSlider({
                            autoStart: true,
                            firstLayer: 1,
                            skin: 'fullwidthdark',
                            responsive: true,
                            responsiveUnder: 1170,
                            layersContainer: 1170,
                            skinsPath: 'public/layerslider/skins/'
                        });
                        $preload.hide();
                    });
                    clearTimeout(tweetsTimer);
                });
            })(jQuery);
        </script>
        <?php break; ?>
<?php endswitch; ?>
</html>