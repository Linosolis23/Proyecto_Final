<?php 
session_start();
error_reporting(0);
require 'php/lib/consultas.php';
$BaseDatos=new consultas();
$resultado=$BaseDatos->mostrarcategorias();
$resultado2=$BaseDatos->mostrartemas();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="cosas_necesarias/favicon.ico">
    <title>Fororium</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/jquery.dataTables.css">
    <link rel="stylesheet" href="css/local.css">


    
</head>
<body>
    <header><h2>Fororium</h2></header>

<?php


if($_GET["mensaje"]=='0'){

    echo "<div class='alerta' id='alerta'>usuario registrado, ya puedes loguearte</div>";
}elseif ($_GET["mensaje"]=='1'){

  echo "<div class='alerta' id='alerta'>Creada la nueva categoria</div>";
}
?>

<div class="container">
  <nav class="menu">
<ul>
<li class="active"><a href="index.php">Home</a></li>
<li><a href="php/temas.php">Crear Tema</a></li>
<li><a href="php/categorias.php">Crear Categorias</a></li>
<li><a href="php/todoslostemas.php">Todos los temas</a></li>
<li><a href="php/todaslascategorias.php">Todas las Categorias</a></li>

<?php
if (!$_SESSION["usuario"]=="NULL"){

    echo "<li id='login'><a href='php/registrar.php'>Registrar</a></li>";
    echo "<li id='login'><a href='php/login.php'>Login</a></li>";
}else{

echo"<div class='dropdown'>
<button onclick='myFunction()' class='dropbtn'>".$_SESSION["usuario"]."</button>
<div id='myDropdown' class='dropdown-content'>
  <a href='php/modificarperfil.php'>Modificar perfil</a>
  <a href='php/cerrarsesion.php'>Cerrar Sesion</a>
</div>
</div>";
}
?>
</ul>
</nav>
<section>

<h1 style="color: #444;"><strong> Categorias recientes</strong></h1>
<div class="tablon">
  <table id="tabla" class="display table">
        <thead>
            <tr>
                <th> Nombre Categoria </th>
                <th> Descripcion de la Categoria </th>
              <?php if ($_SESSION AND $_SESSION["rol"] == 0) {
                
                echo "<th> Eliminar </th>";
            }?>
                
            </tr>
        </thead>
        <tbody>
  <?php
        foreach($resultado as $actividad){
            echo "<tr>";
            echo '<td><a href="php/mostrartemas.php?titulo='.$actividad['categoria_nombre'].'">' . $actividad['categoria_nombre'];
              echo "<td>".$actividad["categoria_desc"]."</td>";
              if ($_SESSION AND $_SESSION["rol"] == 0) {
                
                echo "<td><a href='php/procesos/deletecategoria.php?id=".$actividad["categoria_id"]."'><input type='button' class='btn btn-danger' value='Eliminar'></a></td>";
            }
            echo "</tr>";
        }
?>
        </tbody>
        <tfoot>
            <tr>
            <th> Nombre Categoria </th>
            <th> Descripcion de la Categoria </th>
            <?php if ($_SESSION AND $_SESSION["rol"] == 0) {
                
                echo "<th> Eliminar </th>";
            }?>
            </tr>
        </tfoot>
  </table>
</div>

<h1 style="color: #444;"><strong> Temas Recientes</strong></h1>


<div class="tablon">
  <table id="tabla" class="display table">
        <thead>
            <tr>
                <th> Nombre tema </th>
                <th> contenido del tema </th>
                <th> tema_fecha </th>
                <?php if ($_SESSION AND $_SESSION["rol"] == 0) {
                
                echo "<th> Eliminar </th>";
            }?>
            </tr>
        </thead>
        <tbody>
  <?php
        foreach($resultado2 as $actividad){
            echo "<tr>";
            echo '<td><a href="php/mostrarposts.php?id='.$actividad['tema_id'].'">' . $actividad['tema_nombre'];
            echo "<td>".$actividad["contenido"]."</td>";
            echo "<td>".$actividad["tema_fecha"]."</td>";
            if ($_SESSION AND $_SESSION["rol"] == 0) {
              echo "<td><a href='php/procesos/deletetema.php?id=".$actividad["tema_id"]."'><input type='button' class='btn btn-danger' value='Eliminar'></a></td>";
            }
            echo "</tr>";
        }
?>
        </tbody>
        <tfoot>
            <tr>
            <th> Nombre tema </th>
                <th> contenido del tema </th>
                <th> tema_fecha </th>
            <?php if ($_SESSION AND $_SESSION["rol"] == 0) {
                
                echo "<th> Eliminar </th>";
            }?>
            </tr>
        </tfoot>
  </table>
</div>

</section>
</div>
<!-- Insercion del javascript -->
<script src="js/jquery.js"></script>
<script src="js/tablasJquery.js"></script>
<script src="js/js.js"></script>
<script src="js/mensaje.js"></script>
</body>
</html>

		