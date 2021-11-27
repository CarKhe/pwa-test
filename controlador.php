<?php
require 'Modelo.php';
$obj = new Acciones();

date_default_timezone_set('America/Monterrey');

$ahora = date("Y-m-d H:i:s");


	if (isset($_POST['btn_insertar']))
	{
		if(empty($_POST['txt_tiempo_sol']))
		{
		$insertar= " values('".$_POST['txt_nombre']."','".$_POST['txt_problema']."','".$ahora."')";
		$correcto = $obj->Insertar($insertar);
		}
		else
		{
		$insertar= " values('".$_POST['txt_nombre']."','".$_POST['txt_problema']."','".$_POST['txt_tiempo']."')";
		$correcto = $obj->Insertar($insertar);
		}
		
	}

	if (isset($_POST['btn_solucion']))
	{
		if(empty($_POST['txt_tiempo_sol']))
		{
			if(empty($_POST['checkbox_solucion']))
			{
				$modificar="nombre_empleado= '".$_POST['txt_nombre_empleado']."',
				descripcion_solucion='".$_POST['txt_solucion_problema']."',
				id_soluciones= 3 ,
				fecha_fin='".$ahora."'";
			}
			else
			{
			$modificar="nombre_empleado= '".$_POST['txt_nombre_empleado']."',
			descripcion_solucion='".$_POST['txt_solucion_problema']."',
			id_soluciones=".$_POST['checkbox_solucion'].",
			fecha_fin='".$ahora."'";
			}

		}
		else
		{
			if(empty($_POST['checkbox_solucion']))
			{
				$modificar="nombre_empleado= '".$_POST['txt_nombre_empleado']."',
				descripcion_solucion='".$_POST['txt_solucion_problema']."',
				id_soluciones= 3 ,
				fecha_fin='".$_POST['txt_tiempo_sol']."'";
			}
			else
			{
			$modificar="nombre_empleado= '".$_POST['txt_nombre_empleado']."',
			descripcion_solucion='".$_POST['txt_solucion_problema']."',
			id_soluciones=".$_POST['checkbox_solucion'].",
			fecha_fin='".$_POST['txt_tiempo_sol']."'";
			}
	    }

		$id_folio= $_POST['txt_id'];
		$correcto = $obj->Modificar($modificar,$id_folio);

	}

	if (isset($_GET['sol']))
	{
		$valor = $_GET['sol'];
		$_SESSION['id_sol'] = $valor;
		$rows=$obj->Buscar_Modificar($valor);
		
	}
	

	//if(empty($_GET['sol']))
	//{
	//	header('Location: tabla.php');
	//	die();
	//}


   if(isset($_POST['cmb_resultados']))
   {
	
	$tabla_folios = $obj->Buscar_Folios($_POST['cmb_resultados']);

   }



	

	


?>