<?php
session_start();
require '../lib/consultas.php';
$BaseDatos=new consultas();

echo "<br>";

if ($_POST["usuario"] == $_SESSION["usuario"] AND $_POST["email"] == $_SESSION["email"]){
    header('location: ../..index.php');
}else{
    $id_usuario=$_SESSION["id"];$pass=$_SESSION["pass"];$usuario=$_SESSION["usuario"];$email=$_SESSION["email"];$avatar =$_SESSION["avatar"];
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $resultado=$BaseDatos->modificarPerfil($usuario,$email,$pass,$id_usuario);
    $_SESSION["usuario"]=$usuario;
    $_SESSION["email"]=$email;
    header('location: ../modificarperfil.php');
}




?>