<?php

class Contacto extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->title = 'Contacto';
        $this->view->render('header');
        $this->view->render('contacto/index');
        $this->view->render('footer');
    }

    public function formulario(){
        $this->view->render('contacto/formulario');
    }
}
