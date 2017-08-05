<?php

class Admin_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    /**
     * Funcion para obtener la cantidad de mensajes sin leer
     * @return int
     */
    public function mensajesNuevos() {
        $sql = $this->db->select("SELECT count(*) as cantidad FROM contacto where estado = 0;");
        return $sql[0]['cantidad'];
    }

    /**
     * Funcion para obtener la cantidad de Curriculums nuevos
     * @return int
     */
    public function cvNuevos() {
        $sql = $this->db->select("select count(*)as cantidad from trabaja where estado = 0");
        return $sql[0]['cantidad'];
    }

    /**
     * Funcion que muestra la cantidad de entradas activas en el blog
     * @return int
     */
    public function blogActivos() {
        $sql = $this->db->select("select count(*) as cantidad from blog where estado = 1");
        return $sql[0]['cantidad'];
    }

    /**
     * Funcion que muestra la cantidad de productos activos
     * @return int
     */
    public function productosActivos() {
        $sql = $this->db->select("select count(*) as cantidad from producto where estado = 1");
        return $sql[0]['cantidad'];
    }

    public function getLaEmpresa() {
        $sql = $this->db->select("select * from la_empresa where id = 1");
        return $sql[0];
    }

    public function getMision() {
        $sql = $this->db->select("select * from mision where id = 1");
        return $sql[0];
    }

    public function getCompromiso() {
        $sql = $this->db->select("select * from compromiso_social where id = 1");
        return $sql[0];
    }

    public function cargarDTMarcas() {
        $datos = array();
        $sql = $this->db->select('select * from marca');
        foreach ($sql as $item) {
            $id = $item['id'];
            $img = '<img src="' . IMG . 'marcas/' . $item['img'] . '" class="img-responsive" style="width: 150px;">';
            $btn = '<a class="btn btn-app pointer btnEditarMarca" data-id="' . $item['id'] . '"><i class="fa fa-edit"></i> Editar</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            array_push($datos, array(
                'descripcion' => utf8_encode($item['descripcion']),
                'img' => $img,
                'estado' => $estado,
                'accion' => utf8_encode($item['id'])
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function cargarDTCategorias() {
        $datos = array();
        $sql = $this->db->select('select c.*, m.descripcion as marca from categoria c
                                LEFT JOIN marca m on m.id = c.id_marca');
        foreach ($sql as $item) {
            $id = $item['id'];
            $img = '<img src="' . IMG . 'marcas/categorias/' . $item['imagen'] . '" class="img-responsive" style="width: 150px;">';
            $btn = '<a class="btn btn-app pointer btnEditarCategoria" data-id="' . $item['id'] . '"><i class="fa fa-edit"></i> Editar</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            array_push($datos, array(
                'marca' => utf8_encode($item['marca']),
                'categoria' => utf8_encode($item['descripcion']),
                'imagen' => $img,
                'estado' => $estado,
                'accion' => $btn
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function cargarDTSucursales() {
        $datos = array();
        $sql = $this->db->select('select * from sucursal');
        foreach ($sql as $item) {
            $id = $item['id'];
            $btn = '<a class="btn btn-app pointer btnEditarSucursal" data-id="' . $item['id'] . '"><i class="fa fa-edit"></i> Editar</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            array_push($datos, array(
                'sucursal' => utf8_encode($item['nombre']),
                'telefono' => utf8_encode($item['telefono']),
                'ciudad' => utf8_encode($item['ciudad']),
                'estado' => $estado,
                'accion' => $btn
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function cargarDTBlog() {
        $datos = array();
        $sql = $this->db->select('select * from blog order by id desc');
        foreach ($sql as $item) {
            $id = $item['id'];
            $btn = '<a class="btn btn-app pointer btnEditarBlog" data-id="' . $item['id'] . '"><i class="fa fa-edit"></i> Editar</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" title="Leído" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" title="Aún no se ha leído." data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            array_push($datos, array(
                'titulo' => utf8_encode($item['titulo']),
                'tags' => utf8_encode($item['tags']),
                'fecha' => date('d-m-Y', strtotime($item['fecha'])),
                'estado' => $estado,
                'accion' => $btn
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function cargarDTContacto() {
        $datos = array();
        $sql = $this->db->select('SELECT c.id,
                                        c.fecha,
                                        c.nombre,
                                        c.email,
                                        c.estado,
                                        cf.descripcion as seccion
                                FROM contacto c
                                LEFT JOIN contacto_formulario cf on cf.id = c.id_contacto_formulario');
        foreach ($sql as $item) {
            $id = $item['id'];
            $btn = '<a class="btn btn-app pointer btnDatosContacto" data-id="' . $item['id'] . '"><i class="fa fa-edit"></i> Ver Datos</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer text-green"><i class="fa fa-stop-circle-o" aria-hidden="true"></i></a>';
            } else {
                $estado = '<a class="pointer text-red"><i class="fa fa-stop-circle-o" aria-hidden="true"></i></a>';
            }
            array_push($datos, array(
                'visto' => $estado,
                'fecha' => date('d-m-Y', strtotime($item['fecha'])),
                'nombre' => utf8_encode($item['nombre']),
                'email' => utf8_encode($item['email']),
                'seccion' => utf8_encode($item['seccion']),
                'accion' => $btn
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function cargarDTProductos() {
        $datos = array();
        $sql = $this->db->select('SELECT p.id,
                                        p.nombre,
                                        p.estado,
                                        m.descripcion as marca,
                                        c.descripcion as categoria
                                FROM producto p
                                LEFT JOIN categoria c on c.id = p.id_categoria
                                LEFT JOIN marca m on m.id = c.id_marca');
        foreach ($sql as $item) {
            $id = $item['id'];
            $btn = '<a class="btn btn-app pointer btnEditarProducto" data-id="' . $item['id'] . '"><i class="fa fa-edit"></i> Editar</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            array_push($datos, array(
                'marca' => utf8_encode($item['marca']),
                'categoria' => utf8_encode($item['categoria']),
                'producto' => utf8_encode($item['nombre']),
                'estado' => $estado,
                'accion' => $btn
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function getSlider() {
        $sql = $this->db->select("select * from slider order by orden ASC");
        return $sql;
    }

}
