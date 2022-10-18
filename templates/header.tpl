<!DOCTYPE html>
<html lang="es">
<head>

    <base href="{BASE_URL}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!--Bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <!-CSS-->
    <link rel="stylesheet" href="css/style.css">
    
    <!--Favicon-->
    <link rel="icon" type="image/png" href="imagenes/icono.png">

    <link rel="shortcut icon" href="img/logoPNG.png" type="image/x-icon">

    <title>Diario de Qatar</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid titulo-web">
              <a class="navbar-brand" href="home">Diario de <span>Qatar 2022</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  
                  {if !isset($smarty.session.USER_ID)}
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="home">Noticias</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="categorias">Categorías</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="login">Login</a>
                    </li>
                  {else if}
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="adminNoticias">Noticias</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="adminCategorias">Categorías</a>
                    </li>
                    <li class="nav-item ml-auto">
                      <a class="nav-link" aria-current="page" href="logout">Logout ({$smarty.session.USER_EMAIL})</a>
                    </li>
                  {/if}

                </ul>
              </div>
            </div>
          </nav>
    </header>
