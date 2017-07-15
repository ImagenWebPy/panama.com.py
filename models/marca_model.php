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
                                where c.id_marca = $idMarca");
        return $sql[0];
    }

    public function categoriaHeader($idMarca) {
        $sql = $this->db->select("select ch.id,
                                        ch.img as imagen,
                                        ch.contenido,
                                        m.img as logo_marca,
                                        m.descripcion as marca
                                from categoria_header ch 
                                LEFT JOIN marca m on m.id = ch.id_marca
                                where ch.id_marca = $idMarca");
        return $sql[0];
    }

}
