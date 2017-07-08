<?php

class Empresa_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function getEmpresaContent() {
        $sql = $this->db->select("select * from la_empresa where id = 1");
        return $sql;
    }

    public function getMisionContent() {
        $sql = $this->db->select("select * from mision where id = 1");
        return $sql;
    }
    
    public function getCompromisoContent() {
        $sql = $this->db->select("select * from compromiso_social where id = 1");
        return $sql;
    }

}
