<?php
require_once('db_connect.php');
$db =new DB_CONNECT();

$resultado = mysql_query("SELECT productos.id as prodid,
								 productos.nombre as prodnombre,
								 marcas.nombremarca as prodmarca,
								 soperativos.sistemanombre as prodsistema,
								 productos.precio as prodprecio,
								 productos.imagen as prodimagen
							FROM (productos
									INNER JOIN soperativos
									   ON (productos.soperativo_id=soperativos.id))
									INNER JOIN marcas
										ON (productos.marca_id=marcas.id)
							ORDER BY productos.precio DESC") or die(mysql_error());

if (mysql_num_rows($resultado)>0){

	$respuesta["productos"] = array();

	while ($row=mysql_fetch_array($resultado)) {

		$producto = array();
		$producto["id"]		=$row["prodid"];
		$producto["nombre"]	=$row["prodnombre"];
		$producto["marca"]	=$row["prodmarca"];
		$producto["sistema"]=$row["prodsistema"];
		$producto["precio"]	=$row["prodprecio"];
		$producto["imagen"]	=$row["prodimagen"];
					array_push($respuesta["productos"], $producto);
			}
		$respuesta["Completado"]=1;
		echo json_encode($respuesta);
      }else
      		{
          			$respuesta["Completado"]=0;
          			$respuesta["Mensaje"]="No hay productos";
      				echo json_encode($respuesta);
			}






?>