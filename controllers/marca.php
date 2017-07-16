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
        $this->view->marcaHeader = $this->model->marcaHeader($idMarca);
        $marca = $this->view->marcaHeader['marca'];
        $this->view->title = 'Categorias - ' . $marca;
        $this->view->render('header');
        $this->view->render('marca/categorias');
        $this->view->render('footer');
    }

    public function productos() {
        $url = $this->helper->getUrl();
        $id_categoria = $url[2];
        $this->view->categoriaHeader = $this->model->categoriaHeader($id_categoria);
        $this->view->productosCategoria = $this->model->productosCategoria($id_categoria);
        $this->view->marcas = $this->model->getMarcas();
        $this->view->title = 'Productos - ' . utf8_encode($this->view->categoriaHeader['categoria']);
        $this->view->render('header');
        $this->view->render('marca/productos');
        $this->view->render('footer');
    }
    
    public function producto(){
        $url = $this->helper->getUrl();
        var_dump($url);
    }
}
