<?php
require 'controlador.php';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="theme-color" content="#F0DB4F">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
 
  <title>Registro del Problema</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
  <link rel="manifest" href="manifest.json">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Menú de la Registro de Problemas </h3>
                        <p>Rellenar los Siguentes datos (VISTA CLIENTE)</p>
                        <form class="requires-validation" id="form" action="index.php" method="POST">

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="txt_nombre" placeholder="Nombre del Cliente" required>
                              
                            </div>

                            <div class="col-md-12">
                              <input class="form-control" type="textarea" name="txt_problema" placeholder="Problema" required>
                               
                           </div>

                            <div class="col-md-12">
                                <input class="form-control" type="datetime-local" name="txt_tiempo" placeholder="Hora y Fecha de Registro">
                                 
                            </div>




                            <div class="form-button mt-3">
                                <input name="btn_insertar" type="submit" class="btn btn-primary" value="Registrar Problema">
                               
                            </div>
                           
                        </form>
                        <div class="form-button mt-3">
                        <a href="tabla.php"> <input  type="submit" class="btn btn-primary" value="Ir a Tabla de Problemas"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- partial -->
  
<script src="script.js"></script>
</body>
</html>
