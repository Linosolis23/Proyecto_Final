<?php
session_start();
require '../lib/consultas.php';
$BaseDatos=new consultas();
$encontrado = false;

// realizamos la consulta  
$resultado=$BaseDatos->login($_POST["usuario"]);

// revisamos que el usuario está en la base de datos
foreach($resultado as $registro){
    if ($_POST["usuario"] == $registro["nombre_usuario"]) {
        $encontrado = true;
    }
}
//si el usuario existe entramos en el if si no le decimos que no existe
if ($encontrado) {
    if (sha1($_POST["pass"]) == $registro["pass"]) {
        
        $_SESSION["id"] = $registro["id_usuario"];
        $_SESSION["usuario"] = $registro["nombre_usuario"];
        $_SESSION["pass"]= $registro["pass"];
        $_SESSION["email"] = $registro["email"];
        $_SESSION["rol"] = $registro["rol"];
        $_SESSION["avatar"] = $registro["avatar"];
        header('location: ../../index.php');



        //la contraseña es incorrecta
    }else{
        header('location: ../login.php?mensaje=1');

    }
      
    //el usuario no existe
    }else{
        header('location: ../login.php?mensaje=0');

    }
    
?>