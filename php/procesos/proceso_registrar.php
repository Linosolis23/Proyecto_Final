<?php
   session_start();
   require '../lib/consultas.php';
   $BaseDatos=new consultas();

   if ($_POST["usuario"] && $_POST["email"] && $_POST["pass"] && $_POST["pass2"]) {

    if ($_POST["pass"] == $_POST["pass2"]) {
        if($resultado=$BaseDatos->comprobarusuario($_POST["usuario"])){
            header('location: ../registrar.php?mensaje=2');
        }else{
            $BaseDatos->nuevoUsuario($_POST["usuario"], $_POST["email"], sha1($_POST["pass"]));
            header('location: ../../index.php?mensaje=0');
            echo "usuario registrado";
        }
}else{
header('location: ../registrar.php?mensaje=0');

}

}

?>