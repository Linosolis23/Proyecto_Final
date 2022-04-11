<?php 
require 'lib/consultas.php';
session_start();
// error_reporting(0);
if($_GET["mensaje"]=='0'){

    echo "<div class='alerta' id='alerta'>El usuario no existe</div>";
    
    }elseif ($_GET["mensaje"]=='1'){
        echo "<div class='alerta' id='alerta'>La contraseña es incorrecta</div>";
    
    }elseif ($_GET["mensaje"]=='2'){
        echo "<div class='alerta' id='alerta'>Debes logearte para poder acceder</div>";
    
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
<form action="proceso_login.php" method="post">
        <h1>Login</h1>
        
        <div><label>Usuario</label></div>
        <input type="text" name="usuario" placeholder="usuario" id="usuario" required/>

        <div><label>Contraseña</label></div>
        <input type="password" name="pass" id="pass" placeholder="password" required/>   
           
        <div class="submit-row">
            <input type="submit" value="Iniciar Sesion"/>
        </div>
    </form>
    <div class="navegacion">
    <a href="../index.php"><input type="button" value="volver"></a>
    <a href="registrar.php"> <input type="button" value="registrarse"></a>
    </div>
    
</section>
</div>
<!-- Insercion del javascript -->
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="../js/js.js"></script>
</body>
</html>