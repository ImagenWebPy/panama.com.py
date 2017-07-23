<?php

class Blog_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function listado($pagina) {
        if (!empty($pagina)) {
            $page = $pagina;
        } else {
            $page = 1;
        }
        $setLimit = REG;
        $pageLimit = ($setLimit * $page) - $setLimit;
        $sql = $this->db->select("select id, titulo, contenido, imagen, tags, fecha from blog where estado = 1 ORDER BY fecha desc LIMIT $pageLimit, $setLimit");
        $data = array(
            'listado' => $sql,
            'paginador' => $this->helper->mostrarPaginador($setLimit, $page, 'blog', 'blog/listado')
        );
        return $data;
    }

    public function detalle($idBlog) {
        $sql = $this->db->select("select id, titulo, contenido, imagen, tags, fecha from blog where id = $idBlog");
        return $sql[0];
    }

    public function ultimasPublicaciones($cant , $idActual) {
        $sql = $this->db->select("select id, titulo, contenido, imagen, tags, fecha from blog where id != $idActual ORDER BY fecha DESC LIMIT $cant");
        return $sql;
    }

}
