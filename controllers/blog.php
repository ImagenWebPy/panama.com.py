<?php

class Blog extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->title = 'Blog';
        $this->view->render('header');
        $this->view->render('blog/index');
        $this->view->render('footer');
    }

}
