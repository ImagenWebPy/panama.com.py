<div class="login-box">
    <?php
    $helper = new Helper();
    if (isset($_SESSION['message'])) {
        echo $helper->messageAlert($_SESSION['message']['type'], $_SESSION['message']['mensaje']);
    }
    ?>
    <div class="login-logo">
        <a href="#"><img src="<?php echo IMG; ?>logo.png"</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Ingresa para iniciar la sesión</p>
        <form action="<?php echo URL; ?>login/iniciar/" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Email" name="login[email]" required>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Contraseña" name="login[password]" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                </div><!-- /.col -->
            </div>
        </form>
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
