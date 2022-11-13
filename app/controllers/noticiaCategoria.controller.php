<?php
require_once './app/models/noticias.model.php';
require_once './app/views/noticias.view.php';
require_once './app/helpers/auth.helper.php';

class NoticiaCategoriaController{
    private $model;
    private $view;

    public function __construct() {
        $this->model = new NoticiaModel();
        $this->view = new NoticiaView();
    }

    public function filtrarNoticias($id) {
        $noticias = $this->model->filtrar($id);
        $this->view->filtrarNoticiasCategoria($noticias);
    }


}