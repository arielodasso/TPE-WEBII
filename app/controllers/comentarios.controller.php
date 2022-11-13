<?php
require_once './app/models/comentarios.model.php';
require_once './app/views/comentarios.view.php';

class ComentariosController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new ComentariosModel();
        $this->view = new ComentariosView();
    }

    public function showComentarios() {
        $comentarios = $this->model->getAllComentarios();
        $this->view->showComentarios($comentarios);
    }
}