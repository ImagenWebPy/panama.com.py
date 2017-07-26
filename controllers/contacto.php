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
        if (!empty($_SESSION['result'])) {
            unset($_SESSION['result']);
        }
    }

    public function formulario() {
        $this->view->render('contacto/formulario');
    }

    public function enviar() {
        $datos = array(
            'nombre' => $this->helper->cleanInput($_POST['cname']),
            'email' => $this->helper->cleanInput($_POST['email']),
            'telefono' => $this->helper->cleanInput($_POST['phone']),
            'seccion' => $this->helper->cleanInput($_POST['subject']),
            'mensaje' => $this->helper->cleanInput($_POST['message']),
        );
        $data = $this->model->enviar($datos);
        if (!empty($data)) {
            $result = array(
                'type' => 'succes',
                'message' => $this->helper->messageAlert('success', 'Gracias, su consulta ha sido enviada')
            );
        } else {
            $result = array(
                'type' => 'error',
                'message' => $this->helper->messageAlert('error', 'Lo sentimos ha ocurrido un error, por favor vuelva a intertarlo')
            );
        }
        Session::set('result', $result);
        header('Location: ' . URL . 'contacto/');
    }

}
