<!doctype html>
<html lang="en">

<head>
    <title>Administrador de página web</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <?php
    //Código para programar en el trabajo
    //$url = "http://".$_SERVER['HTTP_HOST']."/sitioweb/PHP/Pagina-web"



    //Codigo para el instituto
    $url = "http://".$_SERVER['HTTP_HOST']."/Pagina-web"


?>


    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Administrador del sitio web <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/admin/inicio.php">Inicio</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/admin/seccion/codigos.php">Administrador de código</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/admin/seccion/cerrar.php">Cerrar sesión</a>
        </div>
    </nav>
    <br> 