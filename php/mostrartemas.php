<?php
session_start();
require 'lib/consultas.php';
$BaseDatos=new consultas();
$cat_nombre=$_GET["titulo"];
$resultado=$BaseDatos->comprobarcategoria($cat_nombre);

var_dump($resultado);

 foreach($resultado as $actividad){
   $categoria_id=$actividad['categoria_id'];
   echo "<h1>".$actividad['categoria_nombre']."</h1>";
    echo "<h3><strong>Descripcion de la categoria:</strong></h3>".$actividad["categoria_desc"];
    echo "<h4>Todos los post relacionados a este tema:</h4>";
 }
$resultado2=$BaseDatos->comprobartemas($categoria_id);

foreach($resultado2 as $actividad2){
echo '<h2><a href="mostrarposts.php?id='.$actividad2['tema_id'].'">'.$actividad2['tema_nombre']."</a>"," ",
'<sub>'.$actividad2["tema_fecha"].'</sub></h2>';
}

 



?>