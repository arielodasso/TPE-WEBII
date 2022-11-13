<?php
require_once './app/controllers/categorias.controller.php';
require_once './app/controllers/noticias.controller.php';
require_once './app/controllers/index.controller.php';
require_once './app/controllers/noticiaCategoria.controller.php';
require_once './app/controllers/auth.controller.php';
require_once './app/controllers/noticiaCompleta.controller.php';
require_once './app/controllers/comentarios.controller.php';



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
        
        $comentariosController = new ComentariosController();
        $comentariosController->showComentarios();
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
        $categoriasController = new CategoriaController();
        $categoriasController->showListaCategorias();
        break;

    // Muestro Edicion de categorias
    case 'adminCategorias':
        $categoriaController = new CategoriasController();
        $categoriaController->showCategorias();
        break;
    
    // Muestro Noticias
    case 'adminNoticias':
        $noticiaController = new NoticiaController();
        $noticiaController->showNoticias();
        break;
    
    // Noticia completa
    case 'noticia':
    $id = $params[1];
    $noticiaCompletaController = new NoticiaCompletaController();
    $noticiaCompletaController->showNoticiaCompleta($id);
    break;

    // Noticias por categoria
    case 'categoria':
        $id = $params[1];
        $noticiaCategoriaController = new NoticiaCategoriaController();
        $noticiaCategoriaController->filtrarNoticias($id);
        break;


    // Agrego Noticia y Categoria
    case 'agregar':
        $noticiaController = new NoticiaController();
        $noticiaController->addNoticia();
        break;

    case 'add':
        $categoriaController = new CategoriasController();
        $categoriaController->addCategoria();
        break;

    // Eliminar Categoria y Noticia
    case 'delete':
        $id = $params[1];
        $categoriaController = new CategoriasController();
        $categoriaController->deleteCategoria($id);
        break;

    case 'borrar':
        $id = $params[1];
        $noticiaController = new NoticiaController();
        $noticiaController->deleteNoticia($id);
        break;

    // Actualizar Noticia
    case 'editNoticia':
        $noticiaController = new NoticiaController();
        $noticiaController->editNoticia($params[1]);
        break;
    // Actualizar Noticia
    case 'updateNoticia':
        $noticiaController = new NoticiaController();
        $noticiaController->updateNoticia();
        break;


    // Actualizar Categoria
    case 'editCategoria':
        $categoriaController = new CategoriasController();
        $categoriaController->editCategoria($params[1]);
        break;

    // Actualizar Categoria
    case 'updateCategoria':
        $categoriaController = new CategoriasController();
        $categoriaController->updateCategoria();
        break;


    // Default
    default:
        echo('404 Page not found');
        break;
}

