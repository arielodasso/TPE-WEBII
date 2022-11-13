<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class HomeView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showHome($noticias,$nombreCategoria) {
        
        // asigno variables al tpl smarty
        $this->smarty->assign('count', count($noticias)); 
        $this->smarty->assign('noticias', $noticias);
        $this->smarty->assign('nombreCategoria', $nombreCategoria);

        // mostrar el tpl
        $this->smarty->display('noticiasCard.tpl');
    }

}