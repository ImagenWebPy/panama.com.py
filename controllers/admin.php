<?php

class Admin extends Controller {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
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

    public function portada() {
        $this->view->public_css = array("plugins/html5fileupload/html5fileupload.css");
        $this->view->publicHeader_js = array("plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("plugins/ckeditor/ckeditor.js", "plugins/html5fileupload/html5fileupload.min.js");
        $this->view->getLaEmpresa = $this->model->getLaEmpresa();
        $this->view->getSlider = $this->model->getSlider();
        $this->view->title = 'Pagina de Inicio';
        $this->view->render('admin/header');
        $this->view->render('admin/portada/index');
        $this->view->render('admin/footer');
    }

    public function laempresa() {
        $this->view->public_css = array("plugins/html5fileupload/html5fileupload.css");
        $this->view->publicHeader_js = array("plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("plugins/ckeditor/ckeditor.js", "plugins/html5fileupload/html5fileupload.min.js");
        $this->view->getLaEmpresa = $this->model->getLaEmpresa();
        $this->view->title = 'La Empresa';
        $this->view->render('admin/header');
        $this->view->render('admin/laempresa/index');
        $this->view->render('admin/footer');
    }

    public function mision() {
        $this->view->public_css = array("plugins/html5fileupload/html5fileupload.css");
        $this->view->publicHeader_js = array("plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("plugins/ckeditor/ckeditor.js", "plugins/html5fileupload/html5fileupload.min.js");
        $this->view->getMision = $this->model->getMision();
        $this->view->title = 'La Empresa';
        $this->view->render('admin/header');
        $this->view->render('admin/laempresa/mision');
        $this->view->render('admin/footer');
    }

    public function comprimiso_social() {
        $this->view->public_css = array("plugins/html5fileupload/html5fileupload.css");
        $this->view->publicHeader_js = array("plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("plugins/ckeditor/ckeditor.js", "plugins/html5fileupload/html5fileupload.min.js");
        $this->view->getCompromiso = $this->model->getCompromiso();
        $this->view->title = 'La Empresa';
        $this->view->render('admin/header');
        $this->view->render('admin/laempresa/compromiso');
        $this->view->render('admin/footer');
    }

    public function marcas() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Marcas';
        $this->view->render('admin/header');
        $this->view->render('admin/marcas/index');
        $this->view->render('admin/footer');
    }

    public function cargarDTMarcas() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTMarcas();
        echo $data;
    }

    public function cargarDTCategorias() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTCategorias();
        echo $data;
    }

    public function cargarDTProductos() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTProductos();
        echo $data;
    }
    
    public function cargarDTSucursales() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTSucursales();
        echo $data;
    }

    public function categorias() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Categorias';
        $this->view->render('admin/header');
        $this->view->render('admin/categorias/index');
        $this->view->render('admin/footer');
    }

    public function productos() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Productos';
        $this->view->render('admin/header');
        $this->view->render('admin/productos/index');
        $this->view->render('admin/footer');
    }

    public function sucursales() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Productos';
        $this->view->render('admin/header');
        $this->view->render('admin/sucursales/index');
        $this->view->render('admin/footer');
    }

}
