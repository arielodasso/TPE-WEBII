<?php
require_once './app/models/categorias.php';
require_once './app/views/categorias.php';

class CategoriasController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new CategoriasModel();
        $this->view = new CategoriasView();
    }

    public function showListaCategorias() {
        
        $categorias = $this->model->getAllCategorias();

        $this->view->showListaCategorias($categorias);        
    }

}