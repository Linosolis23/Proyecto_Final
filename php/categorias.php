<?php 
require 'lib/consultas.php';
session_start();

if (!$_SESSION["usuario"]=="NULL"){
    header('location: login.php?mensaje=2');
}else{
echo "hola";}


if($_GET["mensaje"]=='0'){

    echo "<div class='alerta' id='alerta'>La categoria ya existe</div>";
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
<form action="proceso_categorias.php" method="post">
    <h1>Crear Categoria</h1>
        
        <div><label for="nombre_categoria">Nombre de la categoria</label></div>
        <input type ="text" name="nombre_categoria" id="nombre_categoria" required/>

        <div><label for="descripcion_categoria">descripción la categoria</label></div>
        <textarea name="descripcion_categoria"></textarea>
          
        <div class="submit-row">
            <input type="submit" value="Crear Categoria"/>
        </div>
    </form>
    <div class="navegacion">
    <a href="../index.php"><input type="button" value="volver"></a>
    </div>

</section>
</div>
<!-- Insercion del javascript -->
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="../js/js.js"></script>
</body>
</html>