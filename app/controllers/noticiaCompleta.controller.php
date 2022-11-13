<?php
require_once './app/models/noticias.model.php';
require_once './app/views/noticias.view.php';


class NoticiaCompletaController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new NoticiaModel();
        $this->view = new NoticiaView();
    }

    public function showNoticiaCompleta($id){
        $noticias = $this->model->seleccionarNoticiaById($id);
        $this->view->showNota($noticias);
    }

}