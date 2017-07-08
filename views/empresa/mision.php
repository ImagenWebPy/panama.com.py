<div class="clearfix"></div>
<!-- Page title start //-->
<section class="page-title-bar bg-img-2" data-background="parallax" data-transparent="secondary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-bar-wrapper">
                    <p class="title">Misión</p>
                    <div class="breadcrumbs">
                        <a href="<?= URL; ?>">Inicio</a>
                        <span class="divider"><i class="glyphicon glyphicon-triangle-right"></i></span>
                        <span class="last">Misión</span>
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
<!-- Text, accordion and skills start //-->
<section class="padding-bottom-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <?= utf8_encode($this->mision[0]['contenido']); ?>
            </div>
        </div>
    </div>
</section>
<?php if ($this->mision[0]['mostrar_contratar'] == 1): ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 cool-md-12">
                    <h3><?= utf8_encode($this->mision[0]['titulo_contratar']); ?></h3>
                    <?= utf8_encode($this->mision[0]['contenido_contratar']); ?>
                    <p><a href="#" class="m-btn" data-size="normal" data-color="primary"><?= utf8_encode($this->mision[0]['boton_contratar']); ?></a></p>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- Site content end //-->