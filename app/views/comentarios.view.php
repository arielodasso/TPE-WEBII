<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class ComentariosView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    function showComentarios($comentarios) {

        $this->smarty->assign('comentarios', $comentarios);
        $this->smarty->display('comentarios.tpl');
    }
}