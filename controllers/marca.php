<?php

class Marca extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->title = 'Productos';
        $this->view->marcas = $this->model->getMarcas();
        $this->view->render('header');
        $this->view->render('marca/index');
        $this->view->render('footer');
    }

}
