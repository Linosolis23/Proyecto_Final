<?php

session_start();
require 'lib/consultas.php';
$BaseDatos=new consultas();
if(!$resultado=$BaseDatos->comprobarcategoria($_POST["nombre_categoria"])){
$BaseDatos->categorias($_POST["nombre_categoria"],$_POST["descripcion_categoria"]);
header('location: ../index.php?mensaje=1');
}else{
header('location: categorias.php?mensaje=0');


}


?>