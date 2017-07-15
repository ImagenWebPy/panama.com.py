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

    public function categorias() {
        $url = $this->helper->getUrl();
        $idMarca = $url[2];
        $this->view->id_marca = $idMarca;
        $this->view->marcas = $this->model->getMarcas();
        $this->view->categorias = $this->model->categorias($idMarca);
        $this->view->categoriaHeader = $this->model->categoriaHeader($idMarca);
        $this->view->title = 'Categorias - ' . utf8_encode($this->view->categorias['categoria']);
        $this->view->render('header');
        $this->view->render('marca/categorias');
        $this->view->render('footer');
    }

}
