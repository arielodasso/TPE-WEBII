<?php
require_once './app/models/categorias.model.php';
require_once './app/views/categorias.view.php';
require_once './app/helpers/auth.helper.php';

class CategoriasController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new CategoriasModel();
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

    function editCategoria($id){
        $categoria = $this->model->selectCategoriaById($id);
        $this->view->showFormEdit($categoria);
    }

    function updateCategoria(){
        $nombre = $_POST['nombre'];
        $id = $_POST['id']; //AGARRA LA ID PARA PODER ACTUALIZAR LOS DEMÁS DATOS A LA DB (NO SE CAMBIA)

        $this->model->updateCategoria($nombre, $id);

        header("Location: " . BASE_URL. "adminCategorias"); 
    }


}



class CategoriaController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new CategoriasModel();
        $this->view = new CategoriaView();
    }

    public function showListaCategorias() {
        
        $categorias = $this->model->getAllCategorias();

        $this->view->showListaCategorias($categorias);        
    }

}