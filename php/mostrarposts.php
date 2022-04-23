<?php 
session_start();
require 'lib/consultas.php';
$BaseDatos=new consultas();
$id=$_GET["id"];
$prueba=$id;
$resultado=$BaseDatos->mostrartemaid($id);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fororium</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
     <link rel="stylesheet" href="../css/css.css">

  <link rel="stylesheet" href="../css/jquery.dataTables.css">
  <link rel="stylesheet" href="../css/local.css">

</head>

<body>
  <header>
    <h2>Fororium</h2>
  </header>
  <div class="container">
    <nav class="menu">
      <ul>
        <li class="active"><a href="../../index.php">Home</a></li>
        <li><a href="temas.php">Posts</a></li>
        <li><a href="categorias.php">Categorias</a></li>
</nav>
<section>


<?php
foreach($resultado as $actividad){
echo "<h1 class='tema_nombre_mostrarnombre' >".$actividad['tema_nombre']."</h1>";
echo "<textarea name='comentario'readonly rows='10' cols='40'>".$actividad['contenido']."</textarea>";
echo "<h2>Creado el: <sub>".$actividad["tema_fecha"]."<sub></h2>";
}
echo " <h2 class='tema_nombre' >Responder</h2>";
echo '  
<form method="post" action="procesos/respuestas.php?id='.$_GET["id"].'">
    <textarea name="respuesta" rows="10" cols="40"></textarea>
    <div><input type="submit" value="Responder" />
</form>';
echo '<div><a href="mostrartemas.php?id='.$actividad['tema_cat'].'"><input type="button" value="volver"></a></div>';


echo "<hr class='lineamostrar'>";
echo " <h1>Todas las respuestas:</h1>";
$resultado2=$BaseDatos->mosrtrarrespuesta($id);
foreach($resultado2 as $actividad2){
 echo "<h3>".$actividad2['respuesta_contenido']." ".$actividad2['respuesta_fecha']."</h3>";


}

?>