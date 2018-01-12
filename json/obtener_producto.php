<?php
$respuesta=array();
require_once('db_connect.php');
$db =new DB_CONNECT();
//veri
//$_GET["pid"]=5;
//
if(isset($_GET["pid"])){
  $pid=$_GET["pid"];

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
						WHERE  productos.id=$pid") or die(mysql_error());
if(!empty($resultado)){
if (mysql_num_rows($resultado)>0){

	//$respuesta["productos"] = array();

	   $resultado=mysql_fetch_array($resultado);

		$producto = array();
		$producto["id"]		=$resultado["prodid"];
		$producto["nombre"]	=$resultado["prodnombre"];
		$producto["marca"]	=$resultado["prodmarca"];
		$producto["sistema"]=$resultado["prodsistema"];
		$producto["precio"]	=$resultado["prodprecio"];
		$producto["imagen"]	=$resultado["prodimagen"];

    $respuesta["Completado"]=1;
    $respuesta["productos"]=array();
		array_push($respuesta["productos"], $producto);
    echo json_encode($respuesta);


	  }else
      		{
          			$respuesta["Completado"]=0;
          			$respuesta["Mensaje"]="No existe dicho producto";
      				echo json_encode($respuesta);
			}

   }else
   {
     $respuesta["Completado"]=0;
     $respuesta["Mensaje"]="Se necesita id válido";
   echo json_encode($respuesta);
   }
}



?>
