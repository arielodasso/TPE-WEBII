<?php
require_once './app/models/noticiaCompleta.model.php';
require_once './app/views/noticiaCompleta.view.php';


class noticiaCompletaController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new noticiaCompletaModel();
        $this->view = new noticiaCompletaView();
    }


    public function showNoticiaCompleta($id){
        $noticia = $this->model->seleccionarNoticiaById($id);
        $this->view->showNota($noticia);
    }

}