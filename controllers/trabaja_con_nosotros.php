<?php

class Trabaja_con_nosotros extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->title = 'Trabaja con Nosotros';
        $this->view->render('header');
        $this->view->render('trabaja_con_nosotros/index');
        $this->view->render('footer');
    }

}
