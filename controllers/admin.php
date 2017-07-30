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
    
     public function portada() {
        $this->view->public_css = array("plugins/html5fileupload/html5fileupload.css");
        $this->view->publicHeader_js = array("plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("plugins/ckeditor/ckeditor.js", "plugins/html5fileupload/html5fileupload.min.js");
        $this->view->getLaEmpresa = $this->model->getLaEmpresa();
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
    
   

}
