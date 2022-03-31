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
<form action="php/proceso_login.php" method="post">
        <h1>Login</h1>
        
        <div><label >Usuario</label></div>
        <input type="email" name="email" placeholder="Email" required/>

        <div><label>Contraseña</label></div>
        <input type="password" name="password" placeholder="password" required/>   
           
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

</body>
</html>