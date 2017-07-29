<?php

class Admin extends Controller {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
        //echo Hash::create('sha256', '25443raul.chucky', HASH_PASSWORD_KEY);
    }

    public function index() {
        $this->view->mensajesNuevos = $this->model->mensajesNuevos();
        $this->view->cvNuevos = $this->model->cvNuevos();
        $this->view->blogActivos = $this->model->blogActivos();
        $this->view->productosActivos = $this->model->productosActivos();
        $this->view->title = 'Dashboard';
        $this->view->render('admin/header');
        $this->view->render('admin/dashboard/index');
        $this->view->render('admin/footer');
    }
}
