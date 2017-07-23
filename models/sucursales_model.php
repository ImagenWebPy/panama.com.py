<?php

class Sucursales_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function sucursales() {
        $sql = $this->db->select("select * from sucursal where estado = 1");
        return $sql;
    }

}
