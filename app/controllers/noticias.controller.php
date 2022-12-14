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
    }

    public function showNoticias() {
        $noticias = $this->model->getAllNoticias();
        $categorias = $this->model->getAllCategorias();
        $this->view->showNoticias($noticias,$categorias);

    }
    
    public function addNoticia() {
        $authHelper->checkLoggedIn();

        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $cuerpo = $_POST['cuerpo'];
        $fecha = $_POST['fecha'];
        $categoria = $_POST['categoria'];
        $id = $this->model->insertNoticia($titulo, $descripcion, $cuerpo, $fecha, $categoria);

        header("Location: " . BASE_URL . "adminNoticias"); 
    }
   
    function deleteNoticia($id) {
        $authHelper->checkLoggedIn();

        $this->model->deleteNoticiaById($id);
        
        header("Location: ". BASE_URL."adminNoticias");
    }

    public function selectNoticia($id,$titulo){
        $authHelper->checkLoggedIn();

        $titulo = $_POST['titulo'];
        $this->model->selectNoticiaById($id);
    }


    function editNoticia($id){
        $authHelper->checkLoggedIn();

        $noticia = $this->model->selectNoticiaById($id);
        $categorias = $this->model->getAllCategorias();
        $this->view->showFormEdit($noticia, $categorias);
    }

    function updateNoticia(){
        $authHelper->checkLoggedIn();

        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $fecha = $_POST['fecha'];
        $cuerpo = $_POST['cuerpo'];
        $id = $_POST['id']; //AGARRA LA ID PARA PODER ACTUALIZAR LOS DEMÁS DATOS A LA DB (NO SE CAMBIA)

        $this->model->updateNoticia($titulo, $descripcion, $fecha, $cuerpo, $id);

        header("Location: " . BASE_URL. "adminNoticias"); 
    }

    public function filtrarNoticias($id) {
        $noticias = $this->model->filtrar($id);
        $this->view->filtrarNoticiasCategoria($noticias);
    }

    public function showNoticiaCompleta($id){
        $noticias = $this->model->seleccionarNoticiaById($id);
        $this->view->showNota($noticias);
    }
}