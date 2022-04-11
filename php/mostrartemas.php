<?php
session_start();
require 'lib/consultas.php';
$BaseDatos=new consultas();
$cat_nombre=$_GET["titulo"];
 $resultado=$BaseDatos->comprobarcategoria($cat_nombre);

var_dump($resultado);

 foreach($resultado as $actividad){
    echo "<h1>".$actividad['categoria_nombre']."</h1>";
    echo "<h3><strong>Descripcion de la categoria:</strong></h3>".$actividad["categoria_desc"];
    echo "<h4>Todos los post relacionados a este tema:
    
    
    
    </h4>";

 }



?>