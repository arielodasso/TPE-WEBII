<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';


class noticiaCompletaView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showNota($noticia) {
        // asigno variables al tpl smarty
        $this->smarty->assign('noticia', $noticia);

        // mostrar el tpl
        $this->smarty->display('noticiaCompleta.tpl');

    }

}