<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';


class NoticiaView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // Inicializo Smarty
    }

    function showNoticias($noticias) {

        // Asigno variables al tpl smarty
        $this->smarty->assign('noticias', $noticias);

        // Mostrar el tpl
        $this->smarty->display('noticiasList.tpl');

    }

}