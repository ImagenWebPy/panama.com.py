<?php

class Sucursales extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->sucursales = $this->model->sucursales();
        $this->view->title = 'Sucursales';
        $this->view->render('header');
        $this->view->render('sucursales/index');
        $this->view->render('footer');
    }

}
