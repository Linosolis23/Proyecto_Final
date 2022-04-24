<?php
include 'db.php';

class consultas extends db{
    function __construct(){
          parent::__construct();
      }
        //USUARIOS
        public function nuevousuario($usuario,$email,$pass){
          $sql="INSERT INTO usuarios (nombre_usuario, email, pass, rol ,avatar) VALUES ('$usuario','$email','$pass','1','../../cosas_necesarias/avatar.png')";
          $this->realizarConsulta($sql);
        }
        public function modificarPerfil($usuario,$email,$pass,$id_usuario) {
          $sql = "UPDATE usuarios SET nombre_usuario = '".$usuario."', email = '".$email."', pass = '".$pass."'WHERE id_usuario = ".$id_usuario;
          $this->realizarConsulta($sql);
        }
        public function comprobarusuario($usuario){
          $sql="SELECT * FROM usuarios WHERE nombre_usuario='".$usuario."'";
          $resultado = $this->realizarConsulta($sql);
          if ($resultado!=null){
              $tabla=[];
              while($fila=$resultado->fetch_assoc()){
                  $tabla[]=$fila;
              }
            return $tabla;
          } else {
            return null;
          }
        }
        public function login($usuario){
          $sql="SELECT * FROM usuarios WHERE nombre_usuario='".$usuario."'";
          $resultado = $this->realizarConsulta($sql);
          if ($resultado!=null){
              $tabla=[];
              while($fila=$resultado->fetch_assoc()){
                  $tabla[]=$fila;
              }
            return $tabla;
          } else {
            return null;
          }
        }
        //CATEGORIAS
        public function categorias($cat_nombre,$cat_descripcion){
          $sql="INSERT INTO categorias (categoria_nombre,categoria_desc) VALUES ('$cat_nombre','$cat_descripcion')" ;
          $this->realizarConsulta($sql);
        }
        public function comprobarcategoria2($cat_nombre){
          $sql="SELECT * FROM categorias WHERE categoria_nombre='".$cat_nombre."'" ;
          $resultado = $this->realizarConsulta($sql);
          if ($resultado!=null){
              $tabla=[];
              while($fila=$resultado->fetch_assoc()){
                  $tabla[]=$fila;
              }
            return $tabla;
          } else {
            return null;
          }
        }
        public function comprobarcategoria($cat_nombre,$cat_id){
          $sql="SELECT * FROM categorias WHERE categoria_nombre='".$cat_nombre."' OR categoria_id='".$cat_id."'" ;
          $resultado = $this->realizarConsulta($sql);
          if ($resultado!=null){
              $tabla=[];
              while($fila=$resultado->fetch_assoc()){
                  $tabla[]=$fila;
              }
            return $tabla;
          } else {
            return null;
          }
        }
        public function mostrarcategorias(){
          $sql="SELECT * FROM categorias ORDER BY categoria_id DESC LIMIT 5";
          $resultado = $this->realizarConsulta($sql);
          if ($resultado != null) {
              $tabla = [];
              while ($fila = $resultado->fetch_assoc()) {
                  $tabla[] = $fila;
              }
              return $tabla;
          } else {
              return null;
          }
        }
        public function mostrartodaslascategorias(){
          $sql="SELECT * FROM categorias";
          $resultado = $this->realizarConsulta($sql);
          if ($resultado != null) {
              $tabla = [];
              while ($fila = $resultado->fetch_assoc()) {
                  $tabla[] = $fila;
              }
              return $tabla;
          } else {
              return null;
          }
        }

        public function deletecategoria($cat_id) {
          $sql= "DELETE FROM categorias WHERE categoria_id=".$cat_id;
          $this->realizarConsulta($sql);
      }


        //TEMAS
        public function insertartema($tema_nombre,$contenido,$tema_cat){
          $sql="INSERT INTO temas (tema_nombre,contenido,tema_fecha,tema_cat,tema_por) VALUES ('$tema_nombre','$contenido',NOW(),'$tema_cat','$_SESSION[id]' )";
          $this->realizarConsulta($sql);
        }
        public function mostrartemas(){
          $sql="SELECT * FROM temas ORDER BY tema_fecha DESC LIMIT 5";
          $resultado = $this->realizarConsulta($sql);
          if ($resultado != null) {
              $tabla = [];
              while ($fila = $resultado->fetch_assoc()) {
                  $tabla[] = $fila;
              }
              return $tabla;
          } else {
              return null;
          }
        }
        public function mostrartodoslostemas(){
          $sql="SELECT * FROM temas ORDER BY tema_fecha DESC";
          $resultado = $this->realizarConsulta($sql);
          if ($resultado != null) {
              $tabla = [];
              while ($fila = $resultado->fetch_assoc()) {
                  $tabla[] = $fila;
              }
              return $tabla;
          } else {
              return null;
          }
        }
        public function comprobartemas($categoria_id){
          $sql="SELECT * FROM temas WHERE tema_cat='".$categoria_id."'";
          $resultado = $this->realizarConsulta($sql);
          if ($resultado!=null){
              $tabla=[];
              while($fila=$resultado->fetch_assoc()){
                  $tabla[]=$fila;
              }
            return $tabla;
          } else {
            return null;
          }
        }
        public function mostrartemaid($id){
          $sql="SELECT * FROM temas WHERE tema_id='".$id."'";
          $resultado = $this->realizarConsulta($sql);
          if ($resultado!=null){
              $tabla=[];
              while($fila=$resultado->fetch_assoc()){
                  $tabla[]=$fila;
              }
            return $tabla;
          } else {
            return null;
          }
        }

public function crearrespuesta($respuesta,$id){
  $sql="INSERT INTO respuestas (respuesta_contenido,respuesta_fecha,tema_id,respuesta_por) VALUES ('$respuesta',NOW(),$id,'$_SESSION[id]')";
  $this->realizarConsulta($sql);
}
public function mosrtrarrespuesta($id){
  $sql="SELECT * FROM respuestas WHERE tema_id='".$id."'";
  $resultado = $this->realizarConsulta($sql);
  if ($resultado!=null){
      $tabla=[];
      while($fila=$resultado->fetch_assoc()){
          $tabla[]=$fila;
      }
    return $tabla;
  } else {
    return null;
  }
}
public function deletetema($tema_id) {
  $sql= "DELETE FROM temas WHERE tema_id=".$tema_id;
  $this->realizarConsulta($sql);
}



}
?>