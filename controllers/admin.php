<?php

class Admin extends Controller {

    function __construct() {
        parent::__construct();
        $actualPage = $this->helper->getUrl();
        Auth::handleLogin($actualPage);
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
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
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
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function laempresa() {
        $this->view->public_css = array("plugins/html5fileupload/html5fileupload.css");
        $this->view->publicHeader_js = array("plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("plugins/ckeditor/ckeditor.js");
        $this->view->getLaEmpresa = $this->model->getLaEmpresa();
        $this->view->title = 'La Empresa';
        $this->view->render('admin/header');
        $this->view->render('admin/laempresa/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function mision() {
        $this->view->public_css = array("plugins/html5fileupload/html5fileupload.css");
        $this->view->publicHeader_js = array("plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("plugins/ckeditor/ckeditor.js");
        $this->view->getMision = $this->model->getMision();
        $this->view->title = 'La Empresa';
        $this->view->render('admin/header');
        $this->view->render('admin/laempresa/mision');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function comprimiso_social() {
        $this->view->public_css = array("plugins/html5fileupload/html5fileupload.css");
        $this->view->publicHeader_js = array("plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("plugins/ckeditor/ckeditor.js");
        $this->view->getCompromiso = $this->model->getCompromiso();
        $this->view->title = 'La Empresa';
        $this->view->render('admin/header');
        $this->view->render('admin/laempresa/compromiso');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function marcas() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css", "plugins/html5fileupload/html5fileupload.css");
        $this->view->publicHeader_js = array("plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Marcas';
        $this->view->render('admin/header');
        $this->view->render('admin/marcas/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function blog() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css", "plugins/html5fileupload/html5fileupload.css", "plugins/jquery.tagsinput/jquery.tagsinput.css");
        $this->view->publicHeader_js = array("plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js", "plugins/ckeditor/ckeditor.js", "plugins/jquery.tagsinput/jquery.tagsinput.js");
        $this->view->title = 'Blog';
        $this->view->render('admin/header');
        $this->view->render('admin/blog/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function contacto() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Contacto';
        $this->view->render('admin/header');
        $this->view->render('admin/contacto/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function trabaja() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Trabaja con nosotros';
        $this->view->render('admin/header');
        $this->view->render('admin/trabaja/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function usuario() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Usuario';
        $this->view->render('admin/header');
        $this->view->render('admin/usuario/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function contacto_seccion() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Secciones';
        $this->view->render('admin/header');
        $this->view->render('admin/contacto/seccion');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function newsletter() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Newsletter';
        $this->view->render('admin/header');
        $this->view->render('admin/newsletter/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function categorias() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css", "plugins/html5fileupload/html5fileupload.css");
        $this->view->publicHeader_js = array("plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Categorias';
        $this->view->render('admin/header');
        $this->view->render('admin/categorias/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function productos() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css", "plugins/html5fileupload/html5fileupload.css");
        $this->view->publicHeader_js = array("plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js", "plugins/ckeditor/ckeditor.js");
        $this->view->title = 'Productos';
        $this->view->render('admin/header');
        $this->view->render('admin/productos/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function sucursales() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js", "plugins/ckeditor/ckeditor.js");
        $this->view->title = 'Productos';
        $this->view->render('admin/header');
        $this->view->render('admin/sucursales/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
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

    public function modalEditarMarca() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarMarca($data);
        echo $datos;
    }

    public function modalEditarSlider() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarSlider($data);
        echo $datos;
    }

    public function modalEditarBlog() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarBlog($data);
        echo $datos;
    }

    public function modalEditarProducto() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarProducto($data);
        echo $datos;
    }

    public function modalEditarCategoria() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarCategoria($data);
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

    public function modalAgregarCategoria() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarCategoria();
        echo $datos;
    }

    public function modalAgregarProducto() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarProducto();
        echo $datos;
    }

    public function modalAgregarSlider() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarSlider();
        echo $datos;
    }

    public function modalAgregarMarca() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarMarca();
        echo $datos;
    }

    public function modalAgregarBlog() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarBlog();
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

    public function modalEliminarMarca() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEliminarMarca($data);
        echo $datos;
    }

    public function modalEliminarSlider() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEliminarSlider($data);
        echo $datos;
    }

    public function modalEliminarBlog() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEliminarBlog($data);
        echo $datos;
    }

    public function modalEliminarProducto() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEliminarProducto($data);
        echo $datos;
    }

    public function modalEliminarCategoria() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEliminarCategoria($data);
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

    public function editMarca() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['marca']['id']),
            'descripcion' => $this->helper->cleanInput($_POST['marca']['descripcion']),
            'estado' => (!empty($_POST['marca']['estado'])) ? $this->helper->cleanInput($_POST['marca']['estado']) : 0
        );
        $data = $this->model->editMarca($data);
        echo json_encode($data);
    }

    public function editSlider() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['slider']['id']),
            'url' => $this->helper->cleanInput($_POST['slider']['url']),
            'texto_enlace' => $this->helper->cleanInput($_POST['slider']['texto_enlace']),
            'orden' => $this->helper->cleanInput($_POST['slider']['orden']),
            'estado' => (!empty($_POST['slider']['estado'])) ? $this->helper->cleanInput($_POST['slider']['estado']) : 0
        );
        $data = $this->model->editSlider($data);
        echo json_encode($data);
    }

