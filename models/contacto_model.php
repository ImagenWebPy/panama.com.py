<?php

class Contacto_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function enviar($datos) {
        $nombre = $datos['nombre'];
        $email = $datos['email'];
        $telefono = $datos['telefono'];
        $id_contacto = $datos['seccion'];
        $mensaje = $datos['mensaje'];
        $fecha = date('Y-m-d H:i:s');
        $this->db->insert('contacto', array(
            'nombre' => utf8_decode($nombre),
            'email' => utf8_decode($email),
            'telefono' => utf8_decode($telefono),
            'id_contacto_formulario' => utf8_decode($id_contacto),
            'mensaje' => utf8_decode($mensaje),
            'fecha' => $fecha
        ));
        $idContacto = $this->db->lastInsertId();
        $data = array(
            'id' => $idContacto
        );
        #obtenemo el email a enviar
        $mail = $this->helper->obtenerSeccion($id_contacto);
        $mail_seccion = $mail['descripcion'];
        $mail_email = $mail['email'];
        $asunto = "Contacto desde el sitio web - Formulario de Contacto";
        $message = "<h2>Hola, se ha contactado la siguiente persona</h2>
                    <table>
                        <tr>
                            <td>Nombre:</td>
                            <td>$nombre</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>$email</td>
                        </tr>
                        <tr>
                            <td>Sección a Contactar:</td>
                            <td>$mail_seccion</td>
                        </tr>
                        <tr>
                            <td>Email enviadó a:</td>
                            <td>$mail_email</td>
                        </tr>
                        <tr>
                            <td>Mensaje:</td>
                            <td>$mensaje</td>
                        </tr>
                        <tr>
                            <td>Fecha:</td>
                            <td>$fecha</td>
                        </tr>
                    </table>";
        $this->helper->sendMail($mail_email, $asunto, $message);
        return $data;
    }

}
