<?php

class Admin extends Controller {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
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
        $this->view->getSlider = $this->model->getSlider();
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

    public function mision() {
        $this->view->public_css = array("plugins/html5fileupload/html5fileupload.css");
        $this->view->publicHeader_js = array("plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("plugins/ckeditor/ckeditor.js", "plugins/html5fileupload/html5fileupload.min.js");
        $this->view->getMision = $this->model->getMision();
        $this->view->title = 'La Empresa';
        $this->view->render('admin/header');
        $this->view->render('admin/laempresa/mision');
        $this->view->render('admin/footer');
    }

    public function comprimiso_social() {
        $this->view->public_css = array("plugins/html5fileupload/html5fileupload.css");
        $this->view->publicHeader_js = array("plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("plugins/ckeditor/ckeditor.js", "plugins/html5fileupload/html5fileupload.min.js");
        $this->view->getCompromiso = $this->model->getCompromiso();
        $this->view->title = 'La Empresa';
        $this->view->render('admin/header');
        $this->view->render('admin/laempresa/compromiso');
        $this->view->render('admin/footer');
    }

    public function marcas() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Marcas';
        $this->view->render('admin/header');
        $this->view->render('admin/marcas/index');
        $this->view->render('admin/footer');
    }

    public function blog() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Blog';
        $this->view->render('admin/header');
        $this->view->render('admin/blog/index');
        $this->view->render('admin/footer');
    }

    public function contacto() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Contacto';
        $this->view->render('admin/header');
        $this->view->render('admin/contacto/index');
        $this->view->render('admin/footer');
    }

    public function trabaja() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Trabaja con nosotros';
        $this->view->render('admin/header');
        $this->view->render('admin/trabaja/index');
        $this->view->render('admin/footer');
    }

    public function usuario() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Usuario';
        $this->view->render('admin/header');
        $this->view->render('admin/usuario/index');
        $this->view->render('admin/footer');
    }

    public function contacto_seccion() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Secciones';
        $this->view->render('admin/header');
        $this->view->render('admin/contacto/seccion');
        $this->view->render('admin/footer');
    }
    
    public function newsletter() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Newsletter';
        $this->view->render('admin/header');
        $this->view->render('admin/newsletter/index');
        $this->view->render('admin/footer');
    }

    public function cargarDTMarcas() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTMarcas();
        echo $data;
    }

    public function cargarDTCategorias() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTCategorias();
        echo $data;
    }

    public function cargarDTProductos() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTProductos();
        echo $data;
    }

    public function cargarDTSucursales() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTSucursales();
        echo $data;
    }
    
    public function cargarDTNewsletter() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTNewsletter();
        echo $data;
    }

    public function cargarDTUsuarios() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTUsuarios();
        echo $data;
    }

    public function cargarDTSeccion() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTSeccion();
        echo $data;
    }

    public function cargarDTBlog() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTBlog();
        echo $data;
    }

    public function cargarDTContacto() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTContacto();
        echo $data;
    }

    public function cargarDTTrabaja() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTTrabaja();
        echo $data;
    }

    public function categorias() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Categorias';
        $this->view->render('admin/header');
        $this->view->render('admin/categorias/index');
        $this->view->render('admin/footer');
    }

    public function productos() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Productos';
        $this->view->render('admin/header');
        $this->view->render('admin/productos/index');
        $this->view->render('admin/footer');
    }

    public function sucursales() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js", "plugins/ckeditor/ckeditor.js");
        $this->view->title = 'Productos';
        $this->view->render('admin/header');
        $this->view->render('admin/sucursales/index');
        $this->view->render('admin/footer');
    }

    public function modalVerContacto() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalVerContacto($data);
        echo $datos;
    }

    public function modalVerTrabaja() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalVerTrabaja($data);
        echo $datos;
    }

    public function modalEditarSeccion() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarSeccion($data);
        echo $datos;
    }

    public function modalEditarSucursal() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarSucursal($data);
        echo $datos;
    }

    public function modalAgregarSeccion() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarSeccion();
        echo $datos;
    }
    
    public function modalAgregarSucursal() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarSucursal();
        echo $datos;
    }

    public function modalEliminarSeccion() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEliminarSeccion($data);
        echo $datos;
    }
    
    public function modalEliminarSucursal() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEliminarSucursal($data);
        echo $datos;
    }

    public function saveContactoSeccion() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['contacto']['id']),
            'descripcion' => $this->helper->cleanInput($_POST['contacto']['seccion']),
            'email' => $this->helper->cleanInput($_POST['contacto']['email']),
            'estado' => (!empty($_POST['contacto']['estado'])) ? $this->helper->cleanInput($_POST['contacto']['estado']) : 0
        );
        $data = $this->model->saveContactoSeccion($data);
        echo json_encode($data);
    }
    
    public function editSucursal() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['sucursal']['id']),
            'nombre' => $this->helper->cleanInput($_POST['sucursal']['nombre']),
            'direccion' => $this->helper->cleanInput($_POST['sucursal']['direccion']),
            'telefono' => $this->helper->cleanInput($_POST['sucursal']['telefono']),
            'ciudad' => $this->helper->cleanInput($_POST['sucursal']['ciudad']),
            'pais' => $this->helper->cleanInput($_POST['sucursal']['pais']),
            'latitud' => $this->helper->cleanInput($_POST['sucursal']['latitud']),
            'longitud' => $this->helper->cleanInput($_POST['sucursal']['longitud']),
            'horario_atencion' => $this->helper->cleanInput($_POST['sucursal']['horario_atencion']),
            'estado' => (!empty($_POST['sucursal']['estado'])) ? $this->helper->cleanInput($_POST['sucursal']['estado']) : 0
        );
        $data = $this->model->editSucursal($data);
        echo json_encode($data);
    }

    public function addContactoSeccion() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'descripcion' => $this->helper->cleanInput($_POST['contacto']['seccion']),
            'email' => $this->helper->cleanInput($_POST['contacto']['email']),
            'estado' => (!empty($_POST['contacto']['estado'])) ? $this->helper->cleanInput($_POST['contacto']['estado']) : 0
        );
        $data = $this->model->addContactoSeccion($data);
        echo json_encode($data);
    }
    
    public function addSucursal() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'nombre' => $this->helper->cleanInput($_POST['sucursal']['nombre']),
            'direccion' => $this->helper->cleanInput($_POST['sucursal']['direccion']),
            'telefono' => $this->helper->cleanInput($_POST['sucursal']['telefono']),
            'ciudad' => $this->helper->cleanInput($_POST['sucursal']['ciudad']),
            'pais' => $this->helper->cleanInput($_POST['sucursal']['pais']),
            'latitud' => $this->helper->cleanInput($_POST['sucursal']['latitud']),
            'longitud' => $this->helper->cleanInput($_POST['sucursal']['longitud']),
            'horario_atencion' => $this->helper->cleanInput($_POST['sucursal']['horario_atencion']),
            'estado' => (!empty($_POST['sucursal']['estado'])) ? $this->helper->cleanInput($_POST['sucursal']['estado']) : 0
        );
        $data = $this->model->addSucursal($data);
        echo json_encode($data);
    }

    public function deleteContactoSeccion() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $data = $this->model->deleteContactoSeccion($data);
        echo json_encode($data);
    }
    
    public function deleteContactoSucursal() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $data = $this->model->deleteContactoSucursal($data);
        echo json_encode($data);
    }

}
