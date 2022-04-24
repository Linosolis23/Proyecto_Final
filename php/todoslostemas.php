<?php 
session_start();
require 'lib/consultas.php';
error_reporting(0);
$BaseDatos=new consultas();
$resultado=$BaseDatos->mostrartodoslostemas();
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
    <header><h2>Fororium</h2></header>

<div class="container">
  <nav class="menu">
<ul>
<li><a href="../index.php">Home</a></li>
<li><a href="temas.php">Crear Posts</a></li>
<li><a href="categorias.php">Crear Categorias</a></li>
<li class="active"><a href="todoslostemas.php">Todos los temas</a></li>
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
</ul>
</nav>
<section>


<h1 style="color: #444;"><strong> Todos los posts</strong></h1>


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
        foreach($resultado as $actividad){
            echo "<tr>";
            echo '<td><a href="mostrarposts.php?id='.$actividad['tema_id'].'">' . $actividad['tema_nombre'];
            echo "<td>".$actividad["contenido"]."</td>";
            echo "<td>".$actividad["tema_fecha"]."</td>";
            if ($_SESSION AND $_SESSION["rol"] == 0) {
              echo "<td><a href='procesos/deletetema.php?id=".$actividad["tema_id"]."'><input type='button' class='btn btn-danger' value='Eliminar'></a></td>";
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
<script src="../js/jquery.js"></script>
<script src="../js/jquery.dataTables.js"></script>
<script src="../js/tablasJquery.js"></script>
<script src="../js/js.js"></script>
<script src="../js/mensaje.js"></script>
</body>
</html>

		