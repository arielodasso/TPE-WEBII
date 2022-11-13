<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';


class NoticiaView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // Inicializo Smarty
    }

    function showNoticias($noticias,$categorias) {

        // Asigno variables al tpl smarty
        $this->smarty->assign('noticias', $noticias);
        $this->smarty->assign('categorias', $categorias);

        // Mostrar el tpl
        $this->smarty->display('noticiasList.tpl');

    }

    function filtrarNoticiasCategoria($noticias) {
        $this->smarty->assign("noticias", $noticias);
        $this->smarty->display("noticiasCategoria.tpl");
    }

    function showNota($noticias) {
        // asigno variables al tpl smarty
        $this->smarty->assign('noticias', $noticias);

        // mostrar el tpl
        $this->smarty->display('noticiaCompleta.tpl');

    }

    function showFormEdit($noticia) {
        // asigno variables al tpl smarty
        $this->smarty->assign('noticia', $noticia); 

        // mostrar el tpl
        $this->smarty->display('actualizarNoticia.tpl');

    }

}