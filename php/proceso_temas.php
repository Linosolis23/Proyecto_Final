<?php
   session_start();
   require 'lib/consultas.php';
   $BaseDatos=new consultas();

   if (!$_SESSION["usuario"]=="NULL"){
    header('location: ../index.php');
}else{
    // var_dump($_SESSION);
    // var_dump($_POST);
    $BaseDatos->insertartema($_POST["tema_nombre"],$_POST["tema_cat"]);
    
    // $id= $BaseDatos->mostrartema($id);

    // var_dump($BaseDatos->mostrartema($id));

    // var_dump($tema_id);
    $BaseDatos->insertarpost($_POST["contenido"],$topid);

}   


?>