<?php 
session_start();
require 'lib/consultas.php';
$BaseDatos=new consultas();
$id=$_GET["id"];
$resultado=$BaseDatos->mostrartemaid($id);

foreach($resultado as $actividad){
echo "<h1>".$actividad['tema_nombre']."</h1>";
echo "<textarea name='comentario'readonly rows='10' cols='40'>".$actividad['contenido']."</textarea>";
echo "<h2>Creado el:</h2>".$actividad["tema_fecha"];


}

?>