<?php 
require 'lib/consultas.php';
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
<form action="php/proceso_registrar.php" method="post">
        <h1>registrarse</h1>
        
        <div><label for="email">Email</label></div>
        <input type="email" name="email" id="email" required />

        <div><label for="pass">Contraseña</label></div>
        <input type ="password" name="pass" id="pass" required/>

        <div><label for="pass">Repetir contraseña</label></div>
        <input type ="password" name="pass2" id="pass2" required/> 
           
        <div class="submit-row">
            <input type="submit" value="Iniciar Sesion"/>
        </div>
    </form>
    <div class="navegacion">
    <a href="../index.php"><input type="button" value="volver"></a>
    </div>
    
</section>
</div>

</body>
</html>