<?php include("../template/cabecera.php"); ?>

<?php

?>


<div style="margin-left:10px; margin-right: 10px"; class="row">
    <section class="col-md-5" >

        <div class="card">
            <div class="card-header">
                Datos de libros
            </div>
            <div class="card-body">

                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ID</label>
                        <input type="text" class="form-control" name="txtID" id="textID" placeholder="ID">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Lenguaje</label>
                        <input type="text" class="form-control" name="txtLenguaje" id="txtLenguaje" placeholder="Nombre">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Sube el código en un archivo .TXT</label>
                        <input type="file" class="form-control" name="txtCodigo" id="txtCodigo " placeholder="Código">
                    </div>

                    <div class="btn-group" role="group" aria-label="">
                        <button type="button" value="agregar" class="btn btn-success">Agregar</button>
                        <button type="button" value="modificar" class="btn btn-warning">Modificar</button>
                        <button type="button" value="cancelar" class="btn btn-info">Cancelar</button>
                    </div>


            </div>

        </div>

    </section>




    <section class="col-md-7">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Lenguaje</th>
                    <th>Codigo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2</td>
                    <td>PHP</td>
                    <td>Java</td>
                    <td>Seleccion | Borrar</td>
                </tr>
            </tbody>
        </table>
    </section>
</div>


<?php include("../template/pie.php"); ?>