<?php 
echo '<link rel="icon" type="image/x-icon" href="../cosas_necesarias/favicon.ico">';    

session_start();
error_reporting(0);
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
<script src="../js/jquery.js"></script>
<script src="../js/jquery.dataTables.js"></script>
<script src="../js/tablasJquery.js"></script>
<script src="../js/js.js"></script>
<script src="../js/mensaje.js"></script>
<body>
  <header>
    <h2>Fororium</h2>
  </header>
  <div class="container">
    <nav class="menu">
      <ul>
<li><a href="../index.php">Home</a></li>
<li><a href="temas.php">Crear Posts</a></li>
<li><a href="categorias.php">Crear Categorias</a></li>
<li><a href="todoslostemas.php">Todos los temas</a></li>
<li><a href="todaslascategorias.php">Todas las Categorias</a></li>

<?php
if (!$_SESSION["usuario"]=="NULL"){

    echo "<li id='login'><a href='registrar.php'>Registrar</a></li>";
    echo "<li id='login'><a href='login.php'>Login</a></li>";
}else{

echo"<div class='dropdown'>
<button onclick='myFunction()' class='dropbtn'>".$_SESSION["usuario"]."</button>
<div id='myDropdown' class='dropdown-content'>
  <a href='modificarperfil.php'>Modificar perfil</a>
  <a href='cerrarsesion.php'>Cerrar Sesion</a>
</div>
</div>";
}
?>
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
    <textarea name="respuesta" rows="10" cols="40" required></textarea>';
    
    if (!$_SESSION["usuario"]=="NULL"){
      echo "<div><strong>Debes loguearte para escribir una respuesta</strong</div>";
      echo'<div><input type="submit" value="Responder" disabled/>';

  }else{
    echo'<div><input type="submit" value="Responder" />';
  
  }

echo'</form>';
echo '<div><a href="mostrartemas.php?id='.$actividad['tema_cat'].'"><input type="button" value="volver"></a></div>';
echo "<hr class='lineamostrar'>";
echo " <h1>Todas las respuestas:</h1>";
$resultado2=$BaseDatos->mosrtrarrespuesta($id);
foreach($resultado2 as $actividad2){
 echo "<h3>".$actividad2['respuesta_contenido']." ".$actividad2['respuesta_fecha']."</h3>";


}

?>