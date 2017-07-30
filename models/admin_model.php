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

}
