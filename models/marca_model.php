<?php

class Marca_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function getMarcas() {
        $sql = $this->db->select("select * from marca where estado = 1 order by descripcion asc");
        return $sql;
    }

}
