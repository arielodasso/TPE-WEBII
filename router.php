<?php
require_once './app/controllers/categorias.controller.php';
require_once './app/controllers/noticias.controller.php';
require_once './app/controllers/index.controller.php';
require_once './app/controllers/noticiaCategoria.controller.php';
require_once './app/controllers/auth.controller.php';
require_once './app/controllers/categorias.php';
require_once './app/controllers/noticiaCompleta.controller.php';



define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion
$params = explode('/', $action);

// tabla de ruteo
switch ($params[0]) {

    // Muestro el inicio
    case 'home':
        $homeController = new HomeController();
        $homeController->showHome();
        break;

    // Muestro el formulario de Login
    case 'login':
        $authController = new AuthController();
        $authController->showFormLogin();
        break;
        
    // Valido los datos de Email y Contraseña
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;

    // Cierra el session_start()
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;

    // Muestro listado de categorias
    case 'categorias':
        $categoriasController = new CategoriasController();
        $categoriasController->showListaCategorias();
        break;

    // Muestro Edicion de categorias
    case 'adminCategorias':
        $categoriaController = new CategoriaController();
        $categoriaController->showCategorias();
        break;
    
    // Muestro Noticias
    case 'adminNoticias':
        $noticiaController = new NoticiaController();
        $noticiaController->showNoticias();
        break;
    
    // Noticia completa
    case 'noticia':
    $id = $params[0];
    $noticiaCompletaController = new noticiaCompletaController();
    $noticiaCompletaController->showNoticiaCompleta($id);
    break;

    // Noticias por categoria
    case 'categoria':
        $id = $params[1];
        $noticiaCategoriaController = new noticiaCategoriaController();
        $noticiaCategoriaController->filtrarNoticias($id);
        break;


    // Agrego Noticia y Categoria
    case 'agregar':
        $noticiaController = new NoticiaController();
        $noticiaController->addNoticia();
        break;

    case 'add':
        $categoriaController = new CategoriaController();
        $categoriaController->addCategoria();
        break;

    // Eliminar Categoria y Noticia
    case 'delete':
        $id = $params[1];
        $categoriaController = new CategoriaController();
        $categoriaController->deleteCategoria($id);
        break;

    case 'borrar':
        $id = $params[1];
        $noticiaController = new NoticiaController();
        $noticiaController->deleteNoticia($id);
        break;

    // Select Noticia
    case 'editar':
        $id = $params[1];
        $noticiaController = new NoticiaController();
        $noticiaController->updateNoticia($id);
        break;

    // Actualizar Categoria
    case 'modificar':
        $id = $params[1];
        $categoriaController = new CategoriaController();
        $categoriaController->updateCategoria($id);
        break;


    // Default
    default:
        echo('404 Page not found');
        break;
}

