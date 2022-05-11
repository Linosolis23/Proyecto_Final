<?php
echo '<link rel="icon" type="image/x-icon" href="../cosas_necesarias/favicon.ico">';    

session_start();
require 'lib/consultas.php';
error_reporting(0);
$BaseDatos = new consultas();
$cat_nombre = $_GET["titulo"];
$cat_id = $_GET["id"];
$resultado = $BaseDatos->comprobarcategoria($cat_nombre, $cat_id);
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
foreach ($resultado as $actividad) {
  $categoria_id = $actividad['categoria_id'];
  echo "<h1 class='tema_nombre' >" . $actividad['categoria_nombre'] . "</h1>";
  echo "<h3><strong>Descripcion de la categoria:</strong></h3>" . $actividad["categoria_desc"];
  
  echo "<h3 class='separadormostrartemas' >Todos los post relacionados a este tema:</h3>";
}
echo "<hr class='lineamostrar'>";
$resultado2 = $BaseDatos->comprobartemas($categoria_id);

foreach ($resultado2 as $actividad2) {
  echo '<h3><a class="amostrar"href="mostrarposts.php?id=' . $actividad2['tema_id'] . '">' . $actividad2['tema_nombre'] . "</a>", " ",
  '<sub>' . $actividad2["tema_fecha"] . '</sub></h3>';
}
echo "<div class='botoninferiormostrartemas'><a href='../index.php'><input type='button' value='volver'></a></div>";
?>
</section>


</body>

</html>