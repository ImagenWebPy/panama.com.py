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

    public function getListadoMarcas() {
        $sql = $this->db->select("select id, descripcion, img from marca where estado = 1 ORDER BY descripcion asc");
        return $sql;
    }

    public function getListadoPost($order = NULL, $limit = NULL) {
        $orderby = (!empty($order)) ? 'ORDER BY ' . $order : '';
        $limite = (!empty($limit)) ? 'LIMIT ' . $limit : '';
        $sql = $this->db->select("SELECT b.id,	
                                        b.titulo,
                                        b.contenido,
                                        b.fecha,
                                        b.imagen,
                                        b.tags,
                                        b.fecha
                                    from blog b
                                    WHERE b.estado = 1
                                    $orderby
                                    $limite");
        return $sql;
    }

    public function getMonth($mes, $type) {
        $month = '';
        switch ($mes) {
            case 'January':
                if ($type = 'short') {
                    $month = 'Ene';
                } else {
                    $month = 'Enero';
                }
                break;
            case 'February':
                if ($type = 'short') {
                    $month = 'Feb';
                } else {
                    $month = 'Febrero';
                }
                break;
            case 'March':
                if ($type = 'short') {
                    $month = 'Mar';
                } else {
                    $month = 'Marzo';
                }
                break;
            case 'April':
                if ($type = 'short') {
                    $month = 'Abr';
                } else {
                    $month = 'Abril';
                }
                break;
            case 'May':
                if ($type = 'short') {
                    $month = 'May';
                } else {
                    $month = 'Mayo';
                }
                break;
            case 'June':
                if ($type = 'short') {
                    $month = 'Jun';
                } else {
                    $month = 'Junio';
                }
                break;
            case 'July':
                if ($type = 'short') {
                    $month = 'Jul';
                } else {
                    $month = 'Julio';
                }
                break;
            case 'August':
                if ($type = 'short') {
                    $month = 'Ago';
                } else {
                    $month = 'Agosto';
                }
                break;
            case 'September':
                if ($type = 'short') {
                    $month = 'Set';
                } else {
                    $month = 'Setiembre';
                }
                break;
            case 'October':
                if ($type = 'short') {
                    $month = 'Oct';
                } else {
                    $month = 'Octubre';
                }
                break;
            case 'November':
                if ($type = 'short') {
                    $month = 'Nov';
                } else {
                    $month = 'Noviembre';
                }
                break;
            case 'December':
                if ($type = 'short') {
                    $month = 'Dic';
                } else {
                    $month = 'Diciembre';
                }
                break;
        }
        return $month;
    }

    public function formatTags($tags) {
        $separated = explode(',', $tags);
        $result = '';
        foreach ($separated as $item) {
            $result .= '<a href="#">' . $item . '</a> ';
        }
        return $result;
    }

}
