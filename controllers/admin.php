<?php

class Admin extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function dashboard() {
        $this->view->title = 'Dashboard';
        $this->view->render('admin/header');
        $this->view->render('admin/dashboard/index');
        $this->view->render('admin/footer');
    }

}
