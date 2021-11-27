<?php
require 'controlador.php';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Tabla de Problemas</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Tabla de los Problemas</h3>
                        <p>Selecciona el problema a Solucionar(VISTA ADMINISTRADOR)</p>

                        <form class="requires-validation" id="form" action="tabla.php" method="POST">
                            <select name="cmb_resultados">
                            <option value="1">Por Solucionar</option>
                            <option value="2">Solucionado</option>
                            <option value="3">No solucionado</option>
                            </select>
                        <div class="form-button mt-3">
                        <input  type="submit" class="btn btn-primary" value="Buscar">
                        </div>
                        </form>
                        <br>
                        
                        <?php echo @$tabla_folios; ?>

                        <div class="form-button mt-3">
                        <a href="index.php"> <input  type="submit" class="btn btn-primary" value="Ir a Registro de Problemas"></a>
                        </div>
                                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- partial -->
  

</body>
</html>
