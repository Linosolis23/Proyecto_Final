<?php 
require 'lib/consultas.php';
session_start();


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
<form action="proceso_registrar.php" method="post">
    <h1>registrarse</h1>
        
        <div><label for="usuario">Nombre de usuario</label></div>
        <input type ="text" name="usuario" id="usuario" required/>

        <div><label for="email">Email</label></div>
        <input type="email" name="email" id="email" required />

        <div><label for="pass">Contraseña</label></div>
        <input type ="password" name="pass" id="pass" required/>

        <div><label for="pass">Repetir contraseña</label></div>
        <input type ="password" name="pass2" id="pass2" required/> 
          
        <div class="submit-row">
            <input type="submit" value="Registrarse"/>
        </div>
        <div class="navegacion">
    <a href="../index.php"><input type="button" value="volver"></a>
    </div>
    </form>
    
    
</section>
</div>
<!-- Insercion del javascript -->
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="../js/js.js"></script>
</body>
</html>