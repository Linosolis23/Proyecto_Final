<?php 
session_start();
error_reporting(0);
require 'php/lib/consultas.php';
$BaseDatos=new consultas();
$resultado=$BaseDatos->mostrarcategorias();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fororium</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css.css">
   
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
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
<li><a href="#">Posts</a></li>
<li><a href="php/categorias.php">Categorias</a></li>

<?php
if (!$_SESSION["usuario"]=="NULL"){

    echo "<li id='login'><a href='php/registrar.php'>Registrar</a></li>";
    echo "<li id='login'><a href='php/login.php'>Login</a></li>";
}else{
    var_dump($_SESSION["usuario"]);


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
<!-- <br><br><br><br><br><br> -->
<div class="tablon">
  <table id="tabla" class="display table">
        <thead>
            <tr>
                <th> Nombre Categoria </th>
                <th> Descripcion de la Categoria </th>
                
            </tr>
        </thead>
        <tbody>
  <?php
        foreach($resultado as $actividad){
            echo "<tr>";
            echo '<td><a href="category.php?id">' . $actividad['categoria_nombre'];
                echo "<td>".$actividad["categoria_desc"]."</td>";
            echo "</tr>";
        }
?>
        </tbody>
        <tfoot>
            <tr>
            <th> Nombre Categoria </th>
            <th> Descripcion de la Categoria </th>
            </tr>
        </tfoot>
  </table>
</div>
</section>
</div>
<!-- Insercion del javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/tablasJquery.js"></script>
<script src="js/js.js"></script>


<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }  
</script>
</body>
</html>

		