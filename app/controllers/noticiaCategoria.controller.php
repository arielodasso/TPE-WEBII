<?php
require_once './app/models/noticiaCategoria.model.php';
require_once './app/views/noticiaCategoria.view.php';
require_once './app/helpers/auth.helper.php';

class NoticiaCategoriaController{
    private $model;
    private $view;

    public function __construct() {
        $this->model = new NoticiaCategoriaModel();
        $this->view = new NoticiaCategoriaView();
    }

    public function filtrarNoticias($id) {
        $noticias = $this->model->getNoticiasCategoria($id);
        $this->view->filtrarNoticiasCategoria($noticias);
    }


}