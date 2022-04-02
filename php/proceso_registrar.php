<?php
   session_start();
   require 'lib/consultas.php';
   $BaseDatos=new consultas();

   if ($_POST["usuario"] && $_POST["email"] && $_POST["pass"] && $_POST["pass2"]) {

    if ($_POST["pass"] == $_POST["pass2"]) {
            
        $resultado=$BaseDatos->comprobaremail($_POST["email"]);
        if(count($resultado)>0){
        // header('location: index.php?error=0');

        }
        var_dump($resultado);

    $BaseDatos->nuevoUsuario($_POST["usuario"], $_POST["email"], sha1($_POST["pass"]));
    header('location: ../index.php?mensaje=0');
    echo "usuario registrado";
}else{
    // header('location: index.php?error=1');

}

}

?>