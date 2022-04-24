<?php
session_start();
if ($_SESSION AND $_SESSION["rol"] == 0) {
    require '../lib/consultas.php';
    $BaseDatos=new consultas();
        $tema_id = $_GET["id"];
    $BaseDatos->deletetema($tema_id);
        header('location: ../../index.php');                
}else{
    header('location: ../../index.php');

}

?>