    public function editBlog() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['blog']['id']),
            'titulo' => $this->helper->cleanInput($_POST['blog']['titulo']),
            'tags' => $this->helper->cleanInput($_POST['blog']['tags']),
            'contenido' => $this->helper->cleanInput($_POST['blog']['contenido']),
            'estado' => (!empty($_POST['blog']['estado'])) ? $_POST['blog']['estado'] : 0
        );
        $data = $this->model->editBlog($data);
        echo json_encode($data);
    }

    public function editProducto() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['producto']['id']),
            'id_categoria' => $this->helper->cleanInput($_POST['producto']['categoria']),
            'nombre' => $this->helper->cleanInput($_POST['producto']['nombre']),
            'codigo' => $this->helper->cleanInput($_POST['producto']['codigo']),
            'contenido' => $this->helper->cleanInput($_POST['producto']['contenido']),
            'contenido_largo' => $this->helper->cleanInput($_POST['producto']['contenido_largo']),
            'estado' => (!empty($_POST['producto']['estado'])) ? $this->helper->cleanInput($_POST['producto']['estado']) : 0
        );
        $data = $this->model->editProducto($data);
        echo json_encode($data);
    }

    public function editCategoria() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['categoria']['id']),
            'id_marca' => $this->helper->cleanInput($_POST['categoria']['marca']),
            'descripcion' => $this->helper->cleanInput($_POST['categoria']['descripcion']),
            'estado' => (!empty($_POST['categoria']['estado'])) ? $this->helper->cleanInput($_POST['categoria']['estado']) : 0
        );
        $data = $this->model->editCategoria($data);
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

    public function deleteMarca() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $data = $this->model->deleteMarca($data);
        echo json_encode($data);
    }

    public function deleteSlider() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $data = $this->model->deleteSlider($data);
        echo json_encode($data);
    }

    public function deleteBlog() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $data = $this->model->deleteBlog($data);
        echo json_encode($data);
    }

    public function deleteProducto() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $data = $this->model->deleteProducto($data);
        echo json_encode($data);
    }

    public function deleteCategoria() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $data = $this->model->deleteCategoria($data);
        echo json_encode($data);
    }

    public function guardarLaEmpresaContenido() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'contenido' => $_POST['contenido']
        );
        $data = $this->model->guardarLaEmpresaContenido($data);
        echo json_encode($data);
    }

    public function frmAddMarca() {
        if (!empty($_POST)) {
            $data = array(
                'descripcion' => $this->helper->cleanInput($_POST['marca']['descripcion']),
                'estado' => (!empty($_POST['marca']['estado'])) ? $_POST['marca']['estado'] : 0
            );
            $idPost = $this->model->frmAddMarca($data);
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/img/marcas/';
            $serverdir = $dir;
            #IMAGENES
            $filename = '';
            if (!empty($_FILES)) {
                foreach ($_FILES as $inputname => $file) {
                    $newname = $_POST[$inputname . '_name'];
                    $ext = explode('.', $file['name']);
                    $extension = strtolower(end($ext));
                    $fname = $this->helper->cleanUrl($idPost . '_' . $newname . '.' . $extension);
                    //$fname = $this->helper->cleanUrl($newname . '.' . $extension);

                    $contents = file_get_contents($file['tmp_name']);

                    $handle = fopen($serverdir . $fname, 'w');
                    fwrite($handle, $contents);
                    fclose($handle);

                    #############
                    #SE REDIMENSIONA LA IMAGEN
                    #############
                    # ruta de la imagen a redimensionar 
                    $imagen = $serverdir . $fname;
                    # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
                    $imagen_final = $fname;
                    $ancho = 283;
                    $alto = 177;
                    $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
                    #############
                    $filename = $fname;
                }
                $img = array(
                    'id' => $idPost,
                    'imagen' => $filename
                );
                $this->model->frmAddMarcaImg($img);
            }
            Session::set('message', array(
                'type' => 'success',
                'mensaje' => 'Se ha registrado correctamente la operación'
            ));
            header('Location:' . URL . 'admin/marcas/');
        }
    }

    public function frmAddSlider() {
        if (!empty($_POST)) {
            $data = array(
                'texto_enlace' => $this->helper->cleanInput($_POST['slider']['texto_enlace']),
                'url' => $this->helper->cleanInput($_POST['slider']['url']),
                'orden' => $this->helper->cleanInput($_POST['slider']['orden']),
                'estado' => (!empty($_POST['slider']['estado'])) ? $_POST['slider']['estado'] : 0
            );
            $idPost = $this->model->frmAddSlider($data);
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/img/layersliderimgs/';
            $serverdir = $dir;
            #IMAGENES
            $filename = '';
            if (!empty($_FILES)) {
                foreach ($_FILES as $inputname => $file) {
                    $newname = $_POST[$inputname . '_name'];
                    $ext = explode('.', $file['name']);
                    $extension = strtolower(end($ext));
                    $fname = $this->helper->cleanUrl($idPost . '_' . $newname . '.' . $extension);
                    //$fname = $this->helper->cleanUrl($newname . '.' . $extension);

                    $contents = file_get_contents($file['tmp_name']);

                    $handle = fopen($serverdir . $fname, 'w');
                    fwrite($handle, $contents);
                    fclose($handle);

                    #############
                    #SE REDIMENSIONA LA IMAGEN
                    #############
                    # ruta de la imagen a redimensionar 
                    $imagen = $serverdir . $fname;
                    # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
                    $imagen_final = $fname;
                    $ancho = 1367;
                    $alto = 530;
                    $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
                    #############
                    $filename = $fname;
                }
                $img = array(
                    'id' => $idPost,
                    'imagen' => $filename
                );
                $this->model->frmAddSliderImg($img);
            }
            Session::set('message', array(
                'type' => 'success',
                'mensaje' => 'Se ha registrado correctamente la operación'
            ));
            header('Location:' . URL . 'admin/portada/');
        }
    }

    public function frmAddBlog() {
        if (!empty($_POST)) {
            $data = array(
                'titulo' => $this->helper->cleanInput($_POST['blog']['titulo']),
                'tags' => $this->helper->cleanInput($_POST['blog']['tags']),
                'contenido' => $this->helper->cleanInput($_POST['blog']['contenido']),
                'estado' => (!empty($_POST['blog']['estado'])) ? $_POST['blog']['estado'] : 0
            );
            $idPost = $this->model->frmAddBlog($data);
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/img/posts/';
            $serverdir = $dir;
            #IMAGENES
            $filename = '';
            if (!empty($_FILES)) {
                foreach ($_FILES as $inputname => $file) {
                    $newname = $_POST[$inputname . '_name'];
                    $ext = explode('.', $file['name']);
                    $extension = strtolower(end($ext));
                    $fname = $this->helper->cleanUrl($idPost . '_' . $newname . '.' . $extension);
                    //$fname = $this->helper->cleanUrl($newname . '.' . $extension);

                    $contents = file_get_contents($file['tmp_name']);

                    $handle = fopen($serverdir . $fname, 'w');
                    fwrite($handle, $contents);
                    fclose($handle);

                    #############
                    #SE REDIMENSIONA LA IMAGEN
                    #############
                    # ruta de la imagen a redimensionar 
                    $imagen = $serverdir . $fname;
                    # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
                    $imagen_final = $fname;
                    $ancho = 800;
                    $alto = 450;
                    $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
                    #############
                    $filename = $fname;
                }
                $img = array(
                    'id' => $idPost,
                    'imagen' => $filename
                );
                $this->model->frmAddBlogImg($img);
            }
            Session::set('message', array(
                'type' => 'success',
                'mensaje' => 'Se ha registrado correctamente la operación'
            ));
            header('Location:' . URL . 'admin/blog/');
        }
    }

    public function frmAddCategoria() {
        if (!empty($_POST)) {
            $data = array(
                'id_marca' => $this->helper->cleanInput($_POST['categoria']['marca']),
                'descripcion' => $this->helper->cleanInput($_POST['categoria']['descripcion']),
                'estado' => (!empty($_POST['categoria']['estado'])) ? $_POST['categoria']['estado'] : 0
            );
            $id = $this->model->frmAddCategoria($data);
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/img/marcas/categorias/';
            $serverdir = $dir;
            #IMAGENES
            $filename = '';
            if (!empty($_FILES)) {
                foreach ($_FILES as $inputname => $file) {
                    $newname = $_POST[$inputname . '_name'];
                    $ext = explode('.', $file['name']);
                    $extension = strtolower(end($ext));
                    $fname = $this->helper->cleanUrl($id . '_' . $newname . '.' . $extension);
                    //$fname = $this->helper->cleanUrl($newname . '.' . $extension);

                    $contents = file_get_contents($file['tmp_name']);

                    $handle = fopen($serverdir . $fname, 'w');
                    fwrite($handle, $contents);
                    fclose($handle);

                    #############
                    #SE REDIMENSIONA LA IMAGEN
                    #############
                    # ruta de la imagen a redimensionar 
                    $imagen = $serverdir . $fname;
                    # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
                    $imagen_final = $fname;
                    $ancho = 250;
                    $alto = 170;
                    $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
                    #############
                    $filename = $fname;
                }
                $img = array(
                    'id' => $id,
                    'imagen' => $filename
                );
                $this->model->frmAddCategoriaImg($img);
            }
            Session::set('message', array(
                'type' => 'success',
                'mensaje' => 'Se ha registrado correctamente la operación'
            ));
            header('Location:' . URL . 'admin/categorias/');
        }
    }

    public function frmAddProducto() {
        if (!empty($_POST)) {
            $data = array(
                'id_categoria' => $this->helper->cleanInput($_POST['producto']['categoria']),
                'nombre' => $this->helper->cleanInput($_POST['producto']['nombre']),
                'codigo' => $this->helper->cleanInput($_POST['producto']['codigo']),
                'contenido' => $this->helper->cleanInput($_POST['producto']['contenido']),
                'contenido_largo' => $this->helper->cleanInput($_POST['producto']['contenido_largo']),
                'estado' => (!empty($_POST['producto']['estado'])) ? $_POST['producto']['estado'] : 0
            );
            $id = $this->model->frmAddProducto($data);
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/img/marcas/productos/';
            $serverdir = $dir;
            #IMAGENES
            $filename = array();
            if (!empty($_FILES)) {
                #IMAGENES
                $cantImagenes = count($_FILES['file_archivo']['name']) - 1;
                for ($i = 0; $i <= $cantImagenes; $i++) {
                    $newname = $id . '_' . $_FILES['file_archivo']['name'][$i];
                    $fname = $this->helper->cleanUrl($newname);

                    $contents = file_get_contents($_FILES['file_archivo']['tmp_name'][$i]);

                    $handle = fopen($serverdir . $fname, 'w');
                    fwrite($handle, $contents);
                    fclose($handle);
                    #############
                    #SE REDIMENSIONA LA IMAGEN
                    #############
                    # ruta de la imagen a redimensionar 
                    $imagen = $serverdir . $fname;
                    # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
                    $imagen_final = $fname;
                    $ancho = 463;
                    $alto = 350;
                    $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
                    #############
                    array_push($filename, $fname);
                }
                $imagenes = array(
                    'id' => $id,
                    'imagenes' => $filename
                );
                $this->model->insertProductoImagen($imagenes);
            }
            Session::set('message', array(
                'type' => 'success',
                'mensaje' => 'Se ha registrado correctamente la operación'
            ));
            header('Location:' . URL . 'admin/productos/');
        }
    }

    public function uploadImgMarca() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $this->model->unlinkActualMarcaImg($idPost);
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/img/marcas/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename = $filename . '.' . $extension;
            //$filename				= $file.'.'.substr(sha1(time()),0,6).'.'.$extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = $serverdir . $filename;
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $filename;
            $ancho = 283;
            $alto = 177;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'img' => $filename
            );
            $response = $this->model->uploadImgMarca($data);
            echo json_encode($response);
            //echo json_encode(array('result'=>true));
        } else {
            $filename = basename($_SERVER['QUERY_STRING']);
            $file_url = '/public/archivos/' . $filename;
            header('Content-Type: 				application/octet-stream');
            header("Content-Transfer-Encoding: 	Binary");
            header("Content-disposition: 		attachment; filename=\"" . basename($file_url) . "\"");
            readfile($file_url);
            exit();
        }
    }

    public function uploadSliderImagen() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $this->model->unlinkActualSliderImg($idPost);
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/img/layersliderimgs/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename = $filename . '.' . $extension;
            //$filename				= $file.'.'.substr(sha1(time()),0,6).'.'.$extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = $serverdir . $filename;
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $filename;
            $ancho = 1367;
            $alto = 530;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'img' => $filename
            );
            $response = $this->model->uploadImgSlider($data);
            echo json_encode($response);
            //echo json_encode(array('result'=>true));
        }
    }

    public function uploadImgBlog() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $this->model->unlinkActualBlogImg($idPost);
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/img/posts/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename = $filename . '.' . $extension;
            //$filename				= $file.'.'.substr(sha1(time()),0,6).'.'.$extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = $serverdir . $filename;
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $filename;
            $ancho = 800;
            $alto = 450;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'img' => $filename
            );
            $response = $this->model->uploadImgBlog($data);
            echo json_encode($response);
            //echo json_encode(array('result'=>true));
        } else {
            $filename = basename($_SERVER['QUERY_STRING']);
            $file_url = '/public/archivos/' . $filename;
            header('Content-Type: 				application/octet-stream');
            header("Content-Transfer-Encoding: 	Binary");
            header("Content-disposition: 		attachment; filename=\"" . basename($file_url) . "\"");
            readfile($file_url);
            exit();
        }
    }

    public function uploadImgCategoria() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $this->model->unlinkActualCategoriaImg($idPost);
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/img/marcas/categorias/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename = $filename . '.' . $extension;
            //$filename				= $file.'.'.substr(sha1(time()),0,6).'.'.$extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = $serverdir . $filename;
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $filename;
            $ancho = 250;
            $alto = 170;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'img' => $filename
            );
            $response = $this->model->uploadImgCategoria($data);
            echo json_encode($response);
            //echo json_encode(array('result'=>true));
        } else {
            $filename = basename($_SERVER['QUERY_STRING']);
            $file_url = '/public/archivos/' . $filename;
            header('Content-Type: 				application/octet-stream');
            header("Content-Transfer-Encoding: 	Binary");
            header("Content-disposition: 		attachment; filename=\"" . basename($file_url) . "\"");
            readfile($file_url);
            exit();
        }
    }

    public function selectCategoriaProducto() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->selectCategoriaProducto($data);
        echo json_encode($datos);
    }

    public function uploadProductoImagen() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];

            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/img/marcas/productos/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename = $filename . '.' . $extension;
            //$filename				= $file.'.'.substr(sha1(time()),0,6).'.'.$extension;

            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = $serverdir . $filename;
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $filename;
            $ancho = 463;
            $alto = 350;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'archivo' => $filename
            );
            $response = $this->model->uploadProductoImagen($data);
            echo json_encode($response);
            //echo json_encode(array('result'=>true));
        } else {
            $filename = basename($_SERVER['QUERY_STRING']);
            $file_url = '/public/archivos/' . $filename;
            header('Content-Type: 				application/octet-stream');
            header("Content-Transfer-Encoding: 	Binary");
            header("Content-disposition: 		attachment; filename=\"" . basename($file_url) . "\"");
            readfile($file_url);
            exit();
        }
    }

}
