<?php

class Empresa extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->title = 'La Empresa';
        $this->view->empresa = $this->model->getEmpresaContent();
        $this->view->render('header');
        $this->view->render('empresa/index');
        $this->view->render('footer');
    }
    
    public function mision(){
        $this->view->title = 'Misión';
        $this->view->mision = $this->model->getMisionContent();
        $this->view->render('header');
        $this->view->render('empresa/mision');
        $this->view->render('footer');
    }
    
    public function comprimiso_social(){
        $this->view->title = 'Compromiso Social';
        $this->view->compromiso = $this->model->getCompromisoContent();
        $this->view->render('header');
        $this->view->render('empresa/compromiso_social');
        $this->view->render('footer');
    }

}
