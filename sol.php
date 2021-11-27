<?php
require 'controlador.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registro de Soluciones</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Solucionador de los Problemas</h3>
                        <p>Problema a Solucionar</p>
                        <form class="requires-validation" id="form" action="sol.php" method="POST">

                        <div class="col-md-12">
                               <input class="form-control" type="text" value="<?php echo @$rows[0][0]; ?>" name="txt_id" placeholder="Id del Problema" readonly="readonly">
                              
                            </div>

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="txt_nombre_empleado" placeholder="Nombre del Empleado" required>
                              
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="txt_solucion_problema" placeholder="¿Como se solucionó?" required>
                                 
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="datetime-local" name="txt_tiempo_sol" placeholder="Hora y Fecha de Solución" >
                                 
                            </div>
                            <br>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="2" name="checkbox_solucion" >
                          <label>Marcar si SI solucionó el problema</label>
                        </div>
                       
                  

                        <div class="form-button mt-3">
                                <input name="btn_solucion" type="submit" class="btn btn-primary" Value="Registrar Solución">
                            </div>
                           
                        </form>
                        <div class="form-button mt-3">
                        <a href="index.php"> <input  type="submit" class="btn btn-primary" value="Ir a Registro de Problemas"></a>
                        </div>
                        <div class="form-button mt-3">
                        <a href="tabla.php"> <input  type="submit" class="btn btn-primary" value="Ir a Tabla de Problemas"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- partial -->
  

</body>
</html>
