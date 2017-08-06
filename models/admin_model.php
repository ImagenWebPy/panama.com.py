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
            $btn = '<a class="btn btn-app pointer btnEditarMarca btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-edit"></i> Editar</a>';
            $btnDel = '<a class="btn btn-app pointer btnEliminarMarca btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            array_push($datos, array(
                'descripcion' => utf8_encode($item['descripcion']),
                'img' => $img,
                'estado' => $estado,
                'accion' => $btn . ' | ' . $btnDel
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
            $btn = '<a class="btn btn-app pointer btnEditarCategoria btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-edit"></i> Editar</a>';
            $btnDel = '<a class="btn btn-app pointer btnEliminarCategoria btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a>';
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
                'accion' => $btn . ' | ' . $btnDel
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
            $btn = '<a class="btn btn-app pointer btnEditarSucursal btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-edit"></i> Editar</a>';
            $btnDel = '<a class="btn btn-app pointer btnEliminarSucursal btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a>';
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
                'accion' => $btn . ' | ' . $btnDel
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function cargarDTUsuarios() {
        $datos = array();
        $sql = $this->db->select('select au.id,
                                        au.nombre,
                                        au.email,
                                        ap.descripcion as perfil,
                                        au.estado
                                from admin_usuario au
                                LEFT JOIN admin_usuario_permiso aup on aup.id_usuario = au.id
                                LEFT JOIN admin_permiso ap on ap.id = aup.id_permiso');
        foreach ($sql as $item) {
            $id = $item['id'];
            $btn = '<a class="btn btn-app pointer btnEditarUsuario btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-edit"></i> Editar</a>';
            $btnDel = '<a class="btn btn-app pointer btnEliminarUsuario btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            array_push($datos, array(
                'nombre' => utf8_encode($item['nombre']),
                'email' => utf8_encode($item['email']),
                'perfil' => utf8_encode($item['perfil']),
                'estado' => $estado,
                'accion' => $btn . ' | ' . $btnDel
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function cargarDTSeccion() {
        $datos = array();
        $sql = $this->db->select('select * from contacto_formulario');
        foreach ($sql as $item) {
            $id = $item['id'];
            $btn = '<a class="btn btn-app pointer btnEditarSeccion btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-edit"></i> Editar</a>';
            $btnDel = '<a class="btn btn-app pointer btnEliminarSeccion btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            array_push($datos, array(
                'DT_RowId' => 'seccion_' . $id,
                'seccion' => utf8_encode($item['descripcion']),
                'email' => utf8_encode($item['email']),
                'estado' => $estado,
                'accion' => $btn . ' | ' . $btnDel
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
            $btn = '<a class="btn btn-app pointer btnEditarBlog btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-edit"></i> Editar</a>';
            $btnDel = '<a class="btn btn-app pointer btnEliminarBlog btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a>';
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
                'accion' => $btn . ' | ' . $btnDel
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
            $btn = '<a class="btn btn-app pointer btnDatosContacto btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-eye" aria-hidden="true"></i> Ver Datos</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer text-green"><i class="fa fa-stop-circle-o" aria-hidden="true"></i></a>';
            } else {
                $estado = '<a class="pointer text-red"><i class="fa fa-stop-circle-o" aria-hidden="true"></i></a>';
            }
            array_push($datos, array(
                'DT_RowId' => 'contacto_' . $id,
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

    public function cargarDTTrabaja() {
        $datos = array();
        $sql = $this->db->select('SELECT * FROM trabaja');

        foreach ($sql as $item) {
            $test = strstr($item['archivo'], '.', FALSE);
            switch (strtolower($test)) {
                case '.jpg':
                case '.jpeg':
                    $fa_icon = '<i class="fa fa-file-image-o" aria-hidden="true"></i>';
                    break;
                case '.pdf':
                    $fa_icon = '<i class="fa fa-file-pdf-o" aria-hidden="true"></i>';
                    break;
                case '.docx':
                case '.doc':
                    $fa_icon = '<i class="fa fa-file-word-o" aria-hidden="true"></i>';
                    break;
                case '.xlsx':
                case '.xls':
                    $fa_icon = '<i class="fa fa-file-excel-o" aria-hidden="true"></i>';
                    break;
            }
            $id = $item['id'];
            $btn = '<a class="btn btn-app pointer btnDatosTrabaja btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-eye" aria-hidden="true"></i> Ver Datos</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer text-green"><i class="fa fa-stop-circle-o" aria-hidden="true"></i></a>';
            } else {
                $estado = '<a class="pointer text-red"><i class="fa fa-stop-circle-o" aria-hidden="true"></i></a>';
            }
            array_push($datos, array(
                'DT_RowId' => 'cv_' . $id,
                'visto' => $estado,
                'fecha' => date('d-m-Y', strtotime($item['fecha'])),
                'nombre' => utf8_encode($item['nombre']),
                'email' => utf8_encode($item['email']),
                'archivo' => $fa_icon,
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
            $btn = '<a class="btn btn-app pointer btnEditarProducto btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-edit"></i> Editar</a>';
            $btnDel = '<a class="btn btn-app pointer btnEliminarProducto btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a>';
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
                'accion' => $btn . ' | ' . $btnDel
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function getSlider() {
        $sql = $this->db->select("select * from slider order by orden ASC");
        return $sql;
    }

    public function modalVerContacto($data) {
        $id = $data['id'];
        $cambiarEstado = FALSE;
        $sql = $this->db->select("SELECT c.id,
                                        c.fecha,
                                        c.nombre,
                                        c.email,
                                        c.estado,
                                        c.mensaje,
                                        c.telefono,
                                        c.estado,
                                        cf.descripcion as seccion
                                FROM contacto c
                                LEFT JOIN contacto_formulario cf on cf.id = c.id_contacto_formulario 
                                where c.id = $id");
        if ($sql[0]['estado'] == 0) {
            #cambiamos el estado del mensaje
            $update = array(
                'estado' => 1
            );
            $this->db->update('contacto', $update, "id = $id");
            $cambiarEstado = TRUE;
        }
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del mensaje</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                    <dt>Enviado el:</dt>
                    <dd>' . date('d-m-Y', strtotime($sql[0]['fecha'])) . '</dd>
                    <dt>Hora:</dt>
                    <dd>' . date('H:i:s', strtotime($sql[0]['fecha'])) . '</dd>
                    <dt>Nombre:</dt>
                    <dd>' . utf8_encode($sql[0]['nombre']) . '</dd>
                    <dt>Email: </dt>
                    <dd>' . utf8_encode($sql[0]['email']) . '</dd>
                    <dt>Teléfono: </dt>
                    <dd>' . utf8_encode($sql[0]['telefono']) . '</dd>
                    <dt>Quiere contactar con: </dt>
                    <dd>' . utf8_encode($sql[0]['seccion']) . '</dd>
                    <dt>Mensaje: </dt>
                    <dd>' . utf8_encode($sql[0]['mensaje']) . '</dd>
                </dl>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Mensaje de ' . utf8_encode($sql[0]['nombre']),
            'contenido' => $form,
            'id' => $id,
            'cambiar_estado' => $cambiarEstado
        );
        return json_encode($datos);
    }

    public function modalVerTrabaja($data) {
        $id = $data['id'];
        $cambiarEstado = FALSE;
        $sql = $this->db->select("SELECT * from trabaja where id = $id");
        if ($sql[0]['estado'] == 0) {
            #cambiamos el estado del mensaje
            $update = array(
                'estado' => 1
            );
            $this->db->update('trabaja', $update, "id = $id");
            $cambiarEstado = TRUE;
        }
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del C.V. enviado</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                    <dt>Enviado el:</dt>
                    <dd>' . date('d-m-Y', strtotime($sql[0]['fecha'])) . '</dd>
                    <dt>Hora:</dt>
                    <dd>' . date('H:i:s', strtotime($sql[0]['fecha'])) . '</dd>
                    <dt>Nombre:</dt>
                    <dd>' . utf8_encode($sql[0]['nombre']) . '</dd>
                    <dt>Email: </dt>
                    <dd>' . utf8_encode($sql[0]['email']) . '</dd>
                    <dt>Teléfono: </dt>
                    <dd>' . utf8_encode($sql[0]['telefono']) . '</dd>
                    <dt>Mensaje: </dt>
                    <dd>' . utf8_encode($sql[0]['mensaje']) . '</dd>
                    <dt>Archivo: </dt>
                    <dd><a href="' . URL . 'public/archivos/cv/' . utf8_encode($sql[0]['archivo']) . '" title="Descargar" target="_blank">' . utf8_encode($sql[0]['archivo']) . '</a></dd>
                </dl>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'C.V. de ' . utf8_encode($sql[0]['nombre']),
            'contenido' => $form,
            'id' => $id,
            'cambiar_estado' => $cambiarEstado
        );
        return json_encode($datos);
    }

    public function modalEditarSeccion($data) {
        $id = $data['id'];
        $sql = $this->db->select("SELECT * FROM contacto_formulario where id = $id");
        $checked = ($sql[0]['estado'] == 1) ? 'checked' : '';
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos de la Sección</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" id="frmContactoSeccion" method="POST">
                    <input type="hidden" name="contacto[id]" value="' . $id . '">
                    <div class="form-group">
                        <label>Sección</label>
                        <input type="text" name="contacto[seccion]" class="form-control" placeholder="Ingrese la sección" value="' . utf8_encode($sql[0]['descripcion']) . '">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="contacto[email]" class="form-control" placeholder="Ingrese el email" value="' . utf8_encode($sql[0]['email']) . '">
                    </div>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="contacto[estado]" value="1" ' . $checked . '>
                                Estado
                            </label>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Editar ' . utf8_encode($sql[0]['descripcion']),
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function modalAgregarSeccion() {
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos de la Sección</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" id="frmAgregarSeccion" method="POST">
                    <div class="form-group">
                        <label>Sección</label>
                        <input type="text" name="contacto[seccion]" class="form-control" placeholder="Ingrese la sección" value="">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="contacto[email]" class="form-control" placeholder="Ingrese el email" value="">
                    </div>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="contacto[estado]" value="1" checked>
                                Estado
                            </label>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Agregar Sección</button>
                    </div>
                </form>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Agregar Sección',
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function modalEliminarSeccion($data) {
        $id = $data['id'];
        $sql = $this->db->select("SELECT * FROM contacto_formulario where id = $id");
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del mensaje</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" id="frmEliminarSeccion" method="POST">
                    <input type="hidden" name="contacto[id]" value="' . $id . '">
                    <div class="alert alert-danger alert-dismissible">
                        <h4><i class="icon fa fa-ban"></i> ¿Está seguro de que desea eliminar la sección "<strong>' . utf8_encode($sql[0]['descripcion']) . '</strong>"?</h4>
                    </div>
                    <div class="box-footer">
                        <button type="submit" id="btnEliminarSeccion" class="btn btn-danger" data-id="' . $id . '">Eliminar</button>
                    </div>
                </form>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Eliminar ' . utf8_encode($sql[0]['descripcion']),
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function saveContactoSeccion($data) {
        $id = $data['id'];
        $estado = 1;
        if (empty($data['estado'])) {
            $estado = 0;
        }
        $update = array(
            "descripcion" => utf8_decode($data['descripcion']),
            "email" => utf8_decode($data['email']),
            "estado" => $estado
        );
        $this->db->update('contacto_formulario', $update, "id = $id");
        #obtenemos la fila
        $sql = $this->db->select("SELECT * FROM contacto_formulario where id = $id");
        if ($sql[0]['estado'] == 1) {
            $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
        } else {
            $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
        }
        $row = '<td class="sorting_1">' . utf8_encode($sql[0]['descripcion']) . '</td>'
                . '<td>' . utf8_encode($sql[0]['email']) . '</td>'
                . '<td>' . $estado . '</td>'
                . '<td><a class="btn btn-app pointer btnEditarSeccion btnSmall" data-id="' . $id . '"><i class="fa fa-edit"></i> Editar</a>'
                . ' | <a class="btn btn-app pointer btnEliminarSeccion btnSmall" data-id="' . $id . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a></td>';
        $datos = array(
            'type' => 'success',
            'id' => $id,
            'row' => $row
        );
        return $datos;
    }

    public function addContactoSeccion($data) {
        $estado = 1;
        if (empty($data['estado'])) {
            $estado = 0;
        }
        $this->db->insert('contacto_formulario', array(
            'descripcion' => utf8_decode($data['descripcion']),
            'email' => utf8_decode($data['email']),
            'estado' => $estado
        ));
        $id = $this->db->lastInsertId();
        #obtenemos la fila
        $sql = $this->db->select("SELECT * FROM contacto_formulario where id = $id");
        if ($sql[0]['estado'] == 1) {
            $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
        } else {
            $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
        }
        $row = '<tr id="seccion_' . $id . '">'
                . '<td class="sorting_1">' . utf8_encode($sql[0]['descripcion']) . '</td>'
                . '<td>' . utf8_encode($sql[0]['email']) . '</td>'
                . '<td>' . $estado . '</td>'
                . '<td><a class="btn btn-app pointer btnEditarSeccion btnSmall" data-id="' . $id . '"><i class="fa fa-edit"></i> Editar</a>'
                . ' | <a class="btn btn-app pointer btnEliminarSeccion btnSmall" data-id="' . $id . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a></td>'
                . '</tr>';
        $datos = array(
            'type' => 'success',
            'row' => $row
        );
        return $datos;
    }

    public function deleteContactoSeccion($data) {
        $id = $data['id'];
        try {
            $sth = $this->db->prepare("delete from contacto_formulario where id = :id");
            $sth->execute(array(
                ':id' => $id
            ));
            $datos = array(
                'type' => 'success',
                'id' => $id,
                'contenido' => ''
            );
        } catch (Exception $ex) {
            $datos = array(
                'type' => 'success',
                'id' => $id,
                'contenido' => 'Lo sentimos ha ocurrido un error, no se pudo eliminar el registro'
            );
        }

        return $datos;
    }

}
