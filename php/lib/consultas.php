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
        public function modificarPerfil($usuario,$email,$pass,$id) {
          $sql = "UPDATE usuarios SET nombre_usuario = '".$usuario."', email = '".$email."', pass = '".$pass."'WHERE id = ".$id;
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
          $sql="INSERT INTO categorias (categoria_nombre,categoria_desc,tema_fecha) VALUES ('$cat_nombre','$cat_descripcion',NOW())" ;
          $this->realizarConsulta($sql);
        }
        public function comprobarcategoria($cat_nombre){
          $sql="SELECT * FROM categorias WHERE categoria_nombre='".$cat_nombre."'";
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

        //TEMAS
        public function insertartema($tema_nombre,$tema_cat){
          $sql="INSERT INTO temas (tema_nombre,tema_fecha,tema_cat,tema_por) VALUES ('$tema_nombre',NOW(),'$tema_cat','$_SESSION[id]' )";
          $this->realizarConsulta($sql);
        }
        // public function mostrartema($id){
        //   $sql="SELECT * FROM temas WHERE tema_id='".$id."'";
        //   $resultado = $this->realizarConsulta($sql);
        //   if ($resultado != null) {
        //       $tabla = [];
        //       while ($fila = $resultado->fetch_assoc()) {
        //           $tabla[] = $fila;
        //       }
        //       return $tabla;
        //   } else {
        //       return null;
        //   }
        // }
        //publicaciones

        public function insertarpost($contenido,$tema_id){
          $sql ="INSERT INTO publicaciones (post_contenido,post_fecha,post_tema,post_por) VALUES ('$contenido',NOW(),'$tema_id','$_SESSION[id]') ";
          $this->realizarConsulta($sql);
        }





  }
?>