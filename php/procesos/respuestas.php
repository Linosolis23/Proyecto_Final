<?php
   session_start();
   require '../lib/consultas.php';
   $BaseDatos=new consultas();
   $id=$_GET["id"];

   var_dump($id);
   if (!$_SESSION["usuario"]=="NULL"){
    header('location: ../..index.php');
}else{
    $BaseDatos->crearrespuesta($_POST["respuesta"],$id);
    header('location: ../mostrarposts.php?id='.$id);
}
?>
