<?php
session_start();
require '../lib/consultas.php';
$BaseDatos=new consultas();

// var_dump($_POST);
echo "<br>";
// var_dump($_SESSION);

if ($_POST["usuario"] == $_SESSION["usuario"] AND $_POST["email"] == $_SESSION["email"]){
echo "1";
}else{
    $id_usuario=$_SESSION["id"];$pass=$_SESSION["pass"];$usuario=$_SESSION["usuario"];$email=$_SESSION["email"];$avatar =$_SESSION["avatar"];
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $resultado=$BaseDatos->modificarPerfil($usuario,$email,$pass,$id_usuario);
    $_SESSION["usuario"]=$usuario;
    $_SESSION["email"]=$email;
    header('location: ../modificarperfil.php');
}


    
//     $_SESSION["usuario"] = $_POST["usuario"];
//     $_SESSION["Apellidos"] = $_POST["Apellidos"];
//     $_SESSION["email"] = $_POST["email"];
//     $_SESSION["rol"] = $_POST["rol"];
    // header('location:modificarperfil.php');



?>