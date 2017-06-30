<?php

require 'libs/Database.php';

class Helper {

    function __construct() {
        $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
    }

    public function getSlider() {
        $sql = $this->db->select("select * from slider where estado = 1 order by orden asc");
        return $sql;
    }

    public function getNosotrosIndex() {
        $sql = $this->db->select("select le.contenido_portada, le.img_portada from la_empresa le where id = 1");
        return $sql;
    }

    public function getListadoMarcas(){
        $sql = $this->db->select("select id, descripcion, img from marca where estado = 1 ORDER BY descripcion asc");
        return $sql;
    }
}
