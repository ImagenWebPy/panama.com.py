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
                'DT_RowId' => 'marca_' . $id,
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
                'DT_RowId' => 'categoria_' . $id,
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
                'DT_RowId' => 'sucursal_' . $id,
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

    public function cargarDTNewsletter() {
        $datos = array();
        $sql = $this->db->select('select * from newsletter');
        foreach ($sql as $item) {
            $id = $item['id'];
            $btnDel = '<a class="btn btn-app pointer btnEliminarSucursal btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            array_push($datos, array(
                'DT_RowId' => 'sucursal_' . $id,
                'nombre' => utf8_encode($item['nombre']),
                'email' => utf8_encode($item['email']),
                'fecha' => date('d-m-Y', $item['fecha']),
                'accion' => $btnDel
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
                'DT_RowId' => 'usuario_' . $id,
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
                'DT_RowId' => 'blog_' . $id,
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
                'DT_RowId' => 'producto_' . $id,
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

    public function modalEditarSucursal($data) {
        $id = $data['id'];
        $sql = $this->db->select("SELECT * FROM sucursal where id = $id");
        $checked = ($sql[0]['estado'] == 1) ? 'checked' : '';
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos de la Sección</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" id="frmEditarSucursal" method="POST">
                    <input type="hidden" name="sucursal[id]" value="' . $id . '">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="sucursal[nombre]" class="form-control" placeholder="Ingrese el Nombre de la Sucursal" value="' . utf8_encode($sql[0]['nombre']) . '">
                    </div>
                    <div class="form-group">
                        <label>Dirección</label>
                        <input type="text" name="sucursal[direccion]" class="form-control" placeholder="Ingrese la dirección" value="' . utf8_encode($sql[0]['direccion']) . '">
                    </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" name="sucursal[telefono]" class="form-control" placeholder="Ingrese el Teléfono" value="' . utf8_encode($sql[0]['telefono']) . '">
                    </div>
                    <div class="form-group">
                        <label>Ciudad</label>
                        <input type="text" name="sucursal[ciudad]" class="form-control" placeholder="Ingrese la Cuidad" value="' . utf8_encode($sql[0]['ciudad']) . '">
                    </div>
                    <div class="form-group">
                        <label>País</label>
                        <input type="text" name="sucursal[pais]" class="form-control" placeholder="Ingrese el País" value="' . utf8_encode($sql[0]['pais']) . '">
                    </div>
                    <div class="form-group">
                        <label>Latitud</label>
                        <input type="text" name="sucursal[latitud]" class="form-control" placeholder="Ingrese la Latitud" value="' . utf8_encode($sql[0]['latitud']) . '">
                    </div>
                    <div class="form-group">
                        <label>Longitud</label>
                        <input type="text" name="sucursal[longitud]" class="form-control" placeholder="Ingrese la Longitud" value="' . utf8_encode($sql[0]['longitud']) . '">
                    </div>
                    <div class="form-group">
                        <label>Horario de Atención</label>
                        <textarea id="editor1" name="sucursal[horario_atencion]" rows="10" cols="80">
                                ' . utf8_encode($sql[0]['horario_atencion']) . '
                            </textarea>
                    </div>
                    <script>
                        $(function () {
                            // Replace the <textarea id="editor1"> with a CKEditor
                            // instance, using default configuration.
                            CKEDITOR.replace("sucursal[horario_atencion]");
                        });
                    </script>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="sucursal[estado]" value="1" ' . $checked . '>
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
            'titulo' => 'Editar ' . utf8_encode($sql[0]['nombre']),
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

    public function modalAgregarMarca() {
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Marca</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="' . URL . 'admin/frmAddMarca" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="marca[descripcion]" class="form-control" placeholder="Ingrese la marca" value="">
                    </div>
                    <div class="form-group">
                        <label>Imagen</label>
                        <div class="html5fileupload fileMarca" data-form="true" data-url="html5fileupload.php" data-valid-extensions="JPG,JPEG,jpg,png,jpeg" style="width: 100%;">
                            <input type="file" name="file_archivo" />
                        </div>
                    </div>
                    <script>
                        $(".html5fileupload.fileMarca").html5fileupload();
                    </script>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="marca[estado]" value="1" checked>
                                Estado
                            </label>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Agregar Marca</button>
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

    public function modalAgregarCategoria() {
        $marcas = $this->helper->getListadoMarcas();
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Categoría</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="' . URL . 'admin/frmAddCategoria" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nombre Categoría</label>
                        <input type="text" name="categoria[descripcion]" class="form-control" placeholder="Ingrese la categoría" value="" required>
                    </div>
                    <div class="form-group">
                        <label>Marca</label>
                        <select class="form-control" name="categoria[marca]" required>
                            <option value="">Seleccione una Marca</option>';
        foreach ($marcas as $item) {
            $form .= '<option value="' . $item['id'] . '">' . utf8_encode($item['descripcion']) . '</option>';
        }
        $form .= '      </select>
                    </div>
                    <div class="form-group">
                        <label>Imagen</label>
                        <div class="html5fileupload fileMarca" data-form="true" data-url="html5fileupload.php" data-valid-extensions="JPG,JPEG,jpg,png,jpeg" style="width: 100%;">
                            <input type="file" name="file_archivo" />
                        </div>
                    </div>
                    <script>
                        $(".html5fileupload.fileMarca").html5fileupload();
                    </script>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="categoria[estado]" value="1" checked>
                                Estado
                            </label>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Agregar Categoría</button>
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

    public function modalAgregarProducto() {
        $marcas = $this->helper->getListadoMarcas();
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Producto</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="' . URL . 'admin/frmAddProducto" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Marca</label>
                                <select class="form-control selectMarcaProducto" name="producto[marca]" required>
                                    <option value="">Seleccione una Marca</option>';
        foreach ($marcas as $item) {
            $form .= '              <option value="' . $item['id'] . '">' . utf8_encode($item['descripcion']) . '</option>';
        }
        $form .= '          </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Categoría</label>
                                <select class="form-control selectCategoriaProducto" name="producto[categoria]" required>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre Producto</label>
                                <input type="text" name="producto[nombre]" class="form-control" placeholder="Ingrese la categoría" value="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Codigo</label>
                                <input type="text" name="producto[codigo]" class="form-control" placeholder="Ingrese la categoría" value="" required>
                            </div>
                        </div>
                    </div>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="producto[estado]" value="1" checked>
                                Estado
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Descripcion corta</label>
                        <textarea id="editor1" name="producto[contenido]" rows="10" cols="80">
                            
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Información del Producto</label>
                        <textarea id="editor2" name="producto[contenido_largo]" rows="10" cols="80">
                           
                        </textarea>
                    </div>
                    <script>
                        $(function () {
                            // Replace the <textarea id="editor1"> with a CKEditor
                            // instance, using default configuration.
                            CKEDITOR.replace("producto[contenido]");
                            CKEDITOR.replace("producto[contenido_largo]");
                        });
                    </script>
                    <div class="form-group">
                        <label>Imagenes</label><small>(Puede agregar varias imagenes)</small>
                        <div class="html5fileupload fileProducto" data-form="true" data-multiple="true" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,PNG" style="width: 100%;">
                            <input type="file" name="file_archivo[]" />
                        </div>
                    </div>
                    <script>
                        $(".html5fileupload.fileProducto").html5fileupload();
                    </script>
                    
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Agregar Producto</button>
                    </div>
                </form>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Agregar Producto',
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function modalEditarProducto($data) {
        $id = $data['id'];
        $producto = $this->db->select("select p.*, c.id_marca from producto p left join categoria c on c.id = p.id_categoria where p.id = $id");
        $imagenes = $this->db->select("SELECT * FROM `producto_imagen` WHERE id_producto = $id;");
        $checked = ($producto[0]['estado'] == 1) ? 'checked' : '';
        $id_marca = $producto[0]['id_marca'];
        $categorias = $this->db->select("select * from categoria where id_marca = $id_marca");
        $marcas = $this->helper->getListadoMarcas();
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Producto</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="' . URL . 'admin/frmEditarProducto" enctype="multipart/form-data" id="frmEditarProducto">
                    <input type="hidden" value="' . $id . '" name="producto[id]">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Marca</label>
                                <select class="form-control selectMarcaProducto" name="producto[marca]" required>
                                    <option value="">Seleccione una Marca</option>';
        foreach ($marcas as $item) {
            $selected = ($item['id'] == $producto[0]['id_marca']) ? 'selected' : '';
            $form .= '              <option value="' . $item['id'] . '" ' . $selected . '>' . utf8_encode($item['descripcion']) . '</option>';
        }
        $form .= '          </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Categoría</label>
                                <select class="form-control selectCategoriaProducto" name="producto[categoria]" required>';
        foreach ($categorias as $item) {
            $selected = ($item['id'] == $producto[0]['id_categoria']) ? 'selected' : '';
            $form .= '              <option value="' . $item['id'] . '" ' . $selected . '>' . utf8_encode($item['descripcion']) . '</option>';
        }
        $form .= '          </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre Producto</label>
                                <input type="text" name="producto[nombre]" class="form-control" placeholder="Ingrese la categoría" value="' . utf8_encode($producto[0]['nombre']) . '" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Codigo</label>
                                <input type="text" name="producto[codigo]" class="form-control" placeholder="Ingrese la categoría" value="' . utf8_encode($producto[0]['codigo']) . '" required>
                            </div>
                        </div>
                    </div>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="producto[estado]" value="1" ' . $checked . '>
                                Estado
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Descripcion corta</label>
                        <textarea id="editor1" name="producto[contenido]" rows="10" cols="80">
                            ' . utf8_encode($producto[0]['contenido']) . '
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Información del Producto</label>
                        <textarea id="editor2" name="producto[contenido_largo]" rows="10" cols="80">
                           ' . utf8_encode($producto[0]['contenido_largo']) . '
                        </textarea>
                    </div>
                    <script>
                        $(function () {
                            // Replace the <textarea id="editor1"> with a CKEditor
                            // instance, using default configuration.
                            CKEDITOR.replace("producto[contenido]");
                            CKEDITOR.replace("producto[contenido_largo]");
                        });
                    </script>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Editar Producto</button>
                    </div>
                </form>
                <div class="row">
                    <h3>Imagenes</h3>
                    <div class="form-group">
                        <label>Agregar Imagen</label> <small>(Puede agregar varias imagenes)</small>
                        <div class="html5fileupload fileProducto" data-multiple="true" data-url="' . URL . 'admin/uploadProductoImagen" data-valid-extensions="JPG,JPEG,jpg,png,jpeg,PNG" style="width: 100%;">
                            <input type="file" name="file_archivo[]" />
                        </div>
                    </div>
                    <script>
                        $(".html5fileupload.fileProducto").html5fileupload({
                            data:{id:' . $id . '},
                            onAfterStartSuccess: function(response) {
                                $("#imagenesProductos" + response.id).append(response.content);
                            }
                        });
                    </script>
                </div>
                <div class="row" id="imagenesProductos' . $id . '">';
        foreach ($imagenes as $item) {
            $id = $item['id'];
            if ($item['principal'] == 1) {
                $img_principal = '<a class="pointer btnImgPrincipal" id="imgPrincipal' . $id . '" data-id="' . $id . '"><span class="label label-success">Principal</span></a>';
            } else {
                $img_principal = '<a class="pointer btnImgPrincipal" id="imgPrincipal' . $id . '" data-id="' . $id . '"><span class="label label-warning">Principal</span></a>';
            }
            if ($item['estado'] == 1) {
                $mostrar = '<a class="pointer btnMostrarImg" id="mostrarImg' . $id . '" data-id="' . $id . '"><span class="label label-success">Visible</span></a>';
            } else {
                $mostrar = '<a class="pointer btnMostrarImg" id="mostrarImg' . $id . '" data-id="' . $id . '"><span class="label label-danger">Oculta</span></a>';
            }
            $form .= '     <div class="col-sm-3" id="imagenGaleria' . $id . '">
                                    <img class="img-responsive" src="' . URL . 'public/img/marcas/productos/' . utf8_encode($item['imagen']) . '" alt="Photo">
                                    <p>' . $img_principal . ' | ' . $mostrar . ' | <a class="pointer btnEliminarImg" data-id="' . $id . '" id="eliminarImg' . $id . '"><span class="label label-danger">Eliminar</span></a></p>
                                </div>
                                <!-- /.col -->';
        }
        $form .= '</div>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Editar Producto',
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function modalEditarMarca($data) {
        $id = $data['id'];
        $sql = $this->db->select("select * from marca where id = $id");
        $checked = ($sql[0]['estado'] == 1) ? 'checked' : '';
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Marca</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="' . URL . 'admin/frmEditarMarca" enctype="multipart/form-data" id="frmEditarMarca">
                    <input type="hidden" value="' . $id . '" name="marca[id]">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="marca[descripcion]" class="form-control" placeholder="Ingrese la marca" value="' . utf8_encode($sql[0]['descripcion']) . '">
                    </div>
                    
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="marca[estado]" value="1" ' . $checked . '>
                                Estado
                            </label>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Edita Contenido</button>
                    </div>
                </form>
                <div class="form-group">
                        <label>Imagen</label>
                        <div class="html5fileupload fileUploadMarca" data-url="' . URL . 'admin/uploadImgMarca" data-valid-extensions="JPG,JPEG,jpg,png,jpeg" style="width: 100%;">
                            <input type="file" name="file" />
                        </div>
                </div>
                <script>
                    $(".html5fileupload.fileUploadMarca").html5fileupload({
                        data:{id:' . $id . '},
                        onAfterStartSuccess: function(response) {
                            $("#imgMarca" + response.id).html(response.content);
                        }
                    });
                </script>
                <h4>Imagen Actual</h4>
                <div class="imgActualMarca" id="imgMarca' . $id . '">';
        if (!empty($sql[0]['img'])) {
            $form .= '<img class="img-responsive" src="' . URL . 'public/img/marcas/' . $sql[0]['img'] . '">';
        }
        $form .= '</div>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Agregar Sección',
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function modalEditarCategoria($data) {
        $id = $data['id'];
        $sql = $this->db->select("select * from categoria where id = $id");
        $marcas = $this->helper->getListadoMarcas();
        $checked = ($sql[0]['estado'] == 1) ? 'checked' : '';
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Categoría</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="' . URL . 'admin/frmEditarCategoria" enctype="multipart/form-data" id="frmEditarCategoria">
                    <input type="hidden" value="' . $id . '" name="categoria[id]">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="categoria[descripcion]" class="form-control" placeholder="Ingrese la marca" value="' . utf8_encode($sql[0]['descripcion']) . '">
                    </div>
                    <div class="form-group">
                        <label>Marca</label>
                        <select class="form-control" name="categoria[marca]" required>
                            <option value="">Seleccione una Marca</option>';
        foreach ($marcas as $item) {
            $selected = ($item['id'] == $sql[0]['id_marca']) ? 'selected' : '';
            $form .= '<option value="' . $item['id'] . '" ' . $selected . '>' . utf8_encode($item['descripcion']) . '</option>';
        }
        $form .= '      </select>
                    </div>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="categoria[estado]" value="1" ' . $checked . '>
                                Estado
                            </label>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Edita Contenido</button>
                    </div>
                </form>
                <div class="form-group">
                        <label>Imagen</label>
                        <div class="html5fileupload fileUploadCategoria" data-url="' . URL . 'admin/uploadImgCategoria" data-valid-extensions="JPG,JPEG,jpg,png,jpeg" style="width: 100%;">
                            <input type="file" name="file" />
                        </div>
                </div>
                <script>
                    $(".html5fileupload.fileUploadCategoria").html5fileupload({
                        data:{id:' . $id . '},
                        onAfterStartSuccess: function(response) {
                            $("#imgCategoria" + response.id).html(response.content);
                        }
                    });
                </script>
                <h4>Imagen Actual</h4>
                <div class="imgActualMarca" id="imgCategoria' . $id . '">';
        if (!empty($sql[0]['imagen'])) {
            $form .= '<img class="img-responsive" src="' . URL . 'public/img/marcas/categorias/' . $sql[0]['imagen'] . '">';
        }
        $form .= '</div>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Editar Categoría',
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function modalAgregarSucursal() {
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos de la Sección</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" id="frmAgregarSucursal" method="POST">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="sucursal[nombre]" class="form-control" placeholder="Ingrese el Nombre de la Sucursal" value="">
                    </div>
                    <div class="form-group">
                        <label>Dirección</label>
                        <input type="text" name="sucursal[direccion]" class="form-control" placeholder="Ingrese la dirección" value="">
                    </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" name="sucursal[telefono]" class="form-control" placeholder="Ingrese el Teléfono" value="">
                    </div>
                    <div class="form-group">
                        <label>Ciudad</label>
                        <input type="text" name="sucursal[ciudad]" class="form-control" placeholder="Ingrese la Cuidad" value="">
                    </div>
                    <div class="form-group">
                        <label>País</label>
                        <input type="text" name="sucursal[pais]" class="form-control" placeholder="Ingrese el País" value="">
                    </div>
                    <div class="form-group">
                        <label>Latitud</label>
                        <input type="text" name="sucursal[latitud]" class="form-control" placeholder="Ingrese la Latitud" value="">
                    </div>
                    <div class="form-group">
                        <label>Longitud</label>
                        <input type="text" name="sucursal[longitud]" class="form-control" placeholder="Ingrese la Longitud" value="">
                    </div>
                    <div class="form-group">
                        <label>Horario de Atención</label>
                        <textarea id="editor1" name="sucursal[horario_atencion]" rows="10" cols="80">
                                
                            </textarea>
                    </div>
                    <script>
                        $(function () {
                            // Replace the <textarea id="editor1"> with a CKEditor
                            // instance, using default configuration.
                            CKEDITOR.replace("sucursal[horario_atencion]");
                        });
                    </script>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="sucursal[estado]" value="1" checked>
                                Estado
                            </label>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Aregar Sucursal</button>
                    </div>
                </form>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Agregar Sucursal',
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

    public function modalEliminarSucursal($data) {
        $id = $data['id'];
        $sql = $this->db->select("SELECT * FROM sucursal where id = $id");
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del mensaje</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" id="frmEliminarSucursal" method="POST">
                    <input type="hidden" name="sucursal[id]" value="' . $id . '">
                    <div class="alert alert-danger alert-dismissible">
                        <h4><i class="icon fa fa-ban"></i> ¿Está seguro de que desea eliminar la sucursal "<strong>' . utf8_encode($sql[0]['nombre']) . '</strong>"?</h4>
                    </div>
                    <div class="box-footer">
                        <button type="submit" id="btnDeleteSucursal" class="btn btn-danger" data-id="' . $id . '">Eliminar</button>
                    </div>
                </form>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Eliminar ' . utf8_encode($sql[0]['nombre']),
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function modalEliminarMarca($data) {
        $id = $data['id'];
        $sql = $this->db->select("SELECT * FROM marca where id = $id");
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del mensaje</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" id="frmEliminarMarca" method="POST">
                    <input type="hidden" name="marca[id]" value="' . $id . '">
                    <div class="alert alert-danger alert-dismissible">
                        <h4><i class="icon fa fa-ban"></i> ¿Está seguro de que desea eliminar la marca "<strong>' . utf8_encode($sql[0]['descripcion']) . '</strong>"?</h4>
                    </div>
                    <div class="box-footer">
                        <button type="submit" id="btnDeleteMarca" class="btn btn-danger" data-id="' . $id . '">Eliminar</button>
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

    public function modalEliminarCategoria($data) {
        $id = $data['id'];
        $sql = $this->db->select("SELECT * FROM categoria where id = $id");
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del mensaje</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" id="frmEliminarCategoria" method="POST">
                    <input type="hidden" name="marca[id]" value="' . $id . '">
                    <div class="alert alert-danger alert-dismissible">
                        <h4><i class="icon fa fa-ban"></i> ¿Está seguro de que desea eliminar la categoria "<strong>' . utf8_encode($sql[0]['descripcion']) . '</strong>"?</h4>
                    </div>
                    <div class="box-footer">
                        <button type="submit" id="btnDeleteCategoria" class="btn btn-danger" data-id="' . $id . '">Eliminar</button>
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

    public function editSucursal($data) {
        $id = $data['id'];
        $estado = 1;
        if (empty($data['estado'])) {
            $estado = 0;
        }
        $update = array(
            'nombre' => utf8_decode($data['nombre']),
            'direccion' => utf8_decode($data['direccion']),
            'telefono' => utf8_decode($data['telefono']),
            'ciudad' => utf8_decode($data['ciudad']),
            'pais' => utf8_decode($data['pais']),
            'latitud' => utf8_decode($data['latitud']),
            'longitud' => utf8_decode($data['longitud']),
            'horario_atencion' => utf8_decode($data['horario_atencion']),
            'estado' => $estado
        );
        $this->db->update('sucursal', $update, "id = $id");
        #obtenemos la fila
        $sql = $this->db->select("SELECT * FROM sucursal where id = $id");
        if ($sql[0]['estado'] == 1) {
            $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
        } else {
            $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
        }
        $row = '<td class="sorting_1">' . utf8_encode($sql[0]['nombre']) . '</td>'
                . '<td>' . utf8_encode($sql[0]['telefono']) . '</td>'
                . '<td>' . utf8_encode($sql[0]['ciudad']) . '</td>'
                . '<td>' . $estado . '</td>'
                . '<td><a class="btn btn-app pointer btnEditarSucursal btnSmall" data-id="' . $id . '"><i class="fa fa-edit"></i> Editar</a>'
                . ' | <a class="btn btn-app pointer btnEliminarSucursal btnSmall" data-id="' . $id . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a>'
                . '</td>';
        $datos = array(
            'type' => 'success',
            'id' => $id,
            'row' => $row
        );
        return $datos;
    }

    public function editMarca($data) {
        $id = $data['id'];
        $estado = 1;
        if (empty($data['estado'])) {
            $estado = 0;
        }
        $update = array(
            'descripcion' => utf8_decode($data['descripcion']),
            'estado' => $estado
        );
        $this->db->update('marca', $update, "id = $id");
        #obtenemos la fila
        $sql = $this->db->select("SELECT * FROM marca where id = $id");
        if ($sql[0]['estado'] == 1) {
            $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
        } else {
            $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
        }
        $row = '<td>' . $sql[0]['descripcion'] . '</td>'
                . '<td><img src="' . URL . 'public/img/marcas/' . $sql[0]['img'] . '" class="img-responsive" style="width: 150px;"></td>'
                . '<td>' . $estado . '</td>'
                . '<td><a class="btn btn-app pointer btnEditarMarca btnSmall" data-id="' . $id . '"><i class="fa fa-edit"></i> Editar</a> '
                . '| <a class="btn btn-app pointer btnEliminarMarca btnSmall" data-id="' . $id . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a></td>';
        $datos = array(
            'type' => 'success',
            'id' => $id,
            'row' => $row
        );
        return $datos;
    }

    public function editProducto($data) {
        $id = $data['id'];
        $estado = 1;
        if (empty($data['estado'])) {
            $estado = 0;
        }
        $update = array(
            'id_categoria' => $data['id_categoria'],
            'nombre' => utf8_decode($data['nombre']),
            'codigo' => utf8_decode($data['codigo']),
            'contenido' => utf8_decode($data['contenido']),
            'contenido_largo' => utf8_decode($data['contenido_largo']),
            'estado' => $estado
        );
        $this->db->update('producto', $update, "id = $id");
        #obtenemos la fila
        $sql = $this->db->select('SELECT p.id,
                                        p.nombre,
                                        p.estado,
                                        m.descripcion as marca,
                                        c.descripcion as categoria
                                FROM producto p
                                LEFT JOIN categoria c on c.id = p.id_categoria
                                LEFT JOIN marca m on m.id = c.id_marca where p.id = ' . $id);
        if ($sql[0]['estado'] == 1) {
            $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
        } else {
            $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
        }
        $row = '<td class="sorting_1">' . utf8_encode($sql[0]['marca']) . '</td>'
                . '<td>' . utf8_encode($sql[0]['categoria']) . '</td>'
                . '<td>' . utf8_encode($sql[0]['nombre']) . '</td>'
                . '<td>' . $estado . '</td>'
                . '<td><a class="btn btn-app pointer btnEditarProducto btnSmall" data-id="' . $id . '"><i class="fa fa-edit"></i> Editar</a> '
                . '| <a class="btn btn-app pointer btnEliminarProducto btnSmall" data-id="' . $id . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a></td>';
        $datos = array(
            'type' => 'success',
            'id' => $id,
            'row' => $row
        );
        return $datos;
    }

    public function editCategoria($data) {
        $id = $data['id'];
        $estado = 1;
        if (empty($data['estado'])) {
            $estado = 0;
        }
        $update = array(
            'id_marca' => utf8_decode($data['id_marca']),
            'descripcion' => utf8_decode($data['descripcion']),
            'estado' => $estado
        );
        $this->db->update('categoria', $update, "id = $id");
        #obtenemos la fila
        $sql = $this->db->select("SELECT c.*, m.descripcion as marca FROM categoria c left join marca m on m.id = c.id_marca where c.id = $id");
        if ($sql[0]['estado'] == 1) {
            $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
        } else {
            $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
        }
        $row = '<td class="sorting_1">' . utf8_encode($sql[0]['marca']) . '</td>'
                . '<td>' . utf8_encode($sql[0]['descripcion']) . '</td>'
                . '<td><img src="' . URL . 'public/img/marcas/categorias/' . utf8_encode($sql[0]['imagen']) . '" class="img-responsive" style="width: 150px;"></td>'
                . '<td>' . $estado . '</td>'
                . '<td><a class="btn btn-app pointer btnEditarCategoria btnSmall" data-id="' . $id . '"><i class="fa fa-edit"></i> Editar</a> '
                . '| <a class="btn btn-app pointer btnEliminarCategoria btnSmall" data-id="' . $id . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a>'
                . '</td>';
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

    public function addSucursal($data) {
        $estado = 1;
        if (empty($data['estado'])) {
            $estado = 0;
        }
        $this->db->insert('sucursal', array(
            'nombre' => utf8_decode($data['nombre']),
            'direccion' => utf8_decode($data['direccion']),
            'telefono' => utf8_decode($data['telefono']),
            'ciudad' => utf8_decode($data['ciudad']),
            'pais' => utf8_decode($data['pais']),
            'latitud' => utf8_decode($data['latitud']),
            'longitud' => utf8_decode($data['longitud']),
            'horario_atencion' => utf8_decode($data['horario_atencion']),
            'estado' => $estado
        ));
        $id = $this->db->lastInsertId();
        #obtenemos la fila
        $sql = $this->db->select("SELECT * FROM sucursal where id = $id");
        if ($sql[0]['estado'] == 1) {
            $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
        } else {
            $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
        }
        $row = '<tr id="sucursal_' . $id . '" role="row" class="odd">'
                . '<td class="sorting_1">' . utf8_encode($sql[0]['nombre']) . '</td>'
                . '<td>' . utf8_encode($sql[0]['telefono']) . '</td>'
                . '<td>' . utf8_encode($sql[0]['ciudad']) . '</td>'
                . '<td>' . $estado . '</td>'
                . '<td><a class="btn btn-app pointer btnEditarSucursal btnSmall" data-id="' . $id . '"><i class="fa fa-edit"></i> Editar</a> | <a class="btn btn-app pointer btnEliminarSucursal btnSmall" data-id="' . $id . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a></td>'
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
                'type' => 'error',
                'id' => $id,
                'contenido' => 'Lo sentimos ha ocurrido un error, no se pudo eliminar el registro'
            );
        }

        return $datos;
    }

    public function deleteContactoSucursal($data) {
        $id = $data['id'];
        try {
            $sth = $this->db->prepare("delete from sucursal where id = :id");
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
                'type' => 'error',
                'id' => $id,
                'contenido' => 'Lo sentimos ha ocurrido un error, no se pudo eliminar el registro'
            );
        }

        return $datos;
    }

    public function deleteMarca($data) {
        $id = $data['id'];
        try {
            $sth = $this->db->prepare("delete from marca where id = :id");
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
                'type' => 'error',
                'id' => $id,
                'contenido' => 'Lo sentimos ha ocurrido un error, no se pudo eliminar el registro'
            );
        }

        return $datos;
    }

    public function deleteCategoria($data) {
        $id = $data['id'];
        try {
            $sth = $this->db->prepare("delete from categoria where id = :id");
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
                'type' => 'error',
                'id' => $id,
                'contenido' => 'Lo sentimos ha ocurrido un error, no se pudo eliminar el registro'
            );
        }

        return $datos;
    }

    public function guardarLaEmpresaContenido($data) {
        $id = 1;
        $update = array(
            'contenido' => utf8_decode($data['contenido'])
        );
        try {
            $this->db->update('la_empresa', $update, "id = $id");
            $datos = array(
                'type' => 'success',
                'titulo' => 'Se ha actualizado correctamente',
                'contenido' => 'Se ha actualizado el regitro correctamente'
            );
        } catch (Exception $ex) {
            $datos = array(
                'type' => 'error',
                'titulo' => 'Ha ocurrido un error',
                'contenido' => 'Lo sentimos ha ocurrido un error, no se pudo actualizar el registro'
            );
        }
        return $datos;
    }

    public function frmAddMarca($data) {
        $this->db->insert('marca', array(
            'descripcion' => utf8_decode($data['descripcion']),
            'estado' => $data['estado']
        ));
        $id = $this->db->lastInsertId();
        return $id;
    }

    public function frmAddCategoria($data) {
        $this->db->insert('categoria', array(
            'id_marca' => $data['id_marca'],
            'descripcion' => utf8_decode($data['descripcion']),
            'estado' => $data['estado']
        ));
        $id = $this->db->lastInsertId();
        return $id;
    }

    public function frmAddProducto($data) {
        $this->db->insert('producto', array(
            'id_categoria' => $data['id_categoria'],
            'nombre' => utf8_decode($data['nombre']),
            'codigo' => utf8_decode($data['codigo']),
            'contenido' => utf8_decode($data['contenido']),
            'contenido_largo' => utf8_decode($data['contenido_largo']),
            'estado' => $data['estado']
        ));
        $id = $this->db->lastInsertId();
        return $id;
    }

    public function frmAddMarcaImg($img) {
        $id = $img['id'];
        $update = array(
            'img' => $img['imagen']
        );
        $this->db->update('marca', $update, "id = $id");
    }

    public function frmAddCategoriaImg($img) {
        $id = $img['id'];
        $update = array(
            'imagen' => $img['imagen']
        );
        $this->db->update('categoria', $update, "id = $id");
    }

    public function uploadImgMarca($data) {
        $id = $data['id'];
        $update = array(
            'img' => $data['img']
        );
        $this->db->update('marca', $update, "id = $id");
        $contenido = '<img class="img-responsive" src="' . URL . 'public/img/marcas/' . $data['img'] . '">';
        $datos = array(
            "result" => true,
            'id' => $id,
            'content' => $contenido
        );
        return $datos;
    }

    public function uploadImgCategoria($data) {
        $id = $data['id'];
        $update = array(
            'imagen' => $data['img']
        );
        $this->db->update('categoria', $update, "id = $id");
        $contenido = '<img class="img-responsive" src="' . URL . 'public/img/marcas/categorias/' . $data['img'] . '">';
        $datos = array(
            "result" => true,
            'id' => $id,
            'content' => $contenido
        );
        return $datos;
    }

    public function unlinkActualMarcaImg($idPost) {
        $dir = 'public/img/marcas/';
        $sql = $this->db->select("select img from marca where id = $idPost");
        unlink($dir . $sql[0]['img']);
    }

    public function unlinkActualCategoriaImg($idPost) {
        $dir = 'public/img/marcas/categorias/';
        $sql = $this->db->select("select imagen from categoria where id = $idPost");
        unlink($dir . $sql[0]['imagen']);
    }

    public function selectCategoriaProducto($data) {
        $id = $data['id'];
        $sql = $this->db->select("select id, descripcion from categoria where id_marca = $id");
        $option = '';
        foreach ($sql as $item) {
            $option .= '<option value="' . $item['id'] . '">' . utf8_encode($item['descripcion']) . '</option>';
        }
        return $option;
    }

    public function insertProductoImagen($imagenes) {
        $id = $imagenes['id'];
        $cantImagenes = count($imagenes['imagenes']) - 1;
        for ($i = 0; $i <= $cantImagenes; $i ++) {
            $imgPrincipal = ($i == 0) ? 1 : 0;
            $this->db->insert('producto_imagen', array(
                'id_producto' => $id,
                'imagen' => $imagenes['imagenes'][$i],
                'principal' => $imgPrincipal,
                'estado' => 1
            ));
        }
    }

    public function uploadProductoImagen($data) {
        $id = $data['id'];
        $this->db->insert('producto_imagen', array(
            'id_producto' => $id,
            'imagen' => $data['archivo'],
            'estado' => 1
        ));
        $id_img = $this->db->lastInsertId();
        $contenido = $this->helper->loadImage($id_img);
        $datos = array(
            "result" => true,
            'id' => $id,
            'content' => $contenido
        );
        return $datos;
    }

}
