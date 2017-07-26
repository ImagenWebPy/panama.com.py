<?php

class Trabaja_con_nosotros extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->public_css = array("plugins/html5fileupload/html5fileupload.css");
        $this->view->publicHeader_js = array("plugins/html5fileupload/html5fileupload.min.js");
        $this->view->title = 'Trabaja con Nosotros';
        $this->view->render('header');
        $this->view->render('trabaja_con_nosotros/index');
        $this->view->render('footer');
        if (!empty($_SESSION['result'])) {
            unset($_SESSION['result']);
        }
    }

    public function subir_datos() {
        #obtenemos los datos del form
        $datos = array(
            'nombre' => $this->helper->cleanInput($_POST['cname']),
            'email' => $this->helper->cleanInput($_POST['email']),
            'telefono' => $this->helper->cleanInput($_POST['phone']),
            'message' => $this->helper->cleanInput($_POST['message'])
        );
        $insert = $this->model->subir_datos($datos);
        $id = $insert['id'];
        #SUBIMOS EL ARCHIVO
        $dir = 'public/archivos/cv/';
        $serverdir = $dir;
        $filename = "";
        foreach ($_FILES as $inputname => $file) {
            $newname = $this->helper->cleanUrl($_POST[$inputname . '_name']);
            //$extension = strtolower(end(explode('.', $file['name'])));
            $ext = explode('.', $file['name']);
            $extension = strtolower(end($ext));
            $fname = $id . '_' . $newname . '.' . $extension;
            $contents = file_get_contents($file['tmp_name']);

            $handle = fopen($serverdir . $fname, 'w');
            fwrite($handle, $contents);
            fclose($handle);

            $filename = $fname;
            var_dump($filename);
        }
        $update = array(
            'id' => $id,
            'archivo' => $filename
        );
        $updateTrabaja = $this->model->updateTrabaja($update);
        if (!empty($id)) {
            $data = array(
                'type' => 'succes',
                'message' => $this->helper->messageAlert('success', 'Gracias, tu C.V. se ha agregado correctamente a nuestra Base de Datos.')
            );
        } else {
            $data = array(
                'type' => 'error',
                'message' => $this->helper->messageAlert('error', 'Lo sentimos ha ocurrido un error, por favor vuelva a intertarlo')
            );
        }
        Session::set('result', $data);
        header('Location: ' . URL . 'trabaja_con_nosotros/');
    }

}
