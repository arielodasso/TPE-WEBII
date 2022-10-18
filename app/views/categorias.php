<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class CategoriasView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showListaCategorias($categorias) {
        // asigno variables al tpl smarty
        $this->smarty->assign('categorias', $categorias);

        // mostrar el tpl
        $this->smarty->display('categorias.tpl');
    }

}