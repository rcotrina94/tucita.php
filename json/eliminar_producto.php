<?php
  $respuesta = array();
  $_POST['pid'] = 10;

  if(isset($_POST['pid'])){
    $pid = $_POST['pid'];

    require_once("db_connect.php");

    $db = new DB_CONNECT();
    $resultado = mysql_query("DELETE FROM productos WHERE id=$pid");

    if(mysql_affected_rows()>0 ){
      $respuesta["Completado"]=1;
      $respuesta["Mensaje"]="Producto eliminado";
      echo json_encode($respuesta);
    }else{
      $respuesta["Completado"]=0;
      $respuesta["Mensaje"]="No existe producto";
      echo json_encode($respuesta);
    }


  } else {
    $respuesta["Completado"]=0;
    $respuesta["Mensaje"]="Se requiere id";
    echo json_encode($respuesta);
  }

?>
