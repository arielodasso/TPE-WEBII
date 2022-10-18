<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';


class NoticiaCategoriaView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // Inicializo Smarty
    }

    function filtrarNoticiasCategoria($noticias) {

        // Asigno variables al tpl smarty
        $this->smarty->assign('noticias', $noticias);

        // Mostrar el tpl
        $this->smarty->display('noticiasCategoria.tpl');

    }

}