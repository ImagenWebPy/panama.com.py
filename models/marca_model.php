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
        $sql = $this->db->select("SELECT ch.img as imagen, 
                                        ch.contenido,
                                        c.descripcion as categoria
                                FROM categoria_header ch 
                                LEFT JOIN categoria c on c.id = ch.id_categoria
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

}
