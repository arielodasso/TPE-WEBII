<?php
require_once './app/models/categorias.model.php';
require_once './app/views/categorias.view.php';
require_once './app/helpers/auth.helper.php';

class CategoriaController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new CategoriaModel();
        $this->view = new CategoriaView();

        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();

    }

    public function showCategorias() {
        $categorias = $this->model->getAllCategorias();
        $this->view->showCategorias($categorias);
    }

    function addCategoria() {

        $categoria = $_POST['nombreCategoria'];
        $id = $this->model->insertCategoria($categoria);

        header("Location: " . BASE_URL. "adminCategorias"); 
    }

   
    function deleteCategoria($id) {
        $this->model->deleteCategoriaById($id);
        header("Location: " . BASE_URL."adminCategorias");
    }

    function updateCategoria($id){
        $categoria = $_POST['nombreCategoria'];
        $this->model->updateCategoria($categoria,$id);
        header("Location: " . BASE_URL."adminCategorias");
    }


}