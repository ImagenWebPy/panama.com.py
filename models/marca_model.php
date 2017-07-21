<?php

class Marca_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function getMarcas() {
        $sql = $this->db->select("select * from marca where estado = 1 order by descripcion asc");
        return $sql;
    }

    public function categorias($idMarca) {
        $sql = $this->db->select("select c.id, 
                                        c.imagen as imagen_categoria,
                                        c.descripcion as categoria
                                from categoria c 
                                where c.id_marca = $idMarca
                                and c.estado = 1");
        return $sql;
    }

    public function marcaHeader($idMarca) {
        $sql = $this->db->select("select ch.id,
                                        ch.img as imagen,
                                        ch.contenido,
                                        m.descripcion as marca
                                from marca_header ch 
                                left join marca m on m.id = ch.id_marca
                                where ch.id_marca = $idMarca");
        return $sql[0];
    }

    public function categoriaHeader($id_categoria) {
        $sql = $this->db->select("SELECT c.id as id_categoria,
                                        m.id as id_marca,
                                        ch.img as imagen, 
                                        ch.contenido,
                                        c.descripcion as categoria,
                                        m.descripcion as marca
                                FROM categoria_header ch 
                                LEFT JOIN categoria c on c.id = ch.id_categoria
                                LEFT JOIN marca m on m.id = c.id_marca
                                where id_categoria = $id_categoria;");
        return $sql[0];
    }

    public function productosCategoria($id_categoria) {
        $datos = $this->db->select("SELECT id, nombre FROM `producto` where id_categoria = 1 and estado = $id_categoria;");
        $data = array();
        foreach ($datos as $item) {
            $idProducto = $item['id'];
            $imgPrincipal = $this->db->select("select imagen 
                                                from producto_imagen pi 
                                                where estado = 1 
                                                and principal = 1 
                                                and id_producto = $idProducto");
            array_push($data, array(
                'id_producto' => $idProducto,
                'nombre' => utf8_encode($item['nombre']),
                'imagen' => $imgPrincipal[0]['imagen']
            ));
        }
        return $data;
    }

    public function datosProducto($id_producto) {
        $data['datos'] = array();
        $data['imagenes'] = array();
        $sqlProducto = $this->db->select("select p.id,
                                                p.nombre,
                                                p.codigo,
                                                p.contenido,
                                                p.contenido_largo,
                                                c.id as id_categoria,
                                                c.descripcion as categoria,
                                                m.id as id_marca,
                                                m.descripcion as marca
                                        from producto p 
                                        LEFT JOIN categoria c on c.id = p.id_categoria
                                        LEFT JOIN marca m on m.id = c.id_marca
                                        where p.id = $id_producto");
        $sqlImagen = $this->db->select("SELECT * from producto_imagen pi WHERE pi.id_producto = $id_producto and estado = 1;");
        foreach ($sqlProducto as $item) {
            array_push($data['datos'], array(
                'id_producto' => $id_producto,
                'nombre' => utf8_encode($item['nombre']),
                'codigo' => utf8_encode($item['codigo']),
                'contenido' => utf8_encode($item['contenido']),
                'id_categoria' => utf8_encode($item['id_categoria']),
                'categoria' => utf8_encode($item['categoria']),
                'id_marca' => utf8_encode($item['id_marca']),
                'marca' => $this->helper->cleanUrl(utf8_encode($item['marca']))
            ));
        }
        foreach ($sqlImagen as $item) {
            array_push($data['imagenes'], array(
                'imagen' => utf8_encode($item['imagen']),
                'principal' => $item['principal']
            ));
        }
        return $data;
    }

    public function getProductos($id_producto) {
        $sqlIdCategoria = $this->db->select("SELECT id_categoria FROM producto where id = $id_producto;");
        $idCategoria = $sqlIdCategoria[0]['id_categoria'];
        $sqlProductos = $this->db->select("SELECT id, nombre FROM producto where id_categoria = $idCategoria and estado = 1;");
        return $sqlProductos;
    }

}
