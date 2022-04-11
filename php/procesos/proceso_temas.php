<?php
   session_start();
   require '../lib/consultas.php';
   $BaseDatos=new consultas();

   if (!$_SESSION["usuario"]=="NULL"){
    header('location: ../..index.php');
}else{
    // var_dump($_SESSION);
    var_dump($_POST);
    $BaseDatos->insertartema($_POST["tema_nombre"],$_POST["contenido"],$_POST["tema_cat"]);
    header('location: ../../index.php');

   
}   


?>