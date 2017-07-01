<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
//        $helper = new Helper();
//        var_dump($helper->getListadoPost('id DESC', '4'));
//        die();
    }

    function index() {
        $this->view->title = 'Bienvenido';
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
    }

}
