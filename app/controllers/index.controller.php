<?php
require_once './app/models/index.model.php';
require_once './app/views/index.view.php';

class HomeController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new HomeModel();
        $this->view = new HomeView();
    }

    public function showHome() {
        $noticias = $this->model->getAllNoticias();
        $nombreCategoria = $this->model->getNombreCategoria();

        $this->view->showHome($noticias,$nombreCategoria);
        
    }

}