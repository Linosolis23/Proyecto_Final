<?php 
session_start();
require 'lib/consultas.php';
$BaseDatos=new consultas();
$id=$_GET["id"];
$prueba=$id;
$resultado=$BaseDatos->mostrartemaid($id);



foreach($resultado as $actividad){
echo "<h1>".$actividad['tema_nombre']."</h1>";
echo "<textarea name='comentario'readonly rows='10' cols='40'>".$actividad['contenido']."</textarea>";
echo "<h2>Creado el: <sub>".$actividad["tema_fecha"]."<sub></h2>";
echo '<div><a href="mostrartemas.php?id='.$actividad['tema_cat'].'"><input type="button" value="volver"></a></div>';
}
echo " <h2>Responder</h2>";
echo '  
<form method="post" action="procesos/respuestas.php?id='.$_GET["id"].'">
    <textarea name="respuesta" rows="10" cols="40"></textarea>
    <div><input type="submit" value="Responder" />
</form>';


echo "<hr>";
echo " <h1>Todas las respuestas:</h1>";
$resultado2=$BaseDatos->mosrtrarrespuesta($id);
foreach($resultado2 as $actividad2){
 echo "<h3>".$actividad2['respuesta_contenido']." ".$actividad2['respuesta_fecha']."</h3>";


}

?>