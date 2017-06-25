<!-- Site footer start //-->
<footer role="contentinfo" class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <!-- Widget start //-->
                <aside class="widget no-title">
                    <div class="widget-content">
                        <!-- Site logo start //-->
                        <div class="site-logo">
                            <a href="#" title="Magnis - Multipurpose HTML Template"><img src="<?= IMG; ?>site-logo-inverted.png" alt="Magnis - Multipurpose HTML Template"></a>
                        </div>
                        <!-- Site logo end //-->
                        <div class="clearfix"></div>
                        <p>In id lacinia dolor. Nam lectus quam, ultricies a rutrum in, mattis nec mi. Vestibulum at tempus arcu. Fusce sit amet velit vitae mauris tempus gravida. Nullam at felis a nisl iaculis sodales. Praesent euismod porttitor nibh, et dictum tellus accumsan sed.</p>
                    </div>
                </aside>
                <!-- Widget end //-->
            </div>
            <div class="clearfix mobile-typo-fix hidden-lg"></div>
            <div class="col-lg-3">
                <!-- Widget start //-->
                <aside class="widget widget-flickr">
                    <h4 class="widget-title">flickr photos</h4>
                    <div class="widget-content">
                        <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08"></script>
                    </div>

                </aside>

                <!-- Widget end //-->

            </div>

            <div class="clearfix mobile-typo-fix hidden-lg"></div>

            <div class="col-lg-3">

                <!-- Widget start //-->

                <aside class="widget widget-contacts">

                    <h4 class="widget-title">contact us</h4>

                    <div class="widget-content">

                        <ul>

                            <li>address</li>

                            <li> 2004 Veltri Drive, Anchorage, AK 99502 </li>

                        </ul>

                        <ul>

                            <li>phone</li>

                            <li>+1 720 254 8917</li>

                        </ul>

                        <ul>

                            <li>fax</li>

                            <li>+1 720 254 8918</li>

                        </ul>

                        <ul>

                            <li>email</li>

                            <li>support@magnis.com</li>

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

                    <p>© 2013 All rights reserved. Magnis Theme by <a href="http://themeforest.net/user/RivaThemes">Riva Themes</a></p>

                </div>

                <div class="col-lg-6 col-md-6 right">

                    <p>

                        <a href="#">FAQ</a>

                        <span class="divider">/</span>

                        <a href="#">Support</a>

                        <span class="divider">/</span>

                        <a href="#">Contacts</a>

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

                $('#testimonials').rivaCarousel({
                    style: 'vertical',
                    navigation: 'buttons',
                    navigation_class: 'section-header-nav',
                    button_left_text: '<i class="glyphicon glyphicon-menu-down"></i>',
                    button_right_text: '<i class="glyphicon glyphicon-menu-up"></i>',
                    visible: 1,
                    selector: 'testimonials-item',
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
</html>