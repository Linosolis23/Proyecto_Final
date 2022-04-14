<?php
session_start();
require 'lib/consultas.php';
$BaseDatos=new consultas();
var_dump($_SESSION);
$id_usuario=$_SESSION["id"];$pass=$_SESSION["pass"];$usuario=$_SESSION["usuario"];$email=$_SESSION["email"];$avatar =$_SESSION["avatar"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="procesos/procesoperfil.php" method="post">
<h2>modificar Perfil</h2>    
        
        <div><label for="usuario">Nombre de usuario</label></div>
        <input type ="text" name="usuario" value="<?php echo $_SESSION["usuario"]?>" id="usuario" required/>

        <div><label for="email">Email</label></div>
        <input type="email" name="email" value="<?php echo $_SESSION["email"]?>" id="email" required />

          
        <div class="submit-row">
            <input type="submit" value="Modificar"/>
        </div>
        <div class="navegacion">
    <a href="../index.php"><input type="button" value="volver"></a>
    </div>
    </form>




</body>
</html>
<!-- <img src="<?php echo $avatar; ?>" width="256" height="200" /> -->


