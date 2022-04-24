<?php
session_start();
if ($_SESSION AND $_SESSION["rol"] == 0) {
    require '../lib/consultas.php';
    $BaseDatos=new consultas();
        $cat_id = $_GET["id"];
    $BaseDatos->deletecategoria($cat_id);
        header('location: ../../index.php');                
}else{
    header('location: ../../index.php');

}

?>