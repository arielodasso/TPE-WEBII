<?php
require_once './app/models/noticias.model.php';
require_once './app/views/noticias.view.php';
require_once './app/helpers/auth.helper.php';

class NoticiaController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new NoticiaModel();
        $this->view = new NoticiaView();

        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();

    }

    public function showNoticias() {
        $noticias = $this->model->getAllNoticias();
        $this->view->showNoticias($noticias);
    }

    
    public function addNoticia() {
        
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $cuerpo = $_POST['cuerpo'];
        $fecha = $_POST['fecha'];
        $categoria = $_POST['categoria'];
        $id = $this->model->insertNoticia($titulo, $descripcion, $cuerpo, $fecha, $categoria);

        header("Location: " . BASE_URL . "adminNoticias"); 
    }

    function updateNoticia($id){


        header("Location: " . BASE_URL . "adminNoticias"); 
    }

   
    function deleteNoticia($id) {
        $this->model->deleteNoticiaById($id);
        
        header("Location: ". BASE_URL."adminNoticias");
    }

    public function selectNoticia($id,$titulo){
        $titulo = $_POST['titulo'];
        $this->model->selectNoticiaById($id);
    }

}