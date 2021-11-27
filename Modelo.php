<?php

define('DB_SERVER','localhost');
define('DB_NAME', 'bd_folios');
define('DB_USER', 'root');
define('DB_PASS', '');



class Acciones
{
	public function getConection ()	
	{
			try {
			       $conexion = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME.";",DB_USER,DB_PASS);	
			       $conexion-> exec("set names utf8");		       	
		           }
		        catch(PDOException $e){
	                          echo "Failed to get DB handle: " . $e->getMessage();
	                           exit;    
	                                    }
	        return $conexion;
	}

	public function Insertar($insertar)
	{
		$conexion = $this->getConection();
        
		$query=$conexion->prepare('INSERT INTO tbl_problemas(nombre_cliente,problema,fecha_inicio)'.$insertar);
		if(!$query)
		{
         	return "Error al mostrar";
        }
		else
		{			
        	$query->execute();  
        }
	}

	public function Modificar($modificar,$id_folio)
	{
		$conexion = $this->getConection();
        
		$query=$conexion->prepare('UPDATE tbl_problemas set '.$modificar.'WHERE id_problema='.$id_folio);

		if(!$query)
		{
         	return "Error al mostrar";
        }
		else
		{			
        	$query->execute();  
        }
	}

	public function Eliminar($eliminar)
	{
		$conexion = $this->getConection();
        
		$query=$conexion->prepare('DELETE from tbl_maestros where id_maestros='.$eliminar);
		if(!$query)
		{
         	return "Error al mostrar";
        }
		else
		{			
        	$query->execute();  
        }
	}


public function Buscar_Folios($tipo_folio)
	{
		$conexion = $this->getConection();
        $rows = array();
        
		$query=$conexion->prepare('SELECT * From tbl_problemas where id_soluciones='.$tipo_folio);
		if(!$query)
		{
         	return "Error al mostrar";
        }
		else
		{	
		    $tabla = '';		
        	$query->execute();  
           	$this->tot_reg = $query->rowCount();     	
        	while ($result = $query->fetch())
			{
            	$rows[] = $result;
          	}
			if($tipo_folio==1)
			{
				if(isset($rows[0]))
				{
					$tabla = '<table class="table table-dark">
					<thead class="thead-light">
					<tr>
						<th>Id Problema</th>
						<th>Cliente</th>
						<th>Fecha de Registro</th>
						<th>Solucionar</th>
						
					</tr>
					</thead>';
				for ($i=0; $i <$this->tot_reg  ; $i++) 
				{ 
				$tabla.="<tr>
						<td>".@$rows[$i][0]."</td>
							<td>".@$rows[$i][1]."</td>
							<td>".@$rows[$i][3]."</td>
							<td><a href=sol.php?sol=".@$rows[$i][0].">Solucionar</td></a>
							</tr>
							";
				
				}	

				$tabla.="</table>";
				}
				else
				{
					$tabla = '<p>No hay ningún reporte por ahora :)</p>';

				} 			
				
			}
			else
			{
				if(isset($rows[0]))
				{
					$tabla = '<table class="table table-dark">
					<thead class="thead-light">
					<tr>
						<th>Id Problema</th>
						<th>Cliente</th>
						<th>Empleado que Sol.</th>
						<th>Fecha de Registro</th>
						<th>Fecha de Solucion</th>
						<th>Detalle</th>
						
					</tr>
					</thead>';
				for ($i=0; $i <$this->tot_reg  ; $i++) 
				{ 
				$tabla.="<tr>
						<td>".@$rows[$i][0]."</td>
							<td>".@$rows[$i][1]."</td>
							<td>".@$rows[$i][4]."</td>
							<td>".@$rows[$i][3]."</td>
							<td>".@$rows[$i][7]."</td>
							<td>Detalle Folio</td>
							</tr>
							";
				
				}	

				$tabla.="</table>";
				}
				else
				{
					$tabla = '<p>No hay ningún reporte por ahora :)</p>';

				} 		
			}
			return $tabla;
		}
	}

	public function Buscar_Modificar($valor)
	{
		$conexion = $this->getConection();
        $rows = array();
        
		$query=$conexion->prepare('SELECT * From tbl_problemas where id_problema ='.$valor);
		if(!$query)
		{
         	return "Error al mostrar";
        }
		else
		{			
        	$query->execute();  
           	$this->tot_reg = $query->rowCount();     	
        	while ($result = $query->fetch())
			{
            	$rows[] = $result;
          	}
          return $rows;
        } 
           
	}

	
	

		

	public function Tot_registros()
	{
		return $this->tot_reg;
	}
}

?>