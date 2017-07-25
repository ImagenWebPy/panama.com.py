<?php

class Trabaja_con_nosotros_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function subir_datos($datos) {
        $this->db->insert('trabaja', array(
            'nombre' => utf8_decode($datos['nombre']),
            'email' => utf8_decode($datos['email']),
            'telefono' => utf8_decode($datos['telefono']),
            'mensaje' => utf8_decode($datos['message']),
            'fecha' => date('Y-m-d H:i:s')
        ));
        $idTrabaja = $this->db->lastInsertId();
        $data = array(
            'id' => $idTrabaja
        );
        return $data;
    }

    public function updateTrabaja($update) {
        $id = $update['id'];
        $actualizar = array(
            'archivo' => $update['archivo']
        );
        $this->db->update('trabaja', $actualizar, "`id` = $id");
    }

}
