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
        $sql = $this->db->select("select id, titulo, contenido, imagen, tags, fecha from blog where estado = 1 LIMIT $pageLimit, $setLimit");
        $data = array(
            'listado' => $sql,
            'paginador' => $this->helper->mostrarPaginador($setLimit, $page, 'blog', 'blog/listado')
        );
        return $data;
    }

}
