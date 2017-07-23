<?php

class Blog extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function listado() {
        $url = $this->helper->getUrl();
        if (!empty($url[2])) {
            $pagina = $url[2];
        } else {
            $pagina = 1;
        }
        $this->view->listado = $this->model->listado($pagina);
        $this->view->title = 'Blog';
        $this->view->render('header');
        $this->view->render('blog/index');
        $this->view->render('footer');
    }

    public function detalle() {
        $url = $this->helper->getUrl();
        $idBlog = $url[2];
        $this->view->detalle = $this->model->detalle($idBlog);
        $idActual = $this->view->detalle['id'];
        $this->view->ultimasPublicaciones = $this->model->ultimasPublicaciones(3, $idActual);
        $this->view->title = utf8_encode($this->view->detalle['titulo']);
        $this->view->render('header');
        $this->view->render('blog/detalle');
        $this->view->render('footer');
    }

}
