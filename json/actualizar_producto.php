<?php
$respuesta=array();

// $_POST['pid']=8;
// $_POST['nombre']="Huawei Mate P10";
// $_POST['marca']=4;
// $_POST['sistema']=3;
// $_POST['precio']=10000000.99;
// $_POST['imagen']="/img/huaweimatep10.jpg";


if(isset($_GET['pid']) &&
isset($_GET['nombre']) &&
isset($_GET['marca']) &&
isset($_GET['sistema']) &&
isset($_GET['precio']) &&
isset($_GET['imagen']))
{

  $pid=$_GET['pid'];
  $nombre=$_GET['nombre'];
  $marca=$_GET['marca'];
  $sistema=$_GET['sistema'];
  $precio= $_GET['precio'];
  $imagen=$_GET['imagen'];

  require_once('db_connect.php');
  $db =new DB_CONNECT();
  $consulta=mysql_query("SELECT id FROM productos WHERE id=$pid");

  if (mysql_num_rows($consulta)>0){
    $query = "UPDATE productos SET nombre='$nombre',
      marca_id='$marca',
      soperativo_id='$sistema',
      precio=$precio,
      imagen='$imagen' WHERE id=$pid";
    echo $query;
    echo "<br>";
    $resultado=mysql_query($query);

      if($resultado){
        $respuesta["Completado"]=1;
        $respuesta["Mensaje"]="Producto actualizado";
        echo json_encode($respuesta);
      }else{
        $respuesta["Completado"]=0;
        $respuesta["Mensaje"]="No existe producto";
        echo json_encode($respuesta);
      }

  }else{
    $respuesta["Completado"]=0;
    $respuesta["Mensaje"]="Se requiere id";
    echo json_encode($respuesta);
  }
}


  ?>
