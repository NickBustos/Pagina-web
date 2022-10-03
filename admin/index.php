<?php

if($_POST){
    header('Location:inicio.php');
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Inicio de sesión de Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">

                    
                        <form method="POST">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Usuario</label>
                                <input type="email" class="form-control" name="usuario" placeholder="Ingresa tu usuario">
                                <small id="emailHelp" class="form-text text-muted">Nunca compartas tu credenciales con alguien.</small>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Contraseña</label>
                                <input type="password" class="form-control" name="contrasena" placeholder="Ingresa tu contraseña">
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
                            </div>

                            <br>

                            <button type="submit" class="btn btn-primary">Entrar al administrador</button>

                        </form>


                    </div>
                </div>
            </div>

        </div>
    </div>


</body>

</html>