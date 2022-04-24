<?php 
session_start();
error_reporting(0);
require 'lib/consultas.php';
$BaseDatos=new consultas();
$resultado=$BaseDatos->mostrarcategorias();

if (!$_SESSION["usuario"]=="NULL"){
    header('location: login.php?mensaje=2');
}else{
}
if($_GET["mensaje"]=='0'){

    echo "<div class='alerta' id='alerta'>Las contraseñas no coinciden</div>";
    
    }elseif ($_GET["mensaje"]=='2'){
        echo "<div class='alerta' id='alerta'>El usuario ya existe</div>";
    }
?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fororium</title>
    
    <!-- CSS only -->
    <link rel="stylesheet" href="../css/css.css">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <header>
        <h2>Fororium</h2>
    </header>

<div class="container">
 
<section>
<form method="post" action="procesos/proceso_temas.php">
<?php
echo "<div><label for='Tema'>Tema</label></div>";
echo "<div><input type ='text' name='tema_nombre' id='tema_nombre'placeholder='titulo de tu tema' required/></div>";
echo "<label for='categoria'>Categorias </label>";

echo '<select name="tema_cat">';
foreach($resultado as $actividad){

    echo '<option value="' . $actividad['categoria_id'] . '">' . $actividad['categoria_nombre'] . '</option>';
}
echo '</select>'; 

echo "<div><label for='Mensaje'>Mensaje</label></div>";
echo '<div><textarea  maxlength="255" class="mensaje_textarea" placeholder="Contenido de tu mensaje" required name="contenido" /></textarea><div>
<input type="submit" value="Crear tema" />
</form>';
?>
<div>   
<a href="../index.php"><input type="button" value="volver"></a>
</div>
</section>
</div>
<!-- Insercion del javascript -->
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="../js/js.js"></script>
</body>
</html